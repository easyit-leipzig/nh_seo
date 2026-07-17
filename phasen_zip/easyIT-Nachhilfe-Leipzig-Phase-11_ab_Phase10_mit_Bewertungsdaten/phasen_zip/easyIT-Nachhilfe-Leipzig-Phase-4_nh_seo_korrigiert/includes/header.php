<?php
declare(strict_types=1);
$site = $site ?? require __DIR__ . '/../config/site.php';
?>
<a class="skip-link" href="#hauptinhalt">Direkt zum Inhalt</a>
<header class="site-header">
    <a class="brand" href="/nh_seo/" aria-label="easyIT Nachhilfe Leipzig – Startseite">
        <img src="/nh_seo/assets/img/logo.svg" alt="easyIT Nachhilfe Leipzig" width="250" height="88">
        <span class="brand-copy">
            <strong>Nachhilfe in Leipzig</strong>
            <small>Mathematik · Physik · Chemie · Informatik</small>
        </span>
    </a>

    <div class="header-actions">
        <a class="header-contact" href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
        <a class="button button--gold" href="/nh_seo/kontakt.php">Probestunde anfragen</a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="sidebar">
            <span></span><span></span><span></span>
            <span class="sr-only">Menü öffnen</span>
        </button>
    </div>
</header>
