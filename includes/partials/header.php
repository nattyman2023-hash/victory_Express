<?php
require_once __DIR__ . '/../data.php';

$navItems = [
    'home' => 'Home',
    'about' => 'About Us',
    'industries' => 'Industries',
    'reach' => 'Global Reach',
    'sustainability' => 'Sustainability',
    'contact' => 'Contact',
];

$navLinkClass = function (string $key) use ($active): string {
    return $active === $key
        ? 'text-primary font-bold border-b-2 border-primary pb-1'
        : 'text-on-secondary-fixed-variant font-medium hover:text-primary transition-colors duration-300';
};

$siteUrl = rtrim((string) ($config['site_url'] ?? $contact['website_url'] ?? 'https://victoryexpressgt.com'), '/');
$canonicalUrl = $active === 'home' ? $siteUrl . '/' : $siteUrl . '/' . ltrim($active, '/');
$shareImage = site_url('assets/images/victory-hero-port.jpg');
$preloadImage = match ($active) {
    'home', 'industries' => asset('images/victory-hero-port.jpg'),
    'about' => asset('images/victory-dubai-skyline.jpg'),
    'reach' => asset('images/victory-global-network.jpg'),
    default => null,
};
$schemaPageType = match ($active) {
    'about' => 'AboutPage',
    'contact' => 'ContactPage',
    'industries' => 'CollectionPage',
    default => 'WebPage',
};
$structuredData = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Organization',
            '@id' => $siteUrl . '/#organization',
            'name' => $contact['company'],
            'url' => $siteUrl . '/',
            'telephone' => $contact['phone_display'],
            'email' => $contact['email'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $contact['address_lines'][0],
                'addressLocality' => $contact['address_lines'][1],
                'addressCountry' => 'AE',
            ],
            'areaServed' => ['AE', 'Africa', 'Asia', 'Europe', 'Middle East'],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'sales',
                'telephone' => $contact['phone_display'],
                'email' => $contact['email'],
                'areaServed' => 'Worldwide',
                'availableLanguage' => 'English',
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $siteUrl . '/#website',
            'url' => $siteUrl . '/',
            'name' => $config['site_name'] ?? 'Victory Express',
            'publisher' => ['@id' => $siteUrl . '/#organization'],
            'inLanguage' => 'en-AE',
        ],
        [
            '@type' => $schemaPageType,
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'about' => ['@id' => $siteUrl . '/#organization'],
            'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $shareImage],
            'inLanguage' => 'en-AE',
        ],
    ],
];

if ($active === 'industries') {
    $structuredData['@graph'][] = [
        '@type' => 'ItemList',
        '@id' => $canonicalUrl . '#industries',
        'name' => 'Victory Express trading industries',
        'itemListElement' => array_map(
            static fn (array $industry, int $index): array => [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $industry['title'],
                'url' => $canonicalUrl . '#' . $industry['slug'],
            ],
            $industries,
            array_keys($industries)
        ),
    ];
}

if ($active !== 'home' && $active !== 'not-found') {
    $breadcrumbLabels = [
        'about' => 'About Us',
        'industries' => 'Industries',
        'reach' => 'Global Reach',
        'sustainability' => 'Sustainability',
        'contact' => 'Contact',
        'privacy' => 'Privacy Policy',
        'terms' => 'Terms of Service',
    ];
    $structuredData['@graph'][] = [
        '@type' => 'BreadcrumbList',
        '@id' => $canonicalUrl . '#breadcrumb',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => $breadcrumbLabels[$active] ?? $pageTitle, 'item' => $canonicalUrl],
        ],
    ];
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="robots" content="<?= e(page_robots($active)) ?>">
    <meta name="author" content="<?= e($contact['company']) ?>">
    <meta name="theme-color" content="#f8f9ff">
    <link rel="canonical" href="<?= e($canonicalUrl) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_AE">
    <meta property="og:site_name" content="Victory Express">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:url" content="<?= e($canonicalUrl) ?>">
    <meta property="og:image" content="<?= e($shareImage) ?>">
    <meta property="og:image:alt" content="Dubai port and skyline representing Victory Express global trade">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($pageTitle) ?>">
    <meta name="twitter:description" content="<?= e($pageDescription) ?>">
    <meta name="twitter:image" content="<?= e($shareImage) ?>">
    <title><?= e($pageTitle) ?></title>
    <?php if ($preloadImage): ?><link rel="preload" as="image" href="<?= e($preloadImage) ?>"><?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600&family=Inter:wght@400;500;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(asset('css/tailwind.css')) ?>">
    <link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>">
    <script type="application/ld+json"><?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?></script>
</head>
<body class="bg-background text-on-background font-body-md antialiased overflow-x-hidden selection:bg-primary-fixed selection:text-on-primary-fixed">
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-5 md:px-grid-margin h-20 bg-surface/95 backdrop-blur-md border-t-[3px] border-primary shadow-sm">
    <a class="flex items-center gap-2" href="<?= e(url('')) ?>" aria-label="Victory Express home">
        <span class="inline-block w-3 h-3 bg-primary" aria-hidden="true"></span>
        <span class="font-headline-lg text-2xl md:text-headline-lg text-primary font-bold tracking-tight">VICTORY EXPRESS</span>
    </a>
    <nav class="hidden md:flex items-center gap-8" aria-label="Primary navigation">
        <?php foreach ($navItems as $key => $label): ?>
            <a class="font-body-md text-body-md <?= $navLinkClass($key) ?>" href="<?= e(url($key === 'home' ? '' : $key)) ?>"<?= $active === $key ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
        <?php endforeach; ?>
    </nav>
    <div class="hidden md:flex items-center gap-4">
        <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-6 py-3 rounded hover:bg-on-primary-fixed-variant transition-colors duration-300" href="<?= e(url('contact')) ?>">Partner With Us</a>
    </div>
    <button class="menu-toggle md:hidden text-on-surface p-2 -mr-2" type="button" aria-expanded="false" aria-controls="mobile-nav" aria-label="Open menu">
        <span class="material-symbols-outlined text-3xl">menu</span>
    </button>
</header>
<nav id="mobile-nav" class="mobile-nav md:hidden bg-surface border-b border-outline-variant shadow-lg" aria-label="Mobile navigation">
    <div class="flex flex-col px-5 py-3">
        <?php foreach ($navItems as $key => $label): ?>
            <a class="font-body-md text-body-md <?= $active === $key ? 'text-primary font-bold' : 'text-on-secondary-fixed-variant' ?> py-3 border-b border-secondary-container" href="<?= e(url($key === 'home' ? '' : $key)) ?>"<?= $active === $key ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
        <?php endforeach; ?>
        <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-6 py-3 rounded text-center mt-3 mb-1" href="<?= e(url('contact')) ?>">Partner With Us</a>
    </div>
</nav>
<main id="main-content" class="pt-20">
