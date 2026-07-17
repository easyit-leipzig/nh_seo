<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
$site = require __DIR__ . '/config/site.php';
$pageTitle = 'Nachhilfe Leipzig für Mathe, Physik, Chemie & Informatik | easyIT';
$pageDescription = 'Persönliche Nachhilfe in Leipzig für Mathematik, Physik, Chemie und Informatik. Individuelle Förderung, Prüfungsvorbereitung und verständliche Erklärungen.';
$pageCanonical = $site['base_url'] . '/';
?><!doctype html>
<html lang="de" data-theme="leipzig-blau">
<head><?php require __DIR__ . '/includes/meta.php'; ?></head>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt">
<div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><span aria-current="page">Startseite</span></nav>

<section class="hero">
  <div>
    <span class="eyebrow">Individuelle Nachhilfe in Leipzig</span>
    <h1>Verstehen statt auswendig lernen.</h1>
    <p>easyIT unterstützt Schülerinnen, Schüler und Studierende in Mathematik, Physik, Chemie und Informatik – persönlich, strukturiert und mit Blick auf echte Fortschritte.</p>
    <div class="hero-actions">
      <a class="button button--gold" href="/kontakt.php">Probestunde anfragen</a>
      <a class="button button--blue" href="#faecher">Fächer entdecken</a>
    </div>
    <div class="stats" aria-label="Leistungsübersicht">
      <div class="stat"><strong>4</strong><span>MINT-Fächer</span></div>
      <div class="stat"><strong>1:1</strong><span>persönliche Begleitung</span></div>
      <div class="stat"><strong>Leipzig</strong><span>lokal & nah</span></div>
    </div>
  </div>
  <aside class="hero-panel">
    <h2>Wobei brauchst du Unterstützung?</h2>
    <ul>
      <li>Grundlagen sicher aufbauen</li>
      <li>Wissenslücken gezielt schließen</li>
      <li>Klausuren und Prüfungen vorbereiten</li>
      <li>Abitur oder Studium strukturieren</li>
    </ul>
    <a href="/methodik.php">Meine Methodik kennenlernen →</a>
  </aside>
</section>

<section class="section" id="faecher">
  <header class="section-heading">
    <div><span class="eyebrow">Fächer</span><h2>Nachhilfe, die Zusammenhänge sichtbar macht</h2></div>
    <p>Jede Fachseite ist als eigene lokale Landingpage vorbereitet.</p>
  </header>
  <div class="card-grid">
    <article class="card"><h3>Mathematik</h3><p>Von Grundrechenarten bis Analysis, Algebra und Abitur.</p><a href="/mathe-nachhilfe-leipzig.php">Mathe-Nachhilfe Leipzig →</a></article>
    <article class="card"><h3>Physik</h3><p>Mechanik, Elektrizitätslehre, Optik und moderne Physik.</p><a href="/physik-nachhilfe-leipzig.php">Physik-Nachhilfe Leipzig →</a></article>
    <article class="card"><h3>Chemie</h3><p>Stoffe, Reaktionen, Gleichgewichte und organische Chemie.</p><a href="/chemie-nachhilfe-leipzig.php">Chemie-Nachhilfe Leipzig →</a></article>
    <article class="card"><h3>Informatik</h3><p>Algorithmen, Programmierung, Datenbanken und Netzwerke.</p><a href="/informatik-nachhilfe-leipzig.php">Informatik-Nachhilfe Leipzig →</a></article>
  </div>
</section>

<section class="section faq">
  <header class="section-heading"><div><span class="eyebrow">Häufige Fragen</span><h2>Was Eltern und Lernende wissen möchten</h2></div></header>
  <details><summary>Für welche Klassenstufen ist die Nachhilfe geeignet?</summary><p>Die Förderung kann an Schulform, Klassenstufe, Ausbildung oder Studium angepasst werden.</p></details>
  <details><summary>Wie läuft eine erste Stunde ab?</summary><p>Zunächst werden Ziele, aktueller Stand und konkrete Schwierigkeiten gemeinsam geklärt.</p></details>
  <details><summary>Ist Prüfungsvorbereitung möglich?</summary><p>Ja. Inhalte, Zeitplan, Übungsphasen und typische Aufgaben können gezielt vorbereitet werden.</p></details>
</section>

<section class="section cta">
  <div><span class="eyebrow">Nächster Schritt</span><h2>Unverbindlich kennenlernen</h2><p>Beschreibe kurz Fach, Klassenstufe und aktuelle Herausforderung.</p></div>
  <a class="button button--gold" href="/kontakt.php">Kontakt aufnehmen</a>
</section>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
</main>
</div>
</body>
</html>
