# [Eurovi.be](https://eurovi.be) — European Vibe Coding Championship

Europe's vibe coding competition platform. Developers build complete applications live on stage using AI tools. First edition co-located with Drupal Developer Days Athens 2026.

---

## Pages

| Path | Description |
|------|-------------|
| `/` | Competitions overview — lists all active and upcoming editions |
| `/2026_Athens` | Athens 2026 competition page — details, judging criteria, registration form |
| `/contact.php` | Contact and sponsorship inquiries |
| `/privacy.php` | Privacy policy |

## Structure

```
eurovi.be/
├── index.php               # Homepage — competitions list
├── styles.css              # Global design system (CSS custom properties)
├── favicon.svg
├── contact.php
├── privacy.php
├── includes/
│   ├── header.php          # Shared <head>, nav — supports $pageTitle, $metaDescription, $extraStyles, $geoMeta
│   └── footer.php          # Shared footer, Organization schema
└── 2026_Athens/
    ├── index.php           # Athens competition page
    └── style.css           # Athens theme overrides (Mediterranean blue palette)
```

## Design system

Global tokens live in `:root` in `styles.css`. One accent color (`--primary: #7c3aed`). The Athens page overrides the palette via its own `--athens-*` variables.

Per-page SEO is controlled through PHP variables set before `include 'includes/header.php'`:

```php
$pageTitle       = '...';
$metaDescription = '...';
$metaKeywords    = '...';
$ogDescription   = '...';
$extraStyles     = '/path/to/page.css';  // optional
$geoMeta         = '...';               // optional, raw HTML string
```

## Athens 2026

**[eurovi.be/2026_Athens](https://eurovi.be/2026_Athens)**

- Part of [Drupal Developer Days Athens 2026](https://devdays2026.drupal.org.gr/)
- April 22-25, 2026 — OTE Academy, Marousi, Athens, Greece
- Open to all developers worldwide. Physical presence required if selected.
- Registration via embedded Google Form

Judging criteria: Business Impact, Code Quality, AI Efficiency, Drupal & Open Source, Creativity & Design.

## Development

Plain PHP, no framework, no build step. Drop on any PHP host.

```bash
php -S localhost:8000
```
