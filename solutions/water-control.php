<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Water Control | iSwift Solutions</title>
  <meta name="description" content="Manage your pumps and valves remotely with iSwift water control solutions. Optimise usage, prevent wastage and monitor flow from anywhere.">
  <link rel="canonical" href="<?php echo base_url('/solutions/water-control.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Water Control</h2>
    <p>Smart management of pumps and valves.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/water-control.webp" alt="Smart water control device">
        </div>
        <div>
          <h3>Control Flow &amp; Temperature</h3>
          <p>Keep an eye on water usage and avoid dry running with our connected valves and pump controllers. Automate top‑ups, regulate geyser temperature and shut off leaks instantly from your phone.</p>
          <ul class="list">
            <li>Real‑time flow and pressure monitoring</li>
            <li>Automated pump scheduling and alerts</li>
            <li>Temperature regulation for geysers</li>
            <li>Rugged design for indoor and outdoor use</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Browse Water Solutions</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
