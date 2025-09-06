<?php
require_once __DIR__ . '/../backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Switches | iSwift Solutions</title>
  <meta name="description" content="Upgrade your control with iSwift smart switches. Sleek touch panels replace traditional switches for lights and appliances.">
  <link rel="canonical" href="<?php echo base_url('/solutions/smart-switches.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Smart Switches</h2>
    <p>Touch panels that redefine everyday control.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:1fr 1fr;gap:2rem;align-items:center;">
        <div>
          <img src="/assets/images/smart-switches.webp" alt="Smart switch panel on wall">
        </div>
        <div>
          <h3>Minimal Design, Maximum Functionality</h3>
          <p>Sleek touch panels replace bulky switchboards to provide a consistent look across your home. Control lights, fans and appliances individually or as groups and create scenes for any occasion.</p>
          <ul class="list">
            <li>Capacitive touch switches with LED indicators</li>
            <li>Supports dimming, fan speed and AC control</li>
            <li>Customisable engravings and layouts</li>
            <li>Secure remote control via app and voice</li>
          </ul>
          <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Browse Switch Panels</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
