# Kingston — WordPress Theme

A static WordPress theme converted from the hand-built `kingstonca.com`
HTML site. The theme is "static" in the sense that page content lives in
PHP template files (not in the WordPress block editor) — install it,
activate it, create a few empty Pages so the URLs match, and edit the
template files when you want to change content.

## What's in the package

```
kingston-theme/
├── style.css                  # Theme metadata (required by WordPress)
├── functions.php              # Asset enqueue, helpers, menu support
├── header.php                 # Top bar + nav + mobile drawer
├── footer.php                 # Site footer
├── index.php                  # Fallback template
├── page.php                   # Default Page template
├── front-page.php             # Homepage (was index.html)
├── 404.php                    # Not-found template
├── page-<slug>.php            # One template per converted HTML page
└── assets/                    # CSS, JS, images (copied from /assets)
```

## Install

1. Build the install zip from the project root:

   ```bash
   ./build/wp_package.sh
   ```

   This produces `kingston-theme.zip` with the layout WordPress requires:

   ```
   kingston-theme.zip/
     kingston-theme/
       style.css
       functions.php
       ...
   ```

   > If you see **"The package could not be installed. The theme is missing
   > the style.css stylesheet."** in WP admin, the zip almost certainly has
   > the wrong structure (flat, or the folder is double-nested). Always
   > build it with the script above, or zip the `kingston-theme/` directory
   > itself — never zip its contents from inside, and never zip the whole
   > project repo.

2. In WordPress admin go to **Appearance → Themes → Add New → Upload Theme**,
   pick `kingston-theme.zip`, install, and **Activate**.

3. (Or copy the `kingston-theme/` folder directly into
   `wp-content/themes/` on the server — same result, no zip needed.)

## First-time setup (≈ 5 minutes)

1. **Settings → Reading**
   - "Your homepage displays" → **A static page**.
   - "Homepage" → create a new blank page called `Home` and select it.
2. **Settings → Permalinks** → choose **Post name** (`/%postname%/`).
3. Create one Page in **Pages → Add New** for each section the navigation
   links to, using the slug listed below. Leave the body empty — the
   matching `page-<slug>.php` template renders the static content
   automatically.

| Slug                  | Page title                  |
| --------------------- | --------------------------- |
| `about`               | About                       |
| `services`            | Services                    |
| `contact`             | Contact                     |
| `freezones`           | Free Zones                  |
| `business-setup`      | Business Setup              |
| `mainland-setup`      | Mainland Setup              |
| `offshore-setup`      | Offshore Setup              |
| `pro-services`        | PRO & Visa Services         |
| `accounting`          | Accounting & Bookkeeping    |
| `aml-compliance`      | AML/CFT Compliance          |
| `corporate-tax`       | Corporate Tax               |
| `due-diligence`       | Due Diligence               |
| `esr`                 | ESR Compliance              |
| `excise-tax`          | Excise Tax                  |
| `feasibility-studies` | Feasibility Studies         |
| `forensic-audit`      | Forensic Audit              |
| `free-zone`           | Free Zone Audit             |
| `internal-audit`      | Internal Audit              |
| `statutory-audit`     | Statutory Audit             |
| `vat`                 | VAT Services                |
| `free-zone-adgm`      | Free Zone — ADGM            |
| `free-zone-dafza`     | Free Zone — DAFZA           |
| `free-zone-difc`      | Free Zone — DIFC            |
| `free-zone-dmcc`      | Free Zone — DMCC            |
| `free-zone-ifza`      | Free Zone — IFZA            |
| `free-zone-jafza`     | Free Zone — JAFZA           |
| `free-zone-meydan`    | Free Zone — Meydan          |
| `free-zone-rakez`     | Free Zone — RAKEZ           |
| `free-zone-shams`     | Free Zone — SHAMS           |

WordPress automatically picks `page-<slug>.php` when a Page's slug matches —
no further configuration needed. (Alternatively, for any Page you can pick
the template manually in **Page Attributes → Template**.)

## Editing content

- **Per-page content** → open the matching `page-<slug>.php` and edit the
  HTML directly. The `front-page.php` file holds the homepage.
- **Header / nav / topbar** → `header.php`.
- **Footer** → `footer.php`.
- **Styles** → `assets/css/styles.css`.
- **Behaviour (slider, mobile menu)** → `assets/js/main.js`.
- **Images** → drop replacements into `assets/img/...` and reference them
  in templates with `<?php echo kingston_asset('img/foo.svg'); ?>`.

### URL rewriting

Internal links use the `kingston_url('foo.html')` helper, which resolves to
`home_url('/foo/')`. If you change a Page's slug in WP, also update the
helper call (or rename the page-template file).

### Changing assets

`functions.php` enqueues `assets/css/styles.css` and `assets/js/main.js`
via `wp_enqueue_scripts` with cache-busting based on file mtime — just
overwrite the files and refresh.

## Regenerating templates from source HTML

If you keep the upstream static HTML in sync and want to re-convert:

```bash
python3 build/wp_convert.py
```

This rewrites every `kingston-theme/page-<slug>.php` and `front-page.php`.
Manual edits inside those files will be lost — make recurring changes in
the source HTML, in `header.php`/`footer.php`, or extend `wp_convert.py`.
