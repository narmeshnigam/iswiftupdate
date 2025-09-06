<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Lock A12 | iSwift</title>
  <meta name="description" content="Smart Lock A12 from iSwift offers biometric, PIN and remote unlocking for uncompromised security. Explore specs and use cases.">
  <link rel="canonical" href="<?php echo base_url('/products/smart-lock-a12.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Lock A12</h2>
    <p>Secure your home with multi‑modal access control.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-lock.webp" alt="Smart Lock A12 product image">
        </div>
        <div>
          <h3>Overview</h3>
          <p>The A12 smart lock replaces your conventional deadbolt with advanced security technology. Authenticate using fingerprint, PIN, RFID card or mobile app. Enjoy peace of mind with auto‑locking, tamper alarms and a sleek exterior that complements any décor.</p>
          <h3>Key Specs</h3>
          <table>
            <tr><th>Connectivity</th><td>Bluetooth + Wi‑Fi bridge</td></tr>
            <tr><th>Unlock Methods</th><td>Fingerprint, PIN, RFID card, mobile app</td></tr>
            <tr><th>Power</th><td>4× AA batteries (up to 1 year)</td></tr>
            <tr><th>Assistants</th><td>Alexa, Google Assistant</td></tr>
            <tr><th>Door Thickness</th><td>35–60 mm</td></tr>
          </table>
          <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">Request a Quote</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="background:var(--bg-start);">
    <div class="container">
      <h3>Why Choose A12?</h3>
      <ul class="list">
        <li>Fast fingerprint recognition (<0.5 s)</li>
        <li>Mechanical key override for emergencies</li>
        <li>Durable zinc alloy build with IP65 weather rating</li>
        <li>One‑touch lock and auto‑lock timers</li>
      </ul>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
