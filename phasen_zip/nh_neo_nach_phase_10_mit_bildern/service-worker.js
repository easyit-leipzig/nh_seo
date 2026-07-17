const CACHE_VERSION = 'easyit-phase10-images-v1';
const CORE_ASSETS = [
  '/nh_seo/assets/img/subjects/latein.svg',
  '/nh_seo/assets/img/subjects/spanisch.svg',
  '/nh_seo/assets/img/subjects/franzoesisch.svg',
  '/nh_seo/assets/img/subjects/englisch.svg',
  '/nh_seo/assets/img/subjects/deutsch.svg',
  '/nh_seo/assets/img/subjects/informatik.svg',
  '/nh_seo/assets/img/subjects/chemie.svg',
  '/nh_seo/assets/img/subjects/physik.svg',
  '/nh_seo/assets/img/subjects/mathe.svg',
  '/nh_seo/assets/img/lern-stud.svg',
  '/nh_seo/assets/img/stud-lern.svg',
  '/',
  '/nh_seo/assets/css/main.css',
  '/nh_seo/assets/css/header.css',
  '/nh_seo/assets/css/sidebar.css',
  '/nh_seo/assets/css/content.css',
  '/nh_seo/assets/css/footer.css',
  '/nh_seo/assets/js/nojquery_3.1.1.js',
  '/nh_seo/assets/js/app.js',
  '/nh_seo/assets/img/logo.svg',
  '/nh_seo/assets/img/favicon.svg',
  '/nh_seo/offline.php'
];

self.addEventListener('install', event => {
  event.waitUntil(caches.open(CACHE_VERSION).then(cache => cache.addAll(CORE_ASSETS)));
  self.skipWaiting();
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(keys =>
      Promise.all(keys.filter(key => key !== CACHE_VERSION).map(key => caches.delete(key)))
    )
  );
  self.clients.claim();
});

self.addEventListener('fetch', event => {
  if (event.request.method !== 'GET') return;

  event.respondWith(
    fetch(event.request)
      .then(response => {
        const clone = response.clone();
        caches.open(CACHE_VERSION).then(cache => cache.put(event.request, clone));
        return response;
      })
      .catch(() =>
        caches.match(event.request).then(cached =>
          cached || (event.request.mode === 'navigate' ? caches.match('/nh_seo/offline.php') : undefined)
        )
      )
  );
});
