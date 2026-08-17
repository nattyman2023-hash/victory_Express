<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'httponly' => true,
        'samesite' => 'Lax',
        'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
    ]);
    session_start();
}

foreach ([
    'X-Content-Type-Options' => 'nosniff',
    'X-Frame-Options' => 'SAMEORIGIN',
    'Referrer-Policy' => 'strict-origin-when-cross-origin',
    'Permissions-Policy' => 'camera=(), microphone=(), geolocation=()',
    'Content-Security-Policy' => "default-src 'self'; img-src 'self' data:; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; script-src 'self'; connect-src 'self'; base-uri 'self'; form-action 'self'; frame-ancestors 'self'",
] as $header => $value) {
    header($header . ': ' . $value);
}

function site_config(): array
{
    static $config;
    if ($config !== null) {
        return $config;
    }

    $configPath = __DIR__ . '/../config.php';
    $config = file_exists($configPath) ? require $configPath : require __DIR__ . '/../config.example.php';
    return $config;
}

function url(string $path = ''): string
{
    $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
    $base = $base === '/' ? '' : $base;
    return $base . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    return url('assets/' . ltrim($path, '/'));
}

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return (string) $_SESSION['csrf_token'];
}

function valid_csrf_token(?string $token): bool
{
    $sessionToken = (string) ($_SESSION['csrf_token'] ?? '');
    return $sessionToken !== '' && is_string($token) && hash_equals($sessionToken, $token);
}

function render_page(string $view, string $title): void
{
    $config = site_config();
    $active = $view;
    $pageTitle = $title . ' | ' . ($config['site_name'] ?? 'Victory Express');
    $pageDescription = page_description($view);

    require __DIR__ . '/partials/header.php';
    require __DIR__ . '/pages/' . $view . '.php';
    require __DIR__ . '/partials/footer.php';
}

function page_description(string $view): string
{
    $descriptions = [
        'home' => 'Victory Express General Trading connects global supply chains from the heart of the UAE.',
        'about' => 'Learn how Victory Express brings structural integrity, scale, and reliability to global trade.',
        'industries' => 'Explore the industrial sectors and sourcing capabilities served by Victory Express.',
        'reach' => 'A Dubai-led network built to connect markets, suppliers, and critical cargo worldwide.',
        'sustainability' => 'A practical commitment to resilient supply chains, responsible sourcing, and long-term value.',
        'contact' => 'Start a conversation with the Victory Express team in Dubai.',
        'not-found' => 'The requested Victory Express page could not be found.',
    ];
    return $descriptions[$view] ?? 'Victory Express General Trading LLC.';
}

function db(): ?PDO
{
    static $pdo;
    static $attempted = false;

    if ($attempted) {
        return $pdo;
    }
    $attempted = true;

    $db = site_config()['db'] ?? [];
    if (empty($db['name']) || empty($db['user'])) {
        return null;
    }

    try {
        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $db['host'] ?? 'localhost', $db['name']);
        $pdo = new PDO($dsn, $db['user'], $db['password'] ?? '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    } catch (Throwable $exception) {
        $pdo = null;
    }

    return $pdo;
}

function submit_inquiry(array $input): array
{
    $submittedToken = $input['csrf_token'] ?? null;
    if (!is_string($submittedToken) || !valid_csrf_token($submittedToken)) {
        return ['ok' => false, 'message' => 'Your session expired. Please refresh the page and try again.'];
    }
    if (trim((string) ($input['website'] ?? '')) !== '') {
        return ['ok' => false, 'message' => 'We could not process this inquiry.'];
    }

    $firstName = trim((string) ($input['first_name'] ?? ''));
    $lastName = trim((string) ($input['last_name'] ?? ''));
    $email = trim((string) ($input['email'] ?? ''));
    $company = trim((string) ($input['company'] ?? ''));
    $type = trim((string) ($input['inquiry_type'] ?? ''));
    $message = trim((string) ($input['message'] ?? ''));

    if ($firstName === '' || $lastName === '' || $email === '' || $message === '') {
        return ['ok' => false, 'message' => 'Please complete all required fields.'];
    }
    foreach ([$firstName, $lastName] as $name) {
        if ((function_exists('mb_strlen') ? mb_strlen($name) : strlen($name)) > 100) {
            return ['ok' => false, 'message' => 'Please keep names under 100 characters.'];
        }
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'Please provide a valid corporate email address.'];
    }
    if ((function_exists('mb_strlen') ? mb_strlen($company) : strlen($company)) > 190) {
        return ['ok' => false, 'message' => 'Please keep the company name under 190 characters.'];
    }
    if ((function_exists('mb_strlen') ? mb_strlen($message) : strlen($message)) > 5000) {
        return ['ok' => false, 'message' => 'Please keep your message under 5,000 characters.'];
    }

    $allowedTypes = ['Procurement & Sourcing', 'Logistics & Distribution', 'Partnership Opportunities', 'General Inquiry', 'Other'];
    if (!in_array($type, $allowedTypes, true)) {
        $type = 'General Inquiry';
    }

    $pdo = db();
    if (!$pdo) {
        return ['ok' => false, 'message' => 'The form is ready, but the MySQL connection is not configured yet.'];
    }

    try {
        $statement = $pdo->prepare(
            'INSERT INTO contact_inquiries (first_name, last_name, email, company_name, inquiry_type, message, ip_address)
             VALUES (:first_name, :last_name, :email, :company_name, :inquiry_type, :message, :ip_address)'
        );
        $statement->execute([
            ':first_name' => $firstName,
            ':last_name' => $lastName,
            ':email' => $email,
            ':company_name' => $company,
            ':inquiry_type' => $type,
            ':message' => $message,
            ':ip_address' => $_SERVER['REMOTE_ADDR'] ?? null,
        ]);
        return ['ok' => true, 'message' => 'Thank you. Your inquiry has been received.'];
    } catch (Throwable $exception) {
        return ['ok' => false, 'message' => 'We could not save your inquiry. Please try again.'];
    }
}
