<?php
$pageTitle = "THE WHITE WORLD™ - Living Life with Elegance | Mercora International";
$pageDescription = "A Mercora International Social Impact & Lifestyle Initiative. Discover a curated destination for white-themed clothing, jewellery, home and lifestyle products.";
require_once dirname(__DIR__) . '/includes/header.php';
?>

<!-- ============================================================== -->
<!-- 1. HERO SECTION: THE WHITE WORLD™                             -->
<!-- Warm ivory-gold gradient background with transparent image on right -->
<!-- Modeled exactly after smart-crop-doctor hero structure         -->
<!-- ============================================================== -->
<section
  class="relative bg-gradient-to-r from-[#faf6ef] via-[#fcf9f2] to-[#fcfaf9] border-b border-[#ebdcc9] overflow-hidden min-h-[380px] sm:min-h-[420px] lg:min-h-[460px] flex flex-col sm:flex-row sm:items-center">

  <!-- Hero Section Image at Right Side: hero-white-world.png -->
  <div
    class="absolute inset-y-0 right-0 h-full w-full pointer-events-none select-none z-0 hidden sm:flex items-center justify-end overflow-hidden">
    <img src="<?= url('assets/images/mercora/hero-white-world.png') ?>" alt="THE WHITE WORLD™ Living Life with Elegance"
      class="h-full w-auto max-w-none object-contain object-right" />
  </div>

  <!-- Info Section to the Left -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full py-8 sm:py-12 lg:py-14">
    <div class="max-w-xl lg:max-w-lg xl:max-w-xl space-y-4">

      <!-- Pill Badge -->
      <div
        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#ebdcc9]/70 border border-[#d6ba94] text-[#8c6729] text-xs font-semibold uppercase tracking-wider shadow-2xs">
        <span class="w-1.5 h-1.5 rounded-full bg-[#b38738]"></span>
        A Mercora International Social Impact &amp; Lifestyle Initiative
      </div>

      <!-- Main Heading -->
      <h1 class="text-3xl sm:text-4xl lg:text-[42px] leading-tight font-serif text-[#0c2340] font-bold tracking-tight">
        A World of White,<br>
        <span class="italic font-normal text-[#0c2340]">Curated with Elegance</span>
      </h1>

      <!-- Description -->
      <p class="text-sm sm:text-base text-black leading-relaxed font-semibold">
        Discover a curated destination for white-themed clothing, jewellery, home and lifestyle products, and
        complementary accessories across everyday, premium, occasion and gifting needs.
      </p>

      <!-- CTA Button -->
      <div class="pt-2">
        <a href="#categories"
          class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-gradient-to-r from-[#b38738] via-[#c99e4b] to-[#a3792c] text-white font-medium text-sm shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
          <span>Explore Collections</span>
          <i class="fas fa-chevron-right text-xs opacity-80"></i>
        </a>
      </div>

    </div>
  </div>

  <!-- Mobile View Image (for small phone screens < 640px) -->
  <div class="sm:hidden px-4 pb-6 pt-1 w-full relative z-10">
    <div class="rounded-xl overflow-hidden shadow-sm border border-[#ebdcc9] bg-white">
      <img src="<?= url('assets/images/mercora/hero-white-world.png') ?>"
        alt="THE WHITE WORLD™ Living Life with Elegance" class="w-full h-auto object-cover object-right" />
    </div>
  </div>
</section>

<!-- Main Body Container -->
<main class="bg-[#faf7f2] py-8 lg:py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 lg:space-y-10">

    <!-- Section 1: Explore the White Lifestyle + Our Vision Card -->
    <section id="categories" class="scroll-mt-24">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

        <!-- Left: 8 Category Tiles (col-span-9) -->
        <div class="lg:col-span-9 bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs">
          <!-- Heading -->
          <div class="flex flex-col sm:flex-row sm:items-baseline gap-2 mb-4 pb-2 border-b border-[#f1e5d7]">
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#2d2419]">Explore the White Lifestyle</h2>
            <span class="text-xs text-[#82715e] font-light">— The proposed product universe spans a wide range of
              lifestyle categories, including:</span>
          </div>

          <!-- 8 Product Categories Grid -->
          <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-2.5">

            <!-- Category 1 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-clothing-fashion.png" alt="White Clothing & Fashion"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">White
                Clothing &amp; Fashion</p>
            </div>

            <!-- Category 2 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-jewellery-luxury.png" alt="Jewellery & Luxury"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Jewellery
                &amp; Luxury</p>
            </div>

            <!-- Category 3 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-home-living.png" alt="Home & Living"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Home &amp;
                Living</p>
            </div>

            <!-- Category 4 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-handlooms-textiles.png" alt="Handlooms & Textiles"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Handlooms
                &amp; Textiles</p>
            </div>

            <!-- Category 5 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-wellness-lifestyle.png" alt="Wellness & Lifestyle"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Wellness
                &amp; Lifestyle</p>
            </div>

            <!-- Category 6 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-accessories-footwear.png" alt="Accessories & Footwear"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Accessories
                &amp; Footwear</p>
            </div>

            <!-- Category 7 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-electronics-appliances.png"
                  alt="Electronics & Home Appliances"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Electronics
                &amp; Home Appliances</p>
            </div>

            <!-- Category 8 -->
            <div
              class="group bg-white rounded-xl border border-[#ebdcc9] p-2 text-center hover:shadow-md transition-all flex flex-col justify-between">
              <div
                class="aspect-square w-full rounded-lg overflow-hidden bg-[#faf7f2] mb-2 flex items-center justify-center">
                <img src="/assets/images/mercora/white-world/cat-spiritual-gifting.png"
                  alt="Spiritual, Beauty & Gifting"
                  class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
              </div>
              <p class="text-[11px] font-semibold text-[#3d3224] leading-tight group-hover:text-[#b38738]">Spiritual,
                Beauty &amp; Gifting</p>
            </div>

          </div>
        </div>

        <!-- Right: Our Vision Card (col-span-3) -->
        <div
          class="lg:col-span-3 bg-gradient-to-br from-[#fdfbf7] via-white to-[#f9f3ea] border border-[#ecdcc8] rounded-2xl p-6 shadow-xs flex flex-col justify-center">
          <div class="flex items-center gap-3 mb-3">
            <div class="w-10 h-10 rounded-full bg-[#f3e7d5] flex items-center justify-center text-[#b38738] shrink-0">
              <i class="fas fa-bullseye text-lg"></i>
            </div>
            <h3 class="text-xl font-serif font-bold text-[#2d2419]">Our Vision</h3>
          </div>
          <p class="text-xs sm:text-sm text-[#615140] leading-relaxed font-light">
            To build a recognised lifestyle brand dedicated to white-themed products, bringing together fashion, home,
            food, wellness, technology, luxury and social impact within an integrated ecosystem.
          </p>
        </div>

      </div>
    </section>

    <!-- Section 2: Signature Collections + The Story Behind The White World Card -->
    <section id="signature-collections">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

        <!-- Left: Signature Collections (col-span-8) -->
        <div
          class="lg:col-span-8 bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs flex flex-col justify-between">
          <div>
            <h2 class="text-xl sm:text-2xl font-serif font-bold text-[#2d2419] mb-4 pb-2 border-b border-[#f1e5d7]">
              Our Signature Collections
            </h2>

            <!-- 4 Signature Collections Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

              <!-- Collection 1: White Artisan -->
              <div
                class="flex items-center gap-3.5 p-3 rounded-xl bg-white border border-[#ebdcc9] hover:border-[#b38738]/60 transition">
                <img src="/assets/images/mercora/white-world/sig-artisan-collection.png" alt="White Artisan Collection"
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover shrink-0">
                <div class="min-w-0">
                  <h4 class="text-sm font-serif font-bold text-[#2d2419] mb-1">White Artisan Collection</h4>
                  <p class="text-xs text-[#6e5d4a] leading-tight font-light">Products and crafts from women
                    entrepreneurs, tribal communities and SHG artisans.</p>
                </div>
              </div>

              <!-- Collection 2: White Sustainable -->
              <div
                class="flex items-center gap-3.5 p-3 rounded-xl bg-white border border-[#ebdcc9] hover:border-[#b38738]/60 transition">
                <img src="/assets/images/mercora/white-world/sig-sustainable-collection.png"
                  alt="White Sustainable Collection" class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover shrink-0">
                <div class="min-w-0">
                  <h4 class="text-sm font-serif font-bold text-[#2d2419] mb-1">White Sustainable Collection</h4>
                  <p class="text-xs text-[#6e5d4a] leading-tight font-light">Organic cotton, eco-friendly and recycled
                    white products.</p>
                </div>
              </div>

              <!-- Collection 3: White Luxury -->
              <div
                class="flex items-center gap-3.5 p-3 rounded-xl bg-white border border-[#ebdcc9] hover:border-[#b38738]/60 transition">
                <img src="/assets/images/mercora/white-world/sig-luxury-collection.png" alt="White Luxury Collection"
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover shrink-0">
                <div class="min-w-0">
                  <h4 class="text-sm font-serif font-bold text-[#2d2419] mb-1">White Luxury Collection</h4>
                  <p class="text-xs text-[#6e5d4a] leading-tight font-light">Premium fashion, designer wear and luxury
                    home d&eacute;cor.</p>
                </div>
              </div>

              <!-- Collection 4: White Wedding -->
              <div
                class="flex items-center gap-3.5 p-3 rounded-xl bg-white border border-[#ebdcc9] hover:border-[#b38738]/60 transition">
                <img src="/assets/images/mercora/white-world/sig-wedding-collection.png" alt="White Wedding Collection"
                  class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover shrink-0">
                <div class="min-w-0">
                  <h4 class="text-sm font-serif font-bold text-[#2d2419] mb-1">White Wedding Collection</h4>
                  <p class="text-xs text-[#6e5d4a] leading-tight font-light">Bridal and groom wear, d&eacute;cor, return
                    gifts and floral products.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Right: The Story Behind The White World (col-span-4) -->
        <div id="story"
          class="lg:col-span-4 bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs flex flex-col justify-between">
          <div class="flex items-start gap-4">
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="text-[#b38738] text-lg"><i class="fas fa-feather-alt"></i></span>
                <h3 class="text-lg font-serif font-bold text-[#2d2419]">The Story Behind<br>THE WHITE WORLD&trade;</h3>
              </div>
              <p class="text-xs text-[#615140] leading-relaxed font-light mb-2">
                A distinctive lifestyle concept that presents "white" as a lifestyle identity, not only a colour. Guided
                by the promise "Living Life with Elegance", it brings together curated products across fashion, home,
                wellness, gifting and social impact.
              </p>
            </div>

            <!-- Arched Flower Vase Image -->
            <div class="w-24 sm:w-28 shrink-0">
              <div class="rounded-t-full rounded-b-lg overflow-hidden border border-[#ebdcc9] shadow-xs">
                <img src="/assets/images/mercora/white-world/story-white-blossoms-vase.png"
                  alt="Living Life with Elegance" class="w-full h-36 object-cover">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Section 3: Social Impact, Youth Ambassador & Partner Cards (3 Columns) -->
    <section id="social-impact">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5 items-stretch">

        <!-- Card 1: Social Impact - Empowering Communities -->
        <div class="bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs flex flex-col justify-between">
          <div>
            <div class="flex items-center gap-2 mb-3 pb-2 border-b border-[#f1e5d7]">
              <div
                class="w-8 h-8 rounded-full bg-[#f3e7d5] flex items-center justify-center text-[#b38738] shrink-0 text-xs">
                <i class="fas fa-hands-helping"></i>
              </div>
              <h3 class="text-base font-serif font-bold text-[#2d2419] leading-tight">
                Social Impact &ndash; Empowering Communities
              </h3>
            </div>

            <div class="space-y-3">
              <div class="rounded-xl overflow-hidden border border-[#ebdcc9]">
                <img src="/assets/images/mercora/white-world/impact-empowering-communities.png"
                  alt="Empowering Communities" class="w-full h-32 object-cover">
              </div>
              <p class="text-xs text-[#615140] leading-relaxed font-light">
                Social impact is central to THE WHITE WORLD&trade;. The initiative aims to create livelihood and market
                opportunities for women entrepreneurs, tribal artisans, rural Self-Help-Groups (SHGs) and persons with
                disabilities through skill development, production support and wider market access.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2: Youth-Led Creativity and Entrepreneurship -->
        <div class="bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs flex flex-col justify-between">
          <div>
            <div class="flex items-center gap-2 mb-3 pb-2 border-b border-[#f1e5d7]">
              <div
                class="w-8 h-8 rounded-full bg-[#f3e7d5] flex items-center justify-center text-[#b38738] shrink-0 text-xs">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <h3 class="text-base font-serif font-bold text-[#2d2419] leading-tight">
                Youth-Led Creativity and Entrepreneurship
              </h3>
            </div>

            <div class="flex items-start gap-3 mb-2">
              <div class="w-20 h-24 rounded-xl overflow-hidden border border-[#ebdcc9] shrink-0 shadow-xs">
                <img src="/assets/images/team/veda-anjali.jpg" alt="D. R. Vedanjali" class="w-full h-full object-cover">
              </div>
              <div>
                <h4 class="text-sm font-bold text-[#2d2419]">D. R. Vedanjali</h4>
                <p class="text-[11px] text-[#b38738] font-semibold mb-1">Young Entrepreneur &amp; Youth Ambassador</p>
                <p class="text-xs text-[#615140] leading-relaxed font-light">
                  Conceptualised with creativity and craftsmanship by D. R. Vedanjali, a Grade 10 student and Youth
                  Ambassador for THE WHITE WORLD&trade;.
                </p>
              </div>
            </div>
            <p class="text-xs text-[#615140] leading-relaxed font-light mt-1">
              She champions initiatives that support women tailors, tribal artisans, persons with disabilities and
              underprivileged youth through skill development and livelihood opportunities.
            </p>
          </div>
        </div>

        <!-- Card 3: Partner With THE WHITE WORLD™ -->
        <div id="partner"
          class="bg-[#fdfbf7] border border-[#ecdcc8] rounded-2xl p-5 shadow-xs flex flex-col justify-between">
          <div>
            <div class="flex items-center gap-2 mb-3 pb-2 border-b border-[#f1e5d7]">
              <div
                class="w-8 h-8 rounded-full bg-[#f3e7d5] flex items-center justify-center text-[#b38738] shrink-0 text-xs">
                <i class="fas fa-handshake"></i>
              </div>
              <h3 class="text-base font-serif font-bold text-[#2d2419] leading-tight">
                Partner With THE WHITE WORLD&trade;
              </h3>
            </div>

            <p class="text-xs text-[#615140] leading-relaxed font-light mb-4">
              We welcome conversations with artisans, women-led enterprises, SHGs, suppliers, designers, manufacturers
              and institutional partners interested in contributing to this integrated lifestyle and social impact
              initiative.
            </p>
          </div>

          <div class="pt-2">
            <a href="/contact"
              class="w-full py-2.5 px-4 rounded-xl bg-gradient-to-r from-[#b38738] via-[#c99e4b] to-[#a3792c] text-white text-xs font-semibold uppercase tracking-wider text-center block shadow-md hover:shadow-lg transition">
              Partner With Us
            </a>
          </div>
        </div>

      </div>
    </section>

  </div>
</main>

<!-- ============================================================== -->
<!-- BOTTOM BANNER / DYNAMIC CTA SECTION                            -->
<!-- Clean background (cta-white-world.png) + Floating Pill Card    -->
<!-- Matching the exact structure of smart-crop-doctor CTA          -->
<!-- ============================================================== -->
<section
  class="relative overflow-hidden min-h-[220px] sm:min-h-[260px] lg:min-h-[280px] flex items-center py-10 sm:py-14 border-t border-[#ebdcc9]">
  <!-- Background Image: cta-white-world.png -->
  <div class="absolute inset-0 z-0">
    <img src="<?= url('assets/images/mercora/cta-white-world.png') ?>" alt="Be Part of the Vision - THE WHITE WORLD™"
      class="w-full h-full object-cover object-center" />
  </div>

  <!-- Centered Floating Container (Matching Reference UI Design) -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
    <div
      class="max-w-6xl mx-auto bg-white/95 backdrop-blur-md rounded-2xl md:rounded-full py-4 sm:py-5 px-6 sm:px-8 lg:px-10 shadow-2xl border border-white/80 flex flex-col lg:flex-row items-center justify-between gap-4 sm:gap-6">

      <!-- Left Group: Icon + Title + Divider + Description -->
      <div class="flex flex-col sm:flex-row items-center gap-3 sm:gap-4 text-center sm:text-left flex-1 min-w-0">
        <div
          class="w-11 h-11 rounded-full bg-[#f3e7d5] flex items-center justify-center text-[#b38738] shrink-0 text-xl shadow-2xs">
          <i class="fas fa-seedling"></i>
        </div>
        <div class="shrink-0">
          <h3 class="text-lg sm:text-xl font-serif font-bold text-[#2d2419] tracking-tight whitespace-nowrap">
            Be Part of the Vision
          </h3>
        </div>
        <div class="hidden lg:block w-px h-8 bg-[#b38738]/40 shrink-0 mx-1"></div>
        <p class="text-xs sm:text-sm text-[#6e5d4a] font-light leading-relaxed">
          Together, we can build an inclusive, sustainable and elegant white lifestyle ecosystem that creates value for
          people and communities.
        </p>
      </div>

      <!-- Right CTA Button -->
      <div class="shrink-0">
        <a href="<?= url('/contact') ?>?vertical=the-white-world"
          class="inline-flex items-center justify-center gap-2.5 px-6 sm:px-8 py-3 rounded-full bg-gradient-to-r from-[#b38738] via-[#c99e4b] to-[#a3792c] hover:from-[#a3792c] hover:to-[#8c6729] text-white font-semibold text-xs sm:text-sm shadow-md hover:shadow-lg transition-all duration-200 whitespace-nowrap uppercase tracking-wider">
          <i class="far fa-envelope text-base"></i>
          <span>Contact Mercora International</span>
        </a>
      </div>

    </div>
  </div>
</section>

<?php require_once dirname(__DIR__) . '/includes/footer.php'; ?>