nj.ready(() => {
  const toggle = document.querySelector('.menu-toggle');
  const navigation = document.querySelector('.navigation-bar');
  const submenuItems = document.querySelectorAll('.nav-item--dropdown');

  const closeSubmenus = except => {
    submenuItems.forEach(item => {
      if (item !== except) {
        item.classList.remove('submenu-open');
        item.querySelector('.submenu-toggle')?.setAttribute('aria-expanded', 'false');
      }
    });
  };

  const closeMenu = () => {
    navigation?.classList.remove('is-open');
    document.body.classList.remove('menu-open');
    toggle?.setAttribute('aria-expanded', 'false');
    closeSubmenus();
  };

  toggle?.addEventListener('click', () => {
    const open = navigation?.classList.toggle('is-open');
    document.body.classList.toggle('menu-open', Boolean(open));
    toggle.setAttribute('aria-expanded', String(Boolean(open)));
  });

  document.querySelectorAll('.submenu-toggle').forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();
      event.stopPropagation();
      const item = button.closest('.nav-item--dropdown');
      const willOpen = !item?.classList.contains('submenu-open');
      closeSubmenus(item);
      item?.classList.toggle('submenu-open', willOpen);
      button.setAttribute('aria-expanded', String(willOpen));
    });
  });

  document.addEventListener('click', event => {
    if (!event.target.closest('.nav-item--dropdown')) closeSubmenus();
    if (document.body.classList.contains('menu-open') &&
        !navigation?.contains(event.target) &&
        !toggle?.contains(event.target)) closeMenu();
  });

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeMenu();
  });

  document.querySelectorAll('.main-nav a').forEach(link => {
    link.addEventListener('click', () => {
      nj.storage.local.set('navigation.last', link.getAttribute('href'));
      closeMenu();
    });
  });
});
