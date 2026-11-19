<?php
$pageTitle = 'Strategic Partnerships & Signed MOUs (12 Confirmed Alliances)';
$pageDesc = 'Explore Mercora International\'s 12 confirmed signed-MOU institutional alliances across IT, drone technology, defence deep-tech, enterprise SaaS, testing & certification, healthcare access, robotics, and global trade.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <div>
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                    <i class="ri-handshake-line text-amber-400"></i> Strategic Institutional Alliances
                </span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                Strategic Partnerships &amp; Confirmed MOUs
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Mercora International operates through high-conviction collaborative models. We have formalized
                <strong>12 strategic signed MOUs</strong> across multiple sectors with domain pioneers in IT and digital transformation, drone aviation, robotics and AI, defense deep-tech, healthcare access, testing and certification, enterprise software, and global trade.
            </p>
            <div class="flex flex-wrap items-center gap-4 pt-2">
                <a href="#partner-mous"
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-950 bg-amber-500 hover:bg-amber-400 rounded-lg transition shadow-sm">
                    View 12 Signed MOUs <i class="ri-calendar-check-line ml-2"></i>
                </a>
                <a href="#partner-dossiers"
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-lg transition">
                    Browse Full Dossiers <i class="ri-arrow-down-line ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Chronological MOU Signed List (Section 6 Table) -->
<section id="partner-mous" class="py-12 sm:py-16 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-8">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-slate-900 mt-1">
                12 Confirmed Strategic MOUs (Chronological Order)
            </h2>
            <p class="text-sm sm:text-base text-slate-600 mt-2">
                All 12 formalised bilateral and tripartite Memorandums of Understanding listed in execution date order.
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse text-sm">
                    <thead>
                        <tr class="bg-slate-900 text-white text-xs uppercase tracking-wider font-semibold">
                            <th class="py-3.5 px-4 sm:px-6 w-16 text-center">#</th>
                            <th class="py-3.5 px-4 sm:px-6">Strategic Partner</th>
                            <th class="py-3.5 px-4 sm:px-6">Domain / Focus Area</th>
                            <th class="py-3.5 px-4 sm:px-6 whitespace-nowrap">MOU Signed Date</th>
                            <th class="py-3.5 px-4 sm:px-6 text-right">Dossier</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        <?php
                        $i = 1;
                        foreach ($PARTNERS as $key => $p):
                        ?>
                            <tr class="hover:bg-amber-50/40 transition">
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 text-center font-mono text-xs"><?= $i++ ?></td>
                                <td class="py-3.5 px-4 sm:px-6">
                                    <div class="flex items-center gap-3">
                                        <img src="<?= url($p['logo']) ?>" alt="<?= e($p['name']) ?>" class="h-7 w-12 object-contain bg-white rounded border border-slate-200 p-0.5 shrink-0" />
                                        <span class="font-bold text-slate-900"><?= e($p['name']) ?></span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 text-xs sm:text-sm text-slate-600"><?= e($p['role']) ?></td>
                                <td class="py-3.5 px-4 sm:px-6 whitespace-nowrap">
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
                                        <i class="ri-calendar-event-line text-emerald-600"></i>
                                        <?= e($p['mou_date']) ?>
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 text-right whitespace-nowrap">
                                    <a href="#<?= e($key) ?>" class="inline-flex items-center text-xs font-bold text-amber-700 hover:text-amber-900">
                                        View <i class="ri-arrow-down-line ml-0.5"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Authoritative Partnership Dossiers (12 Confirmed Alliances) -->
<section id="partner-dossiers" class="py-12 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-8">
            <?php foreach ($PARTNERS as $key => $p):
                $collabImg = !empty($p['collab_image']) ? $p['collab_image'] : '';
                $collabBadge = $p['collab_badge'] ?? 'Collaboration Record';
                $collabCaption = $p['collab_caption'] ?? ($p['name'] . ' Collaboration');
                $galleryId = $p['gallery_id'] ?? '';
                $hasCollab = !empty($collabImg);
                $isLogoOnly = in_array($key, ['venkatesh-m-associates', 'delhi-test-house']);
            ?>
                <article id="<?= e($key) ?>"
                    class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 hover:border-slate-300 hover:shadow-md transition duration-300 scroll-mt-24">

                    <?php if ($hasCollab): ?>
                        <!-- Two-Column Layout (With Collaboration Photo on Right) -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                            <!-- Left Side: Partner Credentials & Dossier Narrative -->
                            <div class="lg:col-span-7 xl:col-span-8 flex flex-col justify-between h-full">
                                <div>
                                    <!-- Header: Partner Logo, Badges & Titles -->
                                    <div class="flex items-start gap-4 sm:gap-5 pb-5 mb-5 border-b border-slate-100">
                                        <div
                                            class="w-24 sm:w-28 h-16 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center p-2.5 flex-shrink-0 shadow-xs">
                                            <img src="<?= url($p['logo']) ?>" alt="<?= e($p['name']) ?>"
                                                class="max-h-12 max-w-[96px] object-contain" />
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex flex-wrap items-center gap-2 mb-1.5">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-bold uppercase tracking-wider bg-amber-50 text-amber-800 border border-amber-200">
                                                    <?= e($p['tag']) ?>
                                                </span>
                                                <span
                                                    class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
                                                    <i class="ri-calendar-check-fill text-emerald-600"></i>
                                                    MOU Signed: <?= e($p['mou_date']) ?>
                                                </span>
                                            </div>
                                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 leading-tight">
                                                <?= e($p['name']) ?>
                                            </h3>
                                            <p class="text-xs sm:text-sm font-semibold text-amber-700 mt-1">
                                                <?= e($p['role']) ?>
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Narrative Full Text -->
                                    <div class="text-sm sm:text-base text-slate-600 leading-relaxed">
                                        <p><?= e($p['full_text']) ?></p>
                                    </div>
                                </div>

                                <!-- Bottom Actions & CTAs -->
                                <div class="pt-5 mt-6 border-t border-slate-100 flex flex-wrap items-center justify-between gap-4">
                                    <div class="flex flex-wrap items-center gap-3">
                                        <?php if ($key === 'native-araku-coffee' && !empty($p['cta']) && !empty($p['link'])): ?>
                                            <a href="<?= url($p['link']) ?>"
                                                class="inline-flex items-center justify-center px-4 py-2.5 text-xs sm:text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-lg transition shadow-sm whitespace-nowrap">
                                                <?= e($p['cta']) ?> <i class="ri-arrow-right-line ml-1.5"></i>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (!empty($galleryId)): ?>
                                            <a href="<?= url('/gallery') ?>#<?= e($galleryId) ?>"
                                                class="inline-flex items-center gap-1.5 px-3 py-2 rounded-lg text-xs font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition">
                                                <i class="ri-camera-lens-line text-amber-600"></i> View in Gallery Records
                                                <i class="ri-arrow-right-up-line ml-0.5 text-slate-400"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    <a href="#partner-inquiry"
                                        class="inline-flex items-center text-xs font-semibold text-slate-500 hover:text-slate-800 transition">
                                        Partnership Inquiries <i class="ri-arrow-down-line ml-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Right Side: Collaboration Photographic Record / Visual Showcase -->
                            <div class="lg:col-span-5 xl:col-span-4 flex flex-col justify-start">
                                <div
                                    class="group/photo relative rounded-2xl overflow-hidden border border-slate-200 bg-slate-100 shadow-xs hover:shadow-md transition duration-300">
                                    <div
                                        class="relative w-full aspect-[4/3] <?= $isLogoOnly ? 'p-6 flex items-center justify-center bg-white' : 'bg-slate-900 overflow-hidden' ?>">
                                        <a href="<?= url($collabImg) ?>" class="mc-lightbox block w-full h-full relative"
                                            data-gallery="partner-dossiers"
                                            data-glightbox="title: <?= e($p['name']) ?>; description: <?= e($collabCaption) ?> &bull; MOU: <?= e($p['mou_date']) ?>;">
                                            <img src="<?= url($collabImg) ?>" alt="<?= e($collabCaption) ?>"
                                                loading="lazy"
                                                class="w-full h-full <?= $isLogoOnly ? 'object-contain' : 'object-cover object-top' ?> transition duration-500 group-hover/photo:scale-105" />

                                            <!-- Floating Badge Overlay -->
                                            <div class="absolute top-3 left-3 z-10 pointer-events-none">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[10px] font-bold uppercase tracking-wider bg-slate-950/85 backdrop-blur-md text-white border border-white/20 shadow-xs">
                                                    <i class="ri-shield-check-line text-emerald-400"></i>
                                                    <?= e($collabBadge) ?>
                                                </span>
                                            </div>

                                            <!-- Hover Overlay with Zoom Icon -->
                                            <div
                                                class="absolute inset-0 bg-slate-950/25 opacity-0 group-hover/photo:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-white/95 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover/photo:scale-100 transition duration-300">
                                                    <i class="ri-zoom-in-line text-base font-bold"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Image Caption & Cross-Link -->
                                    <div class="p-3.5 bg-slate-50 border-t border-slate-200/80">
                                        <div class="flex items-start justify-between gap-2">
                                            <div class="flex items-start gap-1.5 text-xs text-slate-700 leading-snug">
                                                <i class="ri-image-line text-amber-600 mt-0.5 flex-shrink-0"></i>
                                                <span class="font-medium"><?= e($collabCaption) ?></span>
                                            </div>
                                            <?php if (!empty($galleryId)): ?>
                                                <a href="<?= url('/gallery') ?>#<?= e($galleryId) ?>"
                                                    title="View complete event record in gallery"
                                                    class="text-[11px] font-bold text-amber-600 hover:text-amber-700 whitespace-nowrap flex-shrink-0">
                                                    Gallery &rarr;
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else: ?>
                        <!-- Single Full-Width Column Layout (Default UI when no collaboration image is specified) -->
                        <div
                            class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 pb-6 mb-6 border-b border-slate-100">
                            <div class="flex items-center gap-5">
                                <div
                                    class="w-28 h-16 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-center p-2 flex-shrink-0 shadow-xs">
                                    <img src="<?= url($p['logo']) ?>" alt="<?= e($p['name']) ?>"
                                        class="max-h-12 max-w-[96px] object-contain" />
                                </div>
                                <div>
                                    <div class="flex flex-wrap items-center gap-2 mb-1">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-amber-50 text-amber-800 border border-amber-200">
                                            <?= e($p['tag']) ?>
                                        </span>
                                        <span
                                            class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-800 border border-emerald-200">
                                            <i class="ri-calendar-check-fill text-emerald-600"></i>
                                            MOU Signed: <?= e($p['mou_date']) ?>
                                        </span>
                                    </div>
                                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900"><?= e($p['name']) ?></h3>
                                    <p class="text-xs sm:text-sm font-semibold text-amber-700 mt-0.5"><?= e($p['role']) ?></p>
                                </div>
                            </div>
                            <?php if ($key === 'native-araku-coffee' && !empty($p['cta']) && !empty($p['link'])): ?>
                                <div>
                                    <a href="<?= url($p['link']) ?>"
                                        class="inline-flex items-center justify-center px-4 py-2.5 text-xs sm:text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 rounded-lg transition shadow-sm whitespace-nowrap">
                                        <?= e($p['cta']) ?> <i class="ri-arrow-right-line ml-1.5"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Full Width Narrative -->
                        <div class="text-sm sm:text-base text-slate-600 leading-relaxed">
                            <p><?= e($p['full_text']) ?></p>
                        </div>

                        <!-- Bottom Footer -->
                        <div class="pt-5 mt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                            <div>
                                <?php if (!empty($galleryId)): ?>
                                    <a href="<?= url('/gallery') ?>#<?= e($galleryId) ?>"
                                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 border border-slate-200 transition">
                                        <i class="ri-camera-lens-line text-amber-600"></i> View in Gallery Records
                                    </a>
                                <?php endif; ?>
                            </div>
                            <a href="#partner-inquiry"
                                class="inline-flex items-center text-xs font-semibold text-slate-500 hover:text-slate-800 transition">
                                Partnership Inquiries <i class="ri-arrow-down-line ml-1"></i>
                            </a>
                        </div>
                    <?php endif; ?>

                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Partnership Enquiry Section -->
<section id="partner-inquiry" class="py-16 sm:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <!-- Form Card -->
            <div class="lg:col-span-7 bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                <div class="mb-6">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-600">Institutional
                        Alliances</span>
                    <h3 class="text-2xl font-bold text-slate-900 mt-1">Partner With Mercora International</h3>
                    <p class="text-sm text-slate-600 mt-1">
                        Are you a technology developer, government agency, educational institution, or enterprise
                        looking to co-engineer market solutions? Submit your partnership proposal.
                    </p>
                </div>

                <form class="mc-ajax-form space-y-4">
                    <input type="hidden" name="csrf_token" value="<?= e($_SESSION['csrf_token']) ?>" />
                    <input type="hidden" name="type" value="partnership_collaboration_proposal" />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Full Name *</label>
                            <input type="text" name="name"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                                placeholder="e.g. Dr. Rajesh Verma" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Designation / Role
                                *</label>
                            <input type="text" name="designation"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                                placeholder="e.g. Chief Strategy Officer" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Organization / Entity Name
                                *</label>
                            <input type="text" name="company"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                                placeholder="e.g. GeoTech Labs Pvt Ltd" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Collaboration Vertical
                                *</label>
                            <select name="vertical"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5 bg-white"
                                required>
                                <option value="">Select Vertical</option>
                                <option value="AgriTech & Drones">AgriTech & Drone Systems</option>
                                <option value="Robotics, Drones & AI">Robotics, Drones & AI (X Dimension / Drone Anatomy)</option>
                                <option value="Testing & Certification">Testing, Inspection & Certification (Delhi Test House)</option>
                                <option value="Healthcare & Insurance">Healthcare Access & Wellbeing (CLiQiN Health / MindSmith)</option>
                                <option value="Global Trade & Agarwood">Global Trade, FMCG & Agarwood (Agarwood Impex / RPGS)</option>
                                <option value="Defence Deep-Tech & iDEX">Defence Deep-Tech (iDEX / Surveillance / Tridantor)</option>
                                <option value="Enterprise SaaS & Mercosys">Enterprise SaaS & Mercosys (KavachApp / APT IT)</option>
                                <option value="Specialty Coffee & Franchise">Specialty Coffee & Franchise (Native Araku Coffee)</option>
                                <option value="The White World Lifestyle">The White World Lifestyle Marketplace</option>
                                <option value="VetiGo MobiCare">VetiGo MobiCare Mobile Veterinary</option>
                                <option value="Women Entrepreneurship & CSR">Women Entrepreneurship & CSR</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Official Email Address
                                *</label>
                            <input type="email" name="email"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                                placeholder="rajesh@geotech.com" required />
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">Contact Phone / WhatsApp
                                *</label>
                            <input type="tel" name="phone"
                                class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                                placeholder="+91 98765 43210" required />
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1.5">Proposed Scope of Association /
                            Capabilities *</label>
                        <textarea name="description" rows="4"
                            class="w-full rounded-lg border-slate-300 text-sm focus:border-slate-900 focus:ring-slate-900 py-2.5 px-3.5"
                            placeholder="Detail your proprietary technology, market access, institutional standing, and proposed synergies with Mercora..."
                            required></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit"
                            class="w-full inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                            Submit Collaboration Proposal <i class="ri-handshake-fill ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right: Partner Callout Sidebar -->
            <div class="lg:col-span-5 space-y-6">
                <div class="bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm">
                    <h4 class="text-base font-bold text-slate-900 mb-2 flex items-center gap-2">
                        <i class="ri-shield-check-line text-amber-600"></i> Institutional Synergy
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-4">
                        Mercora provides business development, public sector liaison, funding facilitation, and
                        enterprise client onboarding, allowing our technology and domain partners to focus on core
                        product engineering and specialized delivery.
                    </p>
                    <ul class="space-y-2 text-xs sm:text-sm text-slate-700">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i>
                            Formal MOU & mutual NDA protections</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i>
                            State & central government tender advisory</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-emerald-600"></i>
                            Co-branded solution packages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>