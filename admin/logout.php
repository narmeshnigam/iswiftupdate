<?php
/**
 * Admin logout script.
 *
 * Destroys the session and redirects back to the login page.
 */
session_start();
$_SESSION = [];
session_destroy();
header('Location: index.php');
exit;