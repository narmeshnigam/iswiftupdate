<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wi‑Fi Mesh | iSwift Solutions</title>
  <meta name="description" content="Upgrade your home connectivity with iSwift Wi‑Fi mesh systems. Enjoy seamless coverage, high speeds and zero dead zones across every room.">
  <link rel="canonical" href="<?php echo base_url('/solutions/wifi-mesh.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Wi‑Fi Mesh Systems</h2>
    <p>Consistent, ultra‑fast wireless networking in every corner of your home.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/wifi-mesh.webp" alt="Wi‑Fi mesh router set">
        </div>
        <div>
          <h3>Stay Connected Everywhere</h3>
          <p>iSwift’s mesh routers blanket your entire home with strong, reliable Wi‑Fi. Whether you’re in the bedroom or on the terrace, enjoy uninterrupted streaming, gaming and browsing without dead spots or dropouts.</p>
          <ul class="list">
            <li>Tri‑band AC/AX speeds up to 2.4 Gbps</li>
            <li>Easy app‑based setup and management</li>
            <li>Automatic channel optimisation</li>
            <li>Parental controls and guest network options</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">View Mesh Kits</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
