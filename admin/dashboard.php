<?php
/**
 * Admin dashboard page.
 *
 * Displays a quick overview of the number of users and leads in the
 * system. Requires authentication. Additional widgets can be added
 * later to surface recent leads or system statistics.
 */
$pageTitle = 'Dashboard';
require_once __DIR__ . '/partials/header.php';

// Fetch counts
$userCount = 0;
$leadCount = 0;

$res = $mysqli->query('SELECT COUNT(*) AS c FROM users');
if ($res) {
    $row = $res->fetch_assoc();
    $userCount = (int)$row['c'];
}

$res = $mysqli->query('SELECT COUNT(*) AS c FROM leads');
if ($res) {
    $row = $res->fetch_assoc();
    $leadCount = (int)$row['c'];
}
?>
<div class="grid" style="grid-template-columns: repeat(auto-fit,minmax(240px,1fr));gap:2rem;">
  <div class="card">
    <h3>Total Users</h3>
    <p style="font-size:2rem;font-weight:700;"><?php echo $userCount; ?></p>
  </div>
  <div class="card">
    <h3>Total Leads</h3>
    <p style="font-size:2rem;font-weight:700;"><?php echo $leadCount; ?></p>
  </div>
</div>

<?php require_once __DIR__ . '/partials/footer.php';