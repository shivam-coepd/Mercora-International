<?php
$pageTitle = 'VetiGo MobiCare | Mobile Veterinary Healthcare Initiative | Mercora International';
$pageDesc = 'VetiGo MobiCare envisions bringing quality veterinary healthcare closer to pets, livestock and farming communities through fully equipped mobile veterinary clinics. Compassion in Motion. Diagnostics with Precision.';
require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ============================================================== -->
<!-- 1. HERO SECTION: VETIGO MOBICARE                               -->
<!-- Fresh pasture sky-to-meadow gradient with right-aligned van & animals -->
<!-- ============================================================== -->
<section
    class="relative bg-gradient-to-r from-white via-[#f7fcf8] to-[#edf7ef] border-b border-[#d6e8da] overflow-hidden min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex flex-col sm:flex-row sm:items-center">

    <!-- Full Panoramic Hero Background Image: hero-vetigo-mobicare.png -->
    <div class="absolute inset-0 z-0 hidden sm:block pointer-events-none select-none overflow-hidden">
        <img src="<?= url('assets/images/mercora/hero-vetigo-mobicare.png') ?>"
            alt="VetiGo MobiCare Mobile Veterinary Clinic in Pasture with Animals"
            class="w-full h-full object-cover object-right" />
    </div>

    <!-- Smooth White Gradient Overlay: Above hero image (z-0), below text section (z-10), left side till mid -->
    <div
        class="absolute inset-0 bg-gradient-to-r from-white from-0% via-white/95 via-30% via-white/70 via-45% to-transparent to-58% pointer-events-none select-none z-[5] hidden sm:block">
    </div>

    <!-- Left-aligned Info Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-8 sm:py-12 lg:py-14">
        <div class="max-w-xl lg:max-w-lg xl:max-w-xl space-y-3.5">

            <!-- Breadcrumbs -->
            <div class="flex items-center gap-1.5 text-xs text-[#0c2340] font-medium">
                <i class="ri-home-4-line text-[#1e873b]"></i>
                <a href="<?= url('/#initiatives') ?>" class="hover:text-[#1e873b] transition">Our Initiatives</a>
                <span class="text-slate-400">&gt;</span>
                <span class="font-bold text-[#0c2340]">VetiGo MobiCare</span>
            </div>

            <!-- Main Title with Paw Brand Mark -->
            <div class="pt-1">
                <h1
                    class="text-4xl sm:text-5xl lg:text-[52px] font-black tracking-tight text-[#0c2340] leading-none flex items-center flex-wrap">
                    <span>Veti</span><span class="text-green-700">G</span><span
                        class="relative inline-flex items-center justify-center text-[#1e873b] mx-0.5"><i
                            class="fas fa-paw text-[0.52em] -mt-1 text-amber-400 bg-green-700 rounded-full p-2"></i></span><span>Mobi<span
                            class="text-green-700">Care</span></span>
                </h1>
                <p class="text-sm sm:text-base font-bold text-[#0c2340] tracking-normal mt-1.5">
                    Compassion in Motion. Diagnostics with Precision.
                </p>
            </div>

            <!-- Green Pill Tagline Badge -->
            <div class="pt-1">
                <span
                    class="inline-block bg-[#1e873b] hover:bg-[#186e30] transition text-white text-xs sm:text-sm font-bold px-4 sm:px-5 py-1.5 rounded-full shadow-xs tracking-wide">
                    Healthy Animals &bull; Happy Farmers &bull; Stronger Nation
                </span>
            </div>

            <!-- Subtitle & Paragraph -->
            <div class="pt-1">
                <h2 class="text-base sm:text-lg font-bold text-[#0c2340] tracking-tight">
                    A Mobile Veterinary Healthcare Initiative
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mt-1 max-w-lg">
                    VetiGo MobiCare envisions bringing quality veterinary healthcare closer to pets, livestock and
                    farming communities through fully equipped mobile veterinary clinics.
                </p>
            </div>

        </div>
    </div>

    <!-- Mobile View Image (for small screens < 640px) -->
    <div class="sm:hidden px-4 pb-6 pt-1 w-full relative z-10">
        <div class="rounded-xl overflow-hidden shadow-sm border border-[#d6e8da] bg-white">
            <img src="<?= url('assets/images/mercora/hero-vetigo-mobicare.png') ?>"
                alt="VetiGo MobiCare Mobile Veterinary Clinic" class="w-full h-auto object-cover object-right" />
        </div>
    </div>
</section>

<!-- ============================================================== -->
<!-- 2. MAIN BODY SECTION                                            -->
<!-- Restructured according to user's layout sketch:                 -->
<!-- Row 1: 3 Cards (Vision, Proposed Clinic Design, Visionary)      -->
<!-- Row 2: 2 Columns (Stacked 3 Rooms on Left, Proposed Services on Right) -->
<!-- Row 3: Partnerships & Mercora Support                           -->
<!-- ============================================================== -->
<main class="bg-[#f8faf9] py-8 sm:py-10 border-b border-[#e2ede4]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

        <!-- ========================================================== -->
        <!-- ROW 1: 3 CARDS SIDE BY SIDE (MATCHING USER SKETCH TOP ROW) -->
        <!-- Card 1: Our Vision – A Veterinary Clinic on Wheels         -->
        <!-- Card 2: Proposed Mobile Veterinary Clinic Design           -->
        <!-- Card 3: The Visionary Behind VetiGo MobiCare               -->
        <!-- ========================================================== -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 items-stretch">

            <!-- Card 1: Our Vision – A Veterinary Clinic on Wheels -->
            <div
                class="bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with Target Icon -->
                    <div class="flex items-center gap-2.5 mb-3">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-focus-3-line"></i>
                        </div>
                        <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-snug">
                            Our Vision &ndash; A Veterinary Clinic on Wheels
                        </h3>
                    </div>

                    <!-- Description -->
                    <p class="text-xs sm:text-[12.5px] text-slate-600 leading-relaxed mb-4">
                        VetiGo MobiCare proposes a mobile veterinary clinic model designed to bring essential
                        healthcare services directly to animals and their owners, with dedicated spaces for
                        consultation, examination, diagnostics, grooming and treatment.
                    </p>

                    <!-- 3 Checkpoints + Route Illustration -->
                    <div class="flex items-end justify-between gap-2 pt-1">
                        <ul class="space-y-2 text-xs sm:text-[12.5px] text-[#0c2340] font-medium flex-1">
                            <li class="flex items-start gap-2">
                                <i class="ri-checkbox-circle-fill text-[#1e873b] text-base shrink-0 mt-0.5"></i>
                                <span>Reduce travel-related stress for animals</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="ri-checkbox-circle-fill text-[#1e873b] text-base shrink-0 mt-0.5"></i>
                                <span>Improve access to timely veterinary care</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="ri-checkbox-circle-fill text-[#1e873b] text-base shrink-0 mt-0.5"></i>
                                <span>Technology-enabled, comprehensive services</span>
                            </li>
                        </ul>

                        <!-- Van route graphic -->
                        <div class="w-20 sm:w-36 shrink-0">
                            <img src="<?= url('assets/images/initiatives/vetigo-route-graphic.png') ?>"
                                alt="Veterinary Clinic on Wheels Route" class="w-full h-auto object-contain" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Proposed Mobile Veterinary Clinic Design -->
            <div
                class="bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with Van Icon -->
                    <div class="flex items-center gap-2.5 mb-2.5">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-truck-line"></i>
                        </div>
                        <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-snug">
                            Proposed Mobile Veterinary Clinic Design
                        </h3>
                    </div>

                    <!-- Subtitle Description -->
                    <p class="text-xs sm:text-[12.5px] text-slate-600 leading-relaxed mb-3.5">
                        The proposed mobile clinic concept includes a doctor consultation room, nurse and check-up
                        area, and a grooming or treatment room, designed for coordinated care at doorstep.
                    </p>

                    <!-- Main Exterior View Image -->
                    <div class="space-y-2">
                        <div class="rounded-xl overflow-hidden border border-[#d6e8da] shadow-xs bg-slate-50">
                            <img src="<?= url('assets/images/initiatives/vetigo-exterior.png') ?>"
                                alt="Proposed Mobile Veterinary Clinic - Exterior View"
                                class="w-full h-36 sm:h-44 object-cover object-center" />
                        </div>
                        <div class="text-center pt-0.5">
                            <span
                                class="inline-block bg-[#eaf6ed] border border-[#c3e3cb] text-[#1e873b] text-[11px] font-bold px-3 py-1 rounded-full shadow-2xs">
                                Proposed Mobile Veterinary Clinic &ndash; Exterior View
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: The Visionary Behind VetiGo MobiCare -->
            <div
                class="bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with User Icon -->
                    <div class="flex items-center gap-2.5 mb-3">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-user-heart-line"></i>
                        </div>
                        <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-snug">
                            The Visionary Behind<br>VetiGo MobiCare
                        </h3>
                    </div>

                    <!-- Founder Profile Photo + Info -->
                    <div class="flex items-center gap-3 mb-3">
                        <div
                            class="w-14 h-18 sm:w-16 sm:h-20 rounded-xl overflow-hidden border border-[#d6e8da] shadow-xs shrink-0 bg-slate-50">
                            <img src="<?= url('assets/images/initiatives/vetigo-founder.png') ?>"
                                alt="Krishna Prashanth Desaraju - Founder, VetiGo MobiCare"
                                class="w-full h-full object-cover object-top" />
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-[#0c2340] leading-tight">
                                Krishna Prashanth Desaraju
                            </h4>
                            <p class="text-xs text-[#1e873b] font-semibold mt-0.5">
                                Founder &ndash;<br>VetiGo MobiCare
                            </p>
                        </div>
                    </div>

                    <!-- Bio Paragraph -->
                    <p class="text-xs sm:text-[12px] text-slate-600 leading-relaxed mb-3">
                        Krishna Prashanth Desaraju is the visionary behind VetiGo MobiCare, driven by his passion for
                        animal welfare and the belief that quality veterinary healthcare should be accessible to every
                        animal, regardless of location.
                    </p>

                    <!-- Quote Callout Box -->
                    <div class="bg-[#f0faf2] border border-[#cbe8d2] rounded-xl p-2.5 sm:p-3 text-center">
                        <p class="text-xs sm:text-[12.5px] font-bold text-[#0f5927] leading-snug">
                            <span class="text-[#1e873b] text-sm font-serif mr-1">&ldquo;</span>We don’t move the
                            patient.<br>We move the clinic.<span
                                class="text-[#1e873b] text-sm font-serif ml-1">&rdquo;</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- ========================================================== -->
        <!-- ROW 2: 2 COLUMNS (MATCHING USER SKETCH BOTTOM ROW)         -->
        <!-- Left: 3 Stacked Rooms (Consultation, Check-up, Grooming)   -->
        <!-- Right: Proposed Services (Wide Grid)                       -->
        <!-- ========================================================== -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            <!-- LEFT COLUMN: 3 STACKED ROOMS (col-span-12 lg:col-span-4 flex flex-col gap-3.5) -->
            <div
                class="lg:col-span-4 bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with Hospital / Building Icon -->
                    <div class="flex items-center gap-2.5 mb-3.5 pb-2.5 border-b border-[#e8f3ea]">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-hospital-line"></i>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-tight">
                                Clinic Interior Spaces
                            </h3>
                            <p class="text-[11px] text-slate-500">Dedicated operational zones inside the mobile unit</p>
                        </div>
                    </div>

                    <!-- 3 Stacked Room Cards -->
                    <div class="space-y-3">

                        <!-- Room 1: Consultation Room -->
                        <div
                            class="group bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 sm:p-3 flex items-center gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-24 sm:w-28 h-18 sm:h-20 rounded-lg overflow-hidden border border-[#d6e8da] shrink-0 bg-slate-50">
                                <img src="<?= url('assets/images/initiatives/vetigo-interior-1.png') ?>"
                                    alt="Consultation Room"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300" />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span
                                    class="inline-block bg-[#0c2340] text-white text-[10.5px] font-bold px-2.5 py-0.5 rounded-full mb-1">
                                    Consultation Room
                                </span>
                                <p class="text-[11px] text-slate-600 leading-tight">
                                    Dedicated doctor consultation desk, diagnostic screen &amp; client seating.
                                </p>
                            </div>
                        </div>

                        <!-- Room 2: Check-up & Diagnostics -->
                        <div
                            class="group bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 sm:p-3 flex items-center gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-24 sm:w-28 h-18 sm:h-20 rounded-lg overflow-hidden border border-[#d6e8da] shrink-0 bg-slate-50">
                                <img src="<?= url('assets/images/initiatives/vetigo-interior-2.png') ?>"
                                    alt="Check-up & Diagnostics"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300" />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span
                                    class="inline-block bg-[#0c2340] text-white text-[10.5px] font-bold px-2.5 py-0.5 rounded-full mb-1">
                                    Check-up &amp; Diagnostics
                                </span>
                                <p class="text-[11px] text-slate-600 leading-tight">
                                    Examination table, digital diagnostics, ultrasound &amp; vital testing equipment.
                                </p>
                            </div>
                        </div>

                        <!-- Room 3: Grooming / Treatment Room -->
                        <div
                            class="group bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 sm:p-3 flex items-center gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-24 sm:w-28 h-18 sm:h-20 rounded-lg overflow-hidden border border-[#d6e8da] shrink-0 bg-slate-50">
                                <img src="<?= url('assets/images/initiatives/vetigo-interior-3.png') ?>"
                                    alt="Grooming / Treatment Room"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300" />
                            </div>
                            <div class="min-w-0 flex-1">
                                <span
                                    class="inline-block bg-[#0c2340] text-white text-[10.5px] font-bold px-2.5 py-0.5 rounded-full mb-1">
                                    Grooming / Treatment Room
                                </span>
                                <p class="text-[11px] text-slate-600 leading-tight">
                                    Specialised grooming bath, hygiene care stations and minor procedure setup.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: PROPOSED SERVICES (col-span-12 lg:col-span-8) -->
            <div
                class="lg:col-span-8 bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with Stethoscope Icon -->
                    <div class="flex items-center gap-2.5 mb-2 pb-2.5 border-b border-[#e8f3ea]">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-stethoscope-line"></i>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-tight">
                                Proposed Services
                            </h3>
                            <p class="text-[11px] text-slate-500">Comprehensive, doorstep veterinary care and
                                technology-enabled diagnostics</p>
                        </div>
                    </div>

                    <!-- 7 Services Grid (Laid out across the wide card) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-1">

                        <!-- 1. Veterinary Consultation & Treatment -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-heart-add-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Veterinary Consultation &amp; Treatment
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Professional veterinary consultations and basic treatment services.
                                </p>
                            </div>
                        </div>

                        <!-- 2. Advanced Diagnostics -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-computer-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Advanced Diagnostics
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Proposed access to digital X-ray, ultrasound and ECG facilities.
                                </p>
                            </div>
                        </div>

                        <!-- 3. Pathology & Laboratory Services -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-flask-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Pathology &amp; Laboratory Services
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Diagnostic support to assist veterinary assessment and rapid tests.
                                </p>
                            </div>
                        </div>

                        <!-- 4. Vaccination & Preventive Care -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-syringe-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Vaccination &amp; Preventive Care
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Support for animal health and scheduled disease prevention.
                                </p>
                            </div>
                        </div>

                        <!-- 5. Veterinary Pharmacy -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-medicine-bottle-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Veterinary Pharmacy
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Direct access to essential veterinary medicines, supplements and supplies.
                                </p>
                            </div>
                        </div>

                        <!-- 6. Pet Care & Grooming -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="fas fa-paw"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Pet Care &amp; Grooming
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Basic grooming, coat care and hygiene-oriented animal-care services.
                                </p>
                            </div>
                        </div>

                        <!-- 7. Telemedicine & Follow-up (spanning 2 columns) -->
                        <div
                            class="sm:col-span-2 bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-3 flex items-start gap-3 hover:border-[#1e873b] hover:shadow-xs transition">
                            <div
                                class="w-9 h-9 rounded-lg bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg">
                                <i class="ri-device-line"></i>
                            </div>
                            <div class="min-w-0">
                                <h4 class="text-xs sm:text-[13px] font-bold text-[#0c2340] leading-tight mb-0.5">
                                    Telemedicine &amp; Follow-up
                                </h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    Technology-enabled digital consultations, remote monitoring, and structured
                                    follow-up
                                    support.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- ========================================================== -->
        <!-- ROW 3: PARTNERSHIPS & MERCORA SUPPORT                      -->
        <!-- Left: Collaboration & Partnerships (~58%)                  -->
        <!-- Right: Mercora International Support (~42%)                -->
        <!-- ========================================================== -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            <!-- Left Card: Collaboration and Partnership Opportunities (col-span-7) -->
            <div
                class="lg:col-span-7 bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-between">
                <div>
                    <!-- Header with Handshake Icon -->
                    <div class="flex items-center gap-2.5 mb-2">
                        <div
                            class="w-9 h-9 rounded-full bg-[#eaf6ed] text-[#1e873b] flex items-center justify-center shrink-0 text-lg shadow-2xs">
                            <i class="ri-shake-hands-line"></i>
                        </div>
                        <h3 class="text-base sm:text-[17px] font-bold text-[#0c2340] tracking-tight leading-snug">
                            Collaboration and Partnership Opportunities
                        </h3>
                    </div>

                    <p class="text-xs text-slate-500 mb-3.5">
                        VetiGo MobiCare aims to explore partnerships and collaborations with:
                    </p>

                    <!-- 6 Partner Blocks Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-2">

                        <!-- Partner 1 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-stethoscope-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                Veterinary doctors &amp; healthcare professionals
                            </span>
                        </div>

                        <!-- Partner 2 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-heart-pulse-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                Pet-care organisations &amp; animal welfare institutions
                            </span>
                        </div>

                        <!-- Partner 3 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-community-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                Dairy cooperatives, farmers &amp; FPOs
                            </span>
                        </div>

                        <!-- Partner 4 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-store-2-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                Entrepreneurs &amp; potential franchise partners
                            </span>
                        </div>

                        <!-- Partner 5 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-hand-heart-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                CSR organisations &amp; institutional partners
                            </span>
                        </div>

                        <!-- Partner 6 -->
                        <div
                            class="bg-[#fcfdfc] border border-[#d6e8da] rounded-xl p-2.5 text-center flex flex-col items-center justify-between hover:border-[#1e873b] transition">
                            <div class="text-[#1e873b] text-lg mb-1">
                                <i class="ri-settings-4-line"></i>
                            </div>
                            <span class="text-[10px] font-bold text-[#0c2340] leading-tight">
                                Technology &amp; diagnostic equipment providers
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Right Card: Mercora International – Supporting Strategic Development (col-span-5) -->
            <div
                class="lg:col-span-5 bg-white rounded-2xl p-5 sm:p-6 border border-[#d6e8da] shadow-[0_2px_12px_rgba(15,45,25,0.04)] flex flex-col justify-center">
                <div class="flex items-start gap-4">
                    <!-- Mercora Logo -->
                    <div class="shrink-0 flex flex-col items-center justify-center pt-1">
                        <img src="<?= url('assets/images/mercora/mercora-logo-light.png') ?>"
                            alt="Mercora International" class="h-10 w-auto object-contain" />
                        <span class="text-[9px] font-black tracking-widest text-[#0c2340] uppercase mt-1">MERCORA</span>
                        <span
                            class="text-[7px] font-semibold tracking-wider text-slate-500 uppercase -mt-0.5">INTERNATIONAL</span>
                    </div>

                    <!-- Content -->
                    <div class="space-y-2">
                        <h3 class="text-sm sm:text-base font-bold text-[#0c2340] tracking-tight leading-snug">
                            Mercora International &ndash; Supporting Strategic Development
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Mercora International showcases VetiGo MobiCare as a strategic initiative and seeks to
                            facilitate its development through strategic consulting, business partnerships,
                            collaboration opportunities and expansion planning.
                        </p>
                        <p class="text-xs text-slate-600 leading-relaxed">
                            Through initiatives such as VetiGo MobiCare, Mercora aims to encourage innovative,
                            technology-enabled solutions that create meaningful social and community impact.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<!-- ============================================================== -->
<!-- 3. BOTTOM BANNER / DYNAMIC CTA SECTION                         -->
<!-- Be Part of the Vision with Cattle & Meadow Silhouette Graphic  -->
<!-- ============================================================== -->
<section
    class="relative overflow-hidden min-h-[160px] sm:min-h-[180px] bg-gradient-to-r from-[#edf8ee] via-[#f5fbf6] to-[#edf8ee] border-t border-[#d6e8da] py-8 sm:py-10 flex items-center">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-5 sm:gap-6">

            <!-- Left Info Block: Cattle Silhouette + Title + Divider + Description -->
            <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left flex-1">

                <!-- SVG Cattle Silhouette & Meadow (Matching Reference) -->
                <div class="w-20 sm:w-24 shrink-0 text-[#1e873b]">
                    <svg viewBox="0 0 110 65" class="w-full h-auto fill-current" xmlns="http://www.w3.org/2000/svg">
                        <!-- Cow silhouette -->
                        <path
                            d="M56 42 C54 38, 54 28, 49 26 C47 25, 45 25, 43 27 C41 29, 41 32, 38 32 C36 32, 34 29, 32 27 C31 25, 29 24, 27 24 C23 24, 20 26, 19 28 C17 31, 16 35, 14 36 C11 37, 9 38, 9 41 C9 44, 12 46, 16 46 C18 46, 20 45, 21 44 C23 43, 26 44, 28 46 C30 48, 32 50, 35 51 C36 51, 37 50, 37 48 C37 46, 36 45, 36 43 C37 41, 38 40, 41 41 C42 42, 43 45, 44 48 C45 51, 46 52, 47 52 C49 52, 51 49, 51 46 C53 46, 55 44, 56 42 Z M20 30 C21 30, 22 29, 22 28 C22 27, 21 26, 20 26 C19 26, 18 27, 18 28 C18 29, 19 30, 20 30 Z"
                            opacity="0.95" />
                        <!-- Sheep / Lamb silhouette beside cow -->
                        <path
                            d="M74 46 C73 43, 73 38, 70 36 C68 35, 66 35, 65 36 C63 37, 63 39, 60 39 C59 39, 58 37, 57 36 C56 35, 55 35, 54 35 C51 35, 49 36, 48 38 C47 40, 46 43, 45 44 C44 45, 43 45, 43 47 C43 49, 45 50, 47 50 C48 50, 49 49, 50 48 C52 48, 53 48, 54 50 C55 51, 56 52, 57 52 C58 52, 59 51, 59 50 C59 49, 58 48, 58 47 C59 46, 60 45, 62 46 C63 46, 63 48, 64 50 C65 52, 66 52, 67 52 C68 52, 70 50, 70 48 C71 48, 72 47, 74 46 Z"
                            opacity="0.9" />
                        <!-- Grass blades at base -->
                        <path d="M2 58 Q10 52, 18 58 T34 58 T50 58 T66 58 T82 58 T98 58 T110 58 L110 64 L2 64 Z"
                            opacity="0.35" />
                        <path
                            d="M6 56 L8 50 L10 56 M14 56 L16 48 L18 56 M24 56 L26 51 L28 56 M80 56 L82 49 L84 56 M92 56 L94 50 L96 56"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.6" />
                    </svg>
                </div>

                <!-- Headline -->
                <div class="shrink-0">
                    <h3 class="text-xl sm:text-2xl font-black text-[#0c2340] tracking-tight whitespace-nowrap">
                        Be Part of the Vision
                    </h3>
                </div>

                <!-- Vertical Divider (Desktop) -->
                <div class="hidden lg:block w-px h-9 bg-[#1e873b]/40 shrink-0 mx-2"></div>

                <!-- Subtitle / Vision Description -->
                <p class="text-xs sm:text-sm text-slate-700 font-medium leading-relaxed max-w-xl">
                    Together, we can work towards making accessible veterinary healthcare a reality for more animals and
                    communities.
                </p>

            </div>

            <!-- Right CTA Button -->
            <div class="shrink-0">
                <a href="<?= url('/contact') ?>?vertical=veterinary-healthcare"
                    class="inline-flex items-center justify-center gap-2.5 px-6 sm:px-8 py-3.5 rounded-full bg-[#1e873b] hover:bg-[#167331] text-white font-bold text-xs sm:text-sm shadow-md hover:shadow-lg transition-all duration-200 whitespace-nowrap uppercase tracking-wider">
                    <i class="ri-mail-line text-base"></i>
                    <span>Contact Mercora International</span>
                    <i class="ri-arrow-right-s-line text-lg -mr-1"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>