<?php
$pageTitle = 'Events & Engagements Gallery | Official Photographic Records (2025–2026)';
$pageDesc = 'Explore Mercora International\'s comprehensive photographic gallery: Government delegations, institutional MOU signings, international summits, and field expeditions across 2025 and 2026.';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/gallery_data.php';

// Count total events and photos
$totalEvents = count($GALLERY_EVENTS);
$totalImages = 0;
$count2025 = 0;
$count2026 = 0;

foreach ($GALLERY_EVENTS as $ev) {
    $totalImages += count($ev['images']);
    if ($ev['year'] === '2025')
        $count2025++;
    if ($ev['year'] === '2026')
        $count2026++;
}
?>

<!-- Hero Section with Year Filters -->
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
                Official photographic documentation of bilateral workshops, high-level policy conferences, strategic
                institutional alliances, and grassroots field expeditions from July 2025 to October 2026.
            </p>

            <!-- Year Filter Tabs -->
            <div class="pt-4">
                <div class="text-xs uppercase tracking-wider text-slate-400 font-semibold mb-2.5">
                    Filter Gallery by Year:
                </div>
                <div class="flex flex-wrap gap-2.5" id="galleryFilterGroup">
                    <button type="button"
                        class="gallery-filter-btn inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition shadow-sm bg-amber-500 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400"
                        data-year-filter="all">
                        <span>All Records</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-slate-950/20 text-slate-950 text-xs font-extrabold"><?= $totalEvents ?></span>
                    </button>
                    <button type="button"
                        class="gallery-filter-btn inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                        data-year-filter="2025">
                        <span>2025 Engagements</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $count2025 ?></span>
                    </button>
                    <button type="button"
                        class="gallery-filter-btn inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400"
                        data-year-filter="2026">
                        <span>2026 Engagements</span>
                        <span
                            class="px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs"><?= $count2026 ?></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Gallery Content -->
<section class="py-14 sm:py-20 bg-slate-50 border-b border-slate-200 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Active Filter Indicator Banner -->
        <div class="flex items-center justify-between pb-4 border-b border-slate-200">
            <div>
                <span class="text-xs font-bold text-amber-600 uppercase tracking-wider" id="activeFilterHeading">Viewing
                    All Records</span>
                <p class="text-sm text-slate-500 mt-0.5">Click any image to expand in high-definition full-screen
                    preview with zoom.</p>
            </div>
            <div class="text-xs text-slate-500 hidden sm:block">
                Showing <span id="visibleEventsCount" class="font-bold text-slate-900"><?= $totalEvents ?></span> of
                <?= $totalEvents ?> Events
            </div>
        </div>

        <!-- Events List Container -->
        <div class="space-y-6 sm:space-y-8" id="galleryEventsContainer">
            <?php foreach ($GALLERY_EVENTS as $index => $event):
                $imgCount = count($event['images']);
                $badgeColor = ($event['year'] === '2025')
                    ? 'bg-amber-50 text-amber-800 border-amber-200'
                    : 'bg-blue-50 text-blue-800 border-blue-200';
                ?>
                <!-- Event Card -->
                <article data-year="<?= e($event['year']) ?>" id="<?= e($event['id']) ?>"
                    class="gallery-event-item bg-white border border-slate-200 rounded-2xl p-6 sm:p-8 shadow-sm hover:shadow-md transition duration-300">

                    <!-- Event Header Bar -->
                    <div
                        class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4 pb-6 border-b border-slate-100">
                        <div class="space-y-2 flex-1">
                            <div class="flex flex-wrap items-center gap-2">
                                <!-- Year Tag -->
                                <span
                                    class="px-2.5 py-0.5 rounded-md text-[11px] font-bold uppercase tracking-wider <?= $badgeColor ?> border">
                                    <?= e($event['year']) ?>
                                </span>
                                <!-- Date Badge -->
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-md text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-200">
                                    <i class="ri-calendar-line text-amber-600"></i> <?= e($event['date']) ?>
                                </span>
                                <!-- Focus Category -->
                                <span
                                    class="px-2.5 py-0.5 rounded-md text-xs font-medium text-slate-600 bg-slate-50 border border-slate-200/80">
                                    <?= e($event['category']) ?>
                                </span>
                            </div>

                            <!-- Event Title -->
                            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 leading-snug tracking-tight">
                                <?= e($event['title']) ?>
                            </h2>
                        </div>

                        <!-- Photos Count Badge -->
                        <div class="flex-shrink-0">
                            <span
                                class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-slate-900 text-white shadow-xs">
                                <i class="ri-image-2-line text-amber-400"></i>
                                <?= $imgCount ?>     <?= $imgCount === 1 ? 'Photograph' : 'Photographs' ?>
                            </span>
                        </div>
                    </div>

                    <!-- Event Narrative / Description -->
                    <div class="py-5 text-sm sm:text-base text-slate-600 leading-relaxed max-w-5xl">
                        <p><?= e($event['desc']) ?></p>
                    </div>

                    <!-- Event Image Gallery Showcase Grid -->
                    <div class="pt-2">
                        <?php if ($imgCount === 1): ?>
                            <!-- Single Featured Image Layout -->
                            <div class="max-w-xl">
                                <?php $imgFile = $event['images'][0]; ?>
                                <div
                                    class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[16/10]">
                                    <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                        class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id']) ?>"
                                        data-glightbox="title: <?= e($event['title']) ?>; description: <?= e($event['date']) ?> &bull; <?= e($event['desc']) ?>;">
                                        <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                            alt="<?= e($event['title']) ?>" loading="lazy"
                                            class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />

                                        <!-- Hover Overlay with Zoom Icon -->
                                        <div
                                            class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                            <div
                                                class="w-12 h-12 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
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
                                    <div
                                        class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                                        <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                            class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id']) ?>"
                                            data-glightbox="title: <?= e($event['title']) ?>; description: <?= e($event['date']) ?> &bull; <?= e($event['desc']) ?>;">
                                            <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                                alt="<?= e($event['title']) ?>" loading="lazy"
                                                class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />

                                            <!-- Hover Overlay -->
                                            <div
                                                class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                                <div
                                                    class="w-11 h-11 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
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
                                    <div
                                        class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                                        <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                            class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id']) ?>"
                                            data-glightbox="title: <?= e($event['title']) ?>; description: <?= e($event['date']) ?> &bull; <?= e($event['desc']) ?>;">
                                            <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                                alt="<?= e($event['title']) ?>" loading="lazy"
                                                class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />

                                            <!-- Hover Overlay -->
                                            <div
                                                class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
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
                                    <div
                                        class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                                        <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                            class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id']) ?>"
                                            data-glightbox="title: <?= e($event['title']) ?>; description: <?= e($event['date']) ?> &bull; <?= e($event['desc']) ?>;">
                                            <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                                alt="<?= e($event['title']) ?>" loading="lazy"
                                                class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />

                                            <!-- Hover Overlay -->
                                            <div
                                                class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                                    <i class="ri-zoom-in-line text-base font-bold"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        <?php else: ?>
                            <!-- Multi-Image Responsive Gallery Grid (4+ Images) -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-3.5 sm:gap-4">
                                <?php foreach ($event['images'] as $imgIndex => $imgFile): ?>
                                    <div
                                        class="group relative overflow-hidden rounded-xl bg-slate-100 border border-slate-200 shadow-sm aspect-[4/3]">
                                        <a href="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                            class="mc-lightbox block w-full h-full" data-gallery="gallery-<?= e($event['id']) ?>"
                                            data-glightbox="title: <?= e($event['title']) ?> (Photo <?= $imgIndex + 1 ?> of <?= $imgCount ?>); description: <?= e($event['date']) ?> &bull; <?= e($event['desc']) ?>;">
                                            <img src="<?= url('assets/images/mercora/gallery/' . $imgFile) ?>"
                                                alt="<?= e($event['title']) ?> - Photo <?= $imgIndex + 1 ?>" loading="lazy"
                                                class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105" />

                                            <!-- Photo Index Badge -->
                                            <span
                                                class="absolute top-2 left-2 bg-slate-950/70 backdrop-blur-xs text-white text-[10px] font-semibold px-2 py-0.5 rounded pointer-events-none">
                                                <?= $imgIndex + 1 ?>/<?= $imgCount ?>
                                            </span>

                                            <!-- Hover Overlay -->
                                            <div
                                                class="absolute inset-0 bg-slate-950/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center pointer-events-none">
                                                <div
                                                    class="w-9 h-9 rounded-full bg-white/90 text-slate-900 flex items-center justify-center shadow-lg transform scale-90 group-hover:scale-100 transition duration-300">
                                                    <i class="ri-zoom-in-line text-sm font-bold"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Interactive Filter & Lightbox Sync Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const filterButtons = document.querySelectorAll("#galleryFilterGroup .gallery-filter-btn");
        const eventCards = document.querySelectorAll("#galleryEventsContainer .gallery-event-item");
        const visibleCounter = document.getElementById("visibleEventsCount");
        const activeHeading = document.getElementById("activeFilterHeading");

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

        initLightbox();

        filterButtons.forEach(btn => {
            btn.addEventListener("click", function () {
                const selectedYear = this.getAttribute("data-year-filter");

                // Update active button state
                filterButtons.forEach(b => {
                    b.className = "gallery-filter-btn inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300 border border-slate-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-400";
                    const pill = b.querySelector("span:last-child");
                    if (pill) {
                        pill.className = "px-2 py-0.5 rounded-full bg-slate-700 text-slate-200 text-xs";
                    }
                });

                this.className = "gallery-filter-btn inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs sm:text-sm font-bold transition shadow-sm bg-amber-500 text-slate-950 focus:outline-none focus:ring-2 focus:ring-amber-400";
                const activePill = this.querySelector("span:last-child");
                if (activePill) {
                    activePill.className = "px-2 py-0.5 rounded-full bg-slate-950/20 text-slate-950 text-xs font-extrabold";
                }

                // Update Heading Label
                if (activeHeading) {
                    if (selectedYear === "all") {
                        activeHeading.textContent = "Viewing All Records (2025–2026)";
                    } else if (selectedYear === "2025") {
                        activeHeading.textContent = "Viewing 2025 Events & Engagements";
                    } else if (selectedYear === "2026") {
                        activeHeading.textContent = "Viewing 2026 Events & Engagements";
                    }
                }

                // Filter event articles
                let visibleCount = 0;
                eventCards.forEach(card => {
                    const itemYear = card.getAttribute("data-year");
                    if (selectedYear === "all" || itemYear === selectedYear) {
                        card.style.display = "block";
                        visibleCount++;
                    } else {
                        card.style.display = "none";
                    }
                });

                if (visibleCounter) {
                    visibleCounter.textContent = visibleCount;
                }

                // Re-initialize lightbox to only bind to visible elements
                setTimeout(initLightbox, 50);
            });
        });
    });
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>