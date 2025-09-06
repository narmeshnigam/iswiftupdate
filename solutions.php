<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solutions | iSwift</title>
  <meta name="description" content="Explore iSwift’s range of smart home solutions including locks, doorbells, mesh Wi‑Fi, curtains, sensors and more. Find the perfect fit for every room.">
  <link rel="canonical" href="<?php echo base_url('/solutions.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Our Solutions</h2>
    <p>Everything you need to make your home smarter, safer and more connected.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(240px,1fr));">
        <a href="<?php echo base_url('/solutions/smart-locks.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-lock.webp" alt="Smart Locks">
          <h3>Smart Locks</h3>
          <p class="muted">Keyless access with passcode, fingerprint and mobile app.</p>
        </a>
        <a href="<?php echo base_url('/solutions/video-doorbells.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/video-doorbell.webp" alt="Video Doorbells & Phones">
          <h3>Video Door Bells &amp; Phones</h3>
          <p class="muted">2K vision, real‑time alerts and visitor talkback.</p>
        </a>
        <a href="<?php echo base_url('/solutions/wifi-mesh.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/wifi-mesh.webp" alt="Wi‑Fi Mesh">
          <h3>Wi‑Fi Mesh</h3>
          <p class="muted">Whole‑home high‑speed connectivity with no dead zones.</p>
        </a>
        <a href="<?php echo base_url('/solutions/smart-curtains.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-curtains.webp" alt="Smart Curtains & Blinds">
          <h3>Smart Curtains &amp; Blinds</h3>
          <p class="muted">Automated shading for comfort, energy savings and Vaastu.</p>
        </a>
        <a href="<?php echo base_url('/solutions/smart-sensors.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-sensors.webp" alt="Smart Sensors">
          <h3>Smart Sensors</h3>
          <p class="muted">Motion, air quality and temperature sensors for peace of mind.</p>
        </a>
        <a href="<?php echo base_url('/solutions/smart-cameras.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-cameras.webp" alt="Smart Cameras">
          <h3>Smart Cameras</h3>
          <p class="muted">Indoor and outdoor security cameras with live streaming.</p>
        </a>
        <a href="<?php echo base_url('/solutions/smart-switches.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-switches.webp" alt="Smart Switches">
          <h3>Smart Switches</h3>
          <p class="muted">Touch‑based light and appliance control panels.</p>
        </a>
        <a href="<?php echo base_url('/solutions/video-door-systems.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/video-door-system.webp" alt="Video Door Systems">
          <h3>Video Door Systems</h3>
          <p class="muted">Integrated intercoms for villas and gated communities.</p>
        </a>
        <a href="<?php echo base_url('/solutions/smart-gate-automation.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-gate-automation.webp" alt="Smart Gate Automation">
          <h3>Smart Gate Automation</h3>
          <p class="muted">Automate entrances with safe, reliable gate operators.</p>
        </a>
        <a href="<?php echo base_url('/solutions/water-control.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/water-control.webp" alt="Water Control">
          <h3>Water Control</h3>
          <p class="muted">Manage pumps and valves remotely for optimal usage.</p>
        </a>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
