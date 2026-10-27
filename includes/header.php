<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

$pageTitle = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME . ' | ' . SITE_TAGLINE;
$pageDesc = isset($pageDesc) ? $pageDesc : 'Mercora International is a registered partnership firm engineering scalable, innovation-led solutions across 11 business verticals including AgriTech, Digital Transformation, Global Trade, and Native Araku Coffee.';
$pageKeywords = isset($pageKeywords) ? $pageKeywords : 'Mercora International, AgriTech, Smart Crop Doctor, Native Araku Coffee, Digital Transformation, IT Services, Global Trade, Women Empowerment';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth h-full bg-slate-50 text-slate-800 antialiased" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>" />
    <meta name="keywords" content="<?= e($pageKeywords) ?>" />
    <meta name="author" content="Mercora International" />

    <!-- Open Graph / Meta -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= e($pageTitle) ?>" />
    <meta property="og:description" content="<?= e($pageDesc) ?>" />
    <meta property="og:image" content="<?= url('assets/images/mercora/mercora-logo-light.png') ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= url('assets/images/mercora/mercora-favicon.png') ?>" type="image/png" />

    <!-- Simple, Clean, Modern Font: Inter (Zero Fancy/Serif Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons & Third-Party UI Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- Tailwind CSS CDN with Custom Theme Configuration -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            700: '#1e3a5f',
                            800: '#142742',
                            900: '#0d1b2a',
                            950: '#070f18',
                        },
                        amber: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                        },
                        forest: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        coffee: {
                            50: '#fcf8f6',
                            100: '#f5ebe6',
                            700: '#6f3922',
                            800: '#4a2516',
                            900: '#2d160c',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>

<body class="flex min-h-full flex-col bg-slate-50 text-slate-800 font-sans">
    <?php require_once __DIR__ . '/navbar.php'; ?>