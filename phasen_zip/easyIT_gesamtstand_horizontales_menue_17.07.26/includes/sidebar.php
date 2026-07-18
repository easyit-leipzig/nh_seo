<?php
declare(strict_types=1);

$currentPage = current_page();
$subjectPages = [
    'faecher.php',
    'mathe-nachhilfe-leipzig.php',
    'physik-nachhilfe-leipzig.php',
    'chemie-nachhilfe-leipzig.php',
    'informatik-nachhilfe-leipzig.php',
    'deutsch-nachhilfe-leipzig.php',
    'englisch-nachhilfe-leipzig.php',
    'franzoesisch-nachhilfe-leipzig.php',
    'spanisch-nachhilfe-leipzig.php',
    'latein-nachhilfe-leipzig.php',
];
$schoolPages = [
    'schulformen.php',
    'nachhilfe-grundschule-leipzig.php',
    'nachhilfe-oberschule-leipzig.php',
    'nachhilfe-gymnasium-leipzig.php',
    'nachhilfe-berufsschule-leipzig.php',
    'abiturvorbereitung-leipzig.php',
    'nachhilfe-studium-leipzig.php',
];
$aboutPages = ['ueber-mich.php', 'warum-easyit.php', 'methodik.php', 'bewertungen.php'];
$otherPages = [
    'preise.php', 'nachhilfe-in-leipzig.php', 'lernwerkzeuge.php', 'blog.php',
    'blog-artikel.php', 'faq.php', 'jobs.php', 'kontakt.php', 'sitemap.php',
    'notenrechner.php', 'prozentrechner.php', 'einheitenrechner.php', 'lernzeitplaner.php',
];

$groupClass = static fn(array $pages): string => in_array($currentPage, $pages, true) ? ' is-active' : '';
?>
<div class="navigation-bar" id="main-navigation">
    <nav class="main-nav" aria-label="Hauptnavigation">
        <a class="nav-link<?= $currentPage === 'index.php' ? ' is-active' : '' ?>" href="/nh_seo/index.php"<?= $currentPage === 'index.php' ? ' aria-current="page"' : '' ?>>Start</a>

        <div class="nav-item nav-item--dropdown<?= $groupClass($aboutPages) ?>">
            <a class="nav-link" href="/nh_seo/ueber-mich.php"<?= $currentPage === 'ueber-mich.php' ? ' aria-current="page"' : '' ?>>Über</a>
            <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Untermenü Über öffnen">
                <span aria-hidden="true">▾</span>
            </button>
            <div class="submenu">
                <a href="/nh_seo/ueber-mich.php">Über mich</a>
                <a href="/nh_seo/warum-easyit.php">Warum easyIT?</a>
                <a href="/nh_seo/methodik.php">Methodik & Unterrichtsregeln</a>
                <a href="/nh_seo/bewertungen.php">Bewertungen</a>
            </div>
        </div>

        <div class="nav-item nav-item--dropdown<?= $groupClass($subjectPages) ?>">
            <a class="nav-link" href="/nh_seo/faecher.php"<?= $currentPage === 'faecher.php' ? ' aria-current="page"' : '' ?>>Fächer</a>
            <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Untermenü Fächer öffnen">
                <span aria-hidden="true">▾</span>
            </button>
            <div class="submenu submenu--wide">
                <a href="/nh_seo/faecher.php"><strong>Alle Fächer</strong></a>
                <a href="/nh_seo/mathe-nachhilfe-leipzig.php">Mathematik</a>
                <a href="/nh_seo/physik-nachhilfe-leipzig.php">Physik</a>
                <a href="/nh_seo/chemie-nachhilfe-leipzig.php">Chemie</a>
                <a href="/nh_seo/informatik-nachhilfe-leipzig.php">Informatik</a>
                <a href="/nh_seo/deutsch-nachhilfe-leipzig.php">Deutsch</a>
                <a href="/nh_seo/englisch-nachhilfe-leipzig.php">Englisch</a>
                <a href="/nh_seo/franzoesisch-nachhilfe-leipzig.php">Französisch</a>
                <a href="/nh_seo/spanisch-nachhilfe-leipzig.php">Spanisch</a>
                <a href="/nh_seo/latein-nachhilfe-leipzig.php">Latein</a>
            </div>
        </div>

        <div class="nav-item nav-item--dropdown<?= $groupClass($schoolPages) ?>">
            <a class="nav-link" href="/nh_seo/schulformen.php"<?= $currentPage === 'schulformen.php' ? ' aria-current="page"' : '' ?>>Schulformen</a>
            <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Untermenü Schulformen öffnen">
                <span aria-hidden="true">▾</span>
            </button>
            <div class="submenu">
                <a href="/nh_seo/schulformen.php"><strong>Alle Schulformen</strong></a>
                <a href="/nh_seo/nachhilfe-grundschule-leipzig.php">Grundschule</a>
                <a href="/nh_seo/nachhilfe-oberschule-leipzig.php">Oberschule</a>
                <a href="/nh_seo/nachhilfe-gymnasium-leipzig.php">Gymnasium</a>
                <a href="/nh_seo/nachhilfe-berufsschule-leipzig.php">Berufsschule</a>
                <a href="/nh_seo/abiturvorbereitung-leipzig.php">Abitur</a>
                <a href="/nh_seo/nachhilfe-studium-leipzig.php">Studium</a>
            </div>
        </div>

        <div class="nav-item nav-item--dropdown<?= $groupClass($otherPages) ?>">
            <a class="nav-link" href="/nh_seo/preise.php"<?= $currentPage === 'preise.php' ? ' aria-current="page"' : '' ?>>Sonstiges</a>
            <button class="submenu-toggle" type="button" aria-expanded="false" aria-label="Untermenü Sonstiges öffnen">
                <span aria-hidden="true">▾</span>
            </button>
            <div class="submenu submenu--right submenu--wide">
                <a href="/nh_seo/preise.php">Preise & Ablauf</a>
                <a href="/nh_seo/nachhilfe-in-leipzig.php">Leipzig & Stadtteile</a>
                <a href="/nh_seo/lernwerkzeuge.php">Lernwerkzeuge</a>
                <a href="/nh_seo/blog.php">Lernblog</a>
                <a href="/nh_seo/faq.php">FAQ</a>
                <a href="/nh_seo/jobs.php">Jobs</a>
                <a href="/nh_seo/kontakt.php"><strong>Kontakt</strong></a>
            </div>
        </div>
    </nav>
</div>
