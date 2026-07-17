<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
$site = require __DIR__ . '/config/site.php';
$pageTitle = 'Bewertungen und Erfahrungen | easyIT Nachhilfe Leipzig';
$pageDescription = 'Erfahrungen von Lernenden mit easyIT Nachhilfe Leipzig: verständliche Erklärungen, Motivation, persönliche Begleitung und sichtbare Fortschritte.';
$pageCanonical = $site['base_url'] . '/bewertungen.php';
?><!doctype html>
<html lang="de">
<head><?php require __DIR__ . '/includes/meta.php'; ?></head>
<body>
<?php require __DIR__ . '/includes/header.php'; ?>
<div class="page-shell">
<?php require __DIR__ . '/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt"><div class="content-wrap">
<nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/nh_seo/">Startseite</a><span>›</span><span aria-current="page">Bewertungen und Erfahrungen</span></nav>
<section class="content-hero"><span class="eyebrow">Was Lernende an der Zusammenarbeit besonders hervorheben</span><h1>Bewertungen und Erfahrungen</h1><p class="lead">Erfahrungen von Lernenden mit easyIT Nachhilfe Leipzig: verständliche Erklärungen, Motivation, persönliche Begleitung und sichtbare Fortschritte.</p></section>

<section class="section"><div class="info-box"><h2>Hinweis zur Veröffentlichung</h2><p>Die folgenden Aussagen sind als redaktionelle Kurzfassungen vorhandener Rückmeldungen angelegt. Vor Veröffentlichung sollten Wortlaut, Einwilligung zur Nutzung und gewünschte Anonymisierung mit den Originalbewertungen abgeglichen werden.</p></div>
<div class="card-grid" style="margin-top:1.5rem">
<article class="quote-card"><blockquote>Die Begeisterung im Unterricht wurde als erfrischend und ansteckend beschrieben.</blockquote><cite>Rückmeldung einer Studentin</cite></article>
<article class="quote-card"><blockquote>In zwei Fächern verbesserten sich die Noten innerhalb der Zusammenarbeit deutlich.</blockquote><cite>Rückmeldung aus Klasse 8</cite></article>
<article class="quote-card"><blockquote>Besonders geschätzt wurden verständliche Erklärungen und die Möglichkeit, jederzeit nachzufragen.</blockquote><cite>Zusammenfassung mehrerer Rückmeldungen</cite></article>
<article class="quote-card"><blockquote>Der Unterricht half dabei, Aufgaben nicht nur zu lösen, sondern den zugrunde liegenden Gedanken zu verstehen.</blockquote><cite>Redaktionelle Zusammenfassung</cite></article>
</div></section>
<section class="section split"><div class="prose"><h2>Bewertungen sind für mich mehr als Werbung</h2><p>Rückmeldungen zeigen, welche Teile des Unterrichts tragen und wo etwas verbessert werden muss. Positive Ergebnisse sind erfreulich, aber entscheidend ist die Frage, wodurch sie entstanden sind: durch verständliche Bilder, eine andere Reihenfolge, passende Übungen, mehr Sicherheit oder eine veränderte Lernorganisation.</p><p>Deshalb werden Bewertungen nicht als pauschales Versprechen verstanden. Jede Lernsituation ist anders. Sie geben jedoch einen Eindruck davon, welche Haltung und Arbeitsweise Lernende bei easyIT erleben.</p></div><aside class="hero-panel"><h2>Eigene Erfahrung teilen</h2><p>Eine kurze, ehrliche Rückmeldung hilft anderen Lernenden bei der Orientierung.</p><a class="button button--blue" href="/nh_seo/kontakt.php">Rückmeldung senden</a></aside></section>

</div><?php require __DIR__ . '/includes/footer.php'; ?></main></div></body></html>