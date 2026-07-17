<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';
$site = require __DIR__ . '/config/site.php';
$pageTitle = 'Kontakt und Probestunde | Nachhilfe Leipzig | easyIT';
$pageDescription = 'Kontakt zu easyIT Nachhilfe Leipzig: unverbindlich Fach, Klassenstufe, Thema und gewünschten Zeitraum für Nachhilfe oder Prüfungsvorbereitung anfragen.';
$pageCanonical = $site['base_url'] . '/kontakt.php';
$errors=[];$success=false;
$data=['name'=>'','email'=>'','phone'=>'','subject'=>'','level'=>'','message'=>''];
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    foreach($data as $key=>$value){$data[$key]=trim((string)($_POST[$key] ?? ''));}
    $honeypot=trim((string)($_POST['website'] ?? ''));
    if($honeypot!==''){$errors[]='Die Anfrage konnte nicht verarbeitet werden.';}
    if(mb_strlen($data['name'])<2){$errors[]='Bitte gib einen Namen an.';}
    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){$errors[]='Bitte gib eine gültige E-Mail-Adresse an.';}
    if(mb_strlen($data['message'])<20){$errors[]='Bitte beschreibe dein Anliegen mit mindestens 20 Zeichen.';}
    if(!$errors){
        // Versand ist aus Sicherheitsgründen standardmäßig deaktiviert.
        // Nach Serverkonfiguration kann hier SMTP oder ein datenschutzkonformer Mailer ergänzt werden.
        $success=true;
        foreach($data as $key=>$value){$data[$key]='';}
    }
}
?><!doctype html><html lang="de"><head><?php require __DIR__.'/includes/meta.php'; ?></head><body>
<?php require __DIR__.'/includes/header.php'; ?><div class="page-shell"><?php require __DIR__.'/includes/sidebar.php'; ?>
<main class="main-content" id="hauptinhalt"><div class="content-wrap"><nav class="breadcrumbs" aria-label="Brotkrumen"><a href="/nh_seo/">Startseite</a><span>›</span><span aria-current="page">Kontakt</span></nav>
<section class="content-hero"><span class="eyebrow">Unverbindlich anfragen</span><h1>Kontakt und Probestunde</h1><p class="lead">Beschreibe kurz Fach, Klassenstufe, Ziel und aktuelle Schwierigkeit. So lässt sich schnell einschätzen, welche Unterstützung sinnvoll ist.</p></section>
<section class="section contact-grid"><div>
<?php if($success): ?><div class="notice notice--success" role="status"><strong>Die Formulardaten wurden erfolgreich geprüft.</strong><p>Der echte E-Mail-Versand ist in dieser Entwicklungsfassung noch deaktiviert. Vor Veröffentlichung muss SMTP eingerichtet werden.</p></div><?php endif; ?>
<?php if($errors): ?><div class="notice notice--error" role="alert"><strong>Bitte prüfe deine Angaben:</strong><ul><?php foreach($errors as $error): ?><li><?=e($error)?></li><?php endforeach; ?></ul></div><?php endif; ?>
<form class="contact-form" method="post" action="/nh_seo/kontakt.php" novalidate>
<div class="field" style="position:absolute;left:-9999px" aria-hidden="true"><label for="website">Website</label><input id="website" name="website" tabindex="-1" autocomplete="off"></div>
<div class="form-row"><div class="field"><label for="name">Name *</label><input id="name" name="name" value="<?=e($data['name'])?>" autocomplete="name" required></div><div class="field"><label for="email">E-Mail *</label><input id="email" type="email" name="email" value="<?=e($data['email'])?>" autocomplete="email" required></div></div>
<div class="form-row"><div class="field"><label for="phone">Telefon</label><input id="phone" name="phone" value="<?=e($data['phone'])?>" autocomplete="tel"></div><div class="field"><label for="subject">Fach</label><select id="subject" name="subject"><option value="">Bitte wählen</option><?php foreach(['Mathematik','Physik','Chemie','Informatik','Sprachen','Sonstiges'] as $o): ?><option <?= $data['subject']===$o?'selected':'' ?>><?=e($o)?></option><?php endforeach; ?></select></div></div>
<div class="field"><label for="level">Klassenstufe / Ausbildung / Studium</label><input id="level" name="level" value="<?=e($data['level'])?>"></div>
<div class="field"><label for="message">Worum geht es? *</label><textarea id="message" name="message" required><?=e($data['message'])?></textarea></div>
<p><small>Mit dem Absenden werden die Angaben nur zur Bearbeitung der Anfrage verwendet. Vor Livebetrieb ist die Datenschutzerklärung an den tatsächlichen Versandprozess anzupassen.</small></p>
<button class="button button--gold" type="submit">Anfrage prüfen</button></form></div>
<aside><div class="hero-panel"><h2>Direkter Kontakt</h2><p><strong>E-Mail</strong><br><a href="mailto:<?=e($site['email'])?>"><?=e($site['email'])?></a></p><p><strong>Telefon</strong><br><a href="tel:<?=e(preg_replace('/\\s+/','',$site['phone']))?>"><?=e($site['phone'])?></a></p><p><strong>Region</strong><br><?=e($site['address'])?> und Umgebung</p></div><div class="info-box" style="margin-top:1rem"><h2>Hilfreiche Angaben</h2><ul class="icon-list"><li>Fach und Klassenstufe</li><li>aktuelles Thema</li><li>Ziel oder Prüfungstermin</li><li>gewünschte Zeiten</li></ul></div></aside>
</section></div><?php require __DIR__.'/includes/footer.php'; ?></main></div></body></html>