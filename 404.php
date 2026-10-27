<?php
http_response_code(404);
$pageTitle = '404 - Page Not Found';
$pageDesc = 'The page you are looking for does not exist or has been moved. Explore Mercora International services, coffee products, or contact us.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="min-h-[60vh] flex items-center justify-center bg-white py-16 sm:py-24">
    <div class="max-w-md mx-auto px-4 text-center">
        <span class="text-7xl sm:text-8xl font-black text-amber-500 block leading-none mb-3">404</span>
        <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">Page Not Found</h1>
        <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-8">
            The page you requested could not be located. It may have been updated, renamed, or temporarily moved.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-3">
            <a href="<?= url('/') ?>" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 transition shadow-sm">
                <i class="ri-home-line mr-1.5"></i> Return Home
            </a>
            <a href="<?= url('/it-services') ?>" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition">
                Explore Services
            </a>
            <a href="<?= url('/contact') ?>" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 rounded-lg transition">
                Contact
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
