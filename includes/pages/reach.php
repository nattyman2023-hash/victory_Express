<?php require_once __DIR__ . '/../data.php'; ?>
<section class="bg-surface-container-low py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin relative overflow-hidden">
    <div class="absolute inset-0 hero-backdrop pointer-events-none"></div>
    <div class="max-w-7xl mx-auto relative z-10 max-w-2xl">
        <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">From Dubai, everywhere</p>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">A global network<br><span class="text-primary">with a local edge.</span></h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">The UAE gives us a strategic vantage point between East and West. We use it to connect suppliers, customers, and critical cargo with clarity and speed.</p>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center">
        <div class="relative h-[400px] rounded-lg overflow-hidden border border-secondary-fixed bg-surface-container">
            <img class="absolute inset-0 w-full h-full object-cover" src="<?= e($mapImage) ?>" alt="Global trade network map centered on Dubai" loading="lazy" decoding="async">
            <div class="absolute inset-0 bg-gradient-to-t from-surface-container-highest/60 to-transparent"></div>
            <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 material-symbols-outlined text-primary text-5xl icon-fill drop-shadow-md">location_on</span>
        </div>
        <div>
            <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Our operating view</p>
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-6">Connected by purpose.</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant mb-8">Our network is built around the relationships that make trade work: trusted suppliers, responsive logistics partners, and customers who need the right result at the right time.</p>
            <div class="grid grid-cols-2 gap-gutter mb-8">
                <div class="bg-surface-container-lowest p-6 border border-secondary-fixed"><div class="font-display-lg text-display-lg text-primary mb-2">50+</div><div class="font-label-bold text-label-bold text-on-surface-variant uppercase">Markets connected</div></div>
                <div class="bg-surface-container-lowest p-6 border border-secondary-fixed"><div class="font-display-lg text-display-lg text-primary mb-2">24/7</div><div class="font-label-bold text-label-bold text-on-surface-variant uppercase">Visibility mindset</div></div>
            </div>
            <a class="bg-primary text-on-primary font-label-bold text-label-bold uppercase px-8 py-4 rounded hover:bg-on-primary-fixed-variant transition-colors inline-flex items-center gap-2" href="<?= e(url('contact')) ?>">Start a conversation <span class="material-symbols-outlined">arrow_forward</span></a>
        </div>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-inverse-surface text-surface">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 max-w-2xl"><p class="font-label-bold text-label-bold text-primary-fixed uppercase tracking-[0.1em] mb-4">Where we create value</p><h2 class="font-headline-xl text-headline-xl text-surface">Markets, connected.</h2></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
            <div class="p-8 border border-outline-variant/30 bg-surface-container-highest/5"><span class="font-display-lg text-display-lg text-primary-fixed block mb-4">01</span><h3 class="font-headline-lg text-headline-lg text-surface mb-3">Gulf &amp; Middle East</h3><p class="font-body-md text-body-md text-surface-variant">Regional access, industrial depth, and a practical understanding of the UAE market.</p></div>
            <div class="p-8 border border-outline-variant/30 bg-surface-container-highest/5"><span class="font-display-lg text-display-lg text-primary-fixed block mb-4">02</span><h3 class="font-headline-lg text-headline-lg text-surface mb-3">Africa</h3><p class="font-body-md text-body-md text-surface-variant">Reliable sourcing and movement for growing infrastructure, energy, and healthcare demand.</p></div>
            <div class="p-8 border border-outline-variant/30 bg-surface-container-highest/5"><span class="font-display-lg text-display-lg text-primary-fixed block mb-4">03</span><h3 class="font-headline-lg text-headline-lg text-surface mb-3">Europe &amp; Asia</h3><p class="font-body-md text-body-md text-surface-variant">Commercial links that connect quality supply with customers who need certainty.</p></div>
        </div>
    </div>
</section>
