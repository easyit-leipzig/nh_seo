nj.ready(() => {
  const toggle = document.querySelector('.menu-toggle');
  const sidebar = document.querySelector('.sidebar');

  const closeMenu = () => {
    sidebar?.classList.remove('is-open');
    document.body.classList.remove('menu-open');
    toggle?.setAttribute('aria-expanded', 'false');
  };

  toggle?.addEventListener('click', () => {
    const open = sidebar?.classList.toggle('is-open');
    document.body.classList.toggle('menu-open', Boolean(open));
    toggle.setAttribute('aria-expanded', String(Boolean(open)));
  });

  document.addEventListener('click', event => {
    if (document.body.classList.contains('menu-open') &&
        !sidebar?.contains(event.target) &&
        !toggle?.contains(event.target)) closeMenu();
  });

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeMenu();
  });

  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      nj.storage.local.set('navigation.last', link.getAttribute('href'));
      closeMenu();
    });
  });
});
