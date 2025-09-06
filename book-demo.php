<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Free Demo – iSwift</title>
  <meta name="description" content="Schedule a personalised demonstration of iSwift’s smart home solutions. Our experts will guide you through features and benefits tailored to your lifestyle.">
  <link rel="canonical" href="<?php echo base_url('/book-demo.php'); ?>">
  <!-- Open Graph / Twitter -->
  <meta property="og:title" content="Book a Free Demo – iSwift" />
  <meta property="og:description" content="See iSwift automation in action. Book a no‑obligation demo with our team today." />
  <meta property="og:image" content="<?php echo base_url('/assets/images/wifi-mesh.webp'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo base_url('/book-demo.php'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<!-- Page Banner -->
<section class="page-banner" style="background:linear-gradient(135deg,var(--yellow),var(--green));padding:4rem 1rem;text-align:center;color:#113C2B;">
  <h1>Book a Free Demo</h1>
  <p style="max-width:720px;margin:0 auto;">Discover how iSwift integrates seamlessly into your home. Provide your details and we’ll arrange a personalised demonstration.</p>
</section>

<!-- Demo Form Section -->
<section class="section" id="demo-form">
  <div class="container" style="display:grid;grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));gap:2rem;align-items:center;">
    <div>
      <h2 style="color:var(--saffron);margin-bottom:1rem;">Reserve Your Session</h2>
      <p style="color:var(--muted);margin-bottom:1.5rem;">Provide your details and our consultants will be in touch to schedule your personalised demo.</p>
      <form action="<?php echo base_url('/backend/submit_lead.php'); ?>" method="post" class="form" style="display:grid;gap:1rem;">
        <input type="hidden" name="source_page" value="<?php echo base_url('/book-demo.php'); ?>">
        <div class="form-group">
          <label for="name">Name<span style="color:var(--saffron)">*</span></label>
          <input type="text" id="name" name="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
          <label for="phone">Phone<span style="color:var(--saffron)">*</span></label>
          <input type="tel" id="phone" name="phone" required placeholder="+91 98765 43210">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="you@example.com">
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <input type="text" id="city" name="city" placeholder="Your City">
        </div>
        <div class="form-group">
          <label for="interest">Area of Interest</label>
          <select id="interest" name="interest">
            <option value="Book Demo">Book Demo</option>
            <option value="Smart Locks">Smart Locks</option>
            <option value="Video Doorbells">Video Doorbells</option>
            <option value="Wi‑Fi Mesh">Wi‑Fi Mesh</option>
            <option value="Smart Curtains & Blinds">Smart Curtains &amp; Blinds</option>
            <option value="Smart Sensors">Smart Sensors</option>
            <option value="Smart Cameras">Smart Cameras</option>
            <option value="Smart Switches">Smart Switches</option>
            <option value="Video Door Systems">Video Door Systems</option>
            <option value="Smart Gate Automation">Smart Gate Automation</option>
            <option value="Water Control">Water Control</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Additional Notes</label>
          <textarea id="message" name="message" rows="5" placeholder="Any specific requirements or preferred schedule"></textarea>
        </div>
        <div style="text-align:left;">
          <button type="submit" class="btn btn-primary">Book Demo</button>
        </div>
      </form>
    </div>
    <div style="text-align:center;">
      <img src="<?php echo base_url('/assets/images/contact-family.webp'); ?>" alt="Family booking demo" style="width:100%;max-width:400px;border-radius:1rem;">
    </div>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
