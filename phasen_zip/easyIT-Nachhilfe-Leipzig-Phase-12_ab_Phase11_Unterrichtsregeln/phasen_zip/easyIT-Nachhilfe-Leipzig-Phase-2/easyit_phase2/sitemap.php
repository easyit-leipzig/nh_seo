<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
$site = require __DIR__ . '/config/site.php';
$pageTitle = 'Sitemap | Alle Seiten von easyIT Nachhilfe Leipzig';
$pageDescription = 'Übersicht der wichtigsten Seiten zu Nachhilfe, Fächern, Methodik, Preisen, Bewertungen, FAQ, Jobs und Kontakt bei easyIT Leipzig.';
$pageCanonical = $site['base_url'] . '/sitemap.php';
?><!doctype html>
<html lang="de">
<head><?php require __DIR__ . '/includes/meta.php'; ?></head>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt"><div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/">Startseite</a><span>›</span><span aria-current="page">Sitemap</span></nav>
<section class="content-hero"><span class="eyebrow">Alle wichtigen Inhalte auf einen Blick</span><h1>Sitemap</h1><p class="lead">Übersicht der wichtigsten Seiten zu Nachhilfe, Fächern, Methodik, Preisen, Bewertungen, FAQ, Jobs und Kontakt bei easyIT Leipzig.</p></section>

<section class="section"><div class="link-list"><a href="/">Startseite</a><a href="/warum-easyit.php">Warum easyIT?</a><a href="/ueber-mich.php">Über mich</a><a href="/methodik.php">Methodik</a><a href="/mathe-nachhilfe-leipzig.php">Mathe-Nachhilfe Leipzig</a><a href="/physik-nachhilfe-leipzig.php">Physik-Nachhilfe Leipzig</a><a href="/chemie-nachhilfe-leipzig.php">Chemie-Nachhilfe Leipzig</a><a href="/informatik-nachhilfe-leipzig.php">Informatik-Nachhilfe Leipzig</a><a href="/preise.php">Preise und Ablauf</a><a href="/bewertungen.php">Bewertungen</a><a href="/faq.php">FAQ</a><a href="/jobs.php">Jobs</a><a href="/kontakt.php">Kontakt</a><a href="/impressum.php">Impressum</a><a href="/datenschutz.php">Datenschutz</a></div></section>

</div><?php require __DIR__ . '/includes/footer.php'; ?></main></div></body></html>