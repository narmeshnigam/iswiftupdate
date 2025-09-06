<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Door Bells &amp; Phones | iSwift Solutions</title>
  <meta name="description" content="Stay aware of visitors with iSwift video doorbells and phones. High‑definition video, motion alerts and two‑way audio keep your doorstep secure.">
  <link rel="canonical" href="<?php echo base_url('/solutions/video-doorbells.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Video Door Bells &amp; Phones</h2>
    <p>See, hear and speak to whoever is at your door.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/video-doorbell.webp" alt="Video doorbell mounted on wall">
        </div>
        <div>
          <h3>Answer from Anywhere</h3>
          <p>Our smart video doorbells and intercom phones deliver crystal‑clear 2K video and instant notifications to your smartphone. Engage visitors even when you’re away, deter porch pirates and never miss a delivery again.</p>
          <ul class="list">
            <li>2K HDR camera with night vision and motion detection</li>
            <li>Two‑way talk via mobile app</li>
            <li>Customisable motion zones and privacy settings</li>
            <li>Local storage with optional cloud backup</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Explore Devices</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
