<?php
declare(strict_types=1);

require __DIR__ . '/functions.php';
$site = require __DIR__ . '/../config/site.php';
$schoolTypes = require __DIR__ . '/../config/school-types.php';
$subjects = require __DIR__ . '/../config/subjects.php';

if (!isset($schoolTypeKey, $schoolTypes[$schoolTypeKey])) {
    http_response_code(404);
    exit('Schulformseite nicht gefunden.');
}
$type = $schoolTypes[$schoolTypeKey];
$pageTitle = $type['title'];
$pageDescription = $type['description'];
$pageCanonical = $site['base_url'] . '/' . $type['file'];

$pageSchemas = [
    [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => 'Nachhilfe ' . $type['name'] . ' in Leipzig',
        'serviceType' => 'Nachhilfe für ' . $type['name'],
        'description' => $type['description'],
        'provider' => ['@type' => 'EducationalOrganization', 'name' => $site['site_name'], 'url' => $site['base_url']],
        'areaServed' => ['@type' => 'City', 'name' => 'Leipzig'],
        'url' => $pageCanonical,
    ],
    [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Startseite', 'item' => $site['base_url'] . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Schulformen', 'item' => $site['base_url'] . '/nh_seo/schulformen.php'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $type['name'], 'item' => $pageCanonical],
        ],
    ],
];
?><!doctype html>
<html lang="de" data-theme="leipzig-blau">
<head><?php require __DIR__ . '/meta.php'; ?></head>
<body>
<?php require __DIR__ . '/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt">
<div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/">Startseite</a><span>›</span><a href="/nh_seo/schulformen.php">Schulformen</a><span>›</span><span aria-current="page"><?= e($type['name']) ?></span></nav>

<section class="hero">
  <div>
    <span class="eyebrow">Nachhilfe in Leipzig</span>
    <h1>Nachhilfe für <?= e($type['name']) ?></h1>
    <p><?= e($type['lead']) ?></p>
    <div class="hero-actions">
      <a class="button button--gold" href="/nh_seo/kontakt.php?schulform=<?= rawurlencode($type['name']) ?>">Unterstützung anfragen</a>
      <a class="button button--blue" href="#schwerpunkte">Schwerpunkte ansehen</a>
    </div>
  </div>
  <aside class="hero-panel">
    <h2><?= e($type['focus']) ?></h2>
    <p>Der Unterricht wird an Lernstand, Anforderungen und verfügbare Zeit angepasst.</p>
  </aside>
</section>

<section class="section" id="schwerpunkte">
  <header class="section-heading"><div><span class="eyebrow">Schwerpunkte</span><h2>Was in dieser Lernphase wichtig ist</h2></div></header>
  <div class="topic-list">
    <?php foreach ($type['topics'] as $topic): ?><div class="topic-chip"><?= e($topic) ?></div><?php endforeach; ?>
  </div>
</section>

<section class="section">
  <header class="section-heading"><div><span class="eyebrow">Lernweg</span><h2>Individuell statt nach Standardschema</h2></div></header>
  <div class="card-grid card-grid--3">
    <article class="card"><h3>Ausgangsstand klären</h3><p>Aktuelle Leistungen, sichere Grundlagen und konkrete Unsicherheiten werden getrennt betrachtet.</p></article>
    <article class="card"><h3>Ziel festlegen</h3><p>Das Ziel kann eine Klausur, ein Abschluss, ein besseres Verständnis oder eine langfristige Stabilisierung sein.</p></article>
    <article class="card"><h3>Transfer prüfen</h3><p>Neue Kenntnisse werden an veränderten Aufgaben angewendet, damit sie nicht an einem Beispiel hängen bleiben.</p></article>
  </div>
</section>

<section class="section">
  <header class="section-heading"><div><span class="eyebrow">Passende Fächer</span><h2>Fachliche Unterstützung auswählen</h2></div></header>
  <div class="mini-link-grid">
    <?php foreach ($subjects as $subject): ?><a href="/<?= e($subject['file']) ?>"><span aria-hidden="true"><?= e($subject['icon']) ?></span><strong><?= e($subject['name']) ?></strong></a><?php endforeach; ?>
  </div>
</section>

<section class="section cta">
  <div><span class="eyebrow">Nächster Schritt</span><h2>Nachhilfe für <?= e($type['name']) ?> anfragen</h2><p>Mit Fach, Lernziel und aktuellem Thema lässt sich der Bedarf schnell einordnen.</p></div>
  <a class="button button--gold" href="/nh_seo/kontakt.php?schulform=<?= rawurlencode($type['name']) ?>">Kontakt aufnehmen</a>
</section>
</div>
<?php require __DIR__ . '/footer.php'; ?>
</main>
</div>
</body>
</html>
