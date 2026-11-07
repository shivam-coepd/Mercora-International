<?php
$pageTitle = 'Smart Crop Doctor | Precision Agriculture Initiative | Mercora International';
$pageDesc = 'SMART CROP DOCTOR is an AI-integrated precision agriculture and diagnostic platform by Mercora International, shortlisted through ALEAP Incubation and selected under the DPIIT Startup India Seed Fund Scheme (₹10.00 lakh sanctioned amount). Empowering farmers with early diagnosis, disease identification, nutrient monitoring, and timely advisories.';
require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ========================================== -->
<!-- ============================================================== -->
<!-- 1. HERO SECTION: SMART CROP DOCTOR                             -->
<!-- Light green gradient background with transparent image on right -->
<!-- ============================================================== -->
<section
    class="relative bg-gradient-to-r from-[#edf8ee] via-[#f6fcf7] to-white border-b border-[#d6e8da] overflow-hidden min-h-[380px] sm:min-h-[420px] lg:min-h-[450px] flex flex-col sm:flex-row sm:items-center">

    <!-- Hero Section Usable Image at Right Side: hero-smart-crop-doctor.png -->
    <div
        class="absolute inset-y-0 right-0 h-full w-full pointer-events-none select-none z-0 hidden sm:flex items-center justify-end overflow-hidden">
        <img src="<?= url('assets/images/mercora/hero-smart-crop-doctor.png') ?>"
            alt="Smart Crop Doctor - AI-Powered Precision Agriculture"
            class="h-full w-auto max-w-none object-contain object-right" />
    </div>

    <!-- Info Section to the Left -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-8 sm:py-12 lg:py-14">
        <div class="max-w-xl lg:max-w-lg xl:max-w-xl space-y-4">

            <!-- Category / Eyebrow Header -->
            <div class="text-[#0c2340] font-extrabold text-xl sm:text-2xl lg:text-[25px] tracking-tight leading-snug">
                MERCORA INTERNATIONAL –<br class="hidden sm:inline" />
                Core Initiative in Precision Agriculture
            </div>

            <!-- Main Initiative Title with Leaf Icon -->
            <div class="flex items-center gap-2.5 sm:gap-3 pt-1">
                <span
                    class="inline-flex items-center justify-center text-[#1ea84f] text-3xl sm:text-4xl lg:text-5xl shrink-0">
                    <i class="ri-leaf-fill"></i>
                </span>
                <h1
                    class="text-3xl sm:text-4xl lg:text-[42px] font-black tracking-tight text-[#1ea84f] uppercase leading-none">
                    SMART CROP DOCTOR
                </h1>
            </div>

            <!-- Subtitle Pill Badge -->
            <div>
                <span
                    class="inline-block bg-[#137536] text-white text-xs sm:text-sm font-semibold px-4 sm:px-5 py-1.5 rounded-full shadow-sm tracking-wide">
                    AI-integrated diagnostic platform
                </span>
            </div>

            <!-- Mission Statement with Vertical Lime Accent Border -->
            <div class="border-l-[3.5px] border-[#84cc16] pl-3.5 sm:pl-4 py-1 mt-4">
                <p class="text-slate-700 italic font-medium text-xs sm:text-sm leading-relaxed max-w-lg">
                    Mercora International is committed to transforming Indian agriculture through innovation, technology
                    and sustainable farming solutions.
                </p>
            </div>

        </div>
    </div>

    <!-- Mobile View Image (for small phone screens < 640px) -->
    <div class="sm:hidden px-4 pb-6 pt-1 w-full relative z-10">
        <div class="rounded-xl overflow-hidden shadow-sm border border-emerald-100 bg-white">
            <img src="<?= url('assets/images/mercora/hero-smart-crop-doctor.png') ?>"
                alt="Smart Crop Doctor Farmer Diagnostics" class="w-full h-auto object-cover object-right" />
        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- 2. CORE FEATURE CARDS GRID (REFERENCE UI)  -->
<!-- 5 Structured Cards from Design Reference   -->
<!-- ========================================== -->
<section class="bg-[#f8faf9] py-10 sm:py-14 border-b border-[#e2ede4]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

        <!-- ROW 1: Platform Overview (~40%) + Our Objectives (~60%) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

            <!-- Card 1: Platform Overview -->
            <div
                class="lg:col-span-5 bg-white rounded-2xl p-6 sm:p-7 border border-[#d6e8da] shadow-[0_4px_20px_rgba(15,45,25,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#208a3c] text-white flex items-center justify-center shrink-0 shadow-sm text-2xl">
                            <i class="ri-leaf-line"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#0f2a4a] tracking-tight">
                            Platform Overview
                        </h2>
                    </div>
                    <p class="text-slate-600 text-sm sm:text-[14.5px] leading-relaxed">
                        The SMART CROP DOCTOR is an AI-integrated diagnostic platform designed to help farmers detect
                        crop health issues, identify plant diseases, assess nutrient deficiencies, monitor crop growth,
                        and provide timely preventive and corrective advisories.
                    </p>
                </div>
            </div>

            <!-- Card 2: Our Objectives -->
            <div
                class="lg:col-span-7 bg-white rounded-2xl p-6 sm:p-7 border border-[#d6e8da] shadow-[0_4px_20px_rgba(15,45,25,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#208a3c] text-white flex items-center justify-center shrink-0 shadow-sm text-2xl">
                            <i class="ri-focus-3-line"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#0f2a4a] tracking-tight">
                            Our Objectives
                        </h2>
                    </div>

                    <!-- 6 Checkmark Points -->
                    <ul class="space-y-2.5 text-slate-700 text-xs sm:text-sm font-medium">
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>To minimize crop losses.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>To improve productivity.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>To enhance farm profitability.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>To empower farmers with accurate, technology-driven decision support.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>By enabling early diagnosis and timely intervention.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="ri-checkbox-circle-fill text-[#208a3c] text-lg shrink-0 mt-0.5"></i>
                            <span>To support sustainable agricultural practices, food security and rural
                                livelihoods.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- ROW 2: 3 Equal Columns -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch">

            <!-- Card 3: Recognition and Startup Support -->
            <div
                class="bg-white rounded-2xl p-6 sm:p-7 border border-[#d6e8da] shadow-[0_4px_20px_rgba(15,45,25,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#208a3c] text-white flex items-center justify-center shrink-0 shadow-sm text-2xl">
                            <i class="ri-trophy-line"></i>
                        </div>
                        <h2 class="text-lg font-bold text-[#0f2a4a] tracking-tight leading-snug">
                            Recognition and Startup Support
                        </h2>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        In recognition of its innovation and social impact, the SMART CROP DOCTOR concept has been
                        shortlisted through ALEAP Incubation and has been selected by the Government of India under the
                        DPIIT Startup India Seed Fund Scheme, sanctioning an amount of ₹10.00 lakh to support its
                        development and implementation.
                    </p>
                </div>
            </div>

            <!-- Card 4: Our Commitment to Sustainable Agriculture -->
            <div
                class="bg-white rounded-2xl p-6 sm:p-7 border border-[#d6e8da] shadow-[0_4px_20px_rgba(15,45,25,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#208a3c] text-white flex items-center justify-center shrink-0 shadow-sm text-2xl">
                            <i class="ri-seedling-line"></i>
                        </div>
                        <h2 class="text-lg font-bold text-[#0f2a4a] tracking-tight leading-snug">
                            Our Commitment to Sustainable Agriculture
                        </h2>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        This achievement reflects MERCORA INTERNATIONAL's vision of leveraging Artificial Intelligence
                        for inclusive agricultural development. It reinforces our commitment to empowering farmers,
                        increasing crop yields, reducing agricultural risks, and creating a resilient farming ecosystem
                        that contributes to the well-being of farmers, rural communities, and the nation's economy.
                    </p>
                </div>
            </div>

            <!-- Card 5: Collaboration and Partnership -->
            <div
                class="bg-white rounded-2xl p-6 sm:p-7 border border-[#d6e8da] shadow-[0_4px_20px_rgba(15,45,25,0.04)] flex flex-col justify-between hover:shadow-md transition-shadow">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-12 h-12 rounded-xl bg-[#208a3c] text-white flex items-center justify-center shrink-0 shadow-sm text-2xl">
                            <i class="ri-shake-hands-line"></i>
                        </div>
                        <h2 class="text-lg font-bold text-[#0f2a4a] tracking-tight leading-snug">
                            Collaboration and Partnership
                        </h2>
                    </div>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                        Through strategic collaborations with Farmer Producer Organizations (FPOs), Self-Help Groups
                        (SHGs), cooperatives, research institutions, agri-tech partners, and government agencies,
                        MERCORA INTERNATIONAL aims to scale SMART CROP DOCTOR across India, enabling farmers to embrace
                        digital agriculture and build a more productive, sustainable, and prosperous future.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================== -->
<!-- 3. AI-POWERED CROP INTELLIGENCE: DETAILED FUNCTIONAL PILLARS   -->
<!-- From Annex A: Stated Platform Functions & Decision Support     -->
<!-- ============================================================== -->
<section class="py-12 sm:py-16 bg-white border-b border-[#e2ede4]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="text-center max-w-3xl mx-auto mb-10 sm:mb-12">
            <span
                class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200">
                <i class="ri-cpu-line text-emerald-600"></i> AI-Powered Crop Intelligence
            </span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-[#0f2a4a] tracking-tight mt-3">
                Accurate, Technology-Driven Decision Support
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mt-3">
                SMART CROP DOCTOR aims to provide farmers with accurate, technology-driven decision support for better
                crop management. By enabling early diagnosis and timely intervention, the platform seeks to minimise
                crop losses, improve productivity, enhance farm profitability and support more informed agricultural
                practices.
            </p>
        </div>

        <!-- 4 Core Functional Capability Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Function 1: Crop Disease & Health Issues -->
            <div
                class="bg-gradient-to-b from-[#f8fdf9] to-white border border-[#d6e8da] rounded-2xl p-6 hover:shadow-md transition">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-100 text-[#137536] flex items-center justify-center text-2xl mb-4">
                    <i class="ri-virus-line"></i>
                </div>
                <h3 class="text-base font-bold text-[#0f2a4a] mb-2">
                    Disease &amp; Health Diagnostics
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Helps farmers detect crop health issues and identify plant diseases early through intelligent image
                    diagnostics, preventing field-wide infection spread.
                </p>
            </div>

            <!-- Function 2: Nutrient Deficiency Assessment -->
            <div
                class="bg-gradient-to-b from-[#f8fdf9] to-white border border-[#d6e8da] rounded-2xl p-6 hover:shadow-md transition">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-100 text-[#137536] flex items-center justify-center text-2xl mb-4">
                    <i class="ri-flask-line"></i>
                </div>
                <h3 class="text-base font-bold text-[#0f2a4a] mb-2">
                    Nutrient Assessment
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Assesses potential nutrient deficiencies across foliar and soil stages, guiding farmers with
                    balanced micro and macro-nutrient recommendations.
                </p>
            </div>

            <!-- Function 3: Crop Growth Monitoring -->
            <div
                class="bg-gradient-to-b from-[#f8fdf9] to-white border border-[#d6e8da] rounded-2xl p-6 hover:shadow-md transition">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-100 text-[#137536] flex items-center justify-center text-2xl mb-4">
                    <i class="ri-line-chart-line"></i>
                </div>
                <h3 class="text-base font-bold text-[#0f2a4a] mb-2">
                    Growth Monitoring
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Monitors crop growth patterns throughout the cultivation lifecycle, identifying developmental lag
                    and supporting optimal agronomic milestones.
                </p>
            </div>

            <!-- Function 4: Preventive & Corrective Advisories -->
            <div
                class="bg-gradient-to-b from-[#f8fdf9] to-white border border-[#d6e8da] rounded-2xl p-6 hover:shadow-md transition">
                <div
                    class="w-12 h-12 rounded-xl bg-emerald-100 text-[#137536] flex items-center justify-center text-2xl mb-4">
                    <i class="ri-shield-check-line"></i>
                </div>
                <h3 class="text-base font-bold text-[#0f2a4a] mb-2">
                    Timely Advisories
                </h3>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    Delivers actionable preventive and corrective advisories directly to farming communities, enabling
                    swift remedial action to safeguard yields.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================== -->
<!-- 4. COLLABORATION & PARTNERSHIP OPPORTUNITIES (ANNEX A PILLARS) -->
<!-- 5 Specific Stakeholder Pillars for Scaling Across India       -->
<!-- ============================================================== -->
<section class="py-12 sm:py-16 bg-[#f8faf9] border-b border-[#e2ede4]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mb-10">
            <span
                class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200">
                <i class="ri-community-line text-emerald-600"></i> Scaling Across India
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0f2a4a] tracking-tight mt-3">
                Collaboration and Partnership Opportunities
            </h2>
            <p class="text-slate-600 text-sm sm:text-base leading-relaxed mt-2">
                Through strategic collaborations, MERCORA INTERNATIONAL aims to scale SMART CROP DOCTOR across India and
                support the adoption of digital agriculture. Potential collaboration areas include:
            </p>
        </div>

        <!-- The 5 Strategic Partnership Categories from Annex A -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- 1. FPOs -->
            <div
                class="bg-white rounded-2xl p-6 border border-[#d6e8da] shadow-sm hover:shadow-md transition flex items-start gap-4">
                <div
                    class="w-11 h-11 rounded-xl bg-emerald-50 border border-emerald-200 text-[#137536] flex items-center justify-center shrink-0 font-bold text-lg">
                    1
                </div>
                <div>
                    <h3 class="text-base font-bold text-[#0f2a4a]">
                        Farmer Producer Organizations (FPOs)
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-1.5">
                        Cluster deployment, cooperative field trials, and direct onboarding of farming members through
                        active FPO networks across Indian agro-climatic zones.
                    </p>
                </div>
            </div>

            <!-- 2. SHGs & Cooperatives -->
            <div
                class="bg-white rounded-2xl p-6 border border-[#d6e8da] shadow-sm hover:shadow-md transition flex items-start gap-4">
                <div
                    class="w-11 h-11 rounded-xl bg-emerald-50 border border-emerald-200 text-[#137536] flex items-center justify-center shrink-0 font-bold text-lg">
                    2
                </div>
                <div>
                    <h3 class="text-base font-bold text-[#0f2a4a]">
                        Self-Help Groups (SHGs) and cooperatives
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-1.5">
                        Grassroots agricultural extension, empowering women-led farming collectives, and facilitating
                        village-level adoption of digital diagnostic tools.
                    </p>
                </div>
            </div>

            <!-- 3. Research Institutions & Agricultural Organisations -->
            <div
                class="bg-white rounded-2xl p-6 border border-[#d6e8da] shadow-sm hover:shadow-md transition flex items-start gap-4">
                <div
                    class="w-11 h-11 rounded-xl bg-emerald-50 border border-emerald-200 text-[#137536] flex items-center justify-center shrink-0 font-bold text-lg">
                    3
                </div>
                <div>
                    <h3 class="text-base font-bold text-[#0f2a4a]">
                        Research Institutions and Agricultural Organisations
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-1.5">
                        Agronomic model validation, plant pathology research datasets, regional disease mapping, and
                        field efficacy corroboration with state agri-universities.
                    </p>
                </div>
            </div>

            <!-- 4. Agri-Tech Partners & Technology Providers -->
            <div
                class="bg-white rounded-2xl p-6 border border-[#d6e8da] shadow-sm hover:shadow-md transition flex items-start gap-4">
                <div
                    class="w-11 h-11 rounded-xl bg-emerald-50 border border-emerald-200 text-[#137536] flex items-center justify-center shrink-0 font-bold text-lg">
                    4
                </div>
                <div>
                    <h3 class="text-base font-bold text-[#0f2a4a]">
                        Agri-Tech Partners and Technology Providers
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-1.5">
                        Hardware and software interoperability, sensor telemetry, drone multispectral imagery
                        integration, and scalable cloud delivery architectures.
                    </p>
                </div>
            </div>

            <!-- 5. Government Agencies & Development Institutions -->
            <div
                class="bg-white rounded-2xl p-6 border border-[#d6e8da] shadow-sm hover:shadow-md transition flex items-start gap-4 md:col-span-2 lg:col-span-2">
                <div
                    class="w-11 h-11 rounded-xl bg-emerald-50 border border-emerald-200 text-[#137536] flex items-center justify-center shrink-0 font-bold text-lg">
                    5
                </div>
                <div>
                    <h3 class="text-base font-bold text-[#0f2a4a]">
                        Government Agencies and Development Institutions
                    </h3>
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed mt-1.5">
                        Alignment with National Precision Farming missions, state agriculture department schemes, DPIIT
                        startup ecosystems, and rural development programs.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ============================================================== -->
<!-- 6. BOTTOM BANNER / DYNAMIC CTA SECTION                         -->
<!-- Clean background (cta-smart-crop-doctor.png) + Floating Card   -->
<!-- ============================================================== -->
<section
    class="relative overflow-hidden min-h-[220px] sm:min-h-[260px] lg:min-h-[280px] flex items-center py-10 sm:py-14 border-t border-[#d6e8da]">
    <!-- Background Photographic Landscape: cta-smart-crop-doctor.png -->
    <div class="absolute inset-0 z-0">
        <img src="<?= url('assets/images/mercora/cta-smart-crop-doctor.png') ?>"
            alt="Building a More Productive, Sustainable and Prosperous Future - Farmland Horizon"
            class="w-full h-full object-cover object-center" />
    </div>

    <!-- Centered Floating Container (Matching Reference UI Design) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div
            class="max-w-5xl mx-auto bg-white/95 backdrop-blur-md rounded-2xl md:rounded-full py-4 sm:py-5 px-6 sm:px-10 shadow-2xl border border-white/80 flex flex-col md:flex-row items-center justify-between gap-4 sm:gap-6">

            <!-- Left Headline Text -->
            <div class="flex-1 text-center md:text-left">
                <h3
                    class="text-lg sm:text-xl lg:text-[22px] font-bold italic tracking-tight text-[#0c2340] leading-snug">
                    Building a More Productive, Sustainable and Prosperous Future
                </h3>
            </div>

            <!-- Vertical Green Divider (Desktop) -->
            <div class="hidden md:block w-px h-8 bg-[#84cc16]/50 shrink-0 mx-2"></div>

            <!-- Right CTA Button -->
            <div class="shrink-0">
                <a href="<?= url('/contact') ?>?vertical=agritech"
                    class="inline-flex items-center justify-center gap-2.5 px-6 sm:px-8 py-3 rounded-full bg-[#208a3c] hover:bg-[#167331] text-white font-semibold text-sm sm:text-base shadow-md hover:shadow-lg transition-all duration-200 whitespace-nowrap">
                    <i class="ri-mail-line text-lg"></i>
                    <span>Contact Mercora International</span>
                </a>
            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>