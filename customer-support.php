<?php
$pageTitle = 'Customer Support & Knowledge Base';
$pageDesc = 'Get help, track your inquiries, and explore frequently asked questions regarding Mercora International\'s verticals, Native Araku Coffee franchise, and IT services.';
require_once __DIR__ . '/includes/header.php';

$FAQS = [
    [
        'q' => 'How can I become an authorised franchisee for Native Araku Coffee?',
        'a' => 'Mercora International is the authorised Franchise Development Partner for Native Araku Coffee. We offer both compact kiosk and flagship café models. We guide you through site feasibility, interior design, espresso machine procurement, barista training, and uninterrupted single-origin bean supply. You can submit an enquiry through our Coffee Products page or contact us at +91 76800 77222.'
    ],
    [
        'q' => 'What is the Smart Crop Doctor platform and how does it work?',
        'a' => 'Smart Crop Doctor is our flagship DPIIT-recognised (DIPP258473) AgriTech platform. It leverages DGCA-approved drones equipped with multispectral sensors and AI algorithms to scan crop fields, diagnose leaf diseases early, assess chlorophyll and soil moisture levels, and optimise fertilizer spraying. This service is supported by our technical partnership with Drone Anatomy.'
    ],
    [
        'q' => 'What frameworks and standards do your IT Services and PMO practice follow?',
        'a' => 'Our technology consulting and QA practices adhere strictly to ISTQB testing standards, PMP® and PRINCE2® project governance, ISO quality benchmarks, and Agile/Scrum delivery. Software QA covers automated Selenium/Appium test suites, security testing, performance benchmarking, and user acceptance testing.'
    ],
    [
        'q' => 'How does Mercora facilitate Global Trade under IEC ACEFM7191A?',
        'a' => 'With our official Importer Exporter Code issued by DGFT Hyderabad, we assist businesses with buyer-seller matchmaking, Incoterms advisory (FOB, CIF, EXW), international NCNDA agreements, export documentation, customs clearance, and supply chain logistics for Indian agro-commodities, specialty spices, and textiles.'
    ],
    [
        'q' => 'What is the WHITE WORLD initiative?',
        'a' => 'WHITE WORLD is a curated e-commerce and lifestyle apparel platform launching under Mercora\'s Textile & Apparel vertical. It specializes in premium white apparel and accessories crafted from sustainable fabrics. Importantly, WHITE WORLD provides skill training and sustainable livelihoods for women tailors, tribal artisans, persons with disabilities, and underprivileged youth.'
    ],
    [
        'q' => 'Where is Mercora International headquartered and can we visit your office?',
        'a' => 'Our corporate headquarters are located at Flat No.212, 2nd Floor, Prime Legend, Botanical Garden Road, Kondapur, Hyderabad – 500084, Telangana. Prospective partners, enterprise clients, and franchise candidates are welcome to schedule an in-person meeting by writing to info@mercorainternational.com.'
    ],
];
?>

<!-- Hero Section -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                    <i class="ri-customer-service-2-line text-amber-400"></i> Client Assistance
                </span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                Customer Support & Frequently Asked Questions
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Find immediate answers regarding our business verticals, franchise procedures, and technical engagements, or raise a support ticket directly with our operations desk.
            </p>
        </div>
    </div>
</section>

<!-- Support Desk & FAQs Split -->
<section class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left: FAQs -->
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Knowledge Base</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 mt-1 mb-6">
                        Frequently Asked Questions
                    </h2>
                </div>

                <div class="space-y-4">
                    <?php foreach ($FAQS as $faq): ?>
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 sm:p-6">
                        <h4 class="text-base font-bold text-slate-900 mb-2 flex items-start gap-2.5">
                            <i class="ri-question-line text-amber-600 text-lg flex-shrink-0 mt-0.5"></i>
                            <span><?= e($faq['q']) ?></span>
                        </h4>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pl-7">
                            <?= e($faq['a']) ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right: Support Ticket Form -->
            <div class="lg:col-span-5 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Helpdesk</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Submit a Support Ticket</h3>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1">
                        Existing clients, franchisees, and supply chain partners can open a priority assistance ticket.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="customer_support_ticket" />

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Your Name *</label>
                        <input type="text" name="name" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. D. Kiran" required />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address *</label>
                        <input type="email" name="email" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="kiran@domain.com" required />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Contact Phone *</label>
                        <input type="tel" name="phone" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="+91 76800 77222" required />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Category of Request *</label>
                        <select name="support_category" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                            <option value="">Select Category</option>
                            <option value="Franchise Order / Logistics">Coffee Franchise / Logistics Support</option>
                            <option value="Smart Crop Doctor Assistance">Smart Crop Doctor Drone Operations</option>
                            <option value="IT Services Project Milestone">IT Services / PMO Query</option>
                            <option value="Trade Documentation Support">Global Trade / IEC Export Queries</option>
                            <option value="Billing & Invoicing">Billing, Invoices & GST</option>
                            <option value="Other">Other Operational Inquiries</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Issue Description *</label>
                        <textarea name="description" rows="4" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="Provide full details of your request or issue..." required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Submit Support Ticket <i class="ri-ticket-line ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
