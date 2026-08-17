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
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= e($pageDescription) ?>">
    <title><?= e($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;600&family=Inter:wght@400;500;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= e(asset('css/tailwind.css')) ?>">
    <link rel="stylesheet" href="<?= e(asset('css/site.css')) ?>">
</head>
<body class="bg-background text-on-background font-body-md antialiased overflow-x-hidden selection:bg-primary-fixed selection:text-on-primary-fixed">
<a class="skip-link" href="#main-content">Skip to content</a>
<header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-5 md:px-grid-margin h-20 bg-surface/95 backdrop-blur-md border-t-[3px] border-primary shadow-sm">
    <a class="flex items-center gap-2" href="<?= e(url('')) ?>" aria-label="Victory Express home">
        <span class="inline-block w-3 h-3 bg-primary" aria-hidden="true"></span>
        <span class="font-headline-lg text-headline-lg text-primary font-bold tracking-tight">VICTORY EXPRESS</span>
    </a>
    <nav class="hidden md:flex items-center gap-8" aria-label="Primary navigation">
        <?php foreach ($navItems as $key => $label): ?>
            <a class="font-body-md text-body-md <?= $navLinkClass($key) ?>" href="<?= e(url($key === 'home' ? '' : $key)) ?>"><?= e($label) ?></a>
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
            <a class="font-body-md text-body-md <?= $active === $key ? 'text-primary font-bold' : 'text-on-secondary-fixed-variant' ?> py-3 border-b border-secondary-container" href="<?= e(url($key === 'home' ? '' : $key)) ?>"><?= e($label) ?></a>
        <?php endforeach; ?>
        <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-6 py-3 rounded text-center mt-3 mb-1" href="<?= e(url('contact')) ?>">Partner With Us</a>
    </div>
</nav>
<main id="main-content" class="pt-20">
