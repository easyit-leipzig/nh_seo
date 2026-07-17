# easyIT Nachhilfe Leipzig – Phase 7

Phase 7 ist die technische Qualitäts- und Performancephase auf Basis von Phase 6.

## Neu enthalten

- installierbare PWA-Grundlage
- `manifest.webmanifest`
- Service Worker mit Offline-Fallback
- eigene Offline-Seite
- individuelle Fehlerseiten für 404 und 500
- Website-Suche mit lokalem Suchindex
- Suchfeld im Header
- stärkere Caching-Regeln
- GZIP/Deflate-Kompression
- HTTPS-Weiterleitung
- Security-Header
- HSTS-Vorbereitung
- Schutz interner Dateien
- Preload für Haupt-CSS
- aktualisierte robots.txt und Sitemap
- zusätzliche responsive und barrierearme Styles

## Hinweise zum Livebetrieb

- HTTPS muss vor Aktivierung der HSTS-Regel korrekt eingerichtet sein.
- Der Service Worker sollte nach Änderungen versioniert werden.
- Suchindex bei neuen Seiten in `assets/js/search-index.js` ergänzen.
- Security-Header mit dem eingesetzten Hosting prüfen.
- Cache-Version bei größeren Änderungen anpassen.

## Prüfungen

- alle PHP-Dateien per PHP-Lint
- ZIP-Integritätstest
- Manifest-JSON geprüft
