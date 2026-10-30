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
        'title' => 'Finance & BFSI',
        'short_name' => 'Finance',
        'icon' => 'ri-bank-card-line',
        'image' => 'assets/images/industries/finance.jpg',
        'tag' => 'GRC & FinTech',
        'desc' => 'Internal audits, Governance, Risk & Compliance (GRC) advisory, ESG alignment, BFSI software QA, and financial due diligence for investments.',
        'highlights' => ['Internal Audits & GRC Frameworks', 'BFSI Software QA & Security', 'Financial Due Diligence & Valuation']
    ],
    [
        'id' => 'fmcg-coffee',
        'title' => 'Retail, FMCG & Food & Beverage',
        'short_name' => 'Retail & E-commerce',
        'icon' => 'ri-shopping-bag-3-line',
        'image' => 'assets/images/industries/retail.jpg',
        'tag' => 'Native Araku Coffee',
        'desc' => 'Native Araku Coffee franchise development, wholesale distribution, FMCG supply chain optimization, and retail Standard Operating Procedures.',
        'highlights' => ['Native Araku Coffee Distribution', 'Retail SOP & Franchise Scaling', 'HoReCa & Corporate Gifting']
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
        'id' => 'nextgen',
        'title' => 'NextGen Startup & Innovation',
        'short_name' => 'Innovation & Technology',
        'icon' => 'ri-lightbulb-flash-line',
        'image' => 'assets/images/industries/technology.jpg',
        'tag' => 'iDEX & Deep-Tech',
        'desc' => 'Innovation labs, venture acceleration, and government funding access including Startup India Seed Fund (SISFS) and iDEX defense grants with Tridantor.',
        'highlights' => ['iDEX Defense Innovation Advisory', 'Startup India SISFS Grant Facilitation', 'Venture Acceleration & GTM']
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
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
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
            <?php foreach ($INDUSTRIES as $ind):
                $imgUrl = url($ind['image']);
                $absPath = dirname(__DIR__) . '/' . $ind['image'];
                if (file_exists($absPath)) {
                    $imgUrl .= '?v=' . filemtime($absPath);
                }
                ?>
                <div id="<?= e($ind['id']) ?>"
                    class="group relative rounded-2xl overflow-hidden h-[410px] sm:h-[430px] shadow-sm hover:shadow-xl bg-slate-950 cursor-pointer transition-all duration-300">
                    <!-- Background Photographic Image -->
                    <img src="<?= $imgUrl ?>" alt="<?= e($ind['title']) ?>"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <!-- Dark Vignette Gradient Overlay for Initial State -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-slate-950/20 transition-opacity duration-300 group-hover:opacity-20">
                    </div>

                    <!-- Initial UI: Centered Cyan Line Icon & Bottom Name -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-between p-6 z-0 transition-opacity duration-300 group-hover:opacity-0 pointer-events-none">
                        <div></div> <!-- Spacer -->

                        <!-- Glowing Cyan Line Icon in Center -->
                        <div class="flex flex-col items-center justify-center">
                            <div
                                class="w-16 h-16 sm:w-20 sm:h-20 rounded-2xl bg-slate-50/5 backdrop-blur-sm text-cyan-300 flex items-center justify-center text-3xl sm:text-4xl shadow-[0_0_30px_rgba(6,182,212,0.35)] transition-transform duration-300 group-hover:scale-110">
                                <i class="<?= e($ind['icon']) ?>"></i>
                            </div>
                        </div>

                        <!-- Industry Name at Bottom -->
                        <div class="text-center w-full pb-2">
                            <h3 class="text-lg sm:text-xl font-bold text-white tracking-wide drop-shadow-md">
                                <?= e($ind['short_name']) ?>
                            </h3>
                        </div>
                    </div>

                    <!-- Hover State: Content-Up Slide Animation Overlay -->
                    <div
                        class="absolute inset-0 bg-slate-950/95 backdrop-blur-md p-5 sm:p-6 flex flex-col justify-between text-left text-white translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-out z-10 overflow-hidden [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none]">
                        <div>
                            <!-- Tag & Icon Header -->
                            <div class="flex items-center justify-between mb-2.5">
                                <span
                                    class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                    <?= e($ind['tag']) ?>
                                </span>
                                <div
                                    class="w-7 h-7 rounded-lg bg-cyan-950/80 border border-cyan-500/30 text-cyan-400 flex items-center justify-center text-sm">
                                    <i class="<?= e($ind['icon']) ?>"></i>
                                </div>
                            </div>

                            <!-- Full Title -->
                            <h4 class="text-base sm:text-lg font-bold text-white mb-2 leading-snug">
                                <?= e($ind['title']) ?>
                            </h4>

                            <!-- Description -->
                            <p class="text-xs text-slate-300 leading-relaxed mb-3">
                                <?= e($ind['desc']) ?>
                            </p>

                            <!-- Focus Areas List -->
                            <div class="pt-2 border-t border-slate-800/80">
                                <span
                                    class="block text-[10.5px] font-bold uppercase tracking-wider text-amber-400 mb-1.5">Key
                                    Focus Areas:</span>
                                <ul class="space-y-1 text-xs text-slate-200">
                                    <?php foreach ($ind['highlights'] as $hl): ?>
                                        <li class="flex items-start gap-1.5">
                                            <i
                                                class="ri-checkbox-circle-fill text-emerald-400 text-xs flex-shrink-0 mt-0.5"></i>
                                            <span class="leading-tight"><?= e($hl) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Bottom Action Link -->
                        <div class="pt-3 border-t border-slate-800/80 mt-2">
                            <a href="<?= url('/contact') ?>?vertical=<?= urlencode($ind['title']) ?>"
                                class="inline-flex items-center text-xs font-bold text-amber-400 hover:text-amber-300 transition">
                                Inquire for This Sector <i class="ri-arrow-right-line ml-1.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>