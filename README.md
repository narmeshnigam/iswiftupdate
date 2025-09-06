# iSwift Website

This repository contains the source code for the **iSwift smart home website**, designed as a static‑first PHP project with a lightweight MySQL backend for capturing leads and managing admin data. It follows the specifications provided in the project documentation and includes all required pages, assets and helper scripts.

## Structure

```
/                Project root
├─ index.php                 Home page
├─ about.php                 About iSwift
├─ solutions.php             Overview of solutions
├─ solutions/                Individual solution pages
├─ products.php              Product listing
├─ products/                 Detailed product pages
├─ transform.php             Transformation gallery
├─ testimonials.php          Customer testimonials
├─ partners.php              Partner programme
├─ insights.php              Blog/insights index
├─ insights/                 Individual insight articles
├─ contact.php               Contact form
├─ book-demo.php             Demo booking form
├─ privacy.php               Privacy policy
├─ terms.php                 Terms & conditions
├─ thank-you.php             Post‑submission thank you
├─ assets/                   CSS, JS and image assets
├─ partials/                 Header and footer includes
├─ backend/                  DB config, utils and lead handler
├─ admin/                    Admin login and dashboard
├─ db/                       Database schema
├─ sitemap.xml               Sitemap listing all public URLs
├─ robots.txt                Robots directives
└─ README.md                 This file
```

## Requirements

* **PHP 8.2+** with the mysqli extension enabled
* **MySQL 8.x** or compatible server
* Web server (Apache, Nginx) configured to serve PHP files

## Installation & Setup

1. **Extract the ZIP** into your web server’s document root. The folder should be directly accessible so that `index.php` loads when you visit your domain.

2. **Create the database** and tables:

   ```bash
   mysql -u YOUR_USERNAME -p < db/schema.sql
   ```

   This creates a database called `iswift_web` with two tables: `users` and `leads`. It also inserts two sample users. You can change the database name inside the SQL if needed.

3. **Configure database credentials** by editing `backend/config.php`:

   ```php
   $db_host = 'localhost';
   $db_name = 'iswift_web';
   $db_user = 'root';
   $db_pass = '';
   ```

   Replace these values with your MySQL server’s credentials. The site will not function until it can connect to the database.

4. **Default admin credentials**:

   * Admin: `admin@iswift.in` / `admin123`
   * Sales employee: `sales@iswift.in` / `sales123`

   Log in via `/admin/index.php` to access the dashboard, view leads and manage users.

5. **Update domain references**:

   `sitemap.xml` and `robots.txt` reference `https://iswift.in`. If deploying to a different domain, search and replace this base URL with your own. You may also configure canonical and og:url tags across pages to match your production domain.

6. **Regenerating images**:

   Images in `/assets/images/` were AI‑generated placeholders sized for responsive design and compressed to WebP. To replace them, create your own high‑resolution images (16:9 aspect ratio recommended) and overwrite the existing files. Keep filenames consistent to avoid breaking references. Use tools like `imagemagick` to convert to WebP and compress for performance.

7. **Optional: `.htaccess` rewrite**

   If you wish to support old `.html` URLs or hide `.php` extensions, create an `.htaccess` file (Apache) with rewrite rules. For example:

   ```apache
   RewriteEngine On
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteRule ^(.*)\.html$ /$1.php [L]
   ```

   This redirects requests for `.html` pages to their `.php` equivalents. Adjust as needed for your server.

## Usage

* Visitors can browse solution and product pages, read insights, and submit leads via the contact and book‑demo forms. Submissions are stored in the `leads` table.
* Administrators can log in at `/admin/index.php` to view leads and users.
* The public site uses a shared header and footer loaded via `backend/boot.php` and the `tpl()` helper, making updates to navigation and branding simple.

## Notes

* The version 1 specification intentionally stores passwords in plain text to mirror the provided requirements. In a real‑world deployment, always hash passwords using a strong algorithm (e.g., bcrypt) and enforce HTTPS.
* The admin area lacks role‑based access controls beyond distinguishing admins from employees. Future versions could implement more granular permissions and CRUD operations.
* Ensure `robots.txt` disallows search engines from indexing `/admin` and `/backend` directories. The included file already includes these directives.

Feel free to extend this project or adapt it to your needs. If you encounter any issues, open the browser console or check your server logs for error messages.