<?php
$pageTitle = 'Empowering Enterprises. Transforming Communities. Connecting the World.';
$pageDesc = 'Mercora International is a registered multidisciplinary firm delivering innovation across 11 business verticals including AgriTech, Digital Transformation, Global Trade, and Native Araku Coffee.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1.1 Hero Section (Full Screen Edge-to-Edge with Synchronized Backgrounds & Dynamic Slide Content) -->
<section
    class="relative w-full min-h-[calc(100svh-5rem)] lg:min-h-[calc(100vh-7.5rem)] flex items-center bg-white overflow-hidden border-b border-slate-200 py-12 sm:py-14 lg:py-16">

    <!-- Sliding Background Images (Photorealistic Architectural Executive Studios) -->
    <div id="mcHeroBgSlider" class="absolute inset-0 z-0">
        <!-- Slide 1: Global Business Strategy & Corporate Advisory -->
        <div class="mc-hero-bg absolute inset-0 transition-opacity duration-1000 ease-out opacity-100">
            <img src="<?= url('assets/images/mercora/hero_slide_strategy.jpg') ?>"
                alt="Corporate Strategy & Global Trade"
                class="w-full h-full object-cover transition-transform duration-[7000ms] ease-out scale-105" />
        </div>
        <!-- Slide 2: AgriTech & Precision Agriculture -->
        <div
            class="mc-hero-bg absolute inset-0 transition-opacity duration-1000 ease-out opacity-0 pointer-events-none">
            <img src="<?= url('assets/images/mercora/hero_slide_agritech.jpg') ?>"
                alt="AgriTech & Precision Agriculture"
                class="w-full h-full object-cover transition-transform duration-[7000ms] ease-out scale-105" />
        </div>
        <!-- Slide 3: Digital Transformation & Enterprise Systems -->
        <div
            class="mc-hero-bg absolute inset-0 transition-opacity duration-1000 ease-out opacity-0 pointer-events-none">
            <img src="<?= url('assets/images/mercora/hero_slide_tech.jpg') ?>" alt="Digital Transformation & Deep Tech"
                class="w-full h-full object-cover transition-transform duration-[7000ms] ease-out scale-105" />
        </div>
    </div>

    <!-- Vignette Gradient Overlays: Subtle light fade to guarantee high text readability on all viewports while keeping the desk and panoramic window view vibrant -->
    <div
        class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/80 via-35% to-transparent lg:from-white/70 lg:via-white/70 lg:via-30% lg:to-transparent z-10 pointer-events-none">
    </div>
    <div
        class="absolute inset-0 bg-gradient-to-t from-white/60 via-transparent to-transparent z-10 pointer-events-none">
    </div>

    <!-- Hero Content Container with CSS Grid Overlay (Zero layout jump between slides) -->
    <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 relative z-20">
        <div class="grid grid-cols-1 grid-rows-1 items-center">

            <!-- Slide Content 1: Global Business Strategy -->
            <div
                class="mc-hero-content col-start-1 row-start-1 transition-all duration-300 ease-out opacity-100 translate-y-0 pointer-events-auto visible">
                <div class="max-w-2xl lg:max-w-3xl space-y-4 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-900 border border-amber-500/30 shadow-xs tracking-wide">
                            <i class="ri-shield-star-fill text-amber-600"></i> Strategy · Advisory · Solutions · Global
                            Opportunities
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-3xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Empowering the Global Vision <span class="text-amber-600">through Innovation and
                            Inclusion</span>
                    </h1>

                    <p
                        class="font-scope text-base sm:text-lg lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        Mercora International partners with enterprises, governments, startups, and institutions to
                        engineer agile strategies, high-yield trade corridors, and sustainable competitive advantages
                        across 11 business verticals.
                    </p>

                    <!-- Creative Capability Feature Strip -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1 max-w-2xl">
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-amber-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-amber-500/10 text-amber-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-compass-3-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Strategy Advisory</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Enterprise
                                    Execution</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-blue-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-blue-500/10 text-blue-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-global-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    DGFT Trade</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">IEC ACEFM7191A
                                </p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-slate-400 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-slate-900/10 text-slate-800 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-shake-hands-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    7+ Signed MOUs</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Institutional
                                    Alliances</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-1">
                        <a href="<?= url('/it-services') ?>"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore Our Services</span>
                            <i class="ri-arrow-right-line ml-2.5 text-base"></i>
                        </a>
                        <a href="<?= url('/about') ?>"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Corporate Credentials</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide Content 2: AgriTech & Precision Agriculture -->
            <div
                class="mc-hero-content col-start-1 row-start-1 transition-all duration-300 ease-out opacity-0 translate-y-2 pointer-events-none invisible">
                <div class="max-w-2xl lg:max-w-3xl space-y-4 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-900 border border-emerald-500/30 shadow-xs tracking-wide">
                            <i class="ri-plant-fill text-emerald-600"></i> AgriTech &amp; Precision Farming · Smart Crop
                            Doctor
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-3xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Empowering the Global Vision <span class="text-amber-600">through Innovation and
                            Inclusion</span>
                    </h1>

                    <p
                        class="font-scope text-base sm:text-lg lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        Empowering farming communities with real-time multispectral disease diagnostics, precision drone
                        spraying, and fair-trade coffee value chains including Native Araku Coffee.
                    </p>

                    <!-- Creative Capability Feature Strip -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1 max-w-2xl">
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-emerald-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-emerald-500/10 text-emerald-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-flight-takeoff-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Precision Drones</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">10x Spraying
                                    Efficiency</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-amber-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-amber-500/10 text-amber-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-scan-2-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Crop Doctor AI</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Early Pest
                                    Diagnostics</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-orange-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-orange-500/10 text-orange-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-cup-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Araku Coffee</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">100 Women-Led
                                    Cafes</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-1">
                        <a href="<?= url('/industries') ?>#agritech"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore AgriTech</span>
                            <i class="ri-arrow-right-line ml-2.5 text-base"></i>
                        </a>
                        <a href="<?= url('/coffee-products') ?>"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Discover Araku Coffee</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide Content 3: Digital Transformation & Deep-Tech -->
            <div
                class="mc-hero-content col-start-1 row-start-1 transition-all duration-300 ease-out opacity-0 translate-y-2 pointer-events-none invisible">
                <div class="max-w-2xl lg:max-w-3xl space-y-4 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-sky-500/10 text-sky-900 border border-sky-500/30 shadow-xs tracking-wide">
                            <i class="ri-cpu-fill text-sky-600"></i> Digital Transformation &amp; Defense Deep-Tech
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-3xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Empowering the Global Vision <span class="text-amber-600">through Innovation and
                            Inclusion</span>
                    </h1>

                    <p
                        class="font-scope text-base sm:text-lg lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        Delivering cloud enterprise modernization, proprietary SaaS solutions, and iDEX defense
                        acceleration backed by verified statutory governance and global standards.
                    </p>

                    <!-- Creative Capability Feature Strip -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1 max-w-2xl">
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-sky-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-sky-500/10 text-sky-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-terminal-box-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Cloud &amp; SaaS</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Scalable
                                    Microservices</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-amber-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-amber-500/10 text-amber-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-shield-flash-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    Deep-Tech &amp; iDEX</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Defense &amp;
                                    SISFS Grants</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center gap-3 p-3.5 rounded-xl bg-white/85 backdrop-blur-sm border border-slate-200/90 shadow-xs hover:border-indigo-500/40 transition">
                            <div
                                class="w-10 h-10 rounded-lg bg-indigo-500/10 text-indigo-700 flex items-center justify-center shrink-0 text-xl">
                                <i class="ri-line-chart-line"></i>
                            </div>
                            <div>
                                <h4 class="font-display text-xs sm:text-[13px] font-bold text-slate-900 tracking-tight">
                                    18 Engagements</h4>
                                <p class="font-sans text-[11px] text-slate-500 font-medium leading-tight">Active
                                    Projects</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-4 pt-1">
                        <a href="<?= url('/it-services') ?>"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore Digital Services</span>
                            <i class="ri-arrow-right-line ml-2.5 text-base"></i>
                        </a>
                        <a href="<?= url('/contact') ?>"
                            class="inline-flex items-center justify-center px-6 sm:px-7 py-3 text-sm sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Partner With Us</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Side Previous / Next Navigation Arrows -->
    <button type="button" id="mcHeroPrev"
        class="mc-hero-prev hidden sm:flex absolute left-3 sm:left-6 lg:left-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/85 hover:bg-white text-slate-700 hover:text-slate-950 border border-slate-200/80 shadow-md backdrop-blur-md items-center justify-center transition hover:scale-105"
        aria-label="Previous slide">
        <i class="ri-arrow-left-s-line text-2xl"></i>
    </button>
    <button type="button" id="mcHeroNext"
        class="mc-hero-next hidden sm:flex absolute right-3 sm:right-6 lg:right-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/85 hover:bg-white text-slate-700 hover:text-slate-950 border border-slate-200/80 shadow-md backdrop-blur-md items-center justify-center transition hover:scale-105"
        aria-label="Next slide">
        <i class="ri-arrow-right-line text-2xl"></i>
    </button>

    <!-- Slide Controller Bar (Bottom Right) with Counter, Navigation & Interactive Vertical Tabs -->
    <div
        class="absolute right-4 sm:right-8 lg:right-12 bottom-5 sm:bottom-7 z-30 flex items-center gap-2.5 bg-white/90 backdrop-blur-md border border-slate-200/80 px-3 sm:px-4 py-2 rounded-full shadow-lg">
        <button type="button"
            class="mc-hero-prev w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center text-xs transition"
            aria-label="Previous slide">
            <i class="ri-arrow-left-s-line"></i>
        </button>
        <span id="mcHeroCounter" class="text-xs font-mono font-bold text-slate-700 tracking-wider">01 / 03</span>
        <button type="button"
            class="mc-hero-next w-7 h-7 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-700 flex items-center justify-center text-xs transition"
            aria-label="Next slide">
            <i class="ri-arrow-right-line"></i>
        </button>
        <div class="h-4 w-px bg-slate-200 mx-1"></div>
        <div class="flex items-center gap-1.5">
            <button type="button"
                class="mc-hero-tab px-2.5 sm:px-3 py-1 rounded-full text-xs font-bold bg-amber-500 text-slate-950 transition-all duration-300 shadow-xs"
                data-slide="0" aria-label="Strategy slide">
                <span class="hidden sm:inline">01</span> Strategy
            </button>
            <button type="button"
                class="mc-hero-tab px-2.5 sm:px-3 py-1 rounded-full text-xs font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-all duration-300"
                data-slide="1" aria-label="AgriTech slide">
                <span class="hidden sm:inline">02</span> AgriTech
            </button>
            <button type="button"
                class="mc-hero-tab px-2.5 sm:px-3 py-1 rounded-full text-xs font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-all duration-300"
                data-slide="2" aria-label="Digital Tech slide">
                <span class="hidden sm:inline">03</span> Tech
            </button>
        </div>
    </div>
</section>

<!-- 1.2 Business Verticals Strip (11 Verticals) -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Multidisciplinary
                Capabilities</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Our 11 Business Verticals
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                From precision drone agriculture and deep-tech defense to global commodities, sustainable textiles, and
                women-led entrepreneurship.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($BUSINESS_VERTICALS as $vertical):
                $imgUrl = url($vertical['image']);
                $absPath = dirname(__DIR__) . '/' . $vertical['image'];
                if (file_exists($absPath)) {
                    $imgUrl .= '?v=' . filemtime($absPath);
                }
                ?>
                <div
                    class="group relative rounded-2xl overflow-hidden border border-slate-800/20 bg-slate-950 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-6 min-h-[300px]">
                    <!-- Background Photographic Image (from Industries We Serve) -->
                    <img src="<?= $imgUrl ?>" alt="<?= e($vertical['title']) ?>"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <!-- Dark Vignette Gradient Overlay for high text readability -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-800/85 via-slate-800/70 to-slate-950/65 transition-opacity duration-300">
                    </div>

                    <!-- Card Content -->
                    <div class="relative z-10 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-gray-600 text-white flex items-center justify-center text-xl">
                                    <i class="<?= e($vertical['icon']) ?>"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded bg-gray-600 text-white">
                                    <?= e($vertical['tag']) ?>
                                </span>
                            </div>
                            <h3 class="text-base font-bold text-white mb-2 leading-snug"><?= e($vertical['title']) ?></h3>
                            <p class="text-xs sm:text-sm text-slate-200 leading-relaxed mb-6"><?= e($vertical['short']) ?>
                            </p>
                        </div>
                        <div>
                            <a href="<?= url('/industries') ?>#<?= e($vertical['id']) ?>"
                                class="inline-flex items-center text-xs font-bold text-amber-400 hover:text-amber-300 transition">
                                Explore Vertical <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 1.3 About Mercora Snapshot Section -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Corporate Credentials</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                        Registered Partnership Firm Driving Scalable, Sustainable Innovation.
                    </h2>
                </div>
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                    Mercora International is a registered partnership firm (<strong>Firm Reg.
                        <?= e(FIRM_REG_NO) ?></strong>), incorporated <strong><?= e(FIRM_INC_DATE) ?></strong>, based in
                    Kondapur, Hyderabad. We bring together consulting acumen, deep engineering capability, and verified
                    institutional alliances to unlock transformative value.
                </p>

                <!-- Credentials Badges -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <i class="ri-government-line text-2xl text-slate-700"></i>
                        <h4 class="text-sm font-bold text-slate-900 mt-2">Statutory Reg</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Firm Reg. 2978/2025 · Ranga Reddy</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <i class="ri-medal-line text-2xl text-amber-600"></i>
                        <h4 class="text-sm font-bold text-slate-900 mt-2">DPIIT Recognized</h4>
                        <p class="text-xs text-slate-500 mt-0.5">DIPP258473 · Valid to 2035</p>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                        <i class="ri-global-line text-2xl text-blue-600"></i>
                        <h4 class="text-sm font-bold text-slate-900 mt-2">DGFT IEC Code</h4>
                        <p class="text-xs text-slate-500 mt-0.5">ACEFM7191A · Global Trade</p>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="<?= url('/about') ?>"
                        class="inline-flex items-center px-5 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition">
                        Read Our Full Journey <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                    <a href="<?= url('/gallery') ?>"
                        class="inline-flex items-center px-5 py-3 text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition">
                        View Official Certifications
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="relative bg-slate-100 p-3 rounded-2xl border border-slate-200 shadow-md">
                    <img src="<?= url('assets/images/mercora/current/team-1.png') ?>" alt="Mercora Leadership"
                        class="w-full h-96 object-cover rounded-xl" />
                    <div
                        class="absolute -bottom-6 left-6 right-6 bg-white p-4 rounded-xl shadow-lg border border-slate-200 flex items-center gap-4">
                        <div
                            class="w-11 h-11 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center text-2xl flex-shrink-0">
                            <i class="ri-handshake-line"></i>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-slate-900">Mrs. D. Jaya Geetha Kiran</div>
                            <div class="text-xs text-slate-500">Founder & Managing Partner</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 1.4 Featured Highlights (Smart Crop Doctor, White World, Native Araku Coffee) -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Flagship Initiatives</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Featured Highlights
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Transformative platforms engineered to make tangible commercial and community impact.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Smart Crop Doctor -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-emerald-50 text-emerald-800 border border-emerald-200 mb-4">
                        DPIIT Recognised · DIPP258473
                    </span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Smart Crop Doctor</h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        AI + drone + multispectral imaging platform for crop monitoring, disease diagnostics, and yield
                        optimisation. Enables precision agriculture and transforms conventional farmers into empowered
                        agri-entrepreneurs. Supported by ALEAP funding.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-emerald-700"><i class="ri-checkbox-circle-fill"></i> Active
                        Deployment</span>
                    <a href="<?= url('/it-services') ?>#agritech"
                        class="text-sm font-bold text-slate-900 hover:text-amber-600">
                        Explore Platform <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- WHITE WORLD -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-slate-100 text-slate-800 border border-slate-200 mb-4">
                        Launching Soon · Q3 2026
                    </span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">WHITE WORLD</h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Curated e-commerce platform for premium white apparel, accessories, and lifestyle products —
                        powered by Mercora's Textile & Apparel vertical. Champions inclusive livelihoods for women
                        tailors, tribal artisans, and persons with disabilities.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-600"><i class="ri-time-line"></i> Brand
                        Ecosystem</span>
                    <a href="<?= url('/industries') ?>#textile"
                        class="text-sm font-bold text-slate-900 hover:text-amber-600">
                        Brand Details <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Native Araku Coffee -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-amber-50 text-amber-800 border border-amber-200 mb-4">
                        GI-Tagged Specialty Coffee
                    </span>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3">Native Araku Coffee</h3>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Authorised Franchise Development Partner for India's GI-tagged specialty coffee from Araku
                        Valley. Organic, shade-grown Arabica and Robusta cultivated by 1,00,000 tribal farming families.
                        MOU with SERP, AP for 100 Women-Driven Coffee Shops.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-amber-700"><i class="ri-store-2-line"></i> Franchise
                        Open</span>
                    <a href="<?= url('/coffee-products') ?>"
                        class="text-sm font-bold text-slate-900 hover:text-amber-600">
                        Browse Catalogue <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 1.5 & 1.6 Confirmed Signed-MOU Partner Logos Strip -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Institutional Alliances</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                8 Confirmed Signed-MOU Partners
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Click any partner logo below to review the verified scope of association and joint technology
                capabilities.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php foreach ($PARTNERS as $key => $partner): ?>
                <div data-partner-id="<?= e($key) ?>"
                    class="bg-slate-50 border border-slate-200 rounded-xl p-6 text-center cursor-pointer hover:border-slate-400 hover:bg-white hover:shadow-md transition flex flex-col items-center justify-between min-h-[170px]"
                    role="button" tabindex="0">
                    <div class="h-14 flex items-center justify-center w-full mb-3">
                        <img src="<?= url($partner['logo']) ?>" alt="<?= e($partner['name']) ?>"
                            class="max-h-12 max-w-full object-contain" />
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-slate-900"><?= e($partner['name']) ?></h4>
                        <p class="text-xs text-slate-500 mt-0.5 line-clamp-1"><?= e($partner['role']) ?></p>
                    </div>
                    <div class="mt-3 text-xs font-bold text-amber-600 flex items-center gap-1">
                        <span>View Dossier</span> <i class="ri-arrow-right-line"></i>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>