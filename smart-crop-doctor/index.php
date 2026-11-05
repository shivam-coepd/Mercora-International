<?php
$pageTitle = 'Smart Crop Doctor | Precision Agriculture Initiative | Mercora International';
$pageDesc = 'SMART CROP DOCTOR is an AI-integrated precision agriculture and diagnostic platform by Mercora International, shortlisted through ALEAP Incubation and selected under the DPIIT Startup India Seed Fund Scheme (₹10.00 lakh sanctioned amount). Empowering farmers with early diagnosis, disease identification, nutrient monitoring, and timely advisories.';
require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ========================================== -->
<!-- ========================================== -->
<!-- 1. HERO SECTION: SMART CROP DOCTOR         -->
<!-- Exact replica of client reference banner   -->
<!-- ========================================== -->
<section class="relative bg-[#eaf6ec] border-b border-[#d6e8da] overflow-hidden">
    <!-- Desktop / Tablet Hero Banner (Exact match to uploaded design reference) -->
    <div class="w-full">
        <img src="<?= url('assets/images/mercora/smart-crop-doctor-hero-banner-full.jpg') ?>"
            alt="Mercora International – Core Initiative in Precision Agriculture: SMART CROP DOCTOR (AI-integrated diagnostic platform)"
            class="w-full h-auto object-cover object-center hidden sm:block shadow-sm" />
    </div>

    <!-- Semantic markup for SEO and Accessibility -->
    <div class="sr-only">
        <h1>SMART CROP DOCTOR</h1>
        <h2>MERCORA INTERNATIONAL – Core Initiative in Precision Agriculture</h2>
        <p>AI-POWERED PRECISION AGRICULTURE INITIATIVE - A Mercora International Core Initiative</p>
        <p>AI-integrated diagnostic platform</p>
        <p>Mercora International is committed to transforming Indian agriculture through innovation, technology and
            sustainable farming solutions.</p>
    </div>

    <!-- Mobile View (optimized for viewports < 640px) -->
    <div class="sm:hidden bg-gradient-to-b from-[#f2faf3] to-white px-4 py-8 space-y-5">
        <div class="space-y-3">
            <span
                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800 border border-emerald-300">
                <i class="ri-plant-fill text-emerald-600"></i> AI-POWERED PRECISION AGRICULTURE
            </span>
            <div class="text-[#0f2a4a] font-extrabold text-lg tracking-tight leading-snug">
                MERCORA INTERNATIONAL –<br />Core Initiative in Precision Agriculture
            </div>
            <div class="flex items-center gap-2 pt-1">
                <span class="text-[#1ea84f] text-3xl">
                    <i class="ri-leaf-fill"></i>
                </span>
                <h1 class="text-2xl font-black tracking-tight text-[#1ea84f] uppercase leading-none">
                    SMART CROP DOCTOR
                </h1>
            </div>
            <div>
                <span
                    class="inline-block bg-[#137536] text-white text-xs font-semibold px-4 sm:px-5 py-1.5 rounded-full shadow-sm">
                    AI-integrated diagnostic platform
                </span>
            </div>
            <div class="border-l-[3.5px] border-[#84cc16] pl-3 py-1 bg-white/70 rounded-r-lg">
                <p class="text-slate-700 italic font-medium text-xs leading-relaxed">
                    Mercora International is committed to transforming Indian agriculture through innovation, technology
                    and sustainable farming solutions.
                </p>
            </div>
        </div>

        <div class="rounded-xl overflow-hidden shadow-sm border border-emerald-100">
            <img src="<?= url('assets/images/initiatives/smart-crop-doctor-hero-artwork.jpg') ?>"
                alt="Smart Crop Doctor Farmer Diagnostics" class="w-full h-auto object-cover" />
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
<!-- 5. CLOSING STATEMENT & ENGAGEMENT: BE PART OF THE INITIATIVE   -->
<!-- From Annex A: Lines 283–287 of Document                        -->
<!-- ============================================================== -->
<section class="py-12 sm:py-16 bg-white border-b border-[#e2ede4]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="bg-gradient-to-br from-[#0c2340] via-[#0f2d59] to-[#0a1e36] text-white rounded-3xl p-8 sm:p-12 border border-slate-700/60 shadow-xl relative overflow-hidden">

            <!-- Soft glowing green background accents -->
            <div
                class="absolute -right-16 -bottom-16 w-80 h-80 rounded-full bg-emerald-500/15 blur-3xl pointer-events-none">
            </div>
            <div
                class="absolute -left-16 -top-16 w-80 h-80 rounded-full bg-emerald-500/10 blur-3xl pointer-events-none">
            </div>

            <div class="max-w-3xl space-y-6 relative z-10">
                <span
                    class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 uppercase tracking-wider">
                    <i class="ri-sparkling-fill"></i> Sustainable Agriculture Vision
                </span>

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-white leading-tight">
                    Building a More Productive and Resilient Future
                </h2>

                <p class="text-slate-200 text-sm sm:text-base leading-relaxed">
                    Together with farmers and ecosystem partners, SMART CROP DOCTOR seeks to advance a more productive,
                    sustainable and prosperous future for Indian agriculture through accessible, AI-enabled crop
                    intelligence and timely decision support.
                </p>

                <!-- Be Part of the Initiative sub-box -->
                <div class="pt-4 border-t border-slate-700/80 space-y-3">
                    <h3 class="text-lg font-bold text-emerald-300 flex items-center gap-2">
                        <i class="ri-user-add-line"></i> Be Part of the Initiative
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Interested in collaboration, institutional partnerships or pilot opportunities? Contact Mercora
                        International to explore how you can be part of the SMART CROP DOCTOR initiative.
                    </p>
                    <div class="pt-2">
                        <a href="<?= url('/contact') ?>?vertical=agritech"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-[#208a3c] hover:bg-[#186f30] text-white font-semibold text-sm shadow-lg shadow-emerald-950/40 transition">
                            <i class="ri-mail-line text-lg"></i>
                            <span>CONTACT MERCORA INTERNATIONAL</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================== -->
<!-- 6. BOTTOM BANNER / CTA SECTION             -->
<!-- Matching Reference UI Graphic + Hotspot    -->
<!-- ========================================== -->
<section class="py-8 sm:py-12 bg-[#f8faf9]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Desktop / Tablet UI Graphic Banner with Interactive Button Hotspot -->
        <div
            class="relative overflow-hidden rounded-2xl sm:rounded-3xl shadow-md border border-[#d6e8da] group hidden sm:block">
            <img src="<?= url('assets/images/initiatives/smart-crop-doctor-bottom-banner.jpg') ?>"
                alt="Building a More Productive, Sustainable and Prosperous Future - Contact Mercora International"
                class="w-full h-auto object-cover" />

            <!-- Accessible & Clickable Overlay Button targeting the exact position in the graphic -->
            <a href="<?= url('/contact') ?>?vertical=agritech"
                class="absolute right-[4.2%] top-[45%] -translate-y-1/2 w-[28%] lg:w-[24%] h-[46%] rounded-full cursor-pointer opacity-0 hover:opacity-100 hover:ring-2 hover:ring-white/80 bg-emerald-600/10 transition-all flex items-center justify-center"
                title="Contact Mercora International" aria-label="Contact Mercora International">
                <span class="sr-only">Contact Mercora International</span>
            </a>
        </div>

        <!-- Mobile View Card Fallback (Ensures crisp readability on phone screens) -->
        <div
            class="sm:hidden bg-gradient-to-br from-emerald-800 to-slate-900 rounded-2xl p-6 text-white text-center shadow-lg border border-emerald-700/50 space-y-4">
            <h3 class="text-lg font-bold italic text-emerald-100">
                Building a More Productive, Sustainable and Prosperous Future
            </h3>
            <div class="pt-1">
                <a href="<?= url('/contact') ?>?vertical=agritech"
                    class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-full bg-[#208a3c] hover:bg-[#186f30] text-white font-semibold text-sm shadow-md transition w-full">
                    <i class="ri-mail-line text-lg"></i>
                    <span>Contact Mercora International</span>
                </a>
            </div>
        </div>

    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>