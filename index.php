<?php
$pageTitle = 'Empowering Enterprises. Transforming Communities. Connecting the World.';
$pageDesc = 'Mercora International is a registered multidisciplinary firm delivering innovation across 11 business verticals including AgriTech, Digital Transformation, Global Trade, and Native Araku Coffee.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 1.1 Hero Section (Full Screen Edge-to-Edge with Synchronized Backgrounds & Dynamic Slide Content) -->
<section
    class="relative w-full min-h-0 sm:min-h-[calc(100svh-5rem)] lg:min-h-[calc(100vh-7.5rem)] flex flex-col sm:flex-row sm:items-center justify-start sm:justify-center bg-white overflow-hidden border-b border-slate-200 pt-7 pb-8 sm:py-14 lg:py-16">

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
            class="mc-hero-content-bg mc-hero-bg absolute inset-0 transition-opacity duration-1000 ease-out opacity-0 pointer-events-none">
            <img src="<?= url('assets/images/mercora/hero_slide_tech.jpg') ?>" alt="Digital Transformation & Deep Tech"
                class="w-full h-full object-cover transition-transform duration-[7000ms] ease-out scale-105" />
        </div>
    </div>

    <!-- Vignette Gradient Overlays: Original desktop light fade and vibrant panoramic window view -->
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
                <div class="max-w-2xl lg:max-w-3xl space-y-3.5 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-full text-[11px] sm:text-xs font-semibold bg-amber-500/10 text-amber-900 border border-amber-500/30 shadow-xs tracking-wide">
                            <i class="ri-shield-star-fill text-amber-600"></i> Strategy · Advisory · Solutions · Global
                            Opportunities
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-2xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Multidisciplinary Consulting, <span class="text-amber-600">Technology & Business
                            Transformation</span>
                    </h1>

                    <p
                        class="font-scope text-xs sm:text-base lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        Mercora International is a Hyderabad-based multidisciplinary consulting and business solutions
                        firm, established as a registered partnership in Hyderabad, Telangana on 29 July 2025.
                        We partner with enterprises, government organisations, startups, MSMEs and institutions to
                        deliver strategic consulting, technology-enabled solutions, business transformation and
                        growth-oriented initiatives across diverse industries and geographies.

                    </p>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-1">
                        <a href="<?= url('/it-services') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore Our Services</span>
                            <i class="ri-arrow-right-line ml-2 sm:ml-2.5 text-sm sm:text-base"></i>
                        </a>
                        <a href="<?= url('/partnerships') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore 11 Signed MOUs</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide Content 2: AgriTech & Precision Agriculture -->
            <div
                class="mc-hero-content col-start-1 row-start-1 transition-all duration-300 ease-out opacity-0 translate-y-2 pointer-events-none invisible">
                <div class="max-w-2xl lg:max-w-3xl space-y-3.5 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-full text-[11px] sm:text-xs font-semibold bg-emerald-500/10 text-emerald-900 border border-emerald-500/30 shadow-xs tracking-wide">
                            <i class="ri-plant-fill text-emerald-600"></i> AgriTech &amp; Precision Farming · Smart Crop
                            Doctor
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-2xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Multidisciplinary Consulting, <span class="text-amber-600">Technology & Business
                            Transformation</span>
                    </h1>

                    <p
                        class="font-scope text-xs sm:text-base lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        Our multidisciplinary business ecosystem spans IT and Digital Transformation, Artificial
                        Intelligence, Robotics and Automation, Drone Technology, Precision Agriculture, Defence and
                        Emerging Technologies, Healthcare and Insurance, Education and Wellbeing, Global Trade,
                        Franchise Development, Testing and Certification, Renewable Energy and Sustainable Development.
                        Through strategic partnerships and collaborative engagements with specialised organisations,
                        technology providers, industry experts and institutional stakeholders, we facilitate business
                        development, market access, technology adoption, strategic alliances, investment opportunities
                        and enterprise expansion.
                    </p>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-1">
                        <a href="<?= url('/smart-crop-doctor') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore Smart Crop Doctor</span>
                            <i class="ri-arrow-right-line ml-2 sm:ml-2.5 text-sm sm:text-base"></i>
                        </a>
                        <a href="<?= url('/partnerships') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore 11 Signed MOUs</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Slide Content 3: Digital Transformation & Deep-Tech -->
            <div
                class="mc-hero-content col-start-1 row-start-1 transition-all duration-300 ease-out opacity-0 translate-y-2 pointer-events-none invisible">
                <div class="max-w-2xl lg:max-w-3xl space-y-3.5 sm:space-y-5">
                    <div>
                        <span
                            class="inline-flex items-center gap-1.5 sm:gap-2 px-3 sm:px-3.5 py-1 sm:py-1.5 rounded-full text-[11px] sm:text-xs font-semibold bg-sky-500/10 text-sky-900 border border-sky-500/30 shadow-xs tracking-wide">
                            <i class="ri-cpu-fill text-sky-600"></i> Digital Transformation &amp; Defense Deep-Tech
                        </span>
                    </div>

                    <h1
                        class="font-oxygen text-2xl sm:text-4xl md:text-5xl lg:text-[2.75rem] xl:text-[3.25rem] font-bold tracking-tight text-[#0c2340] leading-snug sm:leading-tight lg:leading-[1.14]">
                        Multidisciplinary Consulting, <span class="text-amber-600">Technology & Business
                            Transformation</span>
                    </h1>

                    <p
                        class="font-scope text-xs sm:text-base lg:text-[19px] text-slate-700 leading-relaxed max-w-2xl font-normal">
                        We focus on transforming ideas into actionable business opportunities, connecting innovation
                        with industry requirements, empowering entrepreneurs and communities, and enabling organisations
                        to build scalable and sustainable business models.
                        At Mercora International, our vision is to create meaningful connections between business,
                        technology, innovation and opportunity, delivering long-term value through collaboration,
                        strategic execution and responsible growth.

                    </p>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-1">
                        <a href="<?= url('/it-services') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-xl transition-all duration-200 shadow-md shadow-amber-500/20 hover:shadow-amber-500/30 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore Digital Services</span>
                            <i class="ri-arrow-right-line ml-2 sm:ml-2.5 text-sm sm:text-base"></i>
                        </a>
                        <a href="<?= url('/partnerships') ?>"
                            class="inline-flex items-center justify-center px-5 sm:px-7 py-2.5 sm:py-3 text-xs sm:text-[15px] font-medium text-slate-800 bg-white hover:bg-slate-50 border border-slate-300 rounded-xl shadow-xs transition-all duration-200 hover:-translate-y-0.5 tracking-wide">
                            <span>Explore 11 Signed MOUs</span>
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

    <!-- Slide Controller Bar (Bottom Right on Desktop/Laptop; Centered below content on Mobile) -->
    <div
        class="relative sm:absolute right-auto sm:right-8 lg:right-12 bottom-auto sm:bottom-5 lg:bottom-7 z-30 mt-6 sm:mt-0 mx-auto sm:mx-0 w-fit flex items-center gap-2 sm:gap-2.5 bg-white/90 backdrop-blur-md border border-slate-200/80 px-3 sm:px-4 py-2 rounded-full shadow-lg">
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

        <!-- Our 11 Business Verticals cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php foreach ($BUSINESS_VERTICALS as $vertical):
                $imgUrl = url($vertical['image']);
                $absPath = dirname(__DIR__) . '/' . $vertical['image'];
                if (file_exists($absPath)) {
                    $imgUrl .= '?v=' . filemtime($absPath);
                }
                ?>
                <div
                    class="group relative rounded-2xl overflow-hidden bg-slate-950 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between p-6 min-h-[300px]">
                    <!-- Background Photographic Image (from Industries We Serve) -->
                    <img src="<?= $imgUrl ?>" alt="<?= e($vertical['title']) ?>"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105" />

                    <!-- Dark Vignette Gradient Overlay for high text readability in resting state -->
                    <!-- <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/55 to-slate-950/25 transition-opacity duration-300">
                    </div> -->

                    <!-- Main Card Content (Resting State: Title, Icon, Tag, Explore link) -->
                    <div class="relative z-10 flex flex-col justify-between h-full">
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div
                                    class="w-10 h-10 rounded-lg bg-white/20 backdrop-blur-md text-white border border-white/25 flex items-center justify-center text-xl shadow-sm">
                                    <i class="<?= e($vertical['icon']) ?>"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded bg-white/20 backdrop-blur-md text-white border border-white/25">
                                    <?= e($vertical['tag']) ?>
                                </span>
                            </div>
                            <h3 class="text-base sm:text-lg font-bold text-[#0c2340] mb-2 leading-snug">
                                <?= e($vertical['title']) ?>
                            </h3>
                        </div>
                        <div>
                            <span class="inline-flex items-center text-xs font-bold text-white">
                                Explore Vertical <i class="ri-arrow-right-line ml-1"></i>
                            </span>
                        </div>
                    </div>

                    <!-- White Overlay: Appears from bottom-up on hover, showing $vertical['short'] -->
                    <div
                        class="absolute inset-0 z-20 bg-white rounded-2xl p-6 flex flex-col justify-between translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-in-out shadow-2xl">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-slate-900 text-white flex items-center justify-center text-xl shadow-sm">
                                    <i class="<?= e($vertical['icon']) ?>"></i>
                                </div>
                                <span
                                    class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded bg-slate-100 text-slate-700 border border-slate-200">
                                    <?= e($vertical['tag']) ?>
                                </span>
                            </div>
                            <h3 class="text-base font-bold text-slate-900 mb-2 leading-snug">
                                <?= e($vertical['title']) ?>
                            </h3>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                                <?= e($vertical['short']) ?>
                            </p>
                        </div>
                        <div class="pt-3 border-t border-slate-100">
                            <a href="<?= url('/industries') ?>#<?= e($vertical['id']) ?>"
                                class="inline-flex items-center text-xs font-bold text-slate-900 hover:text-amber-600 transition group/btn">
                                Explore Vertical <i
                                    class="ri-arrow-right-line ml-1.5 transition-transform group-hover/btn:translate-x-1"></i>
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
                        <p class="text-xs text-slate-500 mt-0.5">Firm Reg. 2978/2025 · Hyderabad</p>
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
                    <img src="<?= url('assets/images/team/jaya-geetha-kiran.jpeg') ?>" alt="Mercora Leadership"
                        class="w-full h-150 object-cover rounded-xl" />
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

<!-- 1.4 Featured Highlights (Smart Crop Doctor, White World, VetiGo MobiCare) -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Core Initiatives</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Flagship & Featured Initiatives
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mt-3">
                Transformative platforms engineered to make tangible commercial, technology, and community impact.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- 1. Smart Crop Doctor -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span
                            class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-emerald-50 text-emerald-800 border border-emerald-200">
                            DPIIT Seed-Funded · ₹10.00 Lakh
                        </span>
                        <span class="text-xs font-semibold text-emerald-700 flex items-center gap-1">
                            <i class="ri-checkbox-circle-fill"></i> Core Initiative
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Smart Crop Doctor</h3>
                    <p class="text-xs font-bold text-emerald-700 uppercase tracking-wider mb-4">AI-Powered Precision
                        Agriculture Initiative</p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        An AI-integrated diagnostic platform designed to help farmers identify crop health issues,
                        detect plant diseases, assess nutrient deficiencies, monitor crop growth and receive timely
                        preventive and corrective advisories. Shortlisted through ALEAP Incubation and supported under
                        the DPIIT Startup India Seed Fund Scheme (SISFS) with ₹10.00 lakh sanctioned funding.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500"><i class="ri-plant-line text-emerald-600"></i>
                        Precision Agri</span>
                    <a href="<?= url('/smart-crop-doctor') ?>"
                        class="inline-flex items-center text-sm font-bold text-emerald-700 hover:text-emerald-900">
                        Explore Initiative <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- 2. THE WHITE WORLD™ -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span
                            class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-amber-50 text-amber-800 border border-amber-200">
                            Social Impact &amp; Lifestyle
                        </span>
                        <span class="text-xs font-semibold text-slate-600 flex items-center gap-1">
                            <i class="ri-time-line"></i> Launching Soon
                        </span>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">The White World™</h3>
                    <p class="text-xs font-bold text-amber-700 uppercase tracking-wider mb-4">Living Life with Elegance
                    </p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        A white-themed lifestyle marketplace concept bringing together clothing, jewellery, home and
                        living, handlooms, wellness, accessories and lifestyle products under one unified brand.
                        Conceptualised with creativity by youth entrepreneur D. VedAnjali to create sustainable
                        livelihoods for women tailors, tribal artisans, rural SHGs and persons with disabilities.
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500"><i class="ri-t-shirt-2-line text-amber-600"></i>
                        Curated Lifestyle</span>
                    <a href="<?= url('/white-world') ?>"
                        class="inline-flex items-center text-sm font-bold text-amber-700 hover:text-amber-900">
                        Explore Initiative <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- 3. VetiGo MobiCare -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-8 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span
                            class="inline-block px-2.5 py-1 rounded text-xs font-bold bg-teal-50 text-teal-800 border border-teal-200">
                            Mobile Veterinary Healthcare
                        </span>
                        <span class="text-xs font-semibold text-slate-600 flex items-center gap-1">
                            <i class="ri-time-line"></i> Launching Soon
                        </span>
                    </div>
                    <div class="h-14 mb-3 flex items-center">
                        <img src="<?= url('assets/images/initiatives/vetigo-mobicare-logo.jpg') ?>"
                            alt="VetiGo MobiCare" class="max-h-12 w-auto object-contain" />
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">VetiGo MobiCare</h3>
                    <p class="text-xs font-bold text-teal-700 uppercase tracking-wider mb-4">Compassion in Motion.
                        Diagnostics with Precision.</p>
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        An upcoming mobile veterinary healthcare initiative designed to bring veterinary consultations,
                        diagnostics, treatment and animal healthcare services closer to pets, livestock and farming
                        communities through fully equipped mobile veterinary clinics. “We don’t move the patient. We
                        move the clinic.”
                    </p>
                </div>
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-500"><i class="ri-truck-line text-teal-600"></i>
                        Clinic on Wheels</span>
                    <a href="<?= url('/vetigo-mobicare') ?>"
                        class="inline-flex items-center text-sm font-bold text-teal-700 hover:text-teal-900">
                        Explore Initiative <i class="ri-arrow-right-line ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>