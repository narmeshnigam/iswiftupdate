<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transform Your Home | iSwift</title>
  <meta name="description" content="See how iSwift smart home solutions transform living spaces into modern, connected havens. Browse our before and after gallery.">
  <link rel="canonical" href="/transform.php">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Transform Your Home</h2>
    <p>Witness the difference intelligent automation can make.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <h3 class="text-center" style="margin-bottom:2rem;color:var(--saffron);">Before &amp; After Gallery</h3>
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
        <div class="card">
          <img src="/assets/images/wifi-mesh.webp" alt="Traditional living room">
          <h3>Before</h3>
          <p class="muted">A standard home with limited connectivity and manual controls.</p>
        </div>
        <div class="card">
          <img src="/assets/images/hero-home.webp" alt="Modern smart living room">
          <h3>After</h3>
          <p class="muted">Connected devices seamlessly integrated into décor for convenience.</p>
        </div>
        <div class="card">
          <img src="/assets/images/smart-switches.webp" alt="Old switchboard">
          <h3>Upgrade</h3>
          <p class="muted">Replace bulky switchboards with elegant touch panels.</p>
        </div>
        <div class="card">
          <img src="/assets/images/smart-curtains.webp" alt="Smart curtains transformation">
          <h3>Ambience</h3>
          <p class="muted">Automated curtains create the perfect mood at any time of day.</p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
