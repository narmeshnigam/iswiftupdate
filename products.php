<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products | iSwift</title>
  <meta name="description" content="Browse iSwift smart home devices including locks, video doorbells and mesh Wi‑Fi kits. Premium quality designed for Indian homes.">
  <link rel="canonical" href="<?php echo base_url('/products.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Our Products</h2>
    <p>Hand‑picked devices delivering performance and reliability.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">
        <a href="<?php echo base_url('/products/smart-lock-a12.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="<?php echo base_url('/assets/images/smart-lock.webp'); ?>" alt="Smart Lock A12">
          <h3>Smart Lock A12</h3>
          <p class="muted">Fingerprint + PIN + app, designed for Indian doors.</p>
        </a>
        <a href="<?php echo base_url('/products/vdb-x5.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="<?php echo base_url('/assets/images/video-doorbell.webp'); ?>" alt="Video Doorbell X5">
          <h3>Video Doorbell X5</h3>
          <p class="muted">2K camera with motion alerts and two‑way talk.</p>
        </a>
        <a href="<?php echo base_url('/products/mesh-m3.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="<?php echo base_url('/assets/images/wifi-mesh.webp'); ?>" alt="Mesh M3 Kit">
          <h3>Mesh M3 Kit</h3>
          <p class="muted">Tri‑band mesh with seamless roaming and parental controls.</p>
        </a>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
