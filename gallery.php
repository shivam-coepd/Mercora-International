<?php
$pageTitle = 'Events & Engagements Gallery | Official Photographic Records (2025–2026)';
$pageDesc = 'Explore Mercora International\'s comprehensive photographic gallery: Government delegations, institutional MOU signings, international summits, and field expeditions across 2025 and 2026.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/gallery_data.php';

$mouEvents = $MOU_GALLERY_EVENTS ?? [];
$generalEvents = $GALLERY_EVENTS ?? [];

$totalMous = count($mouEvents);
$totalGeneral = count($generalEvents);
$totalRecords = $totalMous + $totalGeneral;

$count2025 = 0;
$count2026 = 0;
$mouCount2025 = 0;
$mouCount2026 = 0;
$genCount2025 = 0;
$genCount2026 = 0;

foreach ($mouEvents as $ev) {
    if (($ev['year'] ?? '') === '2025') {
        $mouCount2025++;
        $count2025++;
    }
    if (($ev['year'] ?? '') === '2026') {
        $mouCount2026++;
        $count2026++;
    }
}
foreach ($generalEvents as $ev) {
    if (($ev['year'] ?? '') === '2025') {
        $genCount2025++;
        $count2025++;
    }
    if (($ev['year'] ?? '') === '2026') {
        $genCount2026++;
        $count2026++;
    }
}

/**
 * Reusable card renderer for both MOU and general event gallery records
 */
function renderGalleryEventCard($event, $isMou = false)
{
    $imgCount = count($event['images'] ?? []);
    $badgeColor = (($event['year'] ?? '') === '2025')
        ? 'bg-amber-50 text-amber-800 border-amber-200'
        : 'bg-blue-50 text-blue-800 border-blue-200';
    $itemType = $isMou ? 'mou' : 'event';
?>
    <!-- Event Card -->
    <article data-year="<?= e($event['year'] ?? '') ?>" data-type="<?= $itemType ?>" id="<?= e($event['id'] ?? '') ?>"
        class="gallery-event-item bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-md transition duration-300 scroll-mt-24">

        <!-- Event Header Bar -->
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 pb-6 border-b border-slate-100">
            <div class="space-y-2 flex-1">
                <div class="flex flex-wrap items-center gap-2">
                    <?php if ($isMou): ?>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200">
                            <i class="ri-shield-check-line text-emerald-600"></i> Signed MOU
                        </span>
                    <?php endif; ?>
                    <!-- Year Tag -->
                    <span class="px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider <?= $badgeColor ?> border">
                        <?= e($event['year'] ?? '') ?>
                    </span>
                    <!-- Date Badge -->
                    <span class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-md text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                        <i class="ri-calendar-line text-amber-600"></i> <?= e($event['date'] ?? '') ?>
                    </span>
                    <!-- Focus Category -->
                    <?php if (!empty($event['category'])): ?>
                        <span class="px-2.5 py-0.5 rounded-md text-xs font-medium text-slate-600 bg-slate-50 border border-slate-200/80">
                            <?= e($event['category']) ?>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Event Title -->
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 leading-snug tracking-tight">
                    <?= e($event['title'] ?? '') ?>
                </h2>
            </div>

            <!-- Photos Count Badge -->
            <div class="flex-shrink-0">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-slate-900 text-white shadow-xs">
                    <i class="ri-image-2-line text-amber-400"></i>
                    <?= $imgCount ?> <?= $imgCount === 1 ? 'Photograph' : 'Photographs' ?>
                </span>
            </div>
        </div>

        <!-- Event Narrative / Description -->
        <?php if (!empty($event['desc'])): ?>
            <div class="py-5 text-sm sm:text-base text-slate-600 leading-relaxed max-w-5xl">
                <p><?= e($event['desc']) ?></p>
            </div>
        <?php endif; ?>

        <!-- Event Image Gallery Showcase Grid -->
        <div class="pt-2">
            <?php if ($imgCount === 1): ?>
                <!-- Single Featured Image Layout -->
                <div class="max-w-xl">
                    <?php $imgFile = $event['images'][0]; ?>
                    <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[16/10]">
                        <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                            class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                            data-glightbox="title: <?= e($event['title'] ?? '') ?>; description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                            <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                alt="<?= e($event['title'] ?? '') ?>" loading="lazy"
                                class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105" />

                            <!-- Hover Overlay with Zoom Icon -->
                            <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                <div class="w-12 h-12 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                    <i class="ri-zoom-in-line text-xl font-bold"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            <?php elseif ($imgCount === 2): ?>
                <!-- 2-Image Grid Layout -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($event['images'] as $imgFile): ?>
                        <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                            <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                                data-glightbox="title: <?= e($event['title'] ?? '') ?>; description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                                <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                    alt="<?= e($event['title'] ?? '') ?>" loading="lazy"
                                    class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105" />

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                    <div class="w-11 h-11 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <i class="ri-zoom-in-line text-lg font-bold"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php elseif ($imgCount === 3): ?>
                <!-- 3-Image Grid Layout -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <?php foreach ($event['images'] as $imgFile): ?>
                        <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                            <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                                data-glightbox="title: <?= e($event['title'] ?? '') ?>; description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                                <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                    alt="<?= e($event['title'] ?? '') ?>" loading="lazy"
                                    class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105" />

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                    <div class="w-10 h-10 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <i class="ri-zoom-in-line text-base font-bold"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php elseif ($imgCount === 4): ?>
                <!-- 4-Image Grid Layout -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php foreach ($event['images'] as $imgFile): ?>
                        <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                            <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                                data-glightbox="title: <?= e($event['title'] ?? '') ?>; description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                                <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                    alt="<?= e($event['title'] ?? '') ?>" loading="lazy"
                                    class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105" />

                                <!-- Hover Overlay -->
                                <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                    <div class="w-10 h-10 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <i class="ri-zoom-in-line text-base font-bold"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php else: ?>
                <!-- Multi-Image Layout (>4 images): Featured first image + Thumbnail grid -->
                <div class="space-y-4">
                    <?php $firstImg = $event['images'][0]; ?>
                    <div class="max-w-2xl">
                        <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[16/10]">
                            <a href="<?= url('assets/images/mercora/gallery/' . $firstImg) ?>"
                                class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                                data-glightbox="title: <?= e($event['title'] ?? '') ?> (Photo 1 of <?= $imgCount ?>); description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                                <img src="<?= url('assets/images/mercora/gallery/' . $firstImg) ?>"
                                    alt="<?= e($event['title'] ?? '') ?> - Primary" loading="lazy"
                                    class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105" />
                                <span class="absolute top-2.5 left-2.5 bg-slate-950/80 backdrop-blur-xs text-white text-[11px] font-semibold px-2.5 py-0.5 rounded pointer-events-none">
                                    Featured Photograph (1/<?= $imgCount ?>)
                                </span>
                                <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                    <div class="w-12 h-12 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                        <i class="ri-zoom-in-line text-xl font-bold"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Thumbnails Strip -->
                    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 gap-3 pt-1">
                        <?php foreach (array_slice($event['images'], 1) as $idx => $imgFile):
                            $imgIndex = $idx + 1;
                        ?>
                            <div class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                                <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                    class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id'] ?? '') ?>"
                                    data-glightbox="title: <?= e($event['title'] ?? '') ?> (Photo <?= $imgIndex + 1 ?> of <?= $imgCount ?>); description: <?= e($event['date'] ?? '') ?> &bull; <?= e($event['desc'] ?? '') ?>;">
                                    <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                        alt="<?= e($event['title'] ?? '') ?> - Photo <?= $imgIndex + 1 ?>" loading="lazy"
                                        class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />
                                    <span class="absolute top-2 left-2 bg-slate-950/70 backdrop-blur-xs text-white text-[10px] font-semibold px-2 py-0.5 rounded pointer-events-none">
                                        <?= $imgIndex + 1 ?>/<?= $imgCount ?>
                                    </span>
                                    <div class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                        <div class="w-9 h-9 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                            <i class="ri-zoom-in-line text-sm font-bold"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </article>
<?php
}
?>

<!-- Hero Section with Category & Year Filters -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20 relative overflow-hidden">
    <!-- Subtle Ambient Glow -->
    <div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-amber-500/10 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 rounded-full bg-blue-500/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div>
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700 shadow-sm">
                    <i class="ri-gallery-line text-amber-400"></i> Photographic Archive (2025 – 2026)
                </span>
            </div>
            <h1
                class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight font-display">
                Events & Engagements Gallery
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed font-sans">
                Official photographic documentation of strategic institutional MOUs, bilateral workshops, high-level policy conferences, and grassroots field expeditions from July 2025 to October 2026.
            </p>

            <!-- Dual Filter Bar: Category & Year -->
            <div class="pt-4 space-y-4">
                <!-- 1. Category Filter -->
                <div>
                    <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-2">
                        Filter by Category:
                    </div>
                    <div class="flex flex-wrap gap-2.5" id="categoryFilterGroup">
                        <button type="button"
                            class="category-filter-btn inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-bold transition shadow-sm bg-amber-500 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-category-filter="all">
                            <span>All Records</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-950/20 text-slate-950 text-xs font-extrabold"><?= $totalRecords ?></span>
                        </button>
                        <button type="button"
                            class="category-filter-btn inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-category-filter="mou">
                            <i class="ri-shield-check-line text-emerald-400"></i>
                            <span>Signed MOUs</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $totalMous ?></span>
                        </button>
                        <button type="button"
                            class="category-filter-btn inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-category-filter="events">
                            <i class="ri-calendar-event-line text-blue-400"></i>
                            <span>Events & Engagements</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $totalGeneral ?></span>
                        </button>
                    </div>
                </div>

                <!-- 2. Year Filter -->
                <div>
                    <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-2">
                        Filter by Year:
                    </div>
                    <div class="flex flex-wrap gap-2.5" id="galleryFilterGroup">
                        <button type="button"
                            class="gallery-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs sm:text-sm font-bold transition shadow-sm bg-slate-100 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-year-filter="all">
                            <span>All Years</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-900/15 text-slate-950 text-xs font-extrabold"><?= $totalRecords ?></span>
                        </button>
                        <button type="button"
                            class="gallery-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-year-filter="2025">
                            <span>2025</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $count2025 ?></span>
                        </button>
                        <button type="button"
                            class="gallery-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                            data-year-filter="2026">
                            <span>2026</span>
                            <span class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $count2026 ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Gallery Content -->
<section class="py-14 sm:py-20 bg-slate-50 border-b border-slate-200 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Active Filter Indicator Banner -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 pb-4 border-b border-slate-200">
            <div>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-wider" id="activeFilterHeading">Viewing All Records (2025–2026)</span>
                <p class="text-sm text-slate-500 mt-0.5">Click any image to expand in high-definition full-screen preview with zoom.</p>
            </div>
            <div class="text-xs text-slate-500">
                Showing <span id="visibleTotalCount" class="font-bold text-slate-900"><?= $totalRecords ?></span> of <?= $totalRecords ?> Total Photographic Records
            </div>
        </div>

        <!-- Section 1: Conferences, Summits & Field Engagements (Separated) -->
        <div id="eventsSection" class="gallery-category-section space-y-6 pt-6">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 pb-4 border-b border-slate-200">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider bg-blue-50 text-blue-800 border border-blue-200">
                            <i class="ri-calendar-event-line text-blue-600"></i> Summits & Delegations
                        </span>
                        <span class="text-xs text-slate-500 font-medium">Events & Field Expeditions</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        Conferences, Summits & Field Engagements
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 max-w-3xl leading-relaxed">
                        Official photographic documentation of international summits, high-level policy conferences, parliamentary dialogues, and grassroots expeditions.
                    </p>
                </div>
                <div class="text-xs text-slate-500 flex-shrink-0 pt-1">
                    Showing <span id="visibleEventsCount" class="font-bold text-slate-900"><?= $totalGeneral ?></span> of <?= $totalGeneral ?> Events
                </div>
            </div>

            <!-- General Events Cards Container -->
            <div class="space-y-6 sm:space-y-8" id="generalEventsContainer">
                <?php foreach ($generalEvents as $event): ?>
                    <?php renderGalleryEventCard($event, false); ?>
                <?php endforeach; ?>
            </div>

            <!-- Empty State for Events section when filtered out -->
            <div id="eventsEmptyState" class="hidden py-10 px-6 text-center bg-white border border-dashed border-slate-300 rounded-2xl">
                <i class="ri-calendar-close-line text-4xl text-slate-400 mb-2 block"></i>
                <h3 class="text-base font-bold text-slate-800">No events found for this year</h3>
                <p class="text-xs text-slate-500 mt-1">Try selecting another year filter or switching to All Records.</p>
            </div>
        </div>

        <!-- Section 2: Official MOU Signings & Collaborations (Separated) -->
        <div id="mouSection" class="gallery-category-section space-y-6">
            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 pb-4 border-b border-slate-200">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200">
                            <i class="ri-shield-check-line text-emerald-600"></i> Strategic Alliances
                        </span>
                        <span class="text-xs text-slate-500 font-medium">Confirmed Bilateral Partnerships</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                        Official MOU Signings & Strategic Collaborations
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 mt-1 max-w-3xl leading-relaxed">
                        Official photographic records of executed Memorandum of Understanding (MOU) agreements, bilateral signing ceremonies, and formal leadership alliances.
                    </p>
                </div>
                <div class="text-xs text-slate-500 flex-shrink-0 pt-1">
                    Showing <span id="visibleMouCount" class="font-bold text-slate-900"><?= $totalMous ?></span> of <?= $totalMous ?> MOU Records
                </div>
            </div>

            <!-- MOU Cards Container -->
            <div class="space-y-6 sm:space-y-8" id="mouEventsContainer">
                <?php foreach ($mouEvents as $event): ?>
                    <?php renderGalleryEventCard($event, true); ?>
                <?php endforeach; ?>
            </div>

            <!-- Empty State for MOU section when filtered out -->
            <div id="mouEmptyState" class="hidden py-10 px-6 text-center bg-white border border-dashed border-slate-300 rounded-2xl">
                <i class="ri-file-search-line text-4xl text-slate-400 mb-2 block"></i>
                <h3 class="text-base font-bold text-slate-800">No MOU signing records for this year</h3>
                <p class="text-xs text-slate-500 mt-1">Try selecting another year filter or switching to All Records.</p>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Filter & Lightbox Sync Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryButtons = document.querySelectorAll("#categoryFilterGroup .category-filter-btn");
        const yearButtons = document.querySelectorAll("#galleryFilterGroup .gallery-filter-btn");

        const mouSection = document.getElementById("mouSection");
        const eventsSection = document.getElementById("eventsSection");

        const mouCards = document.querySelectorAll("#mouEventsContainer .gallery-event-item");
        const eventCards = document.querySelectorAll("#generalEventsContainer .gallery-event-item");

        const mouEmptyState = document.getElementById("mouEmptyState");
        const eventsEmptyState = document.getElementById("eventsEmptyState");

        const visibleTotalCounter = document.getElementById("visibleTotalCount");
        const visibleMouCounter = document.getElementById("visibleMouCount");
        const visibleEventsCounter = document.getElementById("visibleEventsCount");
        const activeHeading = document.getElementById("activeFilterHeading");

        let currentCategory = "all"; // 'all', 'mou', 'events'
        let currentYear = "all"; // 'all', '2025', '2026'
        let currentLightbox = null;

        function initLightbox() {
            if (typeof GLightbox !== "undefined") {
                if (currentLightbox) {
                    currentLightbox.destroy();
                }
                currentLightbox = GLightbox({
                    selector: ".mc-lightbox",
                    touchNavigation: true,
                    loop: true,
                    zoomable: true
                });
            }
        }

        function applyFilters() {
            // 1. Control visibility of Section 1 (MOUs)
            let visibleMous = 0;
            if (currentCategory === "events") {
                if (mouSection) mouSection.style.display = "none";
            } else {
                if (mouSection) mouSection.style.display = "block";
                mouCards.forEach(card => {
                    const itemYear = card.getAttribute("data-year");
                    if (currentYear === "all" || itemYear === currentYear) {
                        card.style.display = "block";
                        visibleMous++;
                    } else {
                        card.style.display = "none";
                    }
                });
                if (mouEmptyState) {
                    mouEmptyState.classList.toggle("hidden", visibleMous > 0);
                }
            }
            if (visibleMouCounter) {
                visibleMouCounter.textContent = visibleMous;
            }

            // 2. Control visibility of Section 2 (General Events)
            let visibleEvents = 0;
            if (currentCategory === "mou") {
                if (eventsSection) eventsSection.style.display = "none";
            } else {
                if (eventsSection) eventsSection.style.display = "block";
                eventCards.forEach(card => {
                    const itemYear = card.getAttribute("data-year");
                    if (currentYear === "all" || itemYear === currentYear) {
                        card.style.display = "block";
                        visibleEvents++;
                    } else {
                        card.style.display = "none";
                    }
                });
                if (eventsEmptyState) {
                    eventsEmptyState.classList.toggle("hidden", visibleEvents > 0);
                }
            }
            if (visibleEventsCounter) {
                visibleEventsCounter.textContent = visibleEvents;
            }

            // 3. Update total counter
            const totalVisible = visibleMous + visibleEvents;
            if (visibleTotalCounter) {
                visibleTotalCounter.textContent = totalVisible;
            }

            // 4. Update heading label
            if (activeHeading) {
                let catLabel = "All Photographic Records";
                if (currentCategory === "mou") catLabel = "Official Signed MOUs";
                if (currentCategory === "events") catLabel = "Conferences & Engagements";

                let yearLabel = "2025–2026";
                if (currentYear === "2025") yearLabel = "2025";
                if (currentYear === "2026") yearLabel = "2026";

                activeHeading.textContent = `Viewing ${catLabel} (${yearLabel})`;
            }

            // 5. Re-init lightbox on visible elements
            setTimeout(initLightbox, 50);
        }

        // Category button click handlers
        categoryButtons.forEach(btn => {
            btn.addEventListener("click", function() {
                currentCategory = this.getAttribute("data-category-filter");

                categoryButtons.forEach(b => {
                    b.className = "category-filter-btn inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400";
                    const pill = b.querySelector("span:last-child");
                    if (pill) pill.className = "px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs";
                });

                this.className = "category-filter-btn inline-flex items-center gap-2 px-4 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm font-bold transition shadow-sm bg-amber-500 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400";
                const activePill = this.querySelector("span:last-child");
                if (activePill) activePill.className = "px-2 py-0.5 rounded-full bg-slate-950/20 text-slate-950 text-xs font-extrabold";

                applyFilters();
            });
        });

        // Year button click handlers
        yearButtons.forEach(btn => {
            btn.addEventListener("click", function() {
                currentYear = this.getAttribute("data-year-filter");

                yearButtons.forEach(b => {
                    b.className = "gallery-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800/80 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400";
                    const pill = b.querySelector("span:last-child");
                    if (pill) pill.className = "px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs";
                });

                this.className = "gallery-filter-btn inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs sm:text-sm font-bold transition shadow-sm bg-slate-100 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400";
                const activePill = this.querySelector("span:last-child");
                if (activePill) activePill.className = "px-2 py-0.5 rounded-full bg-slate-900/15 text-slate-950 text-xs font-extrabold";

                applyFilters();
            });
        });

        initLightbox();
    });
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>