<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/content-repository.php';
$site = require __DIR__ . '/config/site.php';

$pageTitle = 'Bewertungen & Erfahrungen | easyIT Nachhilfe Leipzig';
$pageDescription = 'Erfahrungen und Rückmeldungen zur Nachhilfe bei easyIT Leipzig.';
$pageCanonical = $site['base_url'] . '/nh_seo/bewertungen.php';

$reviews = cms_items('review', 'published', 50);
?><!doctype html>
<html lang="de" data-theme="leipzig-blau">
<head><?php require __DIR__ . '/includes/meta.php'; ?></head>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt">
<div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/">Startseite</a><span>›</span><span aria-current="page">Bewertungen</span></nav>
<section class="hero">
  <div><span class="eyebrow">Rückmeldungen</span><h1>Erfahrungen mit easyIT</h1><p>Veröffentlicht werden ausschließlich freigegebene und redaktionell geprüfte Rückmeldungen.</p></div>
  <aside class="hero-panel"><h2>Keine erfundenen Bewertungen</h2><p>Solange keine freigegebenen Originalstimmen im CMS vorliegen, bleibt dieser Bereich bewusst transparent.</p></aside>
</section>
<section class="section">
<?php if ($reviews): ?>
  <div class="card-grid card-grid--3">
    <?php foreach ($reviews as $review): ?>
      <article class="card">
        <h2><?= e((string)$review['title']) ?></h2>
        <?php if ($review['excerpt']): ?><p><strong><?= e((string)$review['excerpt']) ?></strong></p><?php endif; ?>
        <div><?= cms_content_html((string)$review['body']) ?></div>
      </article>
    <?php endforeach; ?>
  </div>
<?php else: ?>
  <p>Aktuell sind noch keine freigegebenen Bewertungen aus dem CMS veröffentlicht.</p>
<?php endif; ?>
</section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
</main>
</div>
</body>
</html>
