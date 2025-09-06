<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Door Systems | iSwift Solutions</title>
  <meta name="description" content="Comprehensive video door systems from iSwift provide secure access and intercom functionality for villas and apartments.">
  <link rel="canonical" href="<?php echo base_url('/solutions/video-door-systems.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Video Door Systems</h2>
    <p>Integrated intercoms for homes and gated communities.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/video-door-system.webp" alt="Video door system panel">
        </div>
        <div>
          <h3>Secure Every Entrance</h3>
          <p>Our modular video door systems combine HD cameras, intercoms and access control in a single unit. Ideal for villas, multi‑storey homes or gated communities, they keep entry points protected and connected.</p>
          <ul class="list">
            <li>Integrated camera, speaker and call button</li>
            <li>4‑inch indoor monitor panels</li>
            <li>Unlock gates remotely from your phone</li>
            <li>Expandable to multiple units and flats</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Discover Systems</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
