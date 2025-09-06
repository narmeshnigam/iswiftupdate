<?php
/**
 * Helper functions for backend scripts
 */

/**
 * Compute the project root directory (filesystem path).
 *
 * @return string Normalized forward-slash path
 */
function project_root_dir(): string
{
    $root = realpath(__DIR__ . '/..');
    return $root ? str_replace('\\', '/', $root) : str_replace('\\', '/', __DIR__ . '/..');
}

/**
 * Compute the URL path prefix for the project relative to DOCUMENT_ROOT.
 *
 * Works when the site is deployed at web root (returns empty string)
 * and when it is deployed in a subdirectory (returns "/subdir").
 *
 * @return string Leading-slash prefix or empty string
 */
function base_path_prefix(): string
{
    $doc = $_SERVER['DOCUMENT_ROOT'] ?? '';
    $doc = $doc ? str_replace('\\', '/', realpath($doc) ?: $doc) : '';
    $root = project_root_dir();
    $prefix = '';
    if ($doc && strpos($root, $doc) === 0) {
        $prefix = substr($root, strlen($doc));
        if ($prefix === false) {
            $prefix = '';
        }
    }
    // Normalize leading slash and remove trailing slash
    if ($prefix !== '') {
        $prefix = '/' . ltrim($prefix, '/');
        $prefix = rtrim($prefix, '/');
    }
    return $prefix;
}

/**
 * Build an absolute-from-root URL for a path within the project.
 *
 * Example: base_url('/assets/css/style.css') => '/iswiftupdate/assets/css/style.css'
 *
 * @param string $path Path starting with or without '/'
 * @return string
 */
function base_url(string $path = ''): string
{
    $prefix = base_path_prefix();
    $path = $path === '' ? '' : '/' . ltrim($path, '/');
    return ($prefix ?: '') . $path;
}

/**
 * Sanitize a string for safe insertion into the database or display in
 * HTML. It trims whitespace, escapes special characters with the
 * current database connection and applies htmlspecialchars for
 * output safety. Always call this before using user-provided input.
 *
 * @param string $str
 * @return string
 */
function sanitize(string $str): string
{
    global $mysqli;
    $str = trim($str);
    if (!empty($mysqli) && $mysqli instanceof mysqli) {
        $str = $mysqli->real_escape_string($str);
    }
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

/**
 * Get the client's IP address. Falls back to REMOTE_ADDR if
 * forwarded headers are missing.
 *
 * @return string
 */
function client_ip(): string
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    }
    return $_SERVER['REMOTE_ADDR'] ?? '';
}

/**
 * Redirect to a given URL and terminate script execution.
 *
 * @param string $url
 * @return void
 */
function redirect(string $url): void
{
    header('Location: ' . $url);
    exit;
}
