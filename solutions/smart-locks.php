<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Locks | iSwift Solutions</title>
  <meta name="description" content="Discover iSwift smart locks with biometric and mobile control. Secure your home with stylish, keyless entry solutions designed for Indian doors.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-locks.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Locks</h2>
    <p>Keyless security with style and convenience.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-lock.webp" alt="Smart lock on door">
        </div>
        <div>
          <h3>Unlock the Future</h3>
          <p>iSwift smart locks replace your traditional door hardware with a sleek, tamper‑proof mechanism that supports passcodes, fingerprints and mobile app control. Perfectly sized for Indian doors, they add elegance while boosting security.</p>
          <ul class="list">
            <li>Multiple unlock methods: fingerprint, PIN, RFID card and app</li>
            <li>Auto‑lock and intruder alarm features</li>
            <li>Battery backup with low‑power alerts</li>
            <li>Compatible with Alexa and Google Assistant</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">See Compatible Products</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
