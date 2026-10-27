<?php
$pageTitle = 'About Us | Company Journey, Leadership & Impact';
$pageDesc = 'Learn about Mercora International, incorporated 29-Jul-2025 in Kondapur, Hyderabad. Meet our leadership team and explore our journey across 11 business verticals.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- 2.1 Hero / Introduction -->
<section class="bg-white border-b border-slate-200 py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">About Mercora International</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 mt-2 mb-6">
                Multidisciplinary Consulting, Technology & Business Transformation
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed mb-6">
                Mercora International is a registered partnership firm (Firm Reg. <strong><?= e(FIRM_REG_NO) ?></strong>), incorporated <strong><?= e(FIRM_INC_DATE) ?></strong>, based in Kondapur, Hyderabad. We partner with enterprises, government bodies, startups, and institutions to engineer scalable, innovation-led solutions that deliver measurable impact across industries and geographies.
            </p>
            <div class="flex flex-wrap gap-2 text-xs">
                <span class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 font-medium">DPIIT: <?= e(DPIIT_NO) ?></span>
                <span class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 font-medium">MSME Udyam: <?= e(UDYAM_REG_NO) ?></span>
                <span class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 font-medium">DGFT IEC: <?= e(IEC_CODE) ?></span>
                <span class="px-3 py-1 rounded-md bg-slate-100 text-slate-700 font-medium">GSTIN: <?= e(GSTIN_NO) ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Company Ecosystem & Statutory Details -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Operating Scope</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900">
                    Catalyst for Sustainable Development & Economic Growth
                </h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Our integrated service ecosystem spans <strong>AgriTech, Digital Transformation, Global Trade, Healthcare, Education, Financial Advisory, Textile & Apparel, NextGen Innovation, Women Empowerment, Arts & Culture, and CSR</strong> — positioning Mercora as a trusted catalyst for sustainable growth.
                </p>
                <p class="text-slate-600 text-base leading-relaxed">
                    Whether establishing precision drone agricultural services, architecting cloud SaaS platforms under Mercosys, structuring global import-export transactions, or establishing 100 Women-Driven Coffee Shops with SERP AP, Mercora delivers accountability at every stage of execution.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="<?= url('/partnerships') ?>" class="inline-flex items-center px-5 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition">
                        Explore 7 Signed MOUs <i class="ri-arrow-right-line ml-2"></i>
                    </a>
                    <a href="<?= url('/it-services') ?>" class="inline-flex items-center px-5 py-3 text-sm font-semibold text-slate-700 bg-white border border-slate-200 hover:bg-slate-100 rounded-lg transition">
                        View IT Services
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 pb-3 border-b border-slate-100">Official Firm Credentials</h3>
                    <div class="divide-y divide-slate-100 text-sm space-y-3 pt-1">
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">Firm Registration</span>
                            <span class="font-semibold text-slate-900"><?= e(FIRM_REG_NO) ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">Date of Incorporation</span>
                            <span class="font-semibold text-slate-900"><?= e(FIRM_INC_DATE) ?></span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">DPIIT Recognition</span>
                            <span class="font-semibold text-slate-900">DIPP258473 (Valid to 2035)</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">MSME Udyam</span>
                            <span class="font-semibold text-slate-900">UDYAM-TS-02-0265208</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">DGFT IEC Code</span>
                            <span class="font-semibold text-slate-900">ACEFM7191A (Global Trade)</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-500">Headquarters</span>
                            <span class="font-semibold text-slate-900">Kondapur, Hyderabad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2.2 Vision & Mission -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Core Purpose</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Vision & Mission
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8">
                <div class="w-12 h-12 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center text-2xl mb-6">
                    <i class="ri-eye-line"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Vision</h3>
                <p class="text-slate-600 text-base leading-relaxed">
                    To be a globally trusted innovation and consulting partner — empowering entities through technology, sustainability, and strategic growth.
                </p>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-2xl p-8">
                <div class="w-12 h-12 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center text-2xl mb-6">
                    <i class="ri-compass-3-line"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Mission</h3>
                <ul class="space-y-3 text-slate-600 text-sm sm:text-base">
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-emerald-600 mt-0.5 text-base flex-shrink-0"></i>
                        <span>Accelerate adoption of emerging technologies</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-emerald-600 mt-0.5 text-base flex-shrink-0"></i>
                        <span>Build sustainable and scalable ecosystems</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-emerald-600 mt-0.5 text-base flex-shrink-0"></i>
                        <span>Empower communities through entrepreneurship and skill development</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ri-checkbox-circle-fill text-emerald-600 mt-0.5 text-base flex-shrink-0"></i>
                        <span>Deliver measurable business value through innovation, expertise, and operational excellence</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 2.3 Company Journey Roadmap -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Milestones</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Our Company Journey
            </h2>
            <p class="text-slate-600 text-base mt-2">The legal, commercial, and operational milestones shaping Mercora International.</p>
        </div>

        <!-- Enhanced Timeline Structure -->
        <div class="relative max-w-4xl">
            <!-- Continuous Vertical Connecting Line (Starts at first dot center, ends at last dot center) -->
            <div class="absolute left-4 sm:left-6 -translate-x-1/2 top-7 bottom-7 w-0.5 bg-gradient-to-b from-amber-500 via-slate-300 to-slate-200 pointer-events-none"></div>

            <div class="space-y-6 sm:space-y-7">
                <?php foreach ($COMPANY_JOURNEY as $idx => $item): ?>
                <div class="relative flex items-start gap-4 sm:gap-6 group">
                    <!-- Timeline Node (Mathematically centered on vertical line) -->
                    <div class="relative z-10 flex-shrink-0 w-8 sm:w-12 flex justify-center pt-6">
                        <div class="w-4 h-4 sm:w-5 sm:h-5 rounded-full bg-white ring-4 ring-amber-100 group-hover:ring-amber-200/80 border-2 border-amber-500 group-hover:border-amber-600 shadow-sm transition-all duration-300 flex items-center justify-center">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500 group-hover:scale-125 transition-transform duration-300"></span>
                        </div>
                    </div>

                    <!-- Milestone Card -->
                    <div class="flex-1 bg-white border border-slate-200/90 rounded-2xl p-5 sm:p-6 shadow-[0_2px_12px_rgba(0,0,0,0.03)] hover:shadow-lg hover:border-amber-400/50 transition-all duration-300 relative overflow-hidden">
                        <!-- Top Metadata Row -->
                        <div class="flex flex-wrap items-center justify-between gap-3 mb-2">
                            <span class="inline-flex items-center gap-1.5 text-xs font-bold text-amber-700 bg-amber-50 border border-amber-200/80 px-3 py-1 rounded-full shadow-xs">
                                <i class="ri-calendar-event-line text-amber-500"></i>
                                <?= e($item['date']) ?>
                            </span>
                            <span class="inline-flex items-center text-[11px] font-bold tracking-wider uppercase text-slate-500 bg-slate-100/80 px-2.5 py-0.5 rounded-md border border-slate-200/60">
                                <?= e($item['badge']) ?>
                            </span>
                        </div>

                        <!-- Milestone Title -->
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 group-hover:text-amber-600 transition-colors mt-2.5">
                            <?= e($item['title']) ?>
                        </h4>

                        <!-- Milestone Description -->
                        <p class="text-sm text-slate-600 leading-relaxed mt-1.5">
                            <?= e($item['desc']) ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 2.4 Leadership Team (2-Column Desktop Grid) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Executive Directory</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Leadership Team
            </h2>
            <p class="text-slate-600 text-base mt-2">Senior entrepreneurs, IT consultants, and community leaders steering our verticals.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <?php foreach ($LEADERSHIP_TEAM as $member): ?>
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 sm:p-8 flex flex-col sm:flex-row gap-6 items-start">
                <img src="<?= url($member['photo']) ?>" alt="<?= e($member['name']) ?>" class="w-24 h-24 rounded-xl object-cover border border-slate-200 flex-shrink-0" />
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-slate-900"><?= e($member['name']) ?></h3>
                    <div class="text-xs font-bold text-amber-700"><?= e($member['role']) ?></div>
                    <div class="text-xs font-medium text-slate-500 bg-white px-2 py-1 rounded inline-block border border-slate-200">
                        <?= e($member['qualification']) ?>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pt-1"><?= e($member['bio']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
