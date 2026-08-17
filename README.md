# Victory Express General Trading website

Production-ready PHP/MySQL website for Victory Express General Trading LLC. The site uses a PHP front controller, clean routes, a persisted inquiry form, local image assets, compiled Tailwind CSS, and Apache hardening for shared hosting.

## Local preview

Requirements: PHP 8.0+, PDO MySQL, Node.js 18+ for the CSS build.

```bash
npm install
npm run build
php -S localhost:8080 main.php
```

Open `http://localhost:8080`.

The front controller is `main.php`. This avoids the local antivirus issue that can quarantine `index.php`; `.htaccess` handles clean routes such as `/`, `/about`, `/industries`, `/reach`, `/sustainability`, and `/contact` on Apache.

## Database and contact form

1. Create a MySQL database and user.
2. Import `database/schema.sql`.
3. Copy `config.php.example` to `config.php`.
4. Set `VEX_DB_HOST`, `VEX_DB_NAME`, `VEX_DB_USER`, and `VEX_DB_PASSWORD`, or edit the returned config values.

The contact form uses PDO prepared statements, server-side validation, a session-backed CSRF token, and a honeypot field. The form intentionally reports a configuration error instead of pretending to save inquiries when the database is unavailable.

## Hostinger deployment

1. Run `npm install` and `npm run build` locally.
2. Upload the application files to `public_html`, including `assets/css/tailwind.css` and the generated JPGs in `assets/images/`.
3. Keep `config.php` outside version control and configure its production database credentials in hPanel.
4. Ensure PHP 8.0+ and PDO MySQL are enabled.
5. Import `database/schema.sql` in phpMyAdmin.
6. Test `/`, `/about`, `/industries`, `/reach`, `/sustainability`, and `/contact` over HTTPS.

The root `.htaccess` provides clean routes, blocks configuration/database/reference files, sets cache rules for static assets, and enables compression when supported by Apache.

## SEO and indexing

The site includes unique metadata for every public route, canonical URLs, Open Graph and Twitter cards, Organization/WebSite/WebPage JSON-LD, breadcrumbs, an Industries item list, `robots.txt`, and `sitemap.xml`.

After the domain is live over HTTPS, add `https://victoryexpressgt.com/sitemap.xml` in Google Search Console and request indexing for the homepage and key commercial pages.

## Project structure

- `main.php` — front controller and route map
- `includes/app.php` — configuration, security headers, database access, validation, and form persistence
- `includes/pages/` — server-rendered page views
- `assets/css/tailwind.input.css` — Tailwind source entrypoint
- `assets/css/tailwind.css` — generated production stylesheet
- `assets/css/site.css` — small custom CSS layer
- `assets/images/` — optimized local website imagery for the hero, skyline, network map, sustainability section, and industry cards
- `database/schema.sql` — inquiry and newsletter tables

## Content and imagery

Contact details are sourced from the supplied Victory Express business documents. The shipped image set is generated locally and optimized as JPGs so production pages do not depend on the remote reference image URLs.
