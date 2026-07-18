<?php
declare(strict_types=1);
$site = $site ?? require __DIR__ . '/../config/site.php';
?>
<a class="skip-link" href="#hauptinhalt">Direkt zum Inhalt</a>
<header class="site-header">
    <a class="brand" href="/" aria-label="easyIT Nachhilfe Leipzig – Startseite">
        <img src="/nh_seo/assets/img/logo.svg" alt="easyIT Nachhilfe Leipzig" width="250" height="88">
        <span class="brand-copy">
            <strong>Nachhilfe in Leipzig</strong>
            <small>Mathematik · Physik · Chemie · Informatik</small>
        </span>
    </a>

    <form class="site-search" role="search" action="/nh_seo/sitemap.php" method="get">
        <label class="sr-only" for="siteSearchInput">Website durchsuchen</label>
        <input id="siteSearchInput" name="q" type="search" placeholder="Seite suchen…" autocomplete="off">
        <ul id="siteSearchResults" class="site-search__results" hidden></ul>
    </form>
    <div class="header-actions">
        <a class="header-contact" href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
        <a class="button button--gold" href="/nh_seo/kontakt.php">Probestunde anfragen</a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
            <span></span><span></span><span></span>
            <span class="sr-only">Hauptmenü öffnen</span>
        </button>
    </div>
</header>
