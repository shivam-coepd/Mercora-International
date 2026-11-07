<?php
/**
 * Mercora International - Central Enquiry & Lead Submission Endpoint
 * Dispatches customized email templates to Gmail via SMTP for each form.
 */

header('Content-Type: application/json');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Read JSON or POST input
$rawInput = file_get_contents('php://input');
$input = json_decode($rawInput, true);
if (!$input) {
    $input = $_POST;
}

// CSRF security check
$token = $input['csrf_token'] ?? '';
if (empty($token) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    http_response_code(403);
    echo json_encode([
        'success' => false, 
        'message' => 'Invalid or expired security token. Please refresh the page and try again.'
    ]);
    exit;
}

// Basic field normalization
$type = trim($input['type'] ?? 'general_contact');
$name = trim($input['name'] ?? $input['full_name'] ?? '');
$email = trim($input['email'] ?? '');
$phone = trim($input['phone'] ?? $input['contact'] ?? '');
$company = trim($input['company'] ?? $input['business_name'] ?? '');
$message = trim($input['message'] ?? $input['requirement'] ?? $input['description'] ?? '');

// Validation
if (empty($name)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please provide your full name.']);
    exit;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

// 1. Log enquiry to local file
$logEntry = [
    'timestamp' => date('Y-m-d H:i:s'),
    'type' => $type,
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'company' => $company,
    'details' => $input,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$logDir = __DIR__ . '/../logs';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0755, true);
}
@file_put_contents($logDir . '/enquiries.log', json_encode($logEntry, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);

// 2. Dispatch custom HTML email to Gmail via Mailer
require_once __DIR__ . '/../includes/Mailer.php';

$mailResult = Mailer::sendFormSubmission($type, $input);

// Form-specific success confirmations
$messagesByType = [
    'it_project_enquiry' => 'Thank you! Your IT project enquiry has been received. Our technical consultants will review your scope and schedule an architectural discovery call within 24 hours.',
    'business_proposal_request' => 'Thank you! Your strategic proposal request has been received. Our managing partners will evaluate your requirements and reach out within 24 hours.',
    'partnership_collaboration_proposal' => 'Thank you! Your collaboration proposal has been submitted to Mercora Leadership. We will review your institutional synergy and connect shortly.',
    'coffee_distributor_enquiry' => 'Thank you for your interest in Native Araku Coffee! Our coffee franchise and supply team will contact you with product brochures and franchise economics.',
    'customer_support_ticket' => 'Your priority support ticket has been registered. Our operations team has been notified and will address your request promptly.',
    'general_contact' => 'Thank you! Your enquiry has been received. Our leadership and consulting team at Mercora International will review your requirements and get in touch within 24 hours.'
];

$successMessage = $messagesByType[$type] ?? $messagesByType['general_contact'];

echo json_encode([
    'success' => true,
    'message' => $successMessage,
    'mail_sent' => !empty($mailResult['success'])
]);
exit;
