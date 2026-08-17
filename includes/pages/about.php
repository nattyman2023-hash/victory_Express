<?php require_once __DIR__ . '/../data.php'; ?>
<section class="relative pt-32 pb-section-gap-mobile md:pb-section-gap-desktop px-5 md:px-grid-margin tonal-tier">
    <div class="absolute inset-0 hero-backdrop pointer-events-none"></div>
    <div class="max-w-[1440px] mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
        <div class="lg:col-span-7">
            <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">A UAE-based trading house</p>
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">Forged in the UAE.<br><span class="text-primary">Global powerhouse.</span></h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mb-8">From our strategic roots in Dubai to a diversified global network, Victory Express has spent two decades mastering the complexities of international trade, delivering reliability at unprecedented scale.</p>
            <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-on-primary-fixed-variant transition-colors inline-flex items-center gap-2" href="<?= e(url('contact')) ?>">Partner With Us <span class="material-symbols-outlined">arrow_forward</span></a>
        </div>
        <div class="lg:col-span-5 relative h-[400px] md:h-[500px] w-full rounded-lg overflow-hidden border border-secondary-fixed">
            <img class="absolute inset-0 w-full h-full object-cover" src="<?= e($dubaiImage) ?>" alt="Dubai port and skyline representing Victory Express headquarters" fetchpriority="high" decoding="async">
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface-container-lowest">
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-gutter">
        <div>
            <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Built on trust</p>
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-6">Our Journey</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-4">Founded on the principles of structural integrity and operational excellence, Victory Express began its operations in the heart of the United Arab Emirates, bridging regional supply gaps with uncompromising efficiency.</p>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-6">Over the past twenty years we have systematically expanded our infrastructure, diversifying our portfolio across critical industrial sectors — mining, industrial, infrastructure, energy, and engineering supply. Today, we stand as a cornerstone of global commerce, connecting continents through our robust trading networks.</p>
            <strong class="font-headline-lg text-headline-lg text-primary block">Built on Trust. Engineered for Scale.</strong>
        </div>
        <div class="grid grid-cols-2 gap-gutter">
            <div class="bg-surface p-8 border border-secondary-fixed flex flex-col justify-center items-start"><span class="font-display-lg text-display-lg text-primary mb-2">20</span><span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Years of Excellence</span></div>
            <div class="bg-surface p-8 border border-secondary-fixed flex flex-col justify-center items-start"><span class="font-display-lg text-display-lg text-primary mb-2">50+</span><span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Global Markets</span></div>
            <div class="bg-surface p-8 border border-secondary-fixed flex flex-col justify-center items-start"><span class="font-display-lg text-display-lg text-primary mb-2">10k</span><span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Partners Worldwide</span></div>
            <div class="bg-surface p-8 border border-secondary-fixed flex flex-col justify-center items-start"><span class="font-display-lg text-display-lg text-primary mb-2">360°</span><span class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-wider">Supply Chain Solutions</span></div>
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-inverse-surface text-surface">
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-gutter">
        <div class="p-8 md:p-12 border border-outline-variant/30 flex flex-col h-full bg-surface-container-highest/5 backdrop-blur-sm">
            <div class="mb-8"><span class="material-symbols-outlined text-[48px] text-primary icon-fill">public</span></div>
            <h3 class="font-headline-lg text-headline-lg text-surface mb-6">Our Mission</h3>
            <p class="font-body-lg text-body-lg text-surface-variant"><?= e($mission) ?></p>
        </div>
        <div class="p-8 md:p-12 border border-outline-variant/30 flex flex-col h-full bg-surface-container-highest/5 backdrop-blur-sm">
            <div class="mb-8"><span class="material-symbols-outlined text-[48px] text-primary icon-fill">visibility</span></div>
            <h3 class="font-headline-lg text-headline-lg text-surface mb-6">Our Vision</h3>
            <p class="font-body-lg text-body-lg text-surface-variant"><?= e($vision) ?></p>
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 max-w-2xl"><p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Trusted in the field</p><h2 class="font-headline-xl text-headline-xl text-on-surface">What our partners say</h2></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <?php foreach (array_slice($testimonials, 0, 3) as $t): ?>
                <blockquote class="bg-surface-container-lowest p-8 border border-secondary-fixed flex flex-col">
                    <span class="material-symbols-outlined text-primary text-3xl mb-4 icon-fill">format_quote</span>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-1"><?= e($t['quote']) ?></p>
                    <footer>
                        <strong class="font-headline-lg text-headline-lg text-on-surface block"><?= e($t['author']) ?></strong>
                        <span class="font-body-md text-body-md text-on-surface-variant block"><?= e($t['company']) ?></span>
                        <small class="font-label-bold text-label-bold text-primary uppercase tracking-wider"><?= e($t['sector']) ?></small>
                    </footer>
                </blockquote>
            <?php endforeach; ?>
        </div>
    </div>
</section>
