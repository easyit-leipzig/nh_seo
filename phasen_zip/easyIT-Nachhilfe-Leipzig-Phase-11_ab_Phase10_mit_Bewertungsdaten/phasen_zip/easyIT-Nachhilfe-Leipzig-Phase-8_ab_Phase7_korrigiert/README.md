# easyIT Nachhilfe Leipzig – Phase 8

Phase 8 ergänzt die Anfrage-, Datenschutz- und Conversion-Funktionen.

## Neu enthalten

- vollständig neu aufgebautes Kontaktformular
- Übergabe von Fach, Schulform und Stadtteil aus Landingpages
- serverseitige Validierung
- CSRF-Schutz
- Honeypot gegen einfache Bots
- Session-basiertes Rate Limit
- sichere Header-Bereinigung
- konfigurierbarer E-Mail-Versand
- Erfolgsseite mit PRG-Muster
- minimales Ereignisprotokoll ohne Nachrichtentext
- Einwilligungsbanner für optionale Analyse
- Analyse-Hook ohne aktivierte Drittanbieter
- datensparsame Standardeinstellung
- responsive Kontakt- und Consent-Komponenten
- Schutz des Storage-Verzeichnisses
- aktualisierte robots.txt

## E-Mail-Versand aktivieren

In `config/forms.php`:
- `recipient_email` setzen
- `sender_email` setzen
- `enable_mail` auf `true` stellen

Für den produktiven Betrieb wird SMTP über eine Bibliothek wie PHPMailer empfohlen. Die eingebaute `mail()`-Variante ist nur eine einfache Serveroption.

## Datenschutz

- Formulardaten werden nur zur Bearbeitung der Anfrage verwendet.
- Das lokale Ereignisprotokoll enthält keinen Namen, keine E-Mail und keinen Nachrichtentext.
- Optionale Analyse bleibt ohne Zustimmung deaktiviert.
- Rechtstexte müssen vor Veröffentlichung rechtlich geprüft werden.
