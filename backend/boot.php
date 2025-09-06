<?php
/**
 * Bootstrapping helper for public pages.
 *
 * This file declares a global tpl() function that looks up PHP
 * partials relative to the project directory on disk. It also
 * exposes a global $BASE variable derived from DOCUMENT_ROOT so
 * links and assets work when the site is deployed in a subfolder.
 * To include header.php and footer.php on any page simply call
 * tpl('header') and tpl('footer').
 */

if (!function_exists('tpl')) {
    // Load utils to compute paths/URLs
    require_once __DIR__ . '/utils.php';

    // Global BASE prefix for building links (e.g., "/iswiftupdate")
    $BASE = base_path_prefix();

    function tpl(string $name): void
    {
        $root = project_root_dir();
        $file = $root . '/partials/' . $name . '.php';
        if (is_file($file)) {
            require $file;
        } else {
            // fallback: no partial found
            trigger_error("Partial '{$name}' not found in {$root}/partials", E_USER_WARNING);
        }
    }
}
