<?php
$pageTitle = 'Business Solutions & Management Consulting';
$pageDesc = 'Explore Mercora Business Solutions: Franchise Development (Native Araku Coffee), Global Trade Facilitation (IEC ACEFM7191A), Management Consulting, Audit & Compliance, and Startup Advisory.';
require_once __DIR__ . '/includes/header.php';

$BUSINESS_SOLUTIONS = [
    [
        'title' => 'Franchise Development',
        'icon' => 'ri-store-2-line',
        'desc' => 'End-to-end franchise expansion — market mapping, partner identification, onboarding, training, and operational monitoring. Active Flagship: Native Araku Coffee & 100 Women-Driven Coffee Shops with SERP AP.',
        'badge' => 'Active Mandate'
    ],
    [
        'title' => 'Management Consulting',
        'icon' => 'ri-briefcase-line',
        'desc' => 'Strategic reviews, Standard Operating Procedure (SOP) development, go-to-market (GTM) strategy, commercial feasibility studies, pitch deck preparation, and organizational restructuring.',
        'badge' => 'Strategic Advisory'
    ],
    [
        'title' => 'Global Trade Facilitation',
        'icon' => 'ri-ship-line',
        'desc' => 'Import/export documentation, Incoterms advisory, international buyer-seller matchmaking, FOB/CIF contract structuring, trade compliance, and customs clearance advisory. Official DGFT IEC ACEFM7191A.',
        'badge' => 'DGFT Registered'
    ],
    [
        'title' => 'Audit, Compliance & Financial Advisory',
        'icon' => 'ri-shield-keyhole-line',
        'desc' => 'Internal audits, Governance, Risk & Compliance (GRC) advisory, statutory reviews, ESG framework alignment, and comprehensive financial due diligence for investments and mergers.',
        'badge' => 'GRC & Due Diligence'
    ],
    [
        'title' => 'Investment Facilitation',
        'icon' => 'ri-funds-line',
        'desc' => 'Investor deck structuring, financial modelling, valuation advisory, ROI analysis, and government scheme facilitation including Startup India Seed Fund (SISFS), iDEX defense grants, and SEED funding.',
        'badge' => 'Capital Structuring'
    ],
    [
        'title' => 'Startup & MSME Advisory',
        'icon' => 'ri-rocket-line',
        'desc' => 'DPIIT / Startup India recognition advisory, Udyam MSME certifications, state industrial subsidies, grant application packaging, and investor readiness acceleration.',
        'badge' => 'DPIIT & MSME'
    ],
    [
        'title' => 'CSR & ESG Programme Advisory',
        'icon' => 'ri-recycle-line',
        'desc' => 'Corporate Social Responsibility programme design, ESG compliance reporting, tribal farmer linkage via Native Araku Coffee, rural solar pumping systems, and circular waste-to-energy biofuels.',
        'badge' => 'Sustainability'
    ],
    [
        'title' => 'White-Label SaaS (Mercosys)',
        'icon' => 'ri-cloud-windy-line',
        'desc' => 'Client-branded SaaS deployment and digital business automation powered by our strategic partnership with KavachApp (Arisetty Technologies). High-security cloud workflows and subscriber portals.',
        'badge' => 'KavachApp Alliance'
    ],
    [
        'title' => 'Women\'s Entrepreneurship Acceleration',
        'icon' => 'ri-women-line',
        'desc' => 'Grassroots-to-boardroom entrepreneurship programmes, financial literacy, incubation, and execution of the landmark 100 Women-Driven Coffee Shops initiative in partnership with SERP, AP Government.',
        'badge' => 'Impact Initiative'
    ],
];
?>

<!-- Hero Section -->
<section class="relative bg-slate-900 border-b border-slate-800 text-white py-14 sm:py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-5">
                <div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                        <i class="ri-line-chart-line text-amber-400"></i> Strategic Growth Practice
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Business Solutions & Management Consulting
                </h1>
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                    Mercora's Business Solutions vertical helps organisations navigate complexity, unlock new markets, and build sustainable competitive advantage through consulting, trade facilitation, franchise development, and technology advisory.
                </p>
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#proposal-form" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-lg transition shadow-sm">
                        Request Strategic Proposal <i class="ri-arrow-down-line ml-2"></i>
                    </a>
                    <a href="<?= url('/partnerships') ?>" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-lg transition">
                        View Strategic Alliances
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="relative rounded-2xl overflow-hidden border border-slate-700/60 shadow-2xl bg-slate-800/50 p-2 group hover:border-amber-500/40 transition duration-300">
                    <img src="<?= url('assets/images/mercora/hero_business_solutions.png') ?>" alt="Business Solutions & Management Consulting" class="w-full h-64 sm:h-80 lg:h-96 object-cover rounded-xl transition duration-500 group-hover:scale-[1.02]" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4.1 Services Offered Grid -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12 sm:mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Strategic Advisory</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Solutions & Advisory Capabilities
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Tailored frameworks designed to create sustainable value and de-risk operational expansion.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <?php foreach ($BUSINESS_SOLUTIONS as $sol): ?>
            <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-7 hover:border-slate-300 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center text-2xl">
                            <i class="<?= e($sol['icon']) ?>"></i>
                        </div>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                            <?= e($sol['badge']) ?>
                        </span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2"><?= e($sol['title']) ?></h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-4">
                        <?= e($sol['desc']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 4.2 Quantified Results & Track Record -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12 sm:mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Proven Impact</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Measurable Results Across Sectors
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Real commercial milestones and institutional achievements delivered by our teams.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 border-t-4 border-t-emerald-600">
                <div class="text-3xl sm:text-4xl font-extrabold text-emerald-700 mb-2">6 Months</div>
                <h4 class="text-base font-bold text-slate-900 mb-2">Smart Crop Doctor ALEAP Loan</h4>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Commercial loan sanctioned via ALEAP within 6 months of obtaining DPIIT Startup India recognition (DIPP258473), accelerating deployment of multispectral drones.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 border-t-4 border-t-amber-500">
                <div class="text-3xl sm:text-4xl font-extrabold text-amber-700 mb-2">7 MOUs / 18 Engagements</div>
                <h4 class="text-base font-bold text-slate-900 mb-2">Strategic Institutional Network</h4>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Formal agreements signed with technology innovators (Drone Anatomy, Tridantor, KavachApp, APT IT Solutions), education leaders (VFS Education, MindSmith), and trade institutions.
                </p>
            </div>

            <div class="bg-white border border-slate-200 rounded-xl p-6 sm:p-8 border-t-4 border-t-blue-600">
                <div class="text-3xl sm:text-4xl font-extrabold text-blue-800 mb-2">100 Cafés</div>
                <h4 class="text-base font-bold text-slate-900 mb-2">SERP AP Women-Driven Coffee Shops</h4>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Authorised franchise roll-out activated in Hyderabad with government MOU via SERP AP, establishing 100 sustainable cafés operated by rural women entrepreneurs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 4.3 Proposal Request Form -->
<section id="proposal-form" class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Left: Proposal Form -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Direct Advisory</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Request a Strategic Proposal</h3>
                    <p class="text-sm text-slate-600 mt-1">
                        Provide your institutional or business details below. Our managing partners and domain specialists will evaluate your requirements and present an actionable engagement proposal.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="business_proposal_request" />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Anand Sharma" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Designation / Title</label>
                            <input type="text" name="designation" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Managing Director / VP Strategy" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Company / Institution *</label>
                            <input type="text" name="company" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Global Ventures Corp" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Industry / Sector *</label>
                            <select name="industry" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                                <option value="">Select Industry</option>
                                <option value="Agriculture & AgriTech">Agriculture & AgriTech</option>
                                <option value="Retail, FMCG & Coffee">Retail, FMCG & Food & Beverage</option>
                                <option value="Global Trade & Logistics">Global Trade & Logistics</option>
                                <option value="Defence & Deep-Tech">Defence & Deep-Tech</option>
                                <option value="Healthcare & Wellness">Healthcare & Wellness</option>
                                <option value="Education & Study Abroad">Education & Skilling</option>
                                <option value="Finance & BFSI">Finance & BFSI</option>
                                <option value="Textiles & Apparel">Textiles & Apparel</option>
                                <option value="CSR & Government">CSR, ESG & Government Bodies</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Email Address *</label>
                            <input type="email" name="email" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="anand@company.com" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Phone / WhatsApp *</label>
                            <input type="tel" name="phone" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="+91 98765 43210" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Solution Type *</label>
                            <select name="solution_type" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white" required>
                                <option value="">Select Solution Type</option>
                                <option value="Franchise Development">Franchise Development (Native Araku Coffee)</option>
                                <option value="Global Trade Facilitation">Global Trade Facilitation (IEC ACEFM7191A)</option>
                                <option value="Management Consulting">Management Consulting & SOPs</option>
                                <option value="Investment Facilitation">Investment Facilitation & Pitching</option>
                                <option value="CSR & ESG">CSR & ESG Impact Programmes</option>
                                <option value="White-Label SaaS">White-Label SaaS (Mercosys)</option>
                                <option value="Government Tender/Bid">Government Tender / iDEX Bid Advisory</option>
                                <option value="Women Entrepreneurship">Women's Entrepreneurship Incubation</option>
                                <option value="Other">Other Strategic Requirement</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Expected Timeline / Start Date</label>
                            <input type="text" name="start_date" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="e.g. Immediate / Next Quarter" />
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Specific Requirement Brief *</label>
                        <textarea name="requirement" rows="4" maxlength="500" class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5" placeholder="Detail your project objectives, target market, expected ROI, and key constraints..." required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Submit Proposal Request <i class="ri-file-text-line ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Trade Advisory & Coffee Franchise Callouts -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-slate-50 border border-slate-200 rounded-2xl p-6 sm:p-8">
                    <h4 class="text-base font-bold text-slate-900 mb-2 flex items-center gap-2">
                        <i class="ri-global-line text-amber-600"></i> Global Trade Advisory
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        Armed with official <strong>IEC Code ACEFM7191A</strong> issued by DGFT Hyderabad, Mercora connects domestic manufacturers and agricultural producers with certified buyers across Europe, the Middle East, and North America.
                    </p>
                    <ul class="space-y-2 text-xs sm:text-sm text-slate-700">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> International buyer-seller matchmaking</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> Incoterms & NCNDA contracts</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i> FOB/CIF documentation & customs guidance</li>
                    </ul>
                </div>

                <div class="bg-amber-950 text-white rounded-2xl p-6 sm:p-8 border border-amber-900">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Franchise Opportunity</span>
                    <h4 class="text-lg font-bold text-white mt-1 mb-2">Native Araku Coffee Franchise</h4>
                    <p class="text-xs sm:text-sm text-amber-200/90 leading-relaxed mb-6">
                        Join India's specialty coffee movement. Premium GI-tagged single-origin coffee with proven café economics and SERP AP government backing.
                    </p>
                    <a href="<?= url('/coffee-products') ?>" class="inline-flex items-center justify-center px-4 py-2.5 text-xs font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-lg transition">
                        Explore Franchise Models <i class="ri-arrow-right-line ml-1.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
