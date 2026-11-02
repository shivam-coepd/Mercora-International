<?php
/**
 * Mercora International - SMTP Email Configuration
 * 
 * To receive form submissions on your Gmail:
 * 1. Set MAIL_USERNAME to your Gmail address (e.g., 'example@gmail.com')
 * 2. Set MAIL_PASSWORD to your 16-character Google App Password (not your regular Gmail password)
 * 3. Set MAIL_RECEIVER_EMAIL to the Gmail address where you want to receive inquiries
 */

if (!defined('MAIL_SMTP_HOST')) {
    define('MAIL_SMTP_HOST', getenv('MAIL_SMTP_HOST') ?: 'smtp.gmail.com');
}

if (!defined('MAIL_SMTP_PORT')) {
    define('MAIL_SMTP_PORT', (int) (getenv('MAIL_SMTP_PORT') ?: 465)); // 465 for SSL, 587 for TLS
}

if (!defined('MAIL_SMTP_SECURE')) {
    define('MAIL_SMTP_SECURE', getenv('MAIL_SMTP_SECURE') ?: 'ssl'); // 'ssl' or 'tls'
}

// Gmail Credentials
if (!defined('MAIL_USERNAME')) {
    define('MAIL_USERNAME', getenv('MAIL_USERNAME') ?: 'shivam.coepd@gmail.com');
}

if (!defined('MAIL_PASSWORD')) {
    define('MAIL_PASSWORD', getenv('MAIL_PASSWORD') ?: 'vwql yfxe agph bxgb');
}

// Sender Display Details
if (!defined('MAIL_FROM_EMAIL')) {
    define('MAIL_FROM_EMAIL', getenv('MAIL_FROM_EMAIL') ?: MAIL_USERNAME);
}

if (!defined('MAIL_FROM_NAME')) {
    define('MAIL_FROM_NAME', getenv('MAIL_FROM_NAME') ?: 'Mercora International Website');
}

// Destination: Where all website inquiries will be sent
if (!defined('MAIL_RECEIVER_EMAIL')) {
    define('MAIL_RECEIVER_EMAIL', getenv('MAIL_RECEIVER_EMAIL') ?: MAIL_USERNAME);
}

if (!defined('MAIL_RECEIVER_NAME')) {
    define('MAIL_RECEIVER_NAME', getenv('MAIL_RECEIVER_NAME') ?: 'Mercora Leadership & Consulting');
}

// Helper to check if SMTP credentials have been configured
function isMailConfigured()
{
    return defined('MAIL_USERNAME')
        && defined('MAIL_PASSWORD')
        && !empty(MAIL_USERNAME)
        && !empty(MAIL_PASSWORD)
        && MAIL_USERNAME !== 'YOUR_GMAIL_ADDRESS@gmail.com'
        && MAIL_PASSWORD !== 'YOUR_16_CHAR_APP_PASSWORD';
}
