</main>
<footer class="bg-inverse-surface w-full py-section-gap-desktop px-5 md:px-grid-margin grid grid-cols-1 md:grid-cols-4 gap-gutter border-t border-outline-variant">
    <div class="md:col-span-2 flex flex-col gap-4">
        <span class="font-headline-xl text-headline-xl text-surface font-bold tracking-tight">VICTORY EXPRESS</span>
        <p class="font-body-md text-body-md text-surface-variant max-w-md">Driving global commerce forward with unmatched reliability and scale from the heart of the UAE.</p>
        <div class="flex flex-col gap-1 mt-2 font-body-md text-body-md text-surface-variant">
            <a class="hover:text-primary-container transition-all" href="tel:<?= e($contact['phone_tel']) ?>"><?= e($contact['phone_display']) ?></a>
            <a class="hover:text-primary-container transition-all" href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a>
            <a class="hover:text-primary-container transition-all" href="<?= e($contact['website_url']) ?>"><?= e($contact['website']) ?></a>
            <span><?php foreach ($contact['address_lines'] as $i => $line): ?><?= $i > 0 ? ', ' : '' ?><?= e($line) ?><?php endforeach; ?></span>
        </div>
    </div>
    <div class="md:col-span-1 flex flex-col gap-4">
        <h4 class="font-label-bold text-label-bold text-primary-container uppercase tracking-wider">Corporate</h4>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('reach')) ?>">Global Reach</a>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('about')) ?>">About Us</a>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('industries')) ?>">Industries</a>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('sustainability')) ?>">Sustainability</a>
    </div>
    <div class="md:col-span-1 flex flex-col gap-4">
        <h4 class="font-label-bold text-label-bold text-primary-container uppercase tracking-wider">Legal</h4>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('contact')) ?>">Contact</a>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('privacy')) ?>">Privacy Policy</a>
        <a class="font-body-md text-body-md text-surface-variant hover:text-primary-container transition-all" href="<?= e(url('terms')) ?>">Terms of Service</a>
    </div>
    <div class="md:col-span-4 border-t border-tertiary-container pt-8 flex flex-col md:flex-row justify-between items-center gap-2 text-surface-variant text-sm">
        <p>&copy; <?= date('Y') ?> Victory Express General Trading LLC. All rights reserved. Headquartered in Dubai, UAE.</p>
        <p>Built on trust. Engineered for scale.</p>
    </div>
</footer>
<script src="<?= e(asset('js/site.js')) ?>" defer></script>
</body>
</html>