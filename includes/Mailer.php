<?php
/**
 * Mercora International - High Reliability Native SMTP Mailer
 * Connects directly to Gmail SMTP via SSL (port 465) or TLS (port 587)
 * Zero external dependencies. Complete MIME multi-part support.
 */

require_once __DIR__ . '/mail_config.php';
require_once __DIR__ . '/MailTemplates.php';

class Mailer
{
    /**
     * Send email notification for a form submission
     *
     * @param string $type Form type
     * @param array $formData Submitted field values
     * @return array ['success' => bool, 'message' => string]
     */
    public static function sendFormSubmission($type, array $formData)
    {
        // 1. Check if SMTP credentials are configured
        if (!isMailConfigured()) {
            self::log("SMTP credentials not configured in includes/mail_config.php. Submission logged but email skipped.");
            return [
                'success' => false,
                'configured' => false,
                'message' => 'Email credentials not configured.'
            ];
        }

        // 2. Render form-specific template
        $template = MailTemplates::render($type, $formData);

        $clientName = trim($formData['name'] ?? $formData['full_name'] ?? 'Website Visitor');
        $clientEmail = trim($formData['email'] ?? '');

        // 3. Send via SMTP
        return self::sendSmtp(
            $template['subject'],
            $template['html'],
            $template['text'],
            $clientEmail,
            $clientName
        );
    }

    /**
     * Direct SMTP Socket Sender
     *
     * @param string $subject
     * @param string $htmlBody
     * @param string $textBody
     * @param string $replyToEmail
     * @param string $replyToName
     * @return array ['success' => bool, 'message' => string]
     */
    public static function sendSmtp($subject, $htmlBody, $textBody = '', $replyToEmail = '', $replyToName = '')
    {
        $host = MAIL_SMTP_HOST;
        $port = MAIL_SMTP_PORT;
        $secure = strtolower(MAIL_SMTP_SECURE);
        $username = MAIL_USERNAME;
        $password = MAIL_PASSWORD;
        $fromEmail = MAIL_FROM_EMAIL;
        $fromName = MAIL_FROM_NAME;
        $toEmail = MAIL_RECEIVER_EMAIL;
        $toName = MAIL_RECEIVER_NAME;

        $target = ($secure === 'ssl') ? "ssl://{$host}:{$port}" : "tcp://{$host}:{$port}";
        $timeout = 15;

        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ]);

        $socket = @stream_socket_client($target, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $context);
        if (!$socket) {
            $err = "Could not connect to SMTP server {$target}: [{$errno}] {$errstr}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        stream_set_timeout($socket, $timeout);

        // Server greeting
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '220') {
            fclose($socket);
            $err = "Invalid greeting from SMTP server: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // Send EHLO
        self::writeSocket($socket, "EHLO " . gethostname());
        $resp = self::readSocket($socket);

        // STARTTLS negotiation if port 587 or tls mode
        if ($secure === 'tls' || $port == 587) {
            self::writeSocket($socket, "STARTTLS");
            $resp = self::readSocket($socket);
            if (substr($resp, 0, 3) !== '220') {
                fclose($socket);
                $err = "STARTTLS negotiation failed: {$resp}";
                self::log($err);
                return ['success' => false, 'message' => $err];
            }

            $cryptoMethod = STREAM_CRYPTO_METHOD_TLS_CLIENT;
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) {
                $cryptoMethod |= STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT;
            }
            if (defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT')) {
                $cryptoMethod |= STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT;
            }

            if (!stream_socket_enable_crypto($socket, true, $cryptoMethod)) {
                fclose($socket);
                $err = "TLS encryption handshake failed.";
                self::log($err);
                return ['success' => false, 'message' => $err];
            }

            // Resend EHLO after TLS established
            self::writeSocket($socket, "EHLO " . gethostname());
            $resp = self::readSocket($socket);
        }

        // AUTH LOGIN
        self::writeSocket($socket, "AUTH LOGIN");
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '334') {
            fclose($socket);
            $err = "AUTH LOGIN rejected: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // Send Username
        self::writeSocket($socket, base64_encode($username));
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '334') {
            fclose($socket);
            $err = "Username rejected: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // Send App Password
        self::writeSocket($socket, base64_encode(str_replace(' ', '', $password)));
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '235') {
            fclose($socket);
            $err = "Authentication failed. Check your Gmail address and 16-character App Password. Server response: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // MAIL FROM
        self::writeSocket($socket, "MAIL FROM:<{$fromEmail}>");
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '250') {
            fclose($socket);
            $err = "MAIL FROM rejected: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // RCPT TO
        self::writeSocket($socket, "RCPT TO:<{$toEmail}>");
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '250') {
            fclose($socket);
            $err = "RCPT TO rejected: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // DATA
        self::writeSocket($socket, "DATA");
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '354') {
            fclose($socket);
            $err = "DATA rejected: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // Build MIME payload
        $mimeMessage = self::buildMimeMessage([
            'fromEmail' => $fromEmail,
            'fromName' => $fromName,
            'toEmail' => $toEmail,
            'toName' => $toName,
            'replyToEmail' => $replyToEmail,
            'replyToName' => $replyToName,
            'subject' => $subject,
            'html' => $htmlBody,
            'text' => $textBody
        ]);

        self::writeSocket($socket, $mimeMessage . "\r\n.");
        $resp = self::readSocket($socket);
        if (substr($resp, 0, 3) !== '250') {
            fclose($socket);
            $err = "Message transmission failed: {$resp}";
            self::log($err);
            return ['success' => false, 'message' => $err];
        }

        // QUIT
        self::writeSocket($socket, "QUIT");
        fclose($socket);

        self::log("Email successfully dispatched to {$toEmail} with subject: {$subject}");
        return ['success' => true, 'message' => 'Email sent successfully.'];
    }

    /**
     * Build RFC compliant MIME multipart message
     */
    private static function buildMimeMessage(array $data)
    {
        $boundary = "==_Mercora_Multipart_" . md5(uniqid(time()));
        $encodedSubject = "=?UTF-8?B?" . base64_encode($data['subject']) . "?=";
        $encodedFromName = "=?UTF-8?B?" . base64_encode($data['fromName']) . "?=";

        $headers = [];
        $headers[] = "Date: " . date('r');
        $headers[] = "From: {$encodedFromName} <{$data['fromEmail']}>";
        $headers[] = "To: <{$data['toEmail']}>";

        if (!empty($data['replyToEmail'])) {
            $replyName = !empty($data['replyToName']) ? "=?UTF-8?B?" . base64_encode($data['replyToName']) . "?= " : '';
            $headers[] = "Reply-To: {$replyName}<{$data['replyToEmail']}>";
        }

        $headers[] = "Subject: {$encodedSubject}";
        $headers[] = "Message-ID: <" . md5(uniqid(microtime())) . "@mercorainternational.com>";
        $headers[] = "X-Mailer: Mercora Mailer/1.0";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: multipart/alternative; boundary=\"{$boundary}\"";

        $body = [];

        // Plain text fallback part
        if (!empty($data['text'])) {
            $body[] = "--{$boundary}";
            $body[] = "Content-Type: text/plain; charset=UTF-8";
            $body[] = "Content-Transfer-Encoding: base64";
            $body[] = "";
            $body[] = chunk_split(base64_encode($data['text']));
        }

        // HTML part
        $body[] = "--{$boundary}";
        $body[] = "Content-Type: text/html; charset=UTF-8";
        $body[] = "Content-Transfer-Encoding: base64";
        $body[] = "";
        $body[] = chunk_split(base64_encode($data['html']));

        $body[] = "--{$boundary}--";

        return implode("\r\n", $headers) . "\r\n\r\n" . implode("\r\n", $body);
    }

    private static function writeSocket($socket, $cmd)
    {
        fwrite($socket, $cmd . "\r\n");
    }

    private static function readSocket($socket)
    {
        $response = "";
        while ($line = fgets($socket, 512)) {
            $response .= $line;
            // In SMTP multi-line responses, 4th character is space when final line, hyphen when continued
            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }
        return trim($response);
    }

    private static function log($message)
    {
        $logDir = __DIR__ . '/../logs';
        if (!is_dir($logDir)) {
            @mkdir($logDir, 0755, true);
        }
        $entry = "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
        @file_put_contents($logDir . '/mail.log', $entry, FILE_APPEND);
    }
}
