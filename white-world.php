<?php
$pageTitle = 'The White World™ | Living Life with Elegance';
$pageDesc = 'THE WHITE WORLD™ is a white-themed lifestyle marketplace concept by Mercora International, bringing together clothing, jewellery, home and living, handlooms, wellness and luxury with a focus on women empowerment and tribal artisans.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section (Premium White, Navy & Gold) -->
<section class="relative bg-slate-950 border-b border-slate-800 text-white py-16 sm:py-24 overflow-hidden">
    <!-- Subtle Golden Vignette Glow -->
    <div class="absolute top-0 right-1/4 w-96 h-96 rounded-full bg-amber-500/10 blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="flex flex-wrap items-center gap-2">
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-400/10 text-amber-300 border border-amber-400/30">
                    <i class="ri-sparkling-fill text-amber-400"></i> A Mercora International Social Impact &amp;
                    Lifestyle Initiative
                </span>
                <span
                    class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-white/10 text-slate-200 border border-white/20">
                    <i class="ri-shield-star-line text-amber-300"></i> Living Life with Elegance
                </span>
            </div>

            <h1
                class="text-3xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight font-display">
                A World of White, <span class="text-amber-400">Curated with Elegance</span>
            </h1>

            <p class="text-base sm:text-lg text-slate-300 leading-relaxed pt-1">
                <strong>THE WHITE WORLD™</strong> is a white-themed lifestyle marketplace concept that brings together
                clothing, jewellery, home and lifestyle products, and complementary accessories under one unified brand
                identity. Guided by the tagline <em>“Living Life with Elegance”</em>, the initiative aims to offer
                customers a curated destination for white-themed products across everyday, premium, occasion and gifting
                needs.
            </p>

            <div class="flex flex-wrap items-center gap-4 pt-3">
                <a href="#collections"
                    class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-xl transition shadow-lg shadow-amber-400/20">
                    Explore Collections <i class="ri-arrow-down-line ml-2"></i>
                </a>
                <a href="<?= url('/contact') ?>?vertical=textile"
                    class="inline-flex items-center justify-center px-6 py-3.5 text-sm font-semibold text-white bg-slate-800/80 hover:bg-slate-800 border border-slate-700 rounded-xl transition">
                    Partner With Us <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-14 sm:py-16 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="bg-slate-50 border border-slate-200 rounded-2xl p-8 sm:p-10 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6">
            <div class="max-w-3xl space-y-2">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Strategic Direction</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">Our Vision</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    To build a recognised lifestyle brand dedicated to white-themed products, bringing together fashion,
                    home, food, wellness, technology, luxury and social impact within an integrated ecosystem.
                </p>
            </div>
            <div class="flex-shrink-0">
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-amber-100 text-amber-900 text-xs font-bold uppercase tracking-wider border border-amber-200">
                    <i class="ri-compass-3-line text-lg text-amber-600"></i> Pure · Curated · Inclusive
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Explore the White Lifestyle: 8 Category Tiles -->
<section class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Product Universe</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Explore the White Lifestyle
            </h2>
            <p class="text-base text-slate-600 mt-2">
                The proposed product universe spans a wide range of lifestyle categories curated in pure, elegant white
                palettes.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 1. White Clothing & Fashion -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-t-shirt-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">White Clothing &amp; Fashion</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Sarees, ethnic and formal wear, casual clothing and occasion wear crafted in pure white
                        textures.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Everyday &amp; Occasion
                </div>
            </div>

            <!-- 2. Accessories & Footwear -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-handbag-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Accessories &amp; Footwear</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Handbags, wallets, belts, scarves, watches, footwear and travel accessories.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Complementary Accents
                </div>
            </div>

            <!-- 3. Home & Living -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-home-4-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Home &amp; Living</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Bed and bath linen, kitchen and dining products, ceramics, furniture and minimalist white décor.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Serene Living Spaces
                </div>
            </div>

            <!-- 4. Handlooms & Textiles -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-scissors-2-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Handlooms &amp; Textiles</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Cotton, linen, silk, khadi, authentic handloom products and artisanal craft textiles.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Indigenous Heritage
                </div>
            </div>

            <!-- 5. Wellness & Lifestyle -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-heart-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Wellness &amp; Lifestyle</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Aromatherapy, bath and body collections, yoga, meditation, and mindfulness products.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Holistic Wellbeing
                </div>
            </div>

            <!-- 6. Jewellery & Luxury -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-vip-diamond-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Jewellery &amp; Luxury</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Fine jewellery, pearls, silver and platinum accents, fashion jewellery, and premium accessories.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Understated Luxury
                </div>
            </div>

            <!-- 7. Electronics & Home Appliances -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-macbook-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Electronics &amp; Appliances</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Consumer electronics, peripherals, and selected home and kitchen appliances in white aesthetics.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Aesthetic Modernity
                </div>
            </div>

            <!-- 8. Spiritual, Beauty & Gifting -->
            <div
                class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm hover:border-amber-400 hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div
                        class="w-12 h-12 rounded-xl bg-amber-50 text-amber-700 flex items-center justify-center text-2xl mb-4 border border-amber-100">
                        <i class="ri-gift-line"></i>
                    </div>
                    <h3 class="text-base font-bold text-slate-900 mb-2">Spiritual, Beauty &amp; Gifting</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Pooja products, personal care essentials, bespoke gift hampers, and curated corporate gifting.
                    </p>
                </div>
                <div
                    class="mt-4 pt-3 border-t border-slate-100 text-[11px] font-bold text-amber-700 uppercase tracking-wider">
                    Sacred &amp; Thoughtful
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signature Collections Section -->
<section id="collections" class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-amber-700">Curated Lines</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 mt-2">
                Our Signature Collections
            </h2>
            <p class="text-base text-slate-600 mt-2">
                Four distinct collections engineered for artisan upliftment, sustainable living, bespoke luxury, and
                life milestones.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Collection 1: White Artisan -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:border-amber-500/50 hover:bg-white hover:shadow-md transition">
                <span
                    class="inline-block px-2.5 py-1 rounded bg-amber-100 text-amber-900 text-[10px] font-bold uppercase tracking-wider mb-3">
                    Artisanal Heritage
                </span>
                <h3 class="text-lg font-bold text-slate-900 mb-2">White Artisan Collection</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Products and crafts from women entrepreneurs, tribal communities and Self-Help Group (SHG) artisans
                    celebrating authentic indigenous craftsmanship.
                </p>
            </div>

            <!-- Collection 2: White Sustainable -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:border-amber-500/50 hover:bg-white hover:shadow-md transition">
                <span
                    class="inline-block px-2.5 py-1 rounded bg-emerald-100 text-emerald-900 text-[10px] font-bold uppercase tracking-wider mb-3">
                    Eco-Conscious
                </span>
                <h3 class="text-lg font-bold text-slate-900 mb-2">White Sustainable Collection</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Organic cotton, chemical-free dyes, eco-friendly textiles, zero-waste packaging, and recycled white
                    lifestyle products.
                </p>
            </div>

            <!-- Collection 3: White Luxury -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:border-amber-500/50 hover:bg-white hover:shadow-md transition">
                <span
                    class="inline-block px-2.5 py-1 rounded bg-slate-900 text-white text-[10px] font-bold uppercase tracking-wider mb-3">
                    Premium Couture
                </span>
                <h3 class="text-lg font-bold text-slate-900 mb-2">White Luxury Collection</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Premium fashion, designer occasion wear, fine jewellery, handcrafted silk textiles, and luxury home
                    décor.
                </p>
            </div>

            <!-- Collection 4: White Wedding -->
            <div
                class="bg-slate-50 border border-slate-200 rounded-2xl p-6 hover:border-amber-500/50 hover:bg-white hover:shadow-md transition">
                <span
                    class="inline-block px-2.5 py-1 rounded bg-rose-100 text-rose-900 text-[10px] font-bold uppercase tracking-wider mb-3">
                    Ceremonial
                </span>
                <h3 class="text-lg font-bold text-slate-900 mb-2">White Wedding Collection</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Bridal and groom wear, wedding trousseau, ceremonial white décor, bespoke return gifts, and luxury
                    floral arrangements.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Special Focus on Social Impact -->
<section class="py-16 sm:py-20 bg-amber-50/50 border-b border-amber-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl space-y-4">
            <span
                class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-200/60 text-amber-900 border border-amber-300">
                <i class="ri-heart-pulse-fill text-amber-700"></i> Empowering Inclusive Livelihoods
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900">
                A Special Focus on Social Impact
            </h2>
            <p class="text-base sm:text-lg text-slate-700 leading-relaxed">
                Social impact is central to <strong>THE WHITE WORLD™</strong> concept. The initiative aims to create
                livelihood and market opportunities for women entrepreneurs, tribal artisans, rural Self-Help Groups
                (SHGs), and persons with disabilities. Its proposed <strong>Women Empowerment Collection</strong> will
                feature handcrafted apparel, tribal handloom and handicrafts, SHG-made products, sustainable items and
                products crafted by persons with disabilities.
            </p>
        </div>
    </div>
</section>

<!-- Youth-Led Creativity and Entrepreneurship (Featuring D. VedAnjali) -->
<section class="py-16 sm:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 sm:p-12 shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <div class="lg:col-span-4 flex justify-center">
                    <div class="relative w-64 h-80 rounded-2xl overflow-hidden border-2 border-amber-300/60 shadow-lg">
                        <img src="<?= url('assets/images/team/veda-anjali.jpg') ?>"
                            alt="D. VedAnjali - Youth Ambassador, White World Brand"
                            class="w-full h-full object-cover object-top" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 text-white">
                            <div class="text-sm font-bold">D. VedAnjali</div>
                            <div class="text-[11px] text-amber-300">Grade 10 Student &amp; Youth Ambassador</div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-8 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-700">NextGen Leadership</span>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900">
                        Youth-Led Creativity and Entrepreneurship
                    </h2>
                    <p class="text-base text-slate-700 leading-relaxed">
                        <strong>THE WHITE WORLD™</strong> was conceptualised with creativity and craftsmanship by
                        <strong>D. VedAnjali</strong> (D. R. Vedanjali), a Grade 10 student, young entrepreneur and
                        Youth Ambassador for the White World Brand. Her involvement reflects the initiative’s
                        encouragement of youth leadership, creativity and community-led entrepreneurship.
                    </p>
                    <p class="text-base text-slate-700 leading-relaxed">
                        As described in the initiative document, her focus includes supporting women tailors, tribal
                        artisans, persons with disabilities and underprivileged youth through skill development and
                        livelihood opportunities.
                    </p>
                    <div class="pt-2">
                        <span
                            class="inline-flex items-center gap-2 text-xs font-semibold text-slate-700 bg-white px-3.5 py-2 rounded-lg border border-slate-200">
                            <i class="ri-check-line text-amber-600"></i> Skill Development · Livelihood Opportunities ·
                            Community Inclusion
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Building an Inclusive and Sustainable Ecosystem & Partner With Us CTA -->
<section class="py-16 sm:py-24 bg-slate-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center space-y-6">
            <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Institutional &amp; Artisan
                Synergy</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white">
                Building an Inclusive and Sustainable Ecosystem
            </h2>
            <p class="text-sm sm:text-base text-slate-300 leading-relaxed">
                Through collaboration with women entrepreneurs, artisans, SHGs, suppliers, institutions and other
                ecosystem partners, <strong>THE WHITE WORLD™</strong> aims to connect distinctive white-themed products
                with customers while supporting inclusive livelihoods, responsible practices and sustainable growth.
            </p>
            <div class="pt-4 border-t border-slate-800">
                <h3 class="text-xl font-bold text-white mb-2">Partner with THE WHITE WORLD™</h3>
                <p class="text-xs sm:text-sm text-slate-400 mb-6">
                    We welcome conversations with artisans, women-led enterprises, SHGs, suppliers, designers,
                    manufacturers, institutions and potential business partners interested in contributing to this
                    integrated lifestyle and social impact initiative.
                </p>
                <a href="<?= url('/contact') ?>?vertical=textile"
                    class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold text-slate-950 bg-amber-400 hover:bg-amber-300 rounded-xl transition shadow-lg shadow-amber-400/20">
                    Contact Mercora International <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>