<?php
/**
 * Admin panel header partial.
 *
 * Performs authentication check and prints the beginning of the HTML
 * document. Each admin page must set $pageTitle before including
 * this file. After outputting the header and nav it opens the
 * <main> element which is closed in the corresponding footer.
 */
session_start();
require_once __DIR__ . '/../../backend/config.php';
require_once __DIR__ . '/../../backend/utils.php';

// Protect admin pages: redirect to login if not authenticated
if (!isset($_SESSION['uid'])) {
    redirect('index.php');
}

// Set a default title if not provided
if (!isset($pageTitle)) {
    $pageTitle = 'Dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin – <?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
  <header>
    <div class="container admin-header">
      <h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
      <nav class="admin-nav">
        <a href="dashboard.php">Dashboard</a>
        <a href="leads.php">Leads</a>
        <a href="users.php">Users</a>
        <a href="logout.php">Logout</a>
      </nav>
    </div>
  </header>
  <main class="container">
