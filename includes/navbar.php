<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

function navActive($route)
{
    $current = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    $current = rtrim($current, '/');
    if ($current === '')
        $current = '/';
    $route = rtrim($route, '/');
    if ($route === '')
        $route = '/';
    return ($current === $route) ? 'bg-slate-100 text-slate-900 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium';
}
?>

<!-- Top Regulatory Announcement Bar -->
<div class="hidden lg:block bg-slate-900 text-slate-300 text-xs py-2 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <div class="flex items-center space-x-6">
            <span class="inline-flex items-center gap-1.5 font-medium text-slate-200">
                <i class="ri-shield-check-fill text-amber-500"></i> DPIIT Recognised (DIPP258473)
            </span>
            <span class="inline-flex items-center gap-1.5 font-medium text-slate-300">
                <i class="ri-government-line text-slate-400"></i> Firm Reg. 2978/2025 (Telangana)
            </span>
            <span class="inline-flex items-center gap-1.5 font-medium text-slate-300">
                <i class="ri-global-line text-slate-400"></i> DGFT IEC: ACEFM7191A
            </span>
        </div>
        <div class="flex items-center space-x-5">
            <a href="tel:+917680077222" class="hover:text-white transition flex items-center gap-1.5">
                <i class="ri-phone-line text-amber-400"></i> +91 76800 77222
            </a>
            <span class="text-slate-700">|</span>
            <a href="mailto:info@mercorainternational.com"
                class="hover:text-white transition flex items-center gap-1.5">
                <i class="ri-mail-line text-amber-400"></i> info@mercorainternational.com
            </a>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="<?= url('/') ?>" class="flex-shrink-0 flex items-center gap-3">
                <img src="<?= url('assets/images/mercora/mercora-logo-light.png') ?>" alt="Mercora International"
                    class="h-14 w-auto object-contain" />
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-1" aria-label="Main Navigation">
                <a href="<?= url('/') ?>" class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/') ?>">
                    Home
                </a>
                <a href="<?= url('/about') ?>"
                    class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/about') ?>">
                    About Us
                </a>

                <!-- Solutions Dropdown -->
                <div class="relative group">
                    <button type="button"
                        class="px-3.5 py-2 text-sm rounded-lg transition inline-flex items-center gap-1 <?= (navActive('/it-services') != 'text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium' || navActive('/business-solutions') != 'text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium' || navActive('/industries') != 'text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium') ? 'bg-slate-100 text-slate-900 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium' ?>">
                        <span>Solutions</span>
                        <i class="ri-arrow-down-s-line text-slate-400 group-hover:text-slate-700 transition"></i>
                    </button>
                    <div
                        class="absolute left-0 top-full pt-2 w-80 opacity-0 translate-y-1 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition duration-150 ease-out z-50">
                        <div class="bg-white rounded-xl shadow-xl border border-slate-200 p-2 space-y-1">
                            <a href="<?= url('/it-services') ?>"
                                class="flex items-start gap-3 p-3 rounded-lg hover:bg-slate-50 transition">
                                <div
                                    class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ri-cpu-line text-lg"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">IT & Digital Services</div>
                                    <div class="text-xs text-slate-500 mt-0.5">Enterprise PMO, Software QA & SaaS</div>
                                </div>
                            </a>
                            <a href="<?= url('/business-solutions') ?>"
                                class="flex items-start gap-3 p-3 rounded-lg hover:bg-slate-50 transition">
                                <div
                                    class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ri-line-chart-line text-lg"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Business Solutions</div>
                                    <div class="text-xs text-slate-500 mt-0.5">Franchise, Consulting & Global Trade
                                    </div>
                                </div>
                            </a>
                            <a href="<?= url('/industries') ?>"
                                class="flex items-start gap-3 p-3 rounded-lg hover:bg-slate-50 transition">
                                <div
                                    class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="ri-building-line text-lg"></i>
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-slate-900">Industries We Serve</div>
                                    <div class="text-xs text-slate-500 mt-0.5">11 Dedicated High-Impact Verticals</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?= url('/partnerships') ?>"
                    class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/partnerships') ?>">
                    Partnerships
                </a>
                <a href="<?= url('/gallery') ?>"
                    class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/gallery') ?>">
                    Gallery
                </a>
                <a href="<?= url('/blog') ?>"
                    class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/blog') ?>">
                    Insights
                </a>
                <a href="<?= url('/customer-support') ?>"
                    class="px-3.5 py-2 text-sm rounded-lg transition <?= navActive('/customer-support') ?>">
                    Support
                </a>
            </nav>

            <!-- Action Button -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="<?= url('/contact') ?>"
                    class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                    Get in Touch
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <div class="lg:hidden flex items-center">
                <button type="button" id="mobileMenuBtn"
                    class="p-2 rounded-lg text-slate-700 hover:text-slate-900 hover:bg-slate-100 transition focus:outline-none"
                    aria-label="Toggle Navigation">
                    <i id="mobileMenuIcon" class="ri-menu-line text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobileDrawer"
        class="hidden lg:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 space-y-1 shadow-lg">
        <a href="<?= url('/') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">Home</a>
        <a href="<?= url('/about') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">About Us</a>
        <div class="pt-2 pb-1 px-3 text-xs font-bold text-slate-400 uppercase tracking-wider">Solutions</div>
        <a href="<?= url('/it-services') ?>"
            class="block px-3 py-2 rounded-lg text-sm text-slate-600 hover:bg-slate-50 pl-6">Digital Transformation &
            IT</a>
        <a href="<?= url('/business-solutions') ?>"
            class="block px-3 py-2 rounded-lg text-sm text-slate-600 hover:bg-slate-50 pl-6">Business Solutions</a>
        <a href="<?= url('/industries') ?>"
            class="block px-3 py-2 rounded-lg text-sm text-slate-600 hover:bg-slate-50 pl-6">Industries We Serve</a>
        <a href="<?= url('/partnerships') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">Partnerships (7
            MOUs)</a>
        <a href="<?= url('/gallery') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">Media &
            Certifications</a>
        <a href="<?= url('/blog') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">Insights &
            Articles</a>
        <a href="<?= url('/customer-support') ?>"
            class="block px-3 py-2.5 rounded-lg text-base font-medium text-slate-800 hover:bg-slate-50">Support &
            Helpdesk</a>
        <div class="pt-4">
            <a href="<?= url('/contact') ?>"
                class="block w-full text-center px-4 py-3 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow">
                Get in Touch
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const btn = document.getElementById("mobileMenuBtn");
        const drawer = document.getElementById("mobileDrawer");
        const icon = document.getElementById("mobileMenuIcon");

        if (btn && drawer) {
            btn.addEventListener("click", function () {
                const isClosed = drawer.classList.contains("hidden");
                if (isClosed) {
                    drawer.classList.remove("hidden");
                    icon.className = "ri-close-line text-2xl";
                } else {
                    drawer.classList.add("hidden");
                    icon.className = "ri-menu-line text-2xl";
                }
            });
        }
    });
</script>