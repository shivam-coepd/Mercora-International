<?php
$pageTitle = 'Insights & Articles | Thought Leadership';
$pageDesc = 'Explore latest articles on AgriTech innovation, Native Araku Coffee, digital transformation, WHITE WORLD sustainable fashion, and global trade.';
require_once __DIR__ . '/includes/header.php';

$ARTICLES = [
    [
        'slug' => 'smart-crop-doctor-agritech-ai-drones',
        'title' => 'Smart Crop Doctor: Revolutionizing Indian Agriculture with AI, Multispectral Drones & Precision Diagnostics',
        'category' => 'AgriTech Innovation',
        'date' => 'July 2026',
        'img' => 'assets/images/mercora/current/newsImgs/15.jpeg',
        'read_time' => '5 min read',
        'summary' => 'How Mercora\'s DPIIT-recognised platform (DIPP258473) combines multispectral aerial scans, computer vision, and Drone Anatomy aviation to detect crop diseases early and convert farmers into profitable agri-entrepreneurs.'
    ],
    [
        'slug' => 'native-araku-coffee-tribal-empowerment-gi-tag',
        'title' => 'Native Araku Coffee: How GI-Tagged Specialty Coffee is Empowering 1,00,000 Tribal Farming Families',
        'category' => 'Sustainable Livelihoods',
        'date' => 'July 2026',
        'img' => 'assets/images/mercora/current/newsImgs/24.jpeg',
        'read_time' => '6 min read',
        'summary' => 'An in-depth look into the shade-grown Arabica and Robusta cultivation at 800–5,000 ft MSL in Araku Valley, and our historic MOU with SERP, AP Government to establish 100 Women-Driven Coffee Shops.'
    ],
    [
        'slug' => 'white-world-sustainable-fashion-inclusive-livelihoods',
        'title' => 'WHITE WORLD: Redefining Sustainable Apparel with Inclusive Livelihoods for Rural Tailors & Artisans',
        'category' => 'Textiles & Apparel',
        'date' => 'June 2026',
        'img' => 'assets/images/mercora/current/carousel-2.jpg',
        'read_time' => '4 min read',
        'summary' => 'Championed by Youth Ambassador D. Veda Anjali, WHITE WORLD is a curated e-commerce ecosystem bringing premium white lifestyle apparel to market while creating dignified employment for persons with disabilities and women artisans.'
    ],
    [
        'slug' => 'digital-modernization-mercosys-kavachapp-saas',
        'title' => 'Accelerating Enterprise Digital Adoption: The Power of White-Label SaaS under the Mercosys Ecosystem',
        'category' => 'Digital Transformation',
        'date' => 'June 2026',
        'img' => 'assets/images/mercora/current/s4.jpg',
        'read_time' => '5 min read',
        'summary' => 'In strategic alliance with KavachApp (Arisetty Technologies), Mercora provides secure, customizable cloud SaaS platforms that streamline client onboarding, digital workflow automation, and enterprise governance.'
    ],
    [
        'slug' => 'defence-modernization-critical-infrastructure-tridantor',
        'title' => 'Deep-Tech Defense & Homeland Resilience: Tridantor Ideaus Collaboration for iDEX and Smart Surveillance',
        'category' => 'Deep-Tech Innovation',
        'date' => 'May 2026',
        'img' => 'assets/images/mercora/current/newsImgs/3.jpeg',
        'read_time' => '4 min read',
        'summary' => 'Exploring the strategic technological convergence between Mercora International and Tridantor for edge computing, disaster response, and next-generation defense modernization programs.'
    ],
    [
        'slug' => 'global-agri-trade-spices-rishipal-gupta-sons',
        'title' => 'Expanding Global Footprints for Indian Spices & Agro-Commodities: 7 Decades of RPGS Heritage',
        'category' => 'Global Trade',
        'date' => 'May 2026',
        'img' => 'assets/images/mercora/current/newsImgs/16.jpeg',
        'read_time' => '5 min read',
        'summary' => 'Leveraging official DGFT IEC code ACEFM7191A and the manufacturing prowess of RishiPal Gupta & Sons to structure certified buyer-seller networks across global import-export corridors.'
    ]
];
?>

<!-- Hero Section -->
<section class="bg-slate-900 border-b border-slate-800 text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-5">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md text-xs font-semibold bg-slate-800 text-amber-400 border border-slate-700">
                    <i class="ri-newspaper-line text-amber-400"></i> Editorial & Field Dispatches
                </span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                Insights, Case Studies & Market Analysis
            </h1>
            <p class="text-base sm:text-lg text-slate-300 leading-relaxed">
                Thought leadership and analytical perspectives from Mercora International across precision agriculture, specialty coffee, enterprise technology, and inclusive economic growth.
            </p>
        </div>
    </div>
</section>

<!-- Articles Grid -->
<section class="py-16 sm:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <?php foreach ($ARTICLES as $art): ?>
            <article class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:border-slate-300 hover:shadow-md transition flex flex-col">
                <div class="relative h-56 overflow-hidden bg-slate-100 group">
                    <img src="<?= url($art['img']) ?>" alt="<?= e($art['title']) ?>" class="w-full h-full object-cover transition duration-300 group-hover:scale-105" />
                    <span class="absolute top-3.5 left-3.5 bg-slate-900/80 backdrop-blur-md text-white text-[11px] font-semibold px-2.5 py-1 rounded-md">
                        <?= e($art['category']) ?>
                    </span>
                </div>
                <div class="p-6 flex flex-col flex-1 justify-between">
                    <div>
                        <div class="flex items-center justify-between text-xs text-slate-500 mb-3 font-medium">
                            <span><i class="ri-calendar-line"></i> <?= e($art['date']) ?></span>
                            <span><i class="ri-time-line"></i> <?= e($art['read_time']) ?></span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2 leading-snug">
                            <a href="<?= url('/blog-detail') ?>?post=<?= e($art['slug']) ?>" class="hover:text-amber-600 transition">
                                <?= e($art['title']) ?>
                            </a>
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                            <?= e($art['summary']) ?>
                        </p>
                    </div>
                    <div>
                        <a href="<?= url('/blog-detail') ?>?post=<?= e($art['slug']) ?>" class="inline-flex items-center text-xs sm:text-sm font-bold text-amber-600 hover:text-amber-700">
                            Read Full Article <i class="ri-arrow-right-line ml-1.5"></i>
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
