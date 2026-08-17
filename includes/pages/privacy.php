<?php require_once __DIR__ . '/../data.php'; ?>
<section class="bg-surface-container-low py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin relative overflow-hidden">
    <div class="absolute inset-0 hero-backdrop pointer-events-none"></div>
    <div class="max-w-3xl mx-auto relative z-10">
        <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Legal</p>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6">Privacy Policy.</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">We respect the information shared with Victory Express and use it only for legitimate business communication.</p>
    </div>
</section>
<section class="py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin bg-surface">
    <div class="max-w-3xl mx-auto space-y-10">
        <p class="font-label-bold text-label-bold text-on-surface-variant uppercase">Last updated: <?= date('F Y') ?></p>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">Information we collect</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">When you submit an inquiry, we collect the contact and company information required to respond. We may also collect basic technical information needed to keep this website secure and reliable.</p>
        </div>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">How we use information</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Information is used to respond to requests, coordinate potential business activity, and maintain our records. We do not sell inquiry data.</p>
        </div>
        <div>
            <h2 class="font-headline-lg text-headline-lg text-on-surface mb-3">Contact</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">For questions about this policy, contact <a class="text-primary font-medium hover:underline" href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a>.</p>
        </div>
    </div>
</section>
