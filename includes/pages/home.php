<?php require_once __DIR__ . '/../data.php'; ?>
<section class="relative w-full min-h-[88vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover object-center" src="<?= e($heroImage) ?>" alt="Dubai skyline and container port at blue hour" fetchpriority="high" decoding="async">
        <div class="absolute inset-0 bg-inverse-surface/60 mix-blend-multiply"></div>
    </div>
    <div class="relative z-10 w-full max-w-7xl mx-auto px-5 md:px-grid-margin flex flex-col items-start gap-8 py-20 text-center md:text-left">
        <p class="font-label-bold text-label-bold text-primary-fixed uppercase tracking-[0.1em]">UAE-based · Globally connected</p>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-primary max-w-4xl drop-shadow-lg">Two Decades of Global Trading Excellence</h1>
        <p class="font-body-lg text-body-lg text-surface-container-low max-w-2xl drop-shadow-md">A legacy of trust, scale, and reliability in the heart of the UAE. Navigating international commerce with precision and unyielding commitment.</p>
        <div class="flex flex-col sm:flex-row gap-4 mt-4 w-full md:w-auto">
            <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-on-primary-fixed-variant transition-colors duration-300 flex items-center justify-center gap-2 group" href="<?= e(url('industries')) ?>">Explore Our Network <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span></a>
            <a class="border border-primary-fixed text-primary-fixed font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-primary-fixed/10 transition-colors duration-300 flex items-center justify-center gap-2" href="<?= e(url('contact')) ?>">Partner With Us</a>
        </div>
    </div>
</section>
<section class="w-full bg-surface-container-lowest border-y border-secondary-fixed py-8 px-5 md:px-grid-margin">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
        <div class="flex items-center gap-4">
            <span class="inline-block w-4 h-4 bg-primary" aria-hidden="true"></span>
            <span class="font-headline-lg text-headline-lg text-primary font-bold">VICTORY EXPRESS</span>
        </div>
        <p class="font-label-bold text-label-bold text-tertiary uppercase tracking-wider text-center md:text-right">Official Trading Partner of Choice</p>
    </div>
</section>
<section class="w-full py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <div class="bg-surface-container-lowest p-8 flex flex-col items-center md:items-start text-center md:text-left border border-secondary-fixed"><h3 class="font-display-lg-mobile text-display-lg-mobile text-primary mb-2">20+</h3><p class="font-label-bold text-label-bold text-tertiary uppercase">Years Experience</p></div>
        <div class="bg-surface-container-lowest p-8 flex flex-col items-center md:items-start text-center md:text-left border border-secondary-fixed"><h3 class="font-display-lg-mobile text-display-lg-mobile text-primary mb-2">50+</h3><p class="font-label-bold text-label-bold text-tertiary uppercase">Global Partners</p></div>
        <div class="bg-surface-container-lowest p-8 flex flex-col items-center md:items-start text-center md:text-left border border-secondary-fixed"><h3 class="font-display-lg-mobile text-display-lg-mobile text-primary mb-2">12+</h3><p class="font-label-bold text-label-bold text-tertiary uppercase">Industries Served</p></div>
    </div>
</section>
<section class="w-full py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-background">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 flex flex-col md:flex-row justify-between items-end gap-8">
            <div class="max-w-2xl"><h2 class="font-headline-xl text-headline-xl text-on-background mb-4">Industries We Serve</h2><p class="font-body-lg text-body-lg text-on-surface-variant">Providing robust trading solutions across diverse sectors, ensuring seamless supply chain integration and operational excellence.</p></div>
            <a class="text-primary font-label-bold text-label-bold uppercase hover:text-on-primary-fixed-variant transition-colors flex items-center gap-2" href="<?= e(url('industries')) ?>">View all <span class="material-symbols-outlined">arrow_forward</span></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter auto-rows-[300px]">
            <?php $spans = ['md:col-span-8', 'md:col-span-4', 'md:col-span-5', 'md:col-span-7']; ?>
            <?php foreach (array_slice($industries, 0, 4) as $index => $industry): ?>
                <a class="<?= $spans[$index] ?? 'md:col-span-6' ?> relative rounded overflow-hidden group block" href="<?= e(url('industries#' . $industry['slug'])) ?>">
                    <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('<?= e($industry['image']) ?>')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/90 via-inverse-surface/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8"><h3 class="font-headline-lg text-headline-lg text-on-primary mb-2"><?= e($industry['title']) ?></h3><p class="font-body-md text-body-md text-surface-container-low max-w-md"><?= e($industry['short']) ?></p></div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="w-full py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
        <div><p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">The Victory standard</p><h2 class="font-headline-xl text-headline-xl text-on-surface mb-6">Trade with confidence.</h2><p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Our work sits at the intersection of global sourcing, industrial know-how, and dependable execution — a partner built for the moments where supply chains matter most.</p><a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-on-primary-fixed-variant transition-colors inline-flex items-center gap-2" href="<?= e(url('about')) ?>">Our story <span class="material-symbols-outlined">arrow_forward</span></a></div>
        <div class="flex flex-col gap-6">
            <div class="flex gap-4 bg-surface-container-lowest p-6 border border-secondary-fixed"><span class="font-display-lg text-display-lg text-primary">01</span><div><strong class="font-headline-lg text-headline-lg text-on-surface block mb-2">Source with precision</strong><p class="font-body-md text-body-md text-on-surface-variant">Clear specifications, qualified suppliers, and commercial discipline.</p></div></div>
            <div class="flex gap-4 bg-surface-container-lowest p-6 border border-secondary-fixed"><span class="font-display-lg text-display-lg text-primary">02</span><div><strong class="font-headline-lg text-headline-lg text-on-surface block mb-2">Move with certainty</strong><p class="font-body-md text-body-md text-on-surface-variant">Coordinated logistics and communication from origin to destination.</p></div></div>
            <div class="flex gap-4 bg-surface-container-lowest p-6 border border-secondary-fixed"><span class="font-display-lg text-display-lg text-primary">03</span><div><strong class="font-headline-lg text-headline-lg text-on-surface block mb-2">Build for tomorrow</strong><p class="font-body-md text-body-md text-on-surface-variant">Long-term relationships that create resilient, repeatable trade.</p></div></div>
        </div>
    </div>
</section>
