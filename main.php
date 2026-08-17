<?php
declare(strict_types=1);

// Serve real static assets (CSS/JS/images) directly under the PHP built-in server.
// This is a no-op under Apache/PHP-FPM, where .htaccess handles routing + static files.
if (PHP_SAPI === 'cli-server') {
    $requested = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    if ($requested !== '/' && $requested !== '') {
        $candidate = realpath(__DIR__ . $requested);
        $base = realpath(__DIR__);
        if ($candidate && $base && str_starts_with($candidate, $base) && strtolower(pathinfo($candidate, PATHINFO_EXTENSION)) !== 'php') {
            return false;
        }
    }
}

require __DIR__ . '/includes/app.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');
$path = preg_replace('/^index\.php\/?/', '', $path) ?? $path;
$route = $path === '' ? 'home' : strtolower(explode('/', $path)[0]);

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST' && $route === 'contact') {
    $result = submit_inquiry($_POST);
    $query = $result['ok'] ? 'sent=1' : 'error=' . rawurlencode($result['message']);
    http_response_code(302);
    header('Location: ' . url('contact') . '?' . $query);
    exit;
}

$routes = [
    'home' => ['view' => 'home', 'title' => 'Global Trading Excellence'],
    'about' => ['view' => 'about', 'title' => 'About Victory Express'],
    'industries' => ['view' => 'industries', 'title' => 'Industries We Serve'],
    'reach' => ['view' => 'reach', 'title' => 'Global Reach'],
    'sustainability' => ['view' => 'sustainability', 'title' => 'Sustainability'],
    'contact' => ['view' => 'contact', 'title' => 'Contact Victory Express'],
    'privacy' => ['view' => 'privacy', 'title' => 'Privacy Policy'],
    'terms' => ['view' => 'terms', 'title' => 'Terms of Service'],
];

$page = $routes[$route] ?? ['view' => 'not-found', 'title' => 'Page Not Found'];
if (!isset($routes[$route])) {
    http_response_code(404);
}
render_page($page['view'], $page['title']);
