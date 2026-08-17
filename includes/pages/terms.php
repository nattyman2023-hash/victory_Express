<?php require_once __DIR__ . '/../data.php'; ?>
<section class="bg-surface-container-low py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin relative overflow-hidden">
    <div class="absolute inset-0 hero-backdrop pointer-events-none"></div>
    <div class="max-w-3xl mx-auto relative z-10">
        <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Legal</p>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">Terms of Service.</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">The terms below establish the basic conditions for using the Victory Express website.</p>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-3xl mx-auto space-y-10">
        <p class="font-label-bold text-label-bold text-on-surface-variant uppercase">Last updated: <?= date('F Y') ?></p>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">Website use</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">This website is provided for general information about Victory Express General Trading LLC. Content is not a binding offer, quotation, or guarantee of availability.</p>
        </div>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">Inquiries</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Submitting an inquiry does not create a commercial relationship or obligation. Any engagement is subject to separate written terms agreed by the relevant parties.</p>
        </div>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">Content</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">We aim to keep the information accurate and current, but do not guarantee that every page is complete or error-free at all times. For specific requirements, contact <a class="text-primary font-medium hover:underline" href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a>.</p>
        </div>
    </div>
</section>
