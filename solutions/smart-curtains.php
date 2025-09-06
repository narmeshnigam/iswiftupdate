<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Curtains &amp; Blinds | iSwift Solutions</title>
  <meta name="description" content="Automate your ambience with iSwift smart curtains and blinds. Schedule openings, adjust light levels and integrate with voice assistants for effortless control.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-curtains.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Curtains &amp; Blinds</h2>
    <p>Optimise light and privacy with automated drapery.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-curtains.webp" alt="Smart curtains illustration">
        </div>
        <div>
          <h3>Control the Sun</h3>
          <p>Program your curtains and blinds to open at sunrise and close when it’s time to unwind. Our motors run whisper‑quiet and can be installed on existing tracks or rods, making them ideal for homes and apartments alike.</p>
          <ul class="list">
            <li>Remote and app control with custom schedules</li>
            <li>Supports curtains, roller shades and blinds</li>
            <li>Integrates with smart sensors for automatic adjustments</li>
            <li>Battery and mains powered options</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Explore Motors</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
