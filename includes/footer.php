<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<!-- Pre-Footer CTA Band -->
<section class="bg-slate-900 border-t border-slate-800 text-white py-14 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
            <div class="max-w-2xl">
                <span class="text-xs font-bold tracking-widest text-amber-400 uppercase">Institutional
                    Collaboration</span>
                <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-white mt-2">
                    Ready to scale enterprise value, engineer innovation, or explore global trade?
                </h2>
                <p class="text-slate-400 text-sm sm:text-base mt-2">
                    Partner with a DPIIT-recognised multidisciplinary firm operating across 11 high-impact business
                    verticals.
                </p>
            </div>
            <div class="flex flex-wrap items-center gap-4 flex-shrink-0">
                <a href="<?= url('/contact') ?>"
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-slate-900 bg-white rounded-lg hover:bg-slate-100 transition shadow-sm">
                    Get in Touch <i class="ri-arrow-right-line ml-2"></i>
                </a>
                <a href="<?= url('/it-services') ?>"
                    class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold text-white bg-slate-800 border border-slate-700 rounded-lg hover:bg-slate-700 transition">
                    Explore IT Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Corporate Footer -->
<footer class="bg-slate-950 text-slate-400 pt-16 pb-12 border-t border-slate-900 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 lg:gap-8 pb-12 border-b border-slate-800">
            <!-- Brand & Headquarters -->
            <div class="lg:col-span-2 space-y-4">
                <a href="<?= url('/') ?>" class="inline-block">
                    <img src="<?= url('assets/images/mercora/mercora-logo-light.png') ?>" alt="Mercora International"
                        class="h-9 w-auto object-contain" />
                </a>
                <p class="text-amber-400/90 font-medium text-xs tracking-wider uppercase">
                    <?= e(SITE_TAGLINE) ?>
                </p>
                <div class="flex items-start gap-2.5 text-xs text-slate-400 leading-relaxed max-w-sm pt-1">
                    <i class="ri-map-pin-2-line text-amber-500 mt-0.5 text-base flex-shrink-0"></i>
                    <span><?= e(SITE_ADDRESS) ?></span>
                </div>
                <div class="space-y-1.5 pt-2 text-xs">
                    <div>
                        <a href="tel:+917680077222" class="hover:text-white transition inline-flex items-center gap-2">
                            <i class="ri-phone-line text-amber-400"></i> +91 76800 77222
                        </a>
                    </div>
                    <div>
                        <a href="mailto:info@mercorainternational.com"
                            class="hover:text-white transition inline-flex items-center gap-2">
                            <i class="ri-mail-line text-amber-400"></i> info@mercorainternational.com
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider">Company</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="<?= url('/') ?>" class="hover:text-white transition">Home</a></li>
                    <li><a href="<?= url('/about') ?>" class="hover:text-white transition">About Us</a></li>
                    <li><a href="<?= url('/it-services') ?>" class="hover:text-white transition">IT & Digital
                            Services</a></li>
                    <li><a href="<?= url('/business-solutions') ?>" class="hover:text-white transition">Business
                            Solutions</a></li>
                    <li><a href="<?= url('/industries') ?>" class="hover:text-white transition">Industries We Serve</a>
                    </li>
                    <li><a href="<?= url('/partnerships') ?>" class="hover:text-white transition">Strategic Alliances (7
                            MOUs)</a></li>
                </ul>
            </div>

            <!-- Verticals & Initiatives -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider">Key Verticals</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="<?= url('/industries') ?>#agritech" class="hover:text-white transition">AgriTech & Crop
                            Doctor</a></li>
                    <li><a href="<?= url('/coffee-products') ?>" class="hover:text-white transition">Native Araku
                            Coffee</a></li>
                    <li><a href="<?= url('/industries') ?>#textile" class="hover:text-white transition">WHITE WORLD
                            Lifestyle</a></li>
                    <li><a href="<?= url('/business-solutions') ?>#trade" class="hover:text-white transition">Global
                            Trade Facilitation</a></li>
                    <li><a href="<?= url('/gallery') ?>" class="hover:text-white transition">Media & Certifications</a>
                    </li>
                    <li><a href="<?= url('/blog') ?>" class="hover:text-white transition">Insights & Articles</a></li>
                </ul>
            </div>

            <!-- Statutory Disclosures -->
            <div class="space-y-3">
                <h4 class="text-xs font-bold text-white uppercase tracking-wider">Registrations</h4>
                <div class="space-y-2 text-[11px]">
                    <div class="p-2 rounded bg-slate-900/80 border border-slate-800">
                        <div class="font-semibold text-slate-200">DPIIT Startup India</div>
                        <div class="text-slate-400 text-[10px]">DIPP258473 (Valid to 2035)</div>
                    </div>
                    <div class="p-2 rounded bg-slate-900/80 border border-slate-800">
                        <div class="font-semibold text-slate-200">Firm Registration</div>
                        <div class="text-slate-400 text-[10px]">Reg. 2978/2025 (Telangana)</div>
                    </div>
                    <div class="p-2 rounded bg-slate-900/80 border border-slate-800">
                        <div class="font-semibold text-slate-200">MSME Udyam & IEC</div>
                        <div class="text-slate-400 text-[10px]">UDYAM-TS-02-0265208 · DGFT ACEFM7191A</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Legal -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>&copy; <?= date('Y') ?> Mercora International. All rights reserved.</p>
            <div class="flex items-center space-x-6">
                <a href="<?= url('/about') ?>" class="hover:text-slate-400 transition">About Firm</a>
                <a href="<?= url('/customer-support') ?>" class="hover:text-slate-400 transition">Support & FAQs</a>
                <a href="<?= url('/contact') ?>" class="hover:text-slate-400 transition">Contact</a>
            </div>
        </div>
    </div>
</footer>

<!-- Include Partner Modal -->
<?php require_once __DIR__ . '/partner-modal.php'; ?>

<!-- Third-Party Plugin Scripts -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="<?= url('assets/js/main.js') ?>"></script>
</body>

</html>