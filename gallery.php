<?php
$pageTitle = 'Media & Accreditations Gallery | Events, Awards & Certifications';
$pageDesc = 'Explore Mercora International\'s photo gallery: Government certificates (DPIIT, Udyam, IEC), MOU signing ceremonies, leadership awards, and field engagements.';
require_once __DIR__ . '/includes/header.php';

$GALLERY_ITEMS = [
    // Accreditations & Certifications
    [
        'img' => 'assets/images/mercora/current/newsImgs/37.jpeg',
        'title' => 'DPIIT Startup India Recognition (DIPP258473)',
        'category' => 'certificates',
        'badge' => 'Government of India',
        'desc' => 'DPIIT recognition certificate issued under Agriculture/AgriTech category, legally valid to 01-Jul-2035.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/38.jpeg',
        'title' => 'MSME Udyam Registration (UDYAM-TS-02-0265208)',
        'category' => 'certificates',
        'badge' => 'Ministry of MSME',
        'desc' => 'Official Udyam registration certifying Mercora International as an active Micro Enterprise.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/43.jpeg',
        'title' => 'DGFT Importer Exporter Code (ACEFM7191A)',
        'category' => 'certificates',
        'badge' => 'DGFT Hyderabad',
        'desc' => 'IEC code issued by Directorate General of Foreign Trade, formalizing international trade operations.'
    ],

    // MOU Signing Ceremonies
    [
        'img' => 'assets/images/mercora/current/newsImgs/16.jpeg',
        'title' => 'Institutional MOU Signing Ceremony',
        'category' => 'mous',
        'badge' => 'Signed MOU',
        'desc' => 'Formal agreement execution with strategic technology and digital transformation partners.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/1.jpeg',
        'title' => 'Technology & Consulting Alliance Signing',
        'category' => 'mous',
        'badge' => 'MOU Formalization',
        'desc' => 'Leadership convening for strategic alliance signing across enterprise services and innovation labs.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/3.jpeg',
        'title' => 'Defence & Deep-Tech Partnership Inception',
        'category' => 'mous',
        'badge' => 'Strategic Alliance',
        'desc' => 'Formalizing collaboration on defence modernization and surveillance platforms.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/11.jpeg',
        'title' => 'Education & Skill Development Agreement',
        'category' => 'mous',
        'badge' => 'Education MOU',
        'desc' => 'Alliance signing for international STEM study abroad pathways and vocational training.'
    ],

    // Leadership & Award Ceremonies
    [
        'img' => 'assets/images/mercora/current/newsImgs/47.jpeg',
        'title' => 'Dr. Bhilare — National Award Ceremony',
        'category' => 'awards',
        'badge' => 'National Recognition',
        'desc' => 'Conferment of prestigious social entrepreneurship and education leadership honours to Dr. Tayjaswni Bhilare.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/48.jpeg',
        'title' => 'Jhansi Ki Rani Award Ceremony (2023)',
        'category' => 'awards',
        'badge' => 'Excellence Award',
        'desc' => 'Honouring grassroots women empowerment, community education, and social transformation initiatives.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/49.jpeg',
        'title' => 'Satara Pride Award & Felicitations (2025)',
        'category' => 'awards',
        'badge' => 'Civic Pride Honour',
        'desc' => 'Felicitation ceremony recognizing extensive contribution to rural livelihood and sustainable development.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/51.jpeg',
        'title' => 'Sakaal Women Idol & Bhaskar Honours',
        'category' => 'awards',
        'badge' => 'Media & Civic Award',
        'desc' => 'Celebration of visionary leadership and educational institution building across Maharashtra and Telangana.'
    ],

    // Field Engagements, Exhibitions & Araku Valley
    [
        'img' => 'assets/images/mercora/current/newsImgs/24.jpeg',
        'title' => 'Native Araku Coffee Plantation Visit',
        'category' => 'field',
        'badge' => 'Araku Valley',
        'desc' => 'On-ground field review with tribal coffee farmers in Araku Valley, Andhra Pradesh at 3,500 ft MSL.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/27.jpeg',
        'title' => 'Specialty Coffee Cupping & Roast Evaluation',
        'category' => 'field',
        'badge' => 'Product Discovery',
        'desc' => 'Sensory cupping sessions evaluating GI-tagged Arabica and Robusta single-origin roast profiles.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/28.jpeg',
        'title' => 'Café Experience & Franchise Model Review',
        'category' => 'field',
        'badge' => 'Café Operations',
        'desc' => 'Evaluating café kiosk layout, barista brewing standards, and consumer experience formats.'
    ],
    [
        'img' => 'assets/images/mercora/current/newsImgs/15.jpeg',
        'title' => 'ALEAP & Startup India Exhibition Showcase',
        'category' => 'field',
        'badge' => 'Industry Expo',
        'desc' => 'Presenting Smart Crop Doctor and precision agriculture solutions to industry delegates.'
    ],
];
?>

<!-- Hero Section -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                    <i class="ri-gallery-line text-amber-400"></i> Photographic Records
                </span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                Media, Certificates & Accreditations Gallery
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Documenting our milestones: government recognition certificates (DPIIT DIPP258473, MSME Udyam, DGFT IEC), signed MOU ceremonies, leadership awards, and on-ground agricultural engagements.
            </p>

            <!-- Filter Tabs -->
            <div class="flex flex-wrap gap-2 pt-2" id="galleryFilterGroup">
                <button type="button" class="gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition bg-amber-500 text-slate-950 shadow-sm" data-gallery-filter="all">
                    All Records
                </button>
                <button type="button" class="gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300" data-gallery-filter="certificates">
                    Accreditations & Certificates
                </button>
                <button type="button" class="gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300" data-gallery-filter="mous">
                    Signed MOUs
                </button>
                <button type="button" class="gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300" data-gallery-filter="awards">
                    Leadership Awards
                </button>
                <button type="button" class="gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300" data-gallery-filter="field">
                    Field & Community Visits
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8" id="galleryItemsContainer">
            <?php foreach ($GALLERY_ITEMS as $item): ?>
            <div data-gallery-category="<?= e($item['category']) ?>" class="gallery-card bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-slate-300 hover:shadow-md transition flex flex-col">
                <div class="relative h-64 overflow-hidden bg-slate-100 group">
                    <a href="<?= url($item['img']) ?>" class="mc-lightbox block h-full w-full" data-glightbox="title: <?= e($item['title']) ?>; description: <?= e($item['desc']) ?>;">
                        <img src="<?= url($item['img']) ?>" alt="<?= e($item['title']) ?>" class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
                    </a>
                    <span class="absolute top-3.5 left-3.5 bg-slate-900/80 backdrop-blur-md text-white text-[11px] font-semibold px-2.5 py-1 rounded-md">
                        <?= e($item['badge']) ?>
                    </span>
                    <a href="<?= url($item['img']) ?>" class="mc-lightbox absolute bottom-3.5 right-3.5 w-9 h-9 rounded-lg bg-white/90 text-slate-900 flex items-center justify-center shadow-md hover:bg-white transition" title="Click to enlarge">
                        <i class="ri-zoom-in-line text-lg"></i>
                    </a>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-base font-bold text-slate-900 mb-2"><?= e($item['title']) ?></h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed flex-1">
                        <?= e($item['desc']) ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll("#galleryFilterGroup .gallery-btn");
    const cards = document.querySelectorAll("#galleryItemsContainer .gallery-card");

    filterButtons.forEach(btn => {
        btn.addEventListener("click", function () {
            filterButtons.forEach(b => {
                b.className = "gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-medium transition bg-slate-800 hover:bg-slate-700 text-slate-300";
            });
            this.className = "gallery-btn px-4 py-2 rounded-lg text-xs sm:text-sm font-semibold transition bg-amber-500 text-slate-950 shadow-sm";

            const filter = this.getAttribute("data-gallery-filter");
            cards.forEach(card => {
                const category = card.getAttribute("data-gallery-category");
                if (filter === "all" || category === filter) {
                    card.style.display = "flex";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
