<?php
$pageTitle = 'Industries We Serve | 11 Business Verticals';
$pageDesc = 'Discover how Mercora International delivers measurable impact across 11 industry sectors including AgriTech, Healthcare, BFSI, Education, Retail, Textiles, and Global Trade.';
require_once __DIR__ . '/includes/header.php';

$INDUSTRIES = [
    [
        'id' => 'agritech',
        'title' => 'Agriculture & AgriTech',
        'short_name' => 'Agriculture',
        'icon' => 'ri-plant-line',
        'image' => 'assets/images/industries/agriculture.jpg',
        'tag' => 'DPIIT DIPP258473',
        'desc' => 'Smart Crop Doctor AI platform combining multispectral drone imaging for early disease diagnostics, soil analytics, and solar water pumping systems.',
        'highlights' => ['Smart Crop Doctor AI Platform', 'Solar Water Pumping SITC + O&M', 'Farmer-to-Agri-Entrepreneur Programs']
    ],
    [
        'id' => 'csr',
        'title' => 'CSR & Sustainability',
        'short_name' => 'CSR & Sustainability',
        'icon' => 'ri-recycle-line',
        'image' => 'assets/images/industries/sustainability.jpg',
        'tag' => 'ESG Impact',
        'desc' => 'CSR programme architecture, ESG audits, rural AgriTech deployment, tribal farmer linkage via Native Araku Coffee, and household waste-to-energy.',
        'highlights' => ['Measurable ESG Impact Metrics', 'Household Waste to Biofuel Conversion', 'Tribal Farmer Livelihood Upliftment']
    ],
    [
        'id' => 'education',
        'title' => 'Education, Skill & Entrepreneurship',
        'short_name' => 'Education',
        'icon' => 'ri-graduation-cap-line',
        'image' => 'assets/images/industries/education.jpg',
        'tag' => 'VFS Education Alliance',
        'desc' => 'Competency-based training, startup incubation, innovation curriculum design, and global STEM study abroad pathways via VFS Education Services.',
        'highlights' => ['Global STEM Study Abroad Pathways', 'Competency-based Vocational Training', 'Incubation & Curriculum Innovation']
    ],
    [
        'id' => 'bfsi',
        'title' => 'Financial Advisory',
        'short_name' => 'Finance',
        'icon' => 'ri-bank-card-line',
        'image' => 'assets/images/industries/finance.jpg',
        'tag' => 'GRC & FinTech',
        'desc' => 'Internal audits, Governance, Risk & Compliance (GRC) advisory, ESG alignment, BFSI software QA, and financial due diligence for investments.',
        'highlights' => ['Internal Audits & GRC Frameworks', 'BFSI Software QA & Security', 'Financial Due Diligence & Valuation']
    ],
    [
        'id' => 'trade',
        'title' => 'Global Trade',
        'short_name' => 'Trade & Export',
        'icon' => 'ri-ship-line',
        'image' => 'assets/images/industries/trade.jpg',
        'tag' => 'IEC ACEFM7191A',
        'desc' => 'Import/export facilitation under official DGFT IEC ACEFM7191A, FOB/CIF contracts, international buyer-seller matchmaking, and agro-commodity corridors.',
        'highlights' => ['DGFT Registered Import/Export Facilitation', 'Global Buyer-Seller Matchmaking', 'Spice Trade Expansion (RPGS Partnership)']
    ],
    [
        'id' => 'healthcare',
        'title' => 'Healthcare & Wellness',
        'short_name' => 'Healthcare',
        'icon' => 'ri-heart-pulse-line',
        'image' => 'assets/images/industries/healthcare.jpg',
        'tag' => 'MindSmith Partnership',
        'desc' => 'Corporate wellness solutions, preventive mental healthcare programs, Brain Health Profile (BHP), and digital health software quality assurance.',
        'highlights' => ['Corporate Employee Assistance (EAP)', 'Brain Health Profile (BHP) & SKYE AI', 'Digital Health Software QA']
    ],
    [
        'id' => 'manufacturing',
        'title' => 'Manufacturing & Supply Chain',
        'short_name' => 'Manufacturing',
        'icon' => 'ri-settings-4-line',
        'image' => 'assets/images/industries/manufacturing.jpg',
        'tag' => 'Process Optimization',
        'desc' => 'ERP selection and implementation QA, workflow automation, supply chain resilience consulting, export documentation, and customs clearance.',
        'highlights' => ['ERP Selection & Implementation QA', 'Supply Chain Bottleneck Elimination', 'International Export Packaging']
    ],
    [
        'id' => 'nextgen',
        'title' => 'Innovation & Technology',
        'short_name' => 'Innovation & Technology',
        'icon' => 'ri-lightbulb-flash-line',
        'image' => 'assets/images/industries/technology.jpg',
        'tag' => 'iDEX & Deep-Tech',
        'desc' => 'Innovation labs, venture acceleration, and government funding access including Startup India Seed Fund (SISFS) and iDEX defense grants with Tridantor.',
        'highlights' => ['iDEX Defense Innovation Advisory', 'Startup India SISFS Grant Facilitation', 'Venture Acceleration & GTM']
    ],
    [
        'id' => 'fmcg-coffee',
        'title' => 'Retail, FMCG & Food & Beverage',
        'short_name' => 'Retail, FMCG & Food & Beverage',
        'icon' => 'ri-shopping-bag-3-line',
        'image' => 'assets/images/industries/retail.jpg',
        'tag' => 'Native Araku Coffee',
        'desc' => 'Native Araku Coffee franchise development, wholesale distribution, FMCG supply chain optimization, and retail Standard Operating Procedures.',
        'highlights' => ['Native Araku Coffee Distribution', 'Retail SOP & Franchise Scaling', 'HoReCa & Corporate Gifting']
    ],
    [
        'id' => 'textile',
        'title' => 'Textile & Apparel',
        'short_name' => 'Textile & Apparel',
        'icon' => 'ri-t-shirt-2-line',
        'image' => 'assets/images/industries/textile.jpg',
        'tag' => 'WHITE WORLD Brand',
        'desc' => 'Sustainable organic fabric innovation, conscious lifestyle fashion, and the upcoming WHITE WORLD e-commerce ecosystem empowering rural tailors.',
        'highlights' => ['WHITE WORLD E-Commerce Ecosystem', 'Sustainable Organic Fabric Sourcing', 'Livelihoods for Underprivileged Tailors']
    ],
    [
        'id' => 'women',
        'title' => 'Women\'s Empowerment',
        'short_name' => 'Women Empowerment',
        'icon' => 'ri-women-line',
        'image' => 'assets/images/industries/women.jpg',
        'tag' => 'SERP AP Initiative',
        'desc' => 'Entrepreneurial incubation, financial inclusion, and the milestone initiative establishing 100 Women-Driven Coffee Shops across AP in partnership with SERP.',
        'highlights' => ['100 Women-Driven Coffee Shops (SERP AP)', 'Micro-enterprise Credit Linkage', 'Grassroots Leadership Development']
    ],
];
?>

<!-- Hero Section -->
<section class="relative bg-slate-900 border-b border-slate-800 text-white py-14 sm:py-20 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-5">
                <div>
                    <span
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                        <i class="ri-building-line text-amber-400"></i> Cross-Industry Expertise
                    </span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                    Industries We Serve
                </h1>
                <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                    Mercora's integrated service ecosystem enables measurable impact across 11 industries and community
                    sectors, aligning commercial growth with sustainable human progress.
                </p>
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#industries-list"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-lg transition shadow-sm">
                        Browse All 11 Sectors <i class="ri-arrow-down-line ml-2"></i>
                    </a>
                    <a href="<?= url('/contact') ?>"
                        class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-lg transition">
                        Inquire for Your Industry
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div
                    class="relative rounded-2xl overflow-hidden border border-slate-700/60 shadow-2xl bg-slate-800/50 p-2 group hover:border-amber-500/40 transition duration-300">
                    <img src="<?= url('assets/images/mercora/hero_industries.png') ?>"
                        alt="Industries We Serve - 11 Business Verticals"
                        class="w-full h-48 sm:h-64 lg:h-72 object-cover rounded-xl transition duration-500 group-hover:scale-[1.02]" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sector Portfolio Section: Image Tile Cards with Content-Up Hover Animation -->
<section id="industries-list" class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header Matching Attached Reference -->
        <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-18">
            <span class="text-xs sm:text-sm font-bold uppercase tracking-widest text-slate-900 block mb-2">
                INDUSTRIES WE SERVE
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-slate-900">
                Transforming Industries. Creating Impact.
            </h2>
        </div>

        <!-- 11 Industry Cards Grid (4 columns on desktop, 2 on tablet, 1 on mobile) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-7">
            <?php
            // Dedicated standalone pages for industries where available
            $dedicatedRoutes = [
                'agritech' => '/smart-crop-doctor',
                'fmcg-coffee' => '/coffee-products',
                'textile' => '/white-world',
                'textile-apparel' => '/white-world',
                'nextgen' => '/it-services',
                'digital-trans' => '/it-services',
            ];

            // Alias IDs so anchors from config.php or index.php scroll smoothly
            $aliasMap = [
                'csr' => 'csr-sustainability',
                'bfsi' => 'financial-advisory',
                'trade' => 'global-trade',
                'nextgen' => 'digital-trans',
                'textile' => 'textile-apparel',
                'women' => 'women-empowerment',
            ];

            foreach ($INDUSTRIES as $ind):
                $indId = $ind['id'] ?? '';
                $hasDedicated = isset($dedicatedRoutes[$indId]);
                $dedicatedUrl = $hasDedicated ? url($dedicatedRoutes[$indId]) : null;

                $imgUrl = url($ind['image']);
                $absPath = __DIR__ . '/' . $ind['image'];
                if (file_exists($absPath)) {
                    $imgUrl .= '?v=' . filemtime($absPath);
                }
            ?>
                <div id="<?= e($indId) ?>"
                    <?= $hasDedicated ? 'data-nav-url="' . $dedicatedUrl . '"' : '' ?>
                    class="industry-card group relative rounded-2xl overflow-hidden h-[410px] sm:h-[430px] shadow-md hover:shadow-2xl bg-[#0c2340] border <?= $hasDedicated ? 'cursor-pointer' : 'cursor-default' ?> transition-all duration-300">
                    <?php if (isset($aliasMap[$indId])): ?>
                        <!-- Anchor target for alias ID -->
                        <span id="<?= e($aliasMap[$indId]) ?>" class="scroll-mt-28 -top-24 relative block"></span>
                    <?php endif; ?>

                    <!-- Background Photographic Image -->
                    <img src="<?= $imgUrl ?>" alt="<?= e($ind['title']) ?>"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <!-- Dark Navy Vignette Gradient Overlay for Initial State -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0c2340]/95 via-[#0c2340]/55 to-[#0c2340]/25 transition-opacity duration-300 group-hover:opacity-20">
                    </div>

                    <!-- Initial UI: Centered Icon & Bottom Name -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between p-6 z-0 transition-opacity duration-300 group-hover:opacity-0 pointer-events-none">
                        <div></div> <!-- Spacer -->

                        <!-- Icon in Center -->
                        <div class="flex flex-col items-center justify-center">
                            <div
                                class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-white/10 backdrop-blur-md text-amber-400 border border-white/20 flex items-center justify-center text-3xl sm:text-4xl shadow-lg transition-transform duration-300 group-hover:scale-110">
                                <i class="<?= e($ind['icon']) ?>"></i>
                            </div>
                        </div>

                        <!-- Industry Name at Bottom -->
                        <div class="text-center w-full pb-2">
                            <h3 class="text-lg sm:text-xl font-bold text-white tracking-wide drop-shadow-md">
                                <?= e($ind['title']) ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Hover State: Content-Up Slide Animation Overlay in Theme Navy Blue -->
                    <div
                        class="absolute inset-0 bg-[#0c2340] border border-white/10 p-5 sm:p-6 flex flex-col justify-between text-left translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-10 overflow-hidden shadow-2xl [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                        <div>
                            <!-- Tag & Icon Header -->
                            <div class="flex items-center justify-between mb-2.5">
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded text-[10px] font-bold uppercase tracking-wider bg-amber-400/15 text-amber-300 border border-amber-400/30">
                                    <?= e($ind['tag']) ?>
                                </span>
                                <div
                                    class="w-8 h-8 rounded-lg bg-white/10 border border-white/15 text-amber-400 flex items-center justify-center text-base">
                                    <i class="<?= e($ind['icon']) ?>"></i>
                                </div>
                            </div>

                            <!-- Full Title -->
                            <h4 class="text-base sm:text-lg font-bold text-white mb-2 leading-snug">
                                <?= e($ind['title']) ?>
                            </h4>

                            <!-- Description -->
                            <p class="text-xs text-slate-300 leading-relaxed mb-3 font-normal">
                                <?= e($ind['desc']) ?>
                            </p>

                            <!-- Focus Areas List -->
                            <div class="pt-2.5 border-t border-white/10">
                                <span
                                    class="block text-[10.5px] font-bold uppercase tracking-wider text-amber-400 mb-1.5">Key Focus Areas:</span>
                                <ul class="space-y-1.5 text-xs text-slate-200">
                                    <?php foreach ($ind['highlights'] as $hl): ?>
                                        <li class="flex items-start gap-1.5">
                                            <i
                                                class="ri-checkbox-circle-fill text-amber-400 text-xs flex-shrink-0 mt-0.5"></i>
                                            <span class="text-slate-200"><?= e($hl) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Bottom Action Link(s) -->
                        <div class="pt-3 border-t border-white/10 mt-2">
                            <?php if ($hasDedicated): ?>
                                <div class="flex items-center justify-between gap-2">
                                    <a href="<?= $dedicatedUrl ?>"
                                        class="inline-flex items-center text-xs font-bold text-amber-400 hover:text-amber-300 transition group/explore">
                                        <span>Explore Page</span>
                                        <i class="ri-arrow-right-up-line ml-1 text-amber-400 transition-transform group-hover/explore:translate-x-0.5 group-hover/explore:-translate-y-0.5"></i>
                                    </a>
                                    <a href="<?= url('/contact') ?>?vertical=<?= urlencode($ind['title']) ?>"
                                        onclick="event.stopPropagation();"
                                        class="inquire-btn inline-flex items-center text-xs font-semibold text-slate-300 hover:text-white transition group/btn">
                                        <span>Inquire</span>
                                        <i class="ri-arrow-right-line ml-1 transition-transform group-hover/btn:translate-x-0.5"></i>
                                    </a>
                                </div>
                            <?php else: ?>
                                <a href="<?= url('/contact') ?>?vertical=<?= urlencode($ind['title']) ?>"
                                    onclick="event.stopPropagation();"
                                    class="inquire-btn inline-flex items-center text-xs font-bold text-amber-400 hover:text-amber-300 transition group/btn">
                                    Inquire for This Sector <i class="ri-arrow-right-line ml-1.5 transition-transform group-hover/btn:translate-x-1"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Click handler for industry cards with dedicated pages -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".industry-card[data-nav-url]").forEach(function (card) {
            card.addEventListener("click", function (e) {
                // If clicked on or inside Inquire button (or an explicit link inside), let it handle naturally
                if (e.target.closest(".inquire-btn")) {
                    return;
                }
                var navUrl = this.getAttribute("data-nav-url");
                if (navUrl) {
                    window.location.href = navUrl;
                }
            });
        });
    });
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>