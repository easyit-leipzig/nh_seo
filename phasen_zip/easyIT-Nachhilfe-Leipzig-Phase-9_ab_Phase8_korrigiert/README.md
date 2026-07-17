# easyIT Nachhilfe Leipzig – Phase 9

Phase 9 ergänzt ein sicheres, MySQL-basiertes CMS-Fundament.

## Neu enthalten

- geschützter Adminbereich
- Login und Logout
- Rollenbasis `admin` / `editor`
- MySQL-Schema
- PDO-Datenbankzugriff
- Content-Typen:
  - FAQ
  - Bewertungen
  - Jobs
  - Blog
- Entwurf, veröffentlicht, archiviert
- SEO-Titel und Meta-Beschreibung pro Inhalt
- Slugs und Sortierung
- Hervorhebungskennzeichen
- Revisionshistorie
- Audit-Log
- CSRF-Schutz
- Passwort-Hashing
- Session-Regeneration beim Login
- CLI-Skript zum sicheren Anlegen des ersten Admins
- robots.txt- und Server-Schutz für interne Verzeichnisse

## Installation

1. `database/schema.sql` in MySQL importieren.
2. Zugangsdaten in `config/database.php` eintragen.
3. Ersten Admin anlegen:

```bash
php database/create-admin.php admin admin@example.de "SEHR_SICHERES_PASSWORT"
```

4. Adminbereich öffnen:

```text
https://easyit-leipzig.de/admin/
```

## Sicherheit

- Das Admin-Erstellungsskript läuft nur in der Kommandozeile.
- Passwörter werden mit `password_hash()` gespeichert.
- Der Adminbereich wird nicht indexiert.
- Datenbank- und Storage-Verzeichnisse werden serverseitig gesperrt.
- Vor Livebetrieb sollte zusätzlich ein serverseitiges Backup-Konzept eingerichtet werden.

## Noch nicht automatisch verbunden

Die bestehenden statischen Frontend-Seiten bleiben als Ausfallsicherung erhalten. Die Funktion `cms_items()` in `includes/content-repository.php` steht bereit, um FAQ, Bewertungen, Jobs und Blog schrittweise aus MySQL zu laden.


## Lokale Installation
Dieses Paket ist für `https://localhost/nh_seo/` angepasst. Direkt nach `C:\\xampp\\htdocs\\nh_seo\\` entpacken.
