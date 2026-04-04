# ICSA Website - Laravel Version

This project has been migrated from the original static/PHP site into Laravel while preserving the original frontend content as source material.

## What changed

- Public pages are now rendered as Blade views through Laravel routes.
- Contact and inquiry forms now submit through Laravel controllers.
- Admin login, dashboard, inquiries, users, settings, and course management now run in Laravel.
- Public Blade views live in `resources/views/site`.
- Legacy public HTML source is preserved in `resources/legacy/root-pages`.
- Legacy course detail files are preserved in `resources/content/courses`.

## Local URLs

- Website: `http://localhost/ICSA-Website-/`
- Admin login: `http://localhost/ICSA-Website-/secure-staff-portal/login`

Legacy-style URLs still work too:

- `http://localhost/ICSA-Website-/index.html`
- `http://localhost/ICSA-Website-/about.html`
- `http://localhost/ICSA-Website-/courses.html`
- `http://localhost/ICSA-Website-/contact.html`

## Default admin

- Username: `admin`
- Password: defined in `.env` as `ADMIN_DEFAULT_PASSWORD`

## Environment

The app is configured for the existing XAMPP MySQL setup:

- Database: `icsa_website`
- Host: `127.0.0.1`
- Port: `3306`
- User: `root`
- Password: empty

Those defaults are already set in `.env` and `.env.example`.

Admin access is also configured in `.env`:

- `ADMIN_PORTAL_PATH=secure-staff-portal`
- `STUDENT_PORTAL_URL=https://icsakuwait.com`

## Important paths

- Public assets: `public/`
- Shared root asset links: `css`, `js`, `images` (symlinked to `public/`)
- Public Blade views: `resources/views/site/`
- Public page source copies: `resources/legacy/root-pages/`
- Course HTML sources: `resources/content/courses/`
- Old project notes: `docs/legacy-readme.md`
- SQL backup/reference: `database/icsa_website.sql`

## Commands already run

- `composer install`
- `php artisan migrate --force`
- `php artisan db:seed --force`

## Useful commands

```bash
php artisan route:list
php artisan view:clear
php artisan view:cache
php artisan optimize:clear
```

## Notes

- The public site now uses Blade for the homepage, about page, contact page, courses page, and course detail page.
- Course detail content is still file-based under `resources/content/courses`, and the Laravel admin edits those source files directly.
- If you want, the next step can be a full Blade/component refactor of the public frontend.
