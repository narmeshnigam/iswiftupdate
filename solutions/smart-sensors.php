<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Sensors | iSwift Solutions</title>
  <meta name="description" content="Monitor your environment with iSwift’s range of smart sensors. Detect motion, temperature, humidity and more to automate your home intelligently.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-sensors.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Sensors</h2>
    <p>Environmental awareness for a responsive home.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-sensors.webp" alt="Smart sensor device on wall">
        </div>
        <div>
          <h3>Sense &amp; React</h3>
          <p>Our compact sensors continuously monitor your home’s surroundings, allowing automations to run when conditions change. Trigger lights when you enter, adjust blinds based on sunlight or manage air quality effortlessly.</p>
          <ul class="list">
            <li>Motion, occupancy, door/window and vibration sensors</li>
            <li>Temperature, humidity and air quality monitoring</li>
            <li>Wireless Zigbee, Z‑Wave and Wi‑Fi options</li>
            <li>Long‑life batteries with low‑power alerts</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Browse Sensors</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
