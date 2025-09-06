<?php
/**
 * Process lead form submissions.
 *
 * Receives POST data from the contact and book-demo forms. If the
 * required fields (name and phone) are present, inserts a new row into
 * the leads table. Afterwards, redirects the user to a thank-you
 * confirmation page. If required fields are missing, redirects back
 * to the referring page. A hidden source_page field can be used to
 * capture the originating URL or context (e.g. specific product or
 * solution page).
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/utils.php';

// Collect and sanitise input
$name     = sanitize($_POST['name'] ?? '');
$phone    = sanitize($_POST['phone'] ?? '');
$email    = sanitize($_POST['email'] ?? '');
$city     = sanitize($_POST['city'] ?? '');
$interest = sanitize($_POST['interest'] ?? '');
$message  = sanitize($_POST['message'] ?? '');
$source   = sanitize($_POST['source_page'] ?? ($_SERVER['HTTP_REFERER'] ?? '')); // fallback to referrer

if ($name && $phone) {
    // Prepare and execute insert statement
    $stmt = $mysqli->prepare('INSERT INTO leads (name, phone, email, city, interest, message, source_page) VALUES (?,?,?,?,?,?,?)');
    if ($stmt) {
        $stmt->bind_param('sssssss', $name, $phone, $email, $city, $interest, $message, $source);
        $stmt->execute();
        $stmt->close();
    }
    // Redirect to thank-you page (works under subfolders too)
    redirect(base_url('/thank-you.php'));
} else {
    // Missing required fields – redirect back
    $back = $_SERVER['HTTP_REFERER'] ?? '/';
    redirect($back);
}
