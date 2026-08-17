<?php
require_once __DIR__ . '/../data.php';
$sent = isset($_GET['sent']);
$error = isset($_GET['error']) ? (string) $_GET['error'] : '';
?>
<section class="w-full bg-surface-container-low py-section-gap-mobile md:py-section-gap-desktop px-5 md:px-grid-margin relative overflow-hidden">
    <div class="absolute inset-0 hero-backdrop pointer-events-none"></div>
    <div class="max-w-[1440px] mx-auto relative z-10">
        <p class="font-label-bold text-label-bold text-primary uppercase tracking-[0.1em] mb-4">Let's build the future</p>
        <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-6 max-w-3xl">Let's build the future of global trade.</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">Whether you need complex logistics solutions or a reliable trading partner, Victory Express is ready to elevate your global operations. Reach out to our Dubai headquarters.</p>
    </div>
</section>
<section class="w-full px-5 md:px-grid-margin py-section-gap-mobile md:py-section-gap-desktop">
    <div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-gutter">
        <aside class="lg:col-span-4 space-y-8">
            <div class="bg-surface-container-lowest p-8 border border-outline-variant shadow-sm relative overflow-hidden">
                <div class="absolute top-0 left-0 w-1 h-full bg-primary"></div>
                <div class="flex items-start gap-4 mb-6">
                    <span class="material-symbols-outlined text-primary text-3xl icon-fill">location_on</span>
                    <div>
                        <h3 class="font-label-bold text-label-bold text-on-surface uppercase mb-2">Global Headquarters</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant"><?php foreach ($contact['address_lines'] as $line): ?><?= e($line) ?><br><?php endforeach; ?></p>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <a class="flex items-center gap-4 group" href="tel:<?= e($contact['phone_tel']) ?>">
                    <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center group-hover:bg-primary transition-colors duration-300"><span class="material-symbols-outlined text-on-surface group-hover:text-on-primary transition-colors duration-300">call</span></div>
                    <div><p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs mb-1">Corporate Office</p><p class="font-body-md text-body-md text-on-surface font-medium"><?= e($contact['phone_display']) ?></p></div>
                </a>
                <a class="flex items-center gap-4 group" href="mailto:<?= e($contact['email']) ?>">
                    <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center group-hover:bg-primary transition-colors duration-300"><span class="material-symbols-outlined text-on-surface group-hover:text-on-primary transition-colors duration-300">mail</span></div>
                    <div><p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs mb-1">General Inquiries</p><p class="font-body-md text-body-md text-on-surface font-medium"><?= e($contact['email']) ?></p></div>
                </a>
                <a class="flex items-center gap-4 group" href="<?= e($contact['website_url']) ?>">
                    <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center group-hover:bg-primary transition-colors duration-300"><span class="material-symbols-outlined text-on-surface group-hover:text-on-primary transition-colors duration-300">language</span></div>
                    <div><p class="font-label-bold text-label-bold text-on-surface-variant uppercase text-xs mb-1">Website</p><p class="font-body-md text-body-md text-on-surface font-medium"><?= e($contact['website']) ?></p></div>
                </a>
            </div>
            <div class="bg-surface-container-low p-6 rounded">
                <h4 class="font-label-bold text-label-bold text-on-surface uppercase mb-4 flex items-center gap-2"><span class="material-symbols-outlined text-primary text-xl">schedule</span> Business Hours (GST)</h4>
                <ul class="space-y-2 font-body-md text-body-md text-on-surface-variant">
                    <?php foreach ($contact['hours'] as $h): ?>
                        <li class="flex justify-between border-b border-secondary-container pb-2"><span><?= e($h[0]) ?></span> <span class="font-medium <?= $h[1] === 'Closed' ? 'text-tertiary' : 'text-on-surface' ?>"><?= e($h[1]) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
        <div class="lg:col-span-8 space-y-gutter">
            <div class="bg-surface-container-lowest p-8 border border-outline-variant shadow-sm">
                <h2 class="font-headline-lg text-headline-lg text-on-surface mb-8">Send an Inquiry</h2>
                <?php if ($sent): ?><div class="border border-primary text-on-primary-fixed bg-primary-fixed/20 p-4 rounded mb-6 font-body-md text-body-md" role="status">Thank you. Your inquiry has been received.</div><?php endif; ?>
                <?php if ($error): ?><div class="bg-error-container text-on-error-container p-4 rounded mb-6 font-body-md text-body-md"><?= e($error) ?></div><?php endif; ?>
                <form class="space-y-6" method="post" action="<?= e(url('contact')) ?>">
                    <input type="hidden" name="csrf_token" value="<?= e(csrf_token()) ?>">
                    <div class="sr-only" aria-hidden="true">
                        <label for="website">Website</label>
                        <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="first_name">First Name</label><input class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors" id="first_name" name="first_name" type="text" required autocomplete="given-name" placeholder="John"></div>
                        <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="last_name">Last Name</label><input class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors" id="last_name" name="last_name" type="text" required autocomplete="family-name" placeholder="Doe"></div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="email">Corporate Email</label><input class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors" id="email" name="email" type="email" required autocomplete="email" placeholder="john@company.com"></div>
                        <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="company">Company Name</label><input class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors" id="company" name="company" type="text" autocomplete="organization" placeholder="Company Ltd."></div>
                    </div>
                    <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="inquiry_type">Inquiry Type</label><select class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors" id="inquiry_type" name="inquiry_type"><option>Procurement &amp; Sourcing</option><option>Logistics &amp; Distribution</option><option>Partnership Opportunities</option><option>General Inquiry</option><option>Other</option></select></div>
                    <div><label class="block font-label-bold text-label-bold text-on-surface uppercase mb-2" for="message">Message</label><textarea class="w-full bg-surface border border-secondary-container focus:border-primary focus:ring-0 p-3 rounded font-body-md text-body-md text-on-surface transition-colors resize-none" id="message" name="message" rows="4" required placeholder="How can we assist your business operations?"></textarea></div>
                    <button class="bg-primary text-on-primary font-label-bold text-label-bold px-8 py-3 rounded uppercase tracking-wider hover:bg-primary-container transition-colors w-full md:w-auto flex items-center justify-center gap-2" type="submit">Submit Inquiry <span class="material-symbols-outlined text-sm">arrow_forward</span></button>
                    <p class="font-body-md text-body-md text-on-surface-variant text-sm">Your details are used only to respond to this inquiry.</p>
                </form>
            </div>
            <div class="h-80 w-full bg-surface-container border border-outline-variant relative overflow-hidden flex items-center justify-center">
                <img class="absolute inset-0 w-full h-full object-cover opacity-60" src="<?= e($mapImage) ?>" alt="Global trade network map centered on Dubai" loading="lazy" decoding="async">
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-highest/80 to-transparent"></div>
                <div class="relative z-10 flex flex-col items-center"><span class="material-symbols-outlined text-primary text-5xl icon-fill drop-shadow-md mb-2">location_on</span><span class="font-label-bold text-label-bold text-on-surface uppercase tracking-widest bg-surface/80 px-4 py-1 rounded-full backdrop-blur-sm shadow-sm">Dubai · UAE</span></div>
            </div>
        </div>
    </div>
</section>
