<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
$site = require __DIR__ . '/config/site.php';
$pageTitle = 'FAQ zur Nachhilfe in Leipzig | Ablauf, Fächer und Kosten | easyIT';
$pageDescription = 'Antworten auf häufige Fragen zu Fächern, Ablauf, Einzelunterricht, Prüfungsvorbereitung, Lernmaterialien, Terminen und Preisen.';
$pageCanonical = $site['base_url'] . '/faq.php';
?><!doctype html>
<html lang="de">
<head><?php require __DIR__ . '/includes/meta.php'; ?>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Für welche Fächer bietet easyIT Nachhilfe an?","acceptedAnswer":{"@type":"Answer","text":"Der Schwerpunkt liegt auf Mathematik, Physik, Chemie und Informatik."}},{"@type":"Question","name":"Ist Prüfungsvorbereitung möglich?","acceptedAnswer":{"@type":"Answer","text":"Ja. Klausuren, Abschlussprüfungen, Abitur und ausgewählte Studieninhalte können gezielt vorbereitet werden."}},{"@type":"Question","name":"Wie beginnt die Zusammenarbeit?","acceptedAnswer":{"@type":"Answer","text":"Zunächst werden Fach, Ziel, aktueller Stand und organisatorischer Rahmen geklärt."}}]}
</script></head>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt"><div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/nh_seo/">Startseite</a><span>›</span><span aria-current="page">Häufige Fragen zur Nachhilfe</span></nav>
<section class="content-hero"><span class="eyebrow">Klare Antworten vor der ersten Anfrage</span><h1>Häufige Fragen zur Nachhilfe</h1><p class="lead">Antworten auf häufige Fragen zu Fächern, Ablauf, Einzelunterricht, Prüfungsvorbereitung, Lernmaterialien, Terminen und Preisen.</p></section>

<section class="section faq">
<h2>Unterricht und Fächer</h2>
<details open><summary>Für welche Fächer bietet easyIT Nachhilfe an?</summary><p>Der fachliche Schwerpunkt liegt auf Mathematik, Physik, Chemie und Informatik. Für Sprachen, Ethikfächer und weitere Bereiche sollen passende Honorarkräfte das Angebot ergänzen.</p></details>
<details><summary>Für welche Klassenstufen ist der Unterricht geeignet?</summary><p>Die Unterstützung kann an Sekundarstufe, Gymnasium, Ausbildung, Abitur oder ausgewählte Studieninhalte angepasst werden. Entscheidend ist, ob Fach, Ziel und vorhandene Voraussetzungen sinnvoll zusammenpassen.</p></details>
<details><summary>Ist auch kurzfristige Hilfe vor einer Klausur möglich?</summary><p>Das hängt von freien Terminen und dem Umfang des Stoffes ab. Kurzfristig können Prioritäten gesetzt werden; dauerhaft fehlende Grundlagen lassen sich jedoch selten in einer einzigen Stunde beheben.</p></details>
<details><summary>Gibt es Online-Nachhilfe?</summary><p>Die technische Grundstruktur ist vorgesehen. Vor Veröffentlichung sollte verbindlich festgelegt werden, welche Unterrichtsformen tatsächlich angeboten werden.</p></details>
<h2>Ablauf und Methodik</h2>
<details><summary>Wie läuft die erste Stunde ab?</summary><p>Ziele, aktueller Lernstand und konkrete Schwierigkeiten werden geklärt. Danach wird an einer passenden Aufgabe geprüft, welcher Erklärungs- und Übungsweg sinnvoll ist.</p></details>
<details><summary>Werden Hausaufgaben einfach gelöst?</summary><p>Nein. Hausaufgaben können als Ausgangspunkt dienen, aber der Lösungsweg soll nachvollzogen und möglichst selbstständig entwickelt werden.</p></details>
<details><summary>Darf das Smartphone im Unterricht verwendet werden?</summary><p>Für Recherche, Lernprogramme oder Dokumentation kann es sinnvoll sein. Private Kommunikation unterbricht dagegen die Konzentration und gehört in die Pause.</p></details>
<details><summary>Gibt es Lernmaterialien?</summary><p>Passende Lösungsblätter, Übersichten oder Übungsimpulse können bereitgestellt werden, wenn sie den Lernprozess sinnvoll unterstützen.</p></details>
<h2>Preise und Termine</h2>
<details><summary>Was kostet eine Nachhilfestunde?</summary><p>Die verbindlichen Preise werden auf der Seite „Preise und Ablauf“ veröffentlicht, sobald Dauer und Unterrichtsformen abschließend festgelegt sind.</p></details>
<details><summary>Was passiert bei einer Absage?</summary><p>Eine klare Absageregel wird vor Unterrichtsbeginn vereinbart. Die endgültige Frist und mögliche Kosten müssen noch verbindlich in die Website eingetragen werden.</p></details>
<details><summary>Wie kann ich eine Probestunde anfragen?</summary><p>Über das Kontaktformular können Fach, Klassenstufe, Thema und bevorzugte Kontaktmöglichkeit übermittelt werden.</p></details>
</section>
<section class="section cta"><div><h2>Eine Frage ist noch offen?</h2><p>Schreibe kurz, worum es geht. Du erhältst eine konkrete Rückmeldung.</p></div><a class="button button--gold" href="/nh_seo/kontakt.php">Frage stellen</a></section>

</div><?php require __DIR__ . '/includes/footer.php'; ?></main></div></body></html>