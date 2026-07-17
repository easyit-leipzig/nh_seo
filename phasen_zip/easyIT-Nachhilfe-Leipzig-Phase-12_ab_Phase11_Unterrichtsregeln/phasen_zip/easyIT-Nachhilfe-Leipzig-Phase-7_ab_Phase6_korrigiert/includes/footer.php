<?php $site = $site ?? require __DIR__ . '/../config/site.php'; ?>
<footer class="site-footer">
    <div>
        <strong><?= e($site['site_name']) ?></strong>
        <p>Individuelle Nachhilfe für Leipzig und Umgebung.</p>
    </div>
    <nav aria-label="Rechtliches">
        <a href="/nh_seo/impressum.php">Impressum</a>
        <a href="/nh_seo/datenschutz.php">Datenschutz</a>
        <a href="/nh_seo/sitemap.php">Sitemap</a>
    </nav>
    <p>© <?= date('Y') ?> easyIT</p>
</footer>
<script src="/nh_seo/assets/js/nojquery_3.1.1.js" defer></script>
<script src="/nh_seo/assets/js/app.js" defer></script>
<script src="/nh_seo/assets/js/search-index.js" defer></script>
<script src="/nh_seo/assets/js/search.js" defer></script>
<script>
if ("serviceWorker" in navigator) { window.addEventListener("load", () => navigator.serviceWorker.register("/nh_seo/service-worker.js")); }
</script>
