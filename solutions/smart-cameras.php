<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Cameras | iSwift Solutions</title>
  <meta name="description" content="Protect what matters with iSwift smart cameras. High‑definition indoor and outdoor cameras with night vision and mobile alerts.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-cameras.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Cameras</h2>
    <p>Always watching, always protecting.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-cameras.webp" alt="Smart camera on table">
        </div>
        <div>
          <h3>See More, Worry Less</h3>
          <p>Our smart cameras deliver sharp video in daylight and darkness, giving you 24/7 peace of mind. Stream live footage, receive motion alerts and review recordings from anywhere using our intuitive app.</p>
          <ul class="list">
            <li>1080p and 2K models for indoor/outdoor use</li>
            <li>Pan‑tilt‑zoom and wide‑angle options</li>
            <li>Night vision and two‑way audio</li>
            <li>Secure local storage and optional cloud backup</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">View Cameras</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
