# Phase 6 – korrigiert für XAMPP-Unterverzeichnis

Zielverzeichnis:

`C:\xampp\htdocs\nh_seo\`

Aufruf:

`https://localhost/nh_seo/`

## Wichtige Pfadregel

- Browser-URLs beginnen mit `/nh_seo/`.
- PHP-Dateisystempfade verwenden unverändert `__DIR__` und `dirname()`.
- An `require`, `require_once`, `include` und `include_once` wird kein `/nh_seo/` angehängt.

Das ZIP besitzt kein zusätzliches Oberverzeichnis. Sein Inhalt wird direkt nach `htdocs/nh_seo/` entpackt.
