<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Doorbell X5 | iSwift</title>
  <meta name="description" content="Video Doorbell X5 gives you eyes on your doorway with HD video, two‑way audio and smart alerts. See specs and features.">
  <link rel="canonical" href="<?php echo base_url('/products/vdb-x5.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Video Doorbell X5</h2>
    <p>Stay connected to your doorstep from anywhere.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="<?php echo base_url('/assets/images/video-doorbell.webp'); ?>" alt="Video Doorbell X5 product image">
        </div>
        <div>
          <h3>Overview</h3>
          <p>The X5 is a next‑generation video doorbell delivering sharp 2K HDR video and reliable notifications. Speak with visitors through built‑in two‑way audio and deter suspicious activity with pre‑recorded responses.</p>
          <h3>Key Specs</h3>
          <table>
            <tr><th>Resolution</th><td>2304×1296 (2K HDR)</td></tr>
            <tr><th>Field of View</th><td>160° diagonal</td></tr>
            <tr><th>Connectivity</th><td>Wi‑Fi 2.4 GHz &amp; 5 GHz</td></tr>
            <tr><th>Power</th><td>Battery (6 months) or wired</td></tr>
            <tr><th>Storage</th><td>8 GB local + cloud optional</td></tr>
          </table>
          <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">Request a Quote</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="background:var(--bg-start);">
    <div class="container">
      <h3>Why Choose X5?</h3>
      <ul class="list">
        <li>Smart motion detection with person recognition</li>
        <li>Quick reply messages and customisable chimes</li>
        <li>IP65 weather resistance for Indian climates</li>
        <li>Works with Alexa and Google Assistant</li>
      </ul>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
