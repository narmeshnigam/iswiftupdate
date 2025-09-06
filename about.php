<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | iSwift</title>
  <meta name="description" content="Learn about iSwift’s mission to deliver premium, Indian‑centric smart home solutions. We are a manufacturer and integrator dedicated to safety, comfort and sustainability.">
  <link rel="canonical" href="<?php echo base_url('/about.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>About iSwift</h2>
    <p>Elevating living with intelligent technology and timeless design.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <h3>Our Story</h3>
      <p>Born from decades of experience in security and automation, iSwift emerged as India’s trusted smart home brand. We design and manufacture a range of devices — from smart locks and curtains to networking and sensors — that seamlessly integrate into your lifestyle. Our roots trace back to Omvix and Livintiq, evolving through research and customer feedback to create a unified platform that simplifies control and enhances safety.</p>
      <h3>Mission &amp; Values</h3>
      <ul class="list">
        <li><strong>Innovation:</strong> Develop cutting‑edge technology that is easy to use and fits Indian homes.</li>
        <li><strong>Security:</strong> Deliver peace of mind with robust encryption and secure hardware.</li>
        <li><strong>Reliability:</strong> Build products that perform day after day with minimal maintenance.</li>
        <li><strong>Sustainability:</strong> Design energy‑efficient devices that reduce consumption and waste.</li>
        <li><strong>Customer delight:</strong> Provide attentive support and continuous updates based on your needs.</li>
      </ul>
      <h3>Why We’re Different</h3>
      <p>Unlike overseas brands that retrofit generic products for the Indian market, we engineer with local needs at the forefront — Vaastu compatibility, power fluctuations and multi‑lingual interfaces. Our in‑house R&amp;D ensures you get world‑class devices that feel native to your home.</p>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
