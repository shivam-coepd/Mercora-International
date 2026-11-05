<?php
$pageTitle = 'VetiGo MobiCare | Mobile Veterinary Healthcare Initiative';
$pageDesc = 'VetiGo MobiCare is a mobile veterinary clinic on wheels initiative by Mercora International, founded by Krishna Prashanth Desaraju. Compassion in Motion. Diagnostics with Precision.';
require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- Hero Section (Teal & Sky Clean Veterinary Healthcare Aesthetic) -->
<section class="relative bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-24 overflow-hidden">
    <!-- Teal Ambient Glow -->
    <div class="absolute top-0 right-1/4 w-96 h-96 rounded-full bg-teal-500/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-8 space-y-5">
                <div class="flex flex-wrap items-center gap-2">
                    <span
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-teal-500/10 text-teal-300 border border-teal-500/30">
                        <i class="ri-truck-fill text-teal-400"></i> A Mobile Veterinary Healthcare Initiative
                    </span>
                    <span
                        class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-500/10 text-amber-300 border border-amber-500/30">
                        <i class="ri-heart-pulse-fill text-amber-400"></i> Mercora Strategic Initiative
                    </span>
                </div>

                <div class="flex items-center gap-4 pt-1">
                    <img src="<?= url('assets/images/initiatives/vetigo-mobicare-logo.jpg') ?>" alt="VetiGo MobiCare"
                        class="h-16 sm:h-20 w-auto object-contain bg-white rounded-xl p-2 shadow-md" />
                    <div>
                        <h1
                            class="text-3xl sm:text-5xl font-extrabold tracking-tight text-white leading-tight font-display">
                            VetiGo MobiCare
                        </h1>
                        <p class="text-xs sm:text-sm font-bold text-teal-400 uppercase tracking-wider mt-0.5">
                            Compassion in Motion. Diagnostics with Precision.
                        </p>
                    </div>
                </div>

                <p class="text-xs sm:text-sm font-semibold tracking-wide text-amber-300 uppercase">
                    Healthy Animals • Happy Farmers • Stronger Nation
                </p>

                <p class="text-base sm:text-lg text-slate-300 leading-relaxed pt-1 max-w-2xl">
                    <strong>VetiGo MobiCare</strong> envisions bringing quality veterinary healthcare closer to pets,
                    livestock and farming communities through fully equipped mobile veterinary clinics. The initiative
                    aims to make animal healthcare more accessible, convenient and technology-enabled, particularly in
                    areas where access to veterinary facilities and diagnostic services may be limited.
                </p>

                <p class="text-xs sm:text-sm text-slate-400 leading-relaxed max-w-2xl">
                    Showcased as a strategic initiative of Mercora International, VetiGo MobiCare represents a vision
                    for transforming the delivery of veterinary healthcare through mobility, technology and
                    compassionate care.
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-3">
                    <a href="<?= url('/contact') ?>?vertical=healthcare"
                        class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-slate-950 bg-teal-400 hover:bg-teal-300 rounded-xl transition shadow-lg shadow-teal-500/20">
                        Contact Mercora International <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                    <a href="#clinic-design"
                        class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 rounded-xl transition">
                        Proposed Clinic Design <i class="ri-arrow-down-line ml-2"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-4 flex justify-center">
                <div
                    class="bg-slate-800/80 border border-slate-700 rounded-3xl p-6 sm:p-8 text-center space-y-4 shadow-xl">
                    <div
                        class="w-16 h-16 rounded-2xl bg-teal-500/20 text-teal-300 flex items-center justify-center text-3xl mx-auto border border-teal-400/30">
                        <i class="ri-stethoscope-line"></i>
                    </div>
                    <blockquote class="text-base sm:text-lg font-medium text-white italic">
                        “We don’t move the patient.<br />We move the clinic.”
                    </blockquote>
                    <p class="text-xs text-slate-400 pt-2 border-t border-slate-700">
                        Krishna Prashanth Desaraju<br />
                        <span class="text-teal-400 font-semibold">Founder, VetiGo MobiCare</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section – A Veterinary Clinic on Wheels -->
<section class="py-14 sm:py-18 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <div class="lg:col-span-7 space-y-5">
                <span class="text-xs font-bold uppercase tracking-wider text-teal-700">Doorstep Animal Care</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                    Our Vision – A Veterinary Clinic on Wheels
                </h2>
                <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
                    <strong>VetiGo MobiCare</strong> proposes a mobile veterinary clinic model designed to bring
                    essential healthcare services directly to animals and their owners. The proposed mobile clinic is
                    designed with dedicated spaces for veterinary consultation, examination and check-ups, grooming and
                    treatment, along with arrangements for diagnostic equipment and essential veterinary supplies.
                </p>
                <p class="text-slate-600 text-base leading-relaxed">
                    The objective is to reduce travel-related stress for animals and improve access to timely veterinary
                    consultation, diagnostics and treatment across urban, semi-urban, rural, and farming corridors.
                </p>
            </div>
            <div class="lg:col-span-5">
                <div class="bg-teal-50/70 border border-teal-200 rounded-2xl p-6 sm:p-8 space-y-3">
                    <h3 class="text-lg font-bold text-teal-950 flex items-center gap-2">
                        <i class="ri-shield-heart-line text-teal-600 text-xl"></i> Key Objectives
                    </h3>
                    <ul class="space-y-2.5 text-sm text-teal-900">
                        <li class="flex items-start gap-2">
                            <i class="ri-checkbox-circle-fill text-teal-600 mt-0.5 shrink-0"></i>
                            <span>Eliminate stressful long-distance transport for sick or injured animals</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="ri-checkbox-circle-fill text-teal-600 mt-0.5 shrink-0"></i>
                            <span>Provide advanced on-site diagnostics including digital X-ray, ultrasound and
                                ECG</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="ri-checkbox-circle-fill text-teal-600 mt-0.5 shrink-0"></i>
                            <span>Support dairy farmers, livestock keepers, and pet owners with preventive
                                vaccination</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proposed Mobile Veterinary Clinic Design -->
<section id="clinic-design" class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-teal-700">Engineering Concept</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Proposed Mobile Veterinary Clinic Design
            </h2>
            <p class="text-base text-slate-600 mt-2">
                The proposed mobile clinic concept includes a doctor consultation room, nurse and check-up area, and a
                grooming or treatment room. The vehicle design and interior layout are intended to support a coordinated
                veterinary-care experience at the animal’s doorstep.
            </p>
            <p class="text-xs font-semibold text-slate-500 mt-1 italic">
                * Note: Concept design images shown below represent the proposed architectural and vehicle model.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <!-- Exterior Views Card -->
            <div
                class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-teal-50 text-teal-800 border border-teal-200 mb-4">
                        Vehicle Architecture
                    </span>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Proposed Clinic – Exterior Views</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                        Ergonomic mobile unit engineered for seamless mobility across urban neighbourhoods, rural farms,
                        and dairy clusters.
                    </p>
                    <div
                        class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 flex items-center justify-center p-2 min-h-[300px]">
                        <img src="<?= url('assets/images/initiatives/vetigo-exterior.png') ?>"
                            alt="Proposed Mobile Veterinary Clinic - Exterior Views"
                            class="max-h-72 w-auto object-contain mx-auto" />
                    </div>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-100 text-xs font-semibold text-slate-500">
                    Doorstep deployment &amp; rapid clinical setup
                </div>
            </div>

            <!-- Interior Layout Card -->
            <div
                class="bg-white border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm flex flex-col justify-between">
                <div>
                    <span
                        class="inline-block px-3 py-1 rounded-full text-xs font-bold bg-blue-50 text-blue-800 border border-blue-200 mb-4">
                        Clinical Compartments
                    </span>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Proposed Clinic – Interior Layout</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                        Integrated layout featuring doctor consultation room, nurse check-up area, diagnostic station,
                        and grooming/treatment rooms.
                    </p>
                    <div
                        class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 flex items-center justify-center p-2 min-h-[300px]">
                        <img src="<?= url('assets/images/initiatives/vetigo-interior.png') ?>"
                            alt="Proposed Mobile Veterinary Clinic - Consultation, Check-up & Treatment Rooms"
                            class="max-h-72 w-full object-contain mx-auto" />
                    </div>
                </div>
                <div class="pt-4 mt-4 border-t border-slate-100 text-xs font-semibold text-slate-500">
                    Sanitary clinical zones with on-board power &amp; water storage
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proposed Services Section (7 Services) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-teal-700">Full-Spectrum Clinical Care</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Proposed Services
            </h2>
            <p class="text-base text-slate-600 mt-2">
                Comprehensive veterinary clinical services proposed to be delivered directly at the animal owner’s
                doorstep.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- 1. Veterinary Consultation and Treatment -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-stethoscope-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Veterinary Consultation &amp; Treatment</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Professional veterinary consultations and basic treatment services delivered by qualified
                        veterinarians on-site.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    Core Clinical Care
                </div>
            </div>

            <!-- 2. Advanced Diagnostics -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-pulse-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Advanced Diagnostics</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Proposed access to digital X-ray, ultrasound and ECG facilities directly inside the mobile
                        clinic unit.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    Digital X-Ray · Ultrasound · ECG
                </div>
            </div>

            <!-- 3. Pathology and Laboratory Services -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-test-tube-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Pathology &amp; Laboratory Services</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Diagnostic support, sample collection, and rapid testing to assist veterinary assessment and
                        precision diagnosis.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    Rapid Pathological Testing
                </div>
            </div>

            <!-- 4. Vaccination and Preventive Care -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-syringe-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Vaccination &amp; Preventive Care</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Support for animal health, routine immunization, deworming, and proactive disease prevention
                        programs.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    Disease Prevention
                </div>
            </div>

            <!-- 5. Veterinary Pharmacy -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-medicine-bottle-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Veterinary Pharmacy</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Access to essential veterinary medicines, supplements, antibiotics, and first-aid supplies
                        directly on-board.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    On-Board Dispensary
                </div>
            </div>

            <!-- 6. Pet Care and Grooming -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl mb-4">
                        <i class="ri-scissors-cut-line"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Pet Care and Grooming</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Basic grooming, hygiene maintenance, coat care, and animal-care services performed in a
                        sanitized environment.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-200/60 text-[11px] font-bold text-teal-700 uppercase tracking-wider">
                    Hygiene &amp; Welfare
                </div>
            </div>

            <!-- 7. Telemedicine and Follow-up -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-teal-400 hover:bg-white transition flex flex-col justify-between md:col-span-2 lg:col-span-3">
                <div class="flex flex-col sm:flex-row sm:items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-xl bg-teal-100 text-teal-700 flex items-center justify-center text-2xl shrink-0">
                        <i class="ri-video-chat-line"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900 mb-1">Telemedicine and Follow-up</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            Technology-enabled consultation, electronic veterinary records, and digital follow-up
                            support connecting pet parents and farmers with expert veterinary specialists.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The Visionary Behind VetiGo MobiCare (Krishna Prashanth Desaraju) -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-slate-200 rounded-3xl p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div
                        class="relative w-56 h-64 sm:w-64 sm:h-72 rounded-2xl overflow-hidden border-2 border-teal-300 shadow-lg bg-slate-100">
                        <img src="<?= url('assets/images/initiatives/vetigo-founder.png') ?>"
                            alt="Krishna Prashanth Desaraju – Founder, VetiGo MobiCare"
                            class="w-full h-full object-cover object-top" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <div class="text-sm font-bold">Krishna Prashanth Desaraju</div>
                            <div class="text-[11px] text-teal-300">Founder, VetiGo MobiCare</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-teal-700">The Visionary Behind VetiGo
                        MobiCare</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                        Krishna Prashanth Desaraju
                    </h2>
                    <blockquote
                        class="text-base font-semibold text-teal-800 italic border-l-4 border-teal-500 pl-4 py-1">
                        “We don’t move the patient. We move the clinic.”
                    </blockquote>
                    <p class="text-sm sm:text-base text-slate-700 leading-relaxed">
                        Krishna Prashanth Desaraju is the visionary behind VetiGo MobiCare, an initiative driven by his
                        passion for animal welfare and the belief that quality veterinary healthcare should be
                        accessible to every animal, regardless of location.
                    </p>
                    <p class="text-sm sm:text-base text-slate-700 leading-relaxed">
                        His personal experience with the challenges of accessing timely veterinary care, particularly
                        during the illness of a beloved pet, inspired him to envision a mobile veterinary healthcare
                        model that brings essential medical services closer to animals and the communities that care for
                        them.
                    </p>
                    <p class="text-sm sm:text-base text-slate-700 leading-relaxed">
                        Through VetiGo MobiCare, his vision is to make veterinary healthcare more accessible, convenient
                        and technology-enabled through fully equipped mobile clinics. The proposed model aims to
                        integrate veterinary consultations, diagnostics, treatment, preventive care and follow-up
                        services under one mobile healthcare platform.
                    </p>
                    <p class="text-sm sm:text-base font-medium text-slate-900">
                        His mission is simple yet meaningful: to bring compassionate, accessible and quality veterinary
                        care closer to every animal.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Collaboration, Partnership Opportunities & Mercora Strategic Role -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-7 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-teal-700">Ecosystem Synergy</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-1">
                        Collaboration and Partnership Opportunities
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base mt-2">
                        VetiGo MobiCare aims to explore partnerships and collaborations with:
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-user-star-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">Veterinary doctors and healthcare
                            professionals</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-heart-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">Pet-care organisations and animal welfare
                            institutions</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-group-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">Dairy cooperatives, farmers and Farmer Producer
                            Organisations (FPOs)</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-store-2-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">Entrepreneurs and potential franchise
                            partners</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-building-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">CSR organisations and institutional
                            partners</span>
                    </div>
                    <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <i class="ri-cpu-line text-teal-600 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm text-slate-800 font-medium">Technology and diagnostic equipment
                            providers</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 bg-slate-900 text-white rounded-3xl p-6 sm:p-8 space-y-4">
                <span class="text-xs font-bold uppercase tracking-wider text-teal-400">Strategic Alignment</span>
                <h3 class="text-xl font-bold text-white">Mercora International – Supporting Strategic Development</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Mercora International showcases VetiGo MobiCare as a strategic initiative and seeks to facilitate
                    its development through strategic consulting, business partnerships, collaboration opportunities and
                    expansion planning.
                </p>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                    Through initiatives such as VetiGo MobiCare, Mercora aims to encourage innovative,
                    technology-enabled solutions that create meaningful social and community impact.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Be Part of the Vision & Contact CTA -->
<section class="py-16 sm:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="bg-gradient-to-br from-slate-900 via-slate-900 to-teal-950 text-white rounded-3xl p-8 sm:p-14 text-center border border-teal-800/40 relative overflow-hidden">
            <div class="max-w-2xl mx-auto space-y-5 relative z-10">
                <span class="text-xs font-bold uppercase tracking-widest text-teal-400">Transforming Animal
                    Healthcare</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                    Be Part of the Vision
                </h2>
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                    Together, we can work towards making accessible veterinary healthcare a reality for more animals and
                    communities.
                </p>
                <p class="text-xs sm:text-sm font-semibold text-teal-300">
                    Interested in collaboration, partnership or franchise opportunities?
                </p>
                <p class="text-xs text-slate-400">
                    Contact Mercora International to explore opportunities to collaborate with VetiGo MobiCare.
                </p>
                <div class="pt-3">
                    <a href="<?= url('/contact') ?>?vertical=healthcare"
                        class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold text-slate-950 bg-teal-400 hover:bg-teal-300 rounded-xl transition shadow-lg shadow-teal-500/20">
                        Contact Mercora International <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>