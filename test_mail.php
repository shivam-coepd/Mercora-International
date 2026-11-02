<?php
/**
 * Mercora International - Email Testing & Template Preview Utility
 * 
 * Usage:
 * - In browser: http://localhost:8080/test_mail.php?preview=it_services (or contact, business, partnership, coffee, support)
 * - To test send: http://localhost:8080/test_mail.php?send=1
 * - In terminal: php test_mail.php
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mail_config.php';
require_once __DIR__ . '/includes/MailTemplates.php';
require_once __DIR__ . '/includes/Mailer.php';

$previewType = $_GET['preview'] ?? null;
$doSend = isset($_GET['send']) || (php_sapi_name() === 'cli' && in_array('--send', $argv ?? []));

$mockData = [
    'general_contact' => [
        'name' => 'Vikram Reddy',
        'company' => 'Apex Global Ventures Pvt Ltd',
        'email' => 'vikram.reddy@apexglobal.example',
        'phone' => '+91 98765 43210',
        'vertical_interest' => 'AgriTech & Smart Crop Doctor',
        'message' => 'We are looking to implement precision drone spraying and Crop Doctor AI across 5,000 acres in Telangana. Please arrange an initial technical presentation with your domain lead.'
    ],
    'it_project_enquiry' => [
        'name' => 'Ramesh Kumar',
        'company' => 'Acme Enterprise Solutions Ltd',
        'email' => 'ramesh.kumar@acme-enterprises.example',
        'phone' => '+91 98765 12345',
        'service_required' => 'Enterprise App Development',
        'budget' => 'Rs.20L-1Cr',
        'start_date' => 'Next Month (Q3 2026)',
        'description' => 'We require a scalable SaaS procurement and vendor management portal architected on cloud microservices with role-based access control and SAP ERP synchronization.'
    ],
    'business_proposal_request' => [
        'name' => 'Anand Sharma',
        'designation' => 'Managing Director',
        'company' => 'Global Horizon FMCG',
        'industry' => 'Retail, FMCG & Coffee',
        'email' => 'anand.sharma@globalhorizon.example',
        'phone' => '+91 99887 76655',
        'solution_type' => 'Franchise Development',
        'start_date' => 'Immediate',
        'description' => 'Interested in setting up 3 Native Araku Coffee retail outlets in Bangalore under the master franchisee model. Requesting franchise financial projections and unit economics.'
    ],
    'partnership_collaboration_proposal' => [
        'name' => 'Dr. Rajesh Verma',
        'designation' => 'Chief Strategy Officer',
        'company' => 'GeoTech Autonomous Systems',
        'vertical' => 'AgriTech & Drones',
        'email' => 'rajesh.verma@geotechlabs.example',
        'phone' => '+91 98220 11223',
        'description' => 'We design multi-spectral drone payloads and wish to integrate our imaging sensors with Mercora’s Crop Doctor AI platform under an institutional MOU.'
    ],
    'coffee_distributor_enquiry' => [
        'name' => 'Priya Sharma',
        'company' => 'Blue Mountain Specialty Cafes',
        'city_state' => 'Hyderabad, Telangana',
        'email' => 'priya@bluemountain.example',
        'phone' => '+91 97001 23456',
        'enquiry_type' => 'Franchise',
        'monthly_volume' => '50-200 kg',
        'message' => 'Opening a premium boutique cafe in Jubilee Hills, Hyderabad. We want to exclusively feature Native Araku Coffee single-origin roast profiles and signature Cold Brews.'
    ],
    'customer_support_ticket' => [
        'name' => 'D. Kiran',
        'email' => 'kiran.d@partnerfirm.example',
        'phone' => '+91 76800 77222',
        'support_category' => 'Smart Crop Doctor Assistance',
        'description' => 'Need firmware calibration assistance for drone fleet unit #DRN-04 deployed in the Khammam pilot sector.'
    ]
];

// If requesting HTML preview
if ($previewType) {
    $aliasMap = [
        'contact' => 'general_contact',
        'it' => 'it_project_enquiry',
        'it_services' => 'it_project_enquiry',
        'business' => 'business_proposal_request',
        'partnership' => 'partnership_collaboration_proposal',
        'partnerships' => 'partnership_collaboration_proposal',
        'coffee' => 'coffee_distributor_enquiry',
        'support' => 'customer_support_ticket'
    ];

    $resolvedType = $aliasMap[$previewType] ?? $previewType;
    $data = $mockData[$resolvedType] ?? $mockData['general_contact'];
    $rendered = MailTemplates::render($resolvedType, $data);
    echo $rendered['html'];
    exit;
}

// If executing test send
if ($doSend) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== Mercora International - SMTP Test Send ===\n\n";

    echo "Checking configuration in includes/mail_config.php:\n";
    echo "- SMTP Host: " . MAIL_SMTP_HOST . "\n";
    echo "- SMTP Port: " . MAIL_SMTP_PORT . "\n";
    echo "- Encryption: " . MAIL_SMTP_SECURE . "\n";
    echo "- Gmail Username: " . MAIL_USERNAME . "\n";
    echo "- App Password Set: " . (MAIL_PASSWORD !== 'YOUR_16_CHAR_APP_PASSWORD' && !empty(MAIL_PASSWORD) ? "YES (" . strlen(MAIL_PASSWORD) . " chars)" : "NO (Placeholder detected)") . "\n";
    echo "- Receiver Email: " . MAIL_RECEIVER_EMAIL . "\n\n";

    if (!isMailConfigured()) {
        echo "⚠️ ATTENTION: Gmail credentials are not configured yet.\n";
        echo "Please open 'includes/mail_config.php' and set:\n";
        echo "  define('MAIL_USERNAME', 'your-actual-email@gmail.com');\n";
        echo "  define('MAIL_PASSWORD', 'your-16-character-app-password');\n";
        echo "  define('MAIL_RECEIVER_EMAIL', 'your-actual-email@gmail.com');\n\n";
        exit;
    }

    echo "Attempting test transmission to " . MAIL_RECEIVER_EMAIL . "...\n";
    $result = Mailer::sendFormSubmission('general_contact', $mockData['general_contact']);

    if ($result['success']) {
        echo "✅ SUCCESS! Test email has been sent successfully to " . MAIL_RECEIVER_EMAIL . ".\n";
        echo "Check your Gmail inbox (and Spam/Updates folder) for the test message.\n";
    } else {
        echo "❌ FAILED to send email.\n";
        echo "Error: " . $result['message'] . "\n";
        echo "Check logs/mail.log for detailed logs.\n";
    }
    exit;
}

// Default Dashboard view
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mercora Email Templates & SMTP Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-slate-800 p-8 font-sans">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
        <div class="bg-slate-900 text-white p-6 sm:p-8">
            <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Diagnostic Center</span>
            <h1 class="text-2xl sm:text-3xl font-extrabold mt-1">Mercora Form Email Templates & SMTP Configuration</h1>
            <p class="text-slate-400 text-sm mt-1">Preview each form's dedicated email design or test live Gmail SMTP delivery.</p>
        </div>

        <div class="p-6 sm:p-8 space-y-8">
            <!-- Configuration Status Box -->
            <div class="p-5 rounded-xl border <?= isMailConfigured() ? 'bg-emerald-50 border-emerald-200 text-emerald-900' : 'bg-amber-50 border-amber-200 text-amber-900' ?>">
                <div class="flex items-center gap-3">
                    <span class="text-2xl"><?= isMailConfigured() ? '✅' : '⚙️' ?></span>
                    <div>
                        <h3 class="font-bold text-base">
                            <?= isMailConfigured() ? 'Gmail SMTP Configured' : 'Gmail Credentials Awaiting Input' ?>
                        </h3>
                        <p class="text-xs mt-0.5 opacity-90">
                            SMTP Host: <strong><?= MAIL_SMTP_HOST ?>:<?= MAIL_SMTP_PORT ?> (<?= strtoupper(MAIL_SMTP_SECURE) ?>)</strong> &bull; 
                            Username: <strong><?= MAIL_USERNAME ?></strong> &bull; 
                            Receiver: <strong><?= MAIL_RECEIVER_EMAIL ?></strong>
                        </p>
                    </div>
                </div>
                <div class="mt-4 pt-3 border-t border-current/20 flex flex-wrap items-center gap-3">
                    <a href="?send=1" target="_blank" class="px-4 py-2 rounded-lg bg-slate-900 text-white text-xs font-bold hover:bg-slate-800 transition shadow">
                        🚀 Send Live Test Email to Gmail
                    </a>
                    <span class="text-xs text-slate-500">Edit credentials in <code class="bg-slate-200 text-slate-800 px-1.5 py-0.5 rounded">includes/mail_config.php</code></span>
                </div>
            </div>

            <!-- Preview Templates Grid -->
            <div>
                <h2 class="text-lg font-bold text-slate-900 mb-4">Preview Form-Specific Email Templates</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <a href="?preview=contact" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-amber-500 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-amber-600 uppercase">contact.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">📬 General Corporate</h4>
                        <p class="text-xs text-slate-500 mt-1">Contact inquiries with vertical selection and business notes.</p>
                    </a>

                    <a href="?preview=it_services" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-blue-500 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-blue-600 uppercase">it-services.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">💻 IT & Digital Scope</h4>
                        <p class="text-xs text-slate-500 mt-1">Enterprise technical brief, budget, timeline, and deliverables.</p>
                    </a>

                    <a href="?preview=business" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-yellow-600 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-yellow-600 uppercase">business-solutions.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">📊 Strategic Proposal</h4>
                        <p class="text-xs text-slate-500 mt-1">Executive advisory proposal, industry sector, designation.</p>
                    </a>

                    <a href="?preview=partnerships" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-emerald-500 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-emerald-600 uppercase">partnerships.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">🤝 Strategic Alliances (MOU)</h4>
                        <p class="text-xs text-slate-500 mt-1">Institutional partnership synergies, capabilities and scope.</p>
                    </a>

                    <a href="?preview=coffee" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-amber-700 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-amber-800 uppercase">coffee-products.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">☕ Araku Coffee Franchise</h4>
                        <p class="text-xs text-slate-500 mt-1">Franchise, retail distributor, HoReCa volume and location.</p>
                    </a>

                    <a href="?preview=support" target="_blank" class="p-4 rounded-xl border border-slate-200 hover:border-rose-500 hover:shadow-md transition bg-slate-50 block">
                        <span class="text-xs font-bold text-rose-600 uppercase">customer-support.php</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">🎫 Priority Support Ticket</h4>
                        <p class="text-xs text-slate-500 mt-1">Automated ticket ID (#MCR-...), request category, SLA.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
