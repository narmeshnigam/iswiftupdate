<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Gate Automation | iSwift Solutions</title>
  <meta name="description" content="Automate your entrances with iSwift smart gate solutions. Safe, reliable motors for sliding and swing gates controlled from your phone.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-gate-automation.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Gate Automation</h2>
    <p>Effortless entry for villas and driveways.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-gate-automation.webp" alt="Automated gate system at villa">
        </div>
        <div>
          <h3>Open Up With Ease</h3>
          <p>Our gate motors bring convenience and safety to your driveway. Control heavy sliding or swing gates from the comfort of your car or smartphone, and secure your property without manual effort.</p>
          <ul class="list">
            <li>Powerful motors for sliding and swing gates</li>
            <li>Remote, keypad and app control options</li>
            <li>Obstacle detection and auto‑close</li>
            <li>Weather‑resistant housings for Indian climates</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Explore Gate Motors</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
