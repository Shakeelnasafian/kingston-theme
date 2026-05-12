# Kingston — WordPress Theme

A WordPress theme converted from the hand-built `kingstonca.com` HTML site.
The theme works out of the box with the original static content, **and** is
fully editable from the WordPress admin via the free [Advanced Custom Fields
(ACF)](https://wordpress.org/plugins/advanced-custom-fields/) plugin —
admins can change every piece of text, every image and every menu without
touching code.

## What's in the package

```
kingston-theme/
├── style.css                  # Theme metadata (required by WordPress)
├── functions.php              # Asset enqueue + helpers + ACF field-group loader
├── header.php                 # Top bar + nav + mobile drawer (Theme Options-driven)
├── footer.php                 # Site footer (Theme Options-driven)
├── front-page.php             # Homepage (every section ACF-driven)
├── page-theme-options.php     # Container template for site-wide settings
├── page-<slug>.php            # One template per page (each ACF-driven)
├── 404.php                    # Not-found template
├── index.php / page.php       # Fallback templates
├── inc/
│   ├── acf-fields.php         # All ACF field group registrations (in PHP)
│   └── icons.php              # Inline SVG icon library used by templates
├── template-parts/
│   ├── cta-banner.php         # Shared CTA banner (used everywhere)
│   └── detail-page.php        # Shared body for service/freezone detail pages
└── assets/                    # CSS, JS, images
```

## Install

1. Build the install zip from the project root:

   ```bash
   ./build/wp_package.sh
   ```

   This produces `kingston-theme.zip` with the layout WordPress requires.

2. In WordPress admin: **Appearance → Themes → Add New → Upload Theme**,
   pick `kingston-theme.zip`, install, and **Activate**.

3. Or copy the `kingston-theme/` folder directly into
   `wp-content/themes/` on the server.

## First-time setup (≈ 5 minutes)

1. **Settings → Reading**
   - "Your homepage displays" → **A static page**.
   - "Homepage" → create a new blank page called `Home` and select it.
2. **Settings → Permalinks** → choose **Post name** (`/%postname%/`).
3. Create one Page in **Pages → Add New** for each section the navigation
   links to, using the slug listed below. Leave the body empty — the matching
   `page-<slug>.php` template renders the content. (WordPress automatically
   picks `page-<slug>.php` when the slug matches; for setup pages you can also
   pick the template manually in **Page Attributes → Template**.)

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

At this point the site already shows the original content — no other setup
needed.

## Making the site editable from WP admin

1. Install the free **Advanced Custom Fields** plugin
   (Plugins → Add New → search "Advanced Custom Fields") and activate it.
2. Go to **Pages → Add New**, give the page any title (e.g. `Theme Options`),
   and in the **Page Attributes → Template** dropdown pick
   **Theme Options (Kingston)**. Save (you can leave it as Draft or Private —
   the page does not need to be published).
3. Open that page for editing. You'll see tabs for:
   - **Top bar** — phone, email, address, social links
   - **Brand** — name, tagline, logo image (or letter mark)
   - **Header navigation** — primary nav with multi-column dropdowns
   - **Footer** — description, link columns, contact info, copyright
   - **CTA banner** — the "Ready to talk?" bar shown at the bottom of every page
   - **Client logos**, **Industries marquee** — homepage strips

4. For per-page content, open any Page (Home, Services, About, each individual
   service / free zone, etc.) and you'll see an ACF field group below the
   editor — every text field, image and list on that page is editable from
   there. Hero slides, service cards, FAQs, process steps, testimonials,
   feature lists are all repeaters, so the admin can add/remove items.

### How fallbacks work

Every template ships with the original static content as a built-in PHP
default. If ACF is not installed — or a field is empty — the site still
renders the original copy. This means:
- You can install the theme without ACF and the site looks identical to the
  hand-built version.
- You can install ACF later, fill in only the fields you want to change, and
  leave the rest as built-in defaults.
- You can selectively edit one page's hero copy without touching anything
  else.

### Internal links

When entering a "Link" in any field, you can use any of:
- a plain page slug like `about`, `contact`, `free-zone-dmcc` — the
  `kingston_url()` helper translates this to the WP page URL.
- `index` or empty string for the homepage.
- a full URL `https://example.com`
- `tel:+9715...` or `mailto:foo@bar.com`

## Editing content directly in code

The original "edit the PHP" workflow still works for technical users:

- **Defaults for each page** live in the `$kingston_detail_defaults` array at
  the top of `page-<slug>.php`. Edit those to change the built-in fallback
  content.
- **Header / footer / front-page defaults** are at the top of `header.php`,
  `footer.php`, `front-page.php`.
- **CTA banner** lives in `template-parts/cta-banner.php`.
- **Inline SVG icons** are in `inc/icons.php`. Add new ones to the switch
  statement and to `kingston_icon_choices()` in `inc/acf-fields.php` to make
  them selectable in ACF.
- **Field group definitions** live in `inc/acf-fields.php` — add or edit
  fields there.

### Changing assets

`functions.php` enqueues `assets/css/styles.css` and `assets/js/main.js` via
`wp_enqueue_scripts` with cache-busting based on file mtime — just overwrite
the files and refresh.

## Regenerating templates from source HTML

If you ever re-run the static-to-PHP conversion script
(`python3 build/wp_convert.py`), be aware that it overwrites the
`page-<slug>.php` files with their original static layout. Re-apply the
ACF wrapping (or skip the script — manual edits in the page templates are
the source of truth now).
