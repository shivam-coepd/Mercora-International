<?php
/**
 * Mercora International - Central Enquiry & Lead Submission Endpoint
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
$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    $input = $_POST;
}

// CSRF check
$token = $input['csrf_token'] ?? '';
if (empty($token) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid or expired security token. Please refresh the page and try again.']);
    exit;
}

$type = trim($input['type'] ?? 'general');
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

// Log inquiry to local log file in scratch directory or log file
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
@file_put_contents($logDir . '/enquiries.log', json_encode($logEntry) . PHP_EOL, FILE_APPEND);

// Success response
echo json_encode([
    'success' => true,
    'message' => 'Thank you! Your enquiry has been received. Our leadership and consulting team at Mercora International will review your requirements and get in touch within 24 hours.'
]);
exit;
