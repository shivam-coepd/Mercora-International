<?php
/**
 * Mercora International - Router for Clean URLs (PHP Built-in Server & Fallback)
 */

$uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = rtrim($uri, '/');
if ($path === '') $path = '/';

$targetFile = __DIR__ . $uri;

// 1. If static file exists, return false to let PHP's web server serve it directly
if ($uri !== '/' && file_exists($targetFile) && !is_dir($targetFile)) {
    return false;
}

// 2. Explicit route mappings
$routes = [
    '/' => 'index.php',
    '/home' => 'index.php',
    '/index' => 'index.php',
    '/about' => 'about.php',
    '/abouts' => 'about.php',
    '/it-services' => 'it-services.php',
    '/services' => 'it-services.php',
    '/business-solutions' => 'business-solutions.php',
    '/solutions' => 'business-solutions.php',
    '/industries' => 'industries.php',
    '/coffee-products' => 'coffee-products.php',
    '/coffee' => 'coffee-products.php',
    '/partnerships' => 'partnerships.php',
    '/partners' => 'partnerships.php',
    '/gallery' => 'gallery.php',
    '/blog' => 'blog.php',
    '/blog-detail' => 'blog-detail.php',
    '/contact' => 'contact.php',
    '/customer-support' => 'customer-support.php',
    '/support' => 'customer-support.php',
    '/faq' => 'customer-support.php',
    '/api/enquiry' => 'api/enquiry.php',
];

if (isset($routes[$path])) {
    $script = __DIR__ . '/' . $routes[$path];
    if (file_exists($script)) {
        require $script;
        exit;
    }
}

// 3. Check if $path.php exists in root
$phpFile = __DIR__ . $path . '.php';
if (file_exists($phpFile)) {
    require $phpFile;
    exit;
}

// 4. Handle 404
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo "<h1>404 Not Found</h1><p>The requested page could not be found.</p>";
}
exit;
