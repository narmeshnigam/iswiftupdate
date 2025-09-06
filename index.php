<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iSwift — Smart Home Simplified</title>
  <meta name="description" content="Experience effortless, intelligent living with iSwift smart home solutions. Explore premium smart locks, video doorbells, mesh Wi‑Fi, curtains and more tailored for Indian homes.">
  <link rel="canonical" href="<?php echo base_url('/index.php'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
  <meta property="og:title" content="iSwift — Smart Home Simplified">
  <meta property="og:description" content="Discover how iSwift transforms your home with premium smart home devices and automation.">
  <meta property="og:image" content="<?php echo base_url('/assets/images/hero-home.webp'); ?>">
  <meta property="og:type" content="website">
</head>
<body>
<?php tpl('header'); ?>

<main id="content">
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Smart Home. The iSwift Way.</h1>
      <p>Make your home smarter, safer and more efficient — all from a single dashboard powered by iSwift automation.</p>
      <div class="buttons">
        <a href="<?php echo base_url('/products.php'); ?>" class="btn btn-primary">Explore Products</a>
        <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-secondary">Book Free Demo</a>
      </div>
    </div>
  </section>

  <!-- Solutions Grid -->
  <section class="section" id="solutions">
    <div class="container">
      <h2 class="text-center" style="color:var(--saffron);">Our Solutions</h2>
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(260px,1fr));">
        <a href="<?php echo base_url('/solutions/smart-locks.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="<?php echo base_url('/assets/images/smart-lock.webp'); ?>" alt="Smart locks">
          <h3>Smart Locks</h3>
          <p class="muted">Keyless entry with passcode, biometric and mobile app access for ultimate security.</p>
        </a>
        <a href="<?php echo base_url('/solutions/video-doorbells.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="<?php echo base_url('/assets/images/video-doorbell.webp'); ?>" alt="Video doorbells">
          <h3>Video Doorbells</h3>
          <p class="muted">2K HDR vision, motion detection and real‑time alerts from your doorstep.</p>
        </a>
        <a href="<?php echo base_url('/solutions/wifi-mesh.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/wifi-mesh.webp" alt="Wi‑Fi mesh systems">
          <h3>Wi‑Fi Mesh Systems</h3>
          <p class="muted">Say goodbye to dead zones with stable, high‑speed Wi‑Fi everywhere.</p>
        </a>
        <a href="/solutions/smart-curtains.php" class="card" style="text-decoration:none;color:inherit;">
          <img src="/assets/images/smart-curtains.webp" alt="Smart curtains and blinds">
          <h3>Smart Curtains &amp; Blinds</h3>
          <p class="muted">Automated ambiance that adjusts light and privacy to your routine.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Why Choose iSwift -->
  <section class="section" id="why" style="background:#ffffff;">
    <div class="container">
      <h2 class="text-center" style="color:var(--sky);">Why Choose iSwift</h2>
      <p style="max-width:720px;margin:0 auto;text-align:center;color:var(--muted);">
        We deliver reliable, secure and customizable smart home automation designed to fit Indian lifestyles and Vaastu‑friendly preferences. Experience seamless integration and unmatched support from our team of experts.
      </p>
    </div>
  </section>

  <!-- Transformation Section -->
  <section class="section" id="transform" style="background:linear-gradient(to right,#ffffff,var(--bg-end));">
    <div class="container">
      <h2 class="text-center" style="color:var(--saffron);">See the Transformation</h2>
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(300px,1fr));">
        <div class="card">
          <img src="<?php echo base_url('/assets/images/wifi-mesh.webp'); ?>" alt="Before transformation">
          <h3>Before</h3>
          <p class="muted">Traditional living spaces often suffer from blind spots, cluttered switches and inconsistent connectivity.</p>
        </div>
        <div class="card">
          <img src="<?php echo base_url('/assets/images/hero-home.webp'); ?>" alt="After transformation">
          <h3>After</h3>
          <p class="muted">iSwift upgrades your home with subtle devices and intuitive controls for a harmonious, secure and efficient lifestyle.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section" id="testimonials">
    <div class="container">
      <h2 class="text-center" style="color:var(--sky);">What Our Customers Say</h2>
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">
        <div class="card">
          <p>“iSwift has transformed our daily lives. The automation feels natural and effortless.”</p>
          <strong>- Aditi Sharma</strong>
        </div>
        <div class="card">
          <p>“From smart locks to curtains, everything is intuitive. Highly recommended!”</p>
          <strong>- Rahul Mehta</strong>
        </div>
        <div class="card">
          <p>“Excellent service and great quality. My family feels safer and more comfortable.”</p>
          <strong>- Sneha Kapoor</strong>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners -->
  <section class="section" id="partners" style="background:#ffffff;">
    <div class="container text-center">
      <h2 style="color:var(--saffron);">Partner with Us</h2>
      <p style="max-width:720px;margin:0 auto;color:var(--muted);">
        We collaborate with interior designers, architects and builders to deliver premium smart home experiences. Let’s grow together.
      </p>
      <a href="<?php echo base_url('/partners.php'); ?>" class="btn btn-primary" style="margin-top:1rem;">Become a Partner</a>
    </div>
  </section>

  <!-- Insights -->
  <section class="section" id="insights" style="background:linear-gradient(to right,var(--bg-start),#ffffff);">
    <div class="container">
      <h2 class="text-center" style="color:var(--sky);">Discover Insights</h2>
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">
        <a href="<?php echo base_url('/insights/smart-locks-benefits.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <h3>Top 5 Benefits of Smart Locks</h3>
          <p class="muted">Understand how keyless solutions simplify access and enhance security.</p>
        </a>
        <a href="<?php echo base_url('/insights/wifi-mesh-vs-extenders.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <h3>Wi‑Fi Mesh vs Extenders</h3>
          <p class="muted">Explore why mesh is the best solution for seamless coverage across homes.</p>
        </a>
        <a href="<?php echo base_url('/insights/smart-curtains-vastu.php'); ?>" class="card" style="text-decoration:none;color:inherit;">
          <h3>Smart Curtains &amp; Vaastu</h3>
          <p class="muted">See how automated light control improves mood, energy and vastu alignment.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- Book Demo CTA -->
  <section class="section" id="book" style="padding:4rem 1rem;text-align:center;background:linear-gradient(135deg,var(--yellow),var(--green));color:#113C2B;">
    <div class="container">
      <h2 style="color:#113C2B;">Book a Free Consultation</h2>
      <p style="max-width:640px;margin:0 auto 1.5rem;">
        Schedule a personalised call or demo with our experts to discover the right automation for your lifestyle.
      </p>
      <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-light" style="color:var(--text);font-weight:700;">Book Now</a>
    </div>
  </section>
  
</main>

<?php tpl('footer'); ?>
</body>
</html>
