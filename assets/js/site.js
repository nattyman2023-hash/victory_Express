(() => {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('#mobile-nav');
    if (!toggle || !nav) return;

    const icon = toggle.querySelector('.material-symbols-outlined');

    const close = () => {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Open menu');
        if (icon) icon.textContent = 'menu';
    };

    toggle.addEventListener('click', () => {
        const open = nav.classList.toggle('is-open');
        toggle.setAttribute('aria-expanded', String(open));
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
        if (icon) icon.textContent = open ? 'close' : 'menu';
    });

    nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', close);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') close();
    });
})();
