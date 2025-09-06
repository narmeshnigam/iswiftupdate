<?php
/**
 * Database configuration
 *
 * Resilient connection strategy for both localhost (XAMPP) and
 * Hostinger shared hosting. Tries environment/.env overrides first,
 * then Hostinger creds, then local defaults. Fails gracefully with a
 * minimal 500 message and writes a local error log.
 */

// Optional local override via backend/.env.php
// You may define: $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS
$dotenv_path = __DIR__ . '/.env.php';
if (is_file($dotenv_path)) {
    /** @noinspection PhpIncludeInspection */
    require $dotenv_path;
}

// Build connection candidates (ordered)
$candidates = [];

// 1) Explicit env/.env overrides
if (!empty($DB_HOST) && !empty($DB_NAME) && isset($DB_USER) && isset($DB_PASS)) {
    $candidates[] = [$DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, 'env'];
}

// 2) Hostinger production credentials
$candidates[] = ['localhost', 'u574381819_root', 'OVt94GoDm#8', 'u574381819_iswift_web', 'hostinger'];

// 3) Local XAMPP defaults
$candidates[] = ['localhost', 'root', '', 'iswift_web', 'local'];

// Attempt connections in order
$mysqli = null;
$last_error = '';
foreach ($candidates as [$h, $u, $p, $n, $label]) {
    $conn = @new mysqli($h, $u, $p, $n);
    if ($conn && !$conn->connect_errno) {
        $mysqli = $conn;
        break;
    }
    $last_error = $conn ? $conn->connect_error : 'Unknown error';
}

// Bail out gracefully if we still don't have a connection
if (!$mysqli) {
    $msg = 'Database connection failed: ' . $last_error;
    // Log to backend/error.log (best-effort)
    @file_put_contents(__DIR__ . '/error.log', '[' . date('c') . "] " . $msg . "\n", FILE_APPEND);
    http_response_code(500);
    exit('Service temporarily unavailable.');
}

// Configure connection defaults
$mysqli->set_charset('utf8mb4');
date_default_timezone_set('Asia/Kolkata');

?>

