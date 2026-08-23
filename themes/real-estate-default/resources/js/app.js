const menuButton = document.querySelector('[data-real-estate-menu-button]');
const menu = document.querySelector('[data-real-estate-menu]');

const closeMenu = () => {
    if (!menuButton || !menu) return;

    menuButton.setAttribute('aria-expanded', 'false');
    menu.setAttribute('data-open', 'false');
};

if (menuButton && menu) {
    menuButton.addEventListener('click', () => {
        const open = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', String(!open));
        menu.setAttribute('data-open', String(!open));
    });

    menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') closeMenu();
    });
}
