<?php
$pageTitle = 'Digital Transformation & IT Services';
$pageDesc = 'Mercora architects enterprise PMO governance, software QA, cloud migration, white-label SaaS (Mercosys), AI/ML integration, and intelligent process automation.';
require_once __DIR__ . '/includes/header.php';

$IT_SERVICES = [
    [
        'title' => 'Enterprise Program & PMO',
        'icon' => 'ri-dashboard-3-line',
        'desc' => 'End-to-end programme governance, PMO setup, multi-project coordination, and executive reporting dashboards. Anchored by PMP®, PRINCE2®, and Agile/Scrum certified leadership.',
        'deliverables' => 'PMO Governance · Multi-project Dashboards · Agile Coaching'
    ],
    [
        'title' => 'Software QA & Testing',
        'icon' => 'ri-bug-line',
        'desc' => 'ISTQB-aligned functional, regression, UAT, performance, and automation testing. Enterprise defect management and quality assurance across complex platforms using Selenium, Appium, and JIRA.',
        'deliverables' => 'Test Automation · Performance Testing · Security QA'
    ],
    [
        'title' => 'Enterprise App Development',
        'icon' => 'ri-code-s-slash-line',
        'desc' => 'Custom full-stack web and mobile application engineering, seamless API integration, microservices architecture, and ERP/CRM customisation tailored for scalability.',
        'deliverables' => 'Cloud-native Apps · Mobile Apps (React Native) · Custom Portals'
    ],
    [
        'title' => 'Cloud Migration & AI/ML',
        'icon' => 'ri-cloud-line',
        'desc' => 'Cloud readiness assessment, secure migration planning (AWS, Azure, GCP), machine learning model engineering, predictive analytics, and image classification algorithms.',
        'deliverables' => 'Cloud Infrastructure · ML Pipeline Design · Predictive Analytics'
    ],
    [
        'title' => 'SaaS Platform Delivery (Mercosys)',
        'icon' => 'ri-apps-line',
        'desc' => 'White-label SaaS solutions deployed under the Mercosys umbrella in strategic partnership with KavachApp (Arisetty Technologies). Turnkey digital workspaces and client onboarding systems.',
        'deliverables' => 'White-label SaaS · Workflow Automation · Subscription Systems'
    ],
    [
        'title' => 'IT Consulting & Advisory',
        'icon' => 'ri-shake-hands-line',
        'desc' => 'High-impact digital transformation roadmaps, vendor management, IT governance reviews, ITIL compliance, and enterprise software selection advisory.',
        'deliverables' => 'Tech Strategy · Architecture Audit · Vendor Governance'
    ],
    [
        'title' => 'Intelligent Process Automation',
        'icon' => 'ri-robot-2-line',
        'desc' => 'Robotic Process Automation (RPA), end-to-end workflow automation, and data pipeline design — eliminating repetitive manual bottlenecks and unlocking measurable operational efficiency.',
        'deliverables' => 'RPA Bots · Workflow Orchestration · System Connectors'
    ],
    [
        'title' => 'Data Analytics & Business Intelligence',
        'icon' => 'ri-bar-chart-box-line',
        'desc' => 'Interactive Power BI dashboards, advanced Excel financial models, SQL warehousing reports, and enterprise data platform advisory for data-driven decision-making.',
        'deliverables' => 'Power BI Suites · Data Warehousing · Executive Reporting'
    ],
    [
        'title' => 'Managed IT Services',
        'icon' => 'ri-customer-service-2-line',
        'desc' => 'Round-the-clock IT support, infrastructure monitoring, SLA-backed helpdesk, and proactive system maintenance for SMEs and mid-market organizations.',
        'deliverables' => '24/7 Monitoring · Helpdesk SLA · Incident Management'
    ],
];

$TECH_STACK = [
    'Programming & Dev' => ['JavaScript', 'React', 'Node.js', 'Python', 'Java', 'SQL', 'TypeScript'],
    'Mobile Technologies' => ['React Native', 'Expo', 'Android (APK)', 'iOS Native Bridge'],
    'Testing & QA Tools' => ['Selenium', 'Appium', 'Postman', 'TestRail', 'JIRA', 'JMeter'],
    'Cloud Platforms' => ['Amazon Web Services (AWS)', 'Microsoft Azure (Advisory)', 'Google Cloud Platform (GCP)'],
    'Data & Analytics' => ['Microsoft Power BI', 'Excel Advanced Modeling', 'Python (Pandas / NumPy)', 'PostgreSQL / MySQL'],
    'AI & Machine Learning' => ['Python ML Models', 'Multispectral Crop Analytics', 'Computer Vision (OpenCV)', 'TensorFlow'],
    'Project Management' => ['Jira Software', 'MS Project', 'Confluence', 'Monday.com', 'Agile / Scrum'],
    'Agriculture Technology' => ['DGCA Drone Data Pipelines', 'Multispectral Imaging APIs', 'IoT Sensor Gateways', 'GIS Mapping']
];
?>

<!-- Hero Section -->
<section class="relative bg-slate-900 border-b border-slate-800 text-white py-14 sm:py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-5">
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                        <i class="ri-cpu-line text-amber-400"></i> Vertical 2: Technology & Digital Solutions
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Digital Transformation & IT Services
                </h1>
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                    Mercora architects and delivers end-to-end digital transformation strategies — spanning enterprise application development, cloud migration, AI/ML integration, SaaS platforms (Mercosys), and intelligent process automation.
                </p>
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#enquiry" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-lg transition shadow-sm">
                        Submit Project RFP <i class="ri-arrow-down-line ml-2"></i>
                    </a>
                    <a href="#tech-stack" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-lg transition">
                        Explore Technology Stack
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden border border-slate-700/60 shadow-2xl bg-slate-800/50 p-2 group hover:border-amber-500/40 transition duration-300">
                    <img src="<?= url('assets/images/mercora/hero_it_services.png') ?>" alt="Digital Transformation & IT Services" class="w-full h-64 sm:h-80 lg:h-96 object-cover rounded-xl transition duration-500 group-hover:scale-[1.02]" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3.1 Services Offered (9 Services Grid) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12 sm:mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Core Offerings</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Services Offered
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Disciplined engineering, rigorous quality assurance, and proven governance frameworks built for scalable enterprises.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <?php foreach ($IT_SERVICES as $svc): ?>
            <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-7 hover:border-slate-300 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-5">
                        <i class="<?= e($svc['icon']) ?>"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2"><?= e($svc['title']) ?></h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        <?= e($svc['desc']) ?>
                    </p>
                </div>
                <div class="pt-4 border-t border-slate-100 flex items-center gap-2 text-xs font-medium text-slate-500">
                    <i class="ri-checkbox-circle-fill text-emerald-600"></i>
                    <span><?= e($svc['deliverables']) ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3.2 Technology Stack Matrix -->
<section id="tech-stack" class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12 sm:mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Enterprise Architecture</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Our Technology Stack
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Battle-tested tools, modern frameworks, and domain-specific APIs leveraged across our delivery mandates.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($TECH_STACK as $category => $items): ?>
            <div class="bg-white border border-slate-200 rounded-xl p-6">
                <h4 class="text-sm font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <i class="ri-stack-line text-amber-600"></i> <?= e($category) ?>
                </h4>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($items as $tech): ?>
                    <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 text-slate-700 border border-slate-200">
                        <?= e($tech) ?>
                    </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3.3 Project Enquiry Form & 3.4 Downloadable Resources -->
<section id="enquiry" class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left: Enquiry Form -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Start an Engagement</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Project Enquiry & RFP Brief</h3>
                    <p class="text-sm text-slate-600 mt-1">
                        Submit your enterprise project requirements. Our technical consultants will review your brief and schedule an architectural discovery call within 24 hours.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="it_project_enquiry" />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Ramesh Kumar" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Company Name *</label>
                            <input type="text" name="company" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Acme Enterprises Ltd" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address *</label>
                            <input type="email" name="email" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="you@company.com" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone / WhatsApp</label>
                            <input type="tel" name="phone" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="+91 98765 43210" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Service Required *</label>
                            <select name="service_required" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                                <option value="">Select Service Area</option>
                                <option value="Enterprise PMO">Enterprise Program & PMO</option>
                                <option value="Software QA">Software QA & Testing</option>
                                <option value="App Development">Enterprise App Development</option>
                                <option value="Cloud Migration">Cloud Migration & AI/ML</option>
                                <option value="SaaS Platform">SaaS Platform Delivery (Mercosys)</option>
                                <option value="IT Advisory">IT Consulting & Advisory</option>
                                <option value="Process Automation">Intelligent Process Automation (RPA)</option>
                                <option value="Data Analytics">Data Analytics & BI</option>
                                <option value="Managed IT">Managed IT Services</option>
                                <option value="Smart Crop Doctor">Smart Crop Doctor AgriTech Solution</option>
                                <option value="Other">Other Custom Requirement</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Estimated Budget Range</label>
                            <select name="budget" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white">
                                <option value="Below Rs.5L">Below ₹5 Lakhs</option>
                                <option value="Rs.5-20L">₹5 Lakhs – ₹20 Lakhs</option>
                                <option value="Rs.20L-1Cr">₹20 Lakhs – ₹1 Crore</option>
                                <option value="Above Rs.1Cr">Above ₹1 Crore</option>
                                <option value="Not decided">Not yet decided</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Expected Start Date</label>
                        <input type="text" name="start_date" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Immediate / Next Month / Q3 2026" />
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Project Description / Scope of Work *</label>
                        <textarea name="description" rows="4" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="Describe the objectives, current technical stack, key deliverables, and challenges..." required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Submit Project Enquiry <i class="ri-send-plane-fill ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: 3.4 Downloadable Resources & Partner Ecosystem -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Resources Card -->
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                    <h4 class="text-base font-bold text-slate-900 mb-2 flex items-center gap-2">
                        <i class="ri-file-download-line text-amber-600"></i> Downloadable Resources
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-600 mb-6">
                        Access comprehensive briefs, solution specifications, and technical whitepapers.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center justify-between bg-white border border-slate-200 p-4 rounded-xl hover:border-amber-500/30 transition">
                            <div>
                                <a href="<?= url('assets/resources/' . rawurlencode('IT & Digital Services Brochure.pdf')) ?>" download="IT & Digital Services Brochure.pdf" class="block text-sm font-semibold text-slate-900 hover:text-amber-600 transition">IT & Digital Services Brochure</a>
                                <span class="text-xs text-slate-500">PDF Document · Official Overview</span>
                            </div>
                            <a href="<?= url('assets/resources/' . rawurlencode('IT & Digital Services Brochure.pdf')) ?>" download="IT & Digital Services Brochure.pdf" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-amber-500 hover:text-slate-950 text-slate-700 flex items-center justify-center transition" title="Download IT & Digital Services Brochure">
                                <i class="ri-download-2-line text-base"></i>
                            </a>
                        </li>
                        <li class="flex items-center justify-between bg-white border border-slate-200 p-4 rounded-xl hover:border-amber-500/30 transition">
                            <div>
                                <a href="<?= url('assets/resources/' . rawurlencode('Smart Crop Doctor Product Sheet Brochure.pdf')) ?>" download="Smart Crop Doctor Product Sheet Brochure.pdf" class="block text-sm font-semibold text-slate-900 hover:text-amber-600 transition">Smart Crop Doctor Product Sheet</a>
                                <span class="text-xs text-slate-500">DPIIT Recognized (DIPP258473) · PDF</span>
                            </div>
                            <a href="<?= url('assets/resources/' . rawurlencode('Smart Crop Doctor Product Sheet Brochure.pdf')) ?>" download="Smart Crop Doctor Product Sheet Brochure.pdf" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-amber-500 hover:text-slate-950 text-slate-700 flex items-center justify-center transition" title="Download Smart Crop Doctor Product Sheet">
                                <i class="ri-download-2-line text-base"></i>
                            </a>
                        </li>
                        <li class="flex items-center justify-between bg-white border border-slate-200 p-4 rounded-xl hover:border-amber-500/30 transition">
                            <div>
                                <a href="<?= url('assets/resources/' . rawurlencode('Corporate Profile V1 (2026) Brochure.pdf')) ?>" download="Corporate Profile V1 (2026) Brochure.pdf" class="block text-sm font-semibold text-slate-900 hover:text-amber-600 transition">Corporate Profile V1 (2026)</a>
                                <span class="text-xs text-slate-500">11 Verticals & 7 Signed MOUs · PDF</span>
                            </div>
                            <a href="<?= url('assets/resources/' . rawurlencode('Corporate Profile V1 (2026) Brochure.pdf')) ?>" download="Corporate Profile V1 (2026) Brochure.pdf" class="w-9 h-9 rounded-lg bg-slate-100 hover:bg-amber-500 hover:text-slate-950 text-slate-700 flex items-center justify-center transition" title="Download Corporate Profile">
                                <i class="ri-download-2-line text-base"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- KavachApp Card -->
                <div class="bg-slate-900 text-white rounded-2xl p-6 sm:p-8 border border-slate-800">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400">SaaS Partnership</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">KavachApp & Mercosys</h4>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6">
                        Through our confirmed signed-MOU partnership with KavachApp (Arisetty Technologies), Mercora delivers white-labelled enterprise SaaS solutions, workflow management, and digital onboarding platforms.
                    </p>
                    <button type="button" class="inline-flex items-center justify-center px-4 py-2.5 text-xs font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-lg transition" data-partner-id="kavachapp">
                        View KavachApp MOU Brief <i class="ri-external-link-line ml-1.5"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
