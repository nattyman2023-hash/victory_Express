<?php require_once __DIR__ . '/../data.php'; ?>
<section class="w-full bg-surface-container-lowest py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin relative overflow-hidden border-b border-surface-container">
    <div class="absolute inset-0 hero-backdrop pointer-events-none opacity-70"></div>
    <div class="max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
        <div>
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">Powering Global <br><span class="text-primary">Commerce.</span></h1>
            <p class="font-body-lg text-body-lg text-secondary max-w-xl mb-8">As a premier general trading entity, Victory Express operates at the nexus of international supply chains. We source, supply, and secure critical materials across diverse industrial sectors, ensuring seamless scale for our partners worldwide.</p>
            <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-on-primary-fixed-variant transition-colors tracking-wider inline-flex items-center gap-2" href="<?= e(url('contact')) ?>">Discuss your requirements <span class="material-symbols-outlined">arrow_forward</span></a>
        </div>
        <div class="hidden lg:block relative h-[500px] w-full rounded-lg overflow-hidden border border-secondary-container">
            <img class="absolute inset-0 w-full h-full object-cover" src="<?= e($portImage) ?>" alt="International shipping port representing Victory Express logistics scale" fetchpriority="high" decoding="async">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-background">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 border-l-[3px] border-primary pl-6">
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-4">Core Sectors</h2>
            <p class="font-body-md text-body-md text-secondary max-w-2xl">Our comprehensive trading capabilities span specialized product portfolios. We leverage robust global networks to deliver unmatched reliability and volume across mining, industrial, energy, and engineering supply.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <?php foreach ($industries as $index => $industry): ?>
                <article class="group relative overflow-hidden rounded bg-surface-container-lowest border border-secondary-container h-[360px]" id="<?= e($industry['slug']) ?>">
                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?= e($industry['image']) ?>" alt="<?= e($industry['title']) ?>" loading="lazy" decoding="async">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6 w-full">
                        <div class="flex items-center gap-2 mb-2 text-white">
                            <span class="material-symbols-outlined"><?= e($industry['icon']) ?></span>
                            <span class="font-label-bold text-label-bold uppercase tracking-widest text-surface-variant">Division 0<?= $index + 1 ?></span>
                        </div>
                        <h3 class="font-headline-lg text-headline-lg text-white mb-2"><?= e($industry['title']) ?></h3>
                        <p class="font-body-md text-body-md text-surface-dim"><?= e(implode(' · ', $industry['items'])) ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface-container-low">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 max-w-2xl">
            <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Beyond the core</p>
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-4">Specialized product portfolios</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">We import, export, distribute, and warehouse diversified goods under one canopy — from water treatment to industrial automation — operating at a global procurement and supply-contracting scale.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
            <?php foreach ($otherIndustries as $o): ?>
                <div class="bg-surface-container-lowest p-6 border border-secondary-fixed flex flex-col">
                    <span class="material-symbols-outlined text-primary text-3xl mb-4 icon-fill"><?= e($o['icon']) ?></span>
                    <h3 class="font-headline-lg text-headline-lg text-on-surface mb-2"><?= e($o['title']) ?></h3>
                    <p class="font-body-md text-body-md text-on-surface-variant"><?= e($o['items']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="w-full py-20 px-5 md:px-grid-margin bg-inverse-surface text-surface">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 divide-x divide-outline">
        <div class="px-4 text-center md:text-left"><div class="font-display-lg text-display-lg text-primary-fixed mb-2">40+</div><div class="font-label-bold text-label-bold uppercase tracking-widest text-surface-variant">Countries Served</div></div>
        <div class="px-4 text-center md:text-left"><div class="font-display-lg text-display-lg text-primary-fixed mb-2">2M+</div><div class="font-label-bold text-label-bold uppercase tracking-widest text-surface-variant">Tons Traded Annually</div></div>
        <div class="px-4 text-center md:text-left"><div class="font-display-lg text-display-lg text-primary-fixed mb-2">150</div><div class="font-label-bold text-label-bold uppercase tracking-widest text-surface-variant">Global Partners</div></div>
        <div class="px-4 text-center md:text-left"><div class="font-display-lg text-display-lg text-primary-fixed mb-2">24/7</div><div class="font-label-bold text-label-bold uppercase tracking-widest text-surface-variant">Logistics Tracking</div></div>
    </div>
</section>
