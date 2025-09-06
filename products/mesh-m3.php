<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mesh M3 Kit | iSwift</title>
  <meta name="description" content="Mesh M3 Kit extends high‑speed Wi‑Fi across your home. Learn about tri‑band speeds, seamless roaming and parental controls.">
  <link rel="canonical" href="<?php echo base_url('/products/mesh-m3.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Mesh M3 Kit</h2>
    <p>Seamless Wi‑Fi coverage from the basement to the terrace.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/wifi-mesh.webp" alt="Mesh M3 kit product image">
        </div>
        <div>
          <h3>Overview</h3>
          <p>The M3 kit is a tri‑band mesh Wi‑Fi system that blankets your home with strong, stable connectivity. With easy setup and auto‑optimisation, it ensures every device gets the fastest route to the internet.</p>
          <h3>Key Specs</h3>
          <table>
            <tr><th>Bands</th><td>2.4 GHz + 5 GHz + 5 GHz backhaul</td></tr>
            <tr><th>Coverage</th><td>Up to 6,000 sq ft (3‑pack)</td></tr>
            <tr><th>Speed</th><td>AX3000 Wi‑Fi 6</td></tr>
            <tr><th>Ports</th><td>2× gigabit Ethernet per node</td></tr>
            <tr><th>App Features</th><td>Parental controls, guest network, device prioritisation</td></tr>
          </table>
          <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">Request a Quote</a>
        </div>
      </div>
    </div>
  </section>
  <section class="section" style="background:var(--bg-start);">
    <div class="container">
      <h3>Why Choose M3?</h3>
      <ul class="list">
        <li>True mesh with seamless roaming between nodes</li>
        <li>Easy setup via smartphone app</li>
        <li>Automatic firmware updates</li>
        <li>Works with Alexa for voice control of guest networks</li>
      </ul>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
