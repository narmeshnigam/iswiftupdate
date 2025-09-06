<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us – iSwift</title>
  <meta name="description" content="We’d love to hear from you. Get in touch with iSwift to learn more about our smart home solutions or schedule a consultation.">
  <link rel="canonical" href="<?php echo base_url('/contact.php'); ?>">
  <!-- Open Graph / Twitter -->
  <meta property="og:title" content="Contact Us – iSwift" />
  <meta property="og:description" content="Reach out to iSwift for sales enquiries, support or partnership opportunities." />
  <meta property="og:image" content="<?php echo base_url('/assets/images/hero-home.webp'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo base_url('/contact.php'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<!-- Page Banner -->
<section class="page-banner" style="background:linear-gradient(135deg,var(--bg-start),var(--bg-end));padding:4rem 1rem;text-align:center;color:var(--dark);">
  <h1>Contact iSwift</h1>
  <p style="max-width:720px;margin:0 auto;color:var(--muted);">Let’s start your smart home journey. Fill out the form below and our team will respond shortly.</p>
</section>

<!-- Contact Form Section -->
<section class="section" id="contact-form">
  <div class="container" style="display:grid;grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));gap:2rem;align-items:center;">
    <div>
      <h2 style="color:var(--sky);margin-bottom:1rem;">Send Us a Message</h2>
      <p style="color:var(--muted);margin-bottom:1.5rem;">Fill out the form and we’ll get back to you within one working day.</p>
      <form action="<?php echo base_url('/backend/submit_lead.php'); ?>" method="post" class="form" style="display:grid;gap:1rem;">
        <input type="hidden" name="source_page" value="<?php echo base_url('/contact.php'); ?>">
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
          <label for="interest">Interest</label>
          <select id="interest" name="interest">
            <option value="General Inquiry">General Inquiry</option>
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
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="Tell us more about your requirements"></textarea>
        </div>
        <div style="text-align:left;">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <div style="text-align:center;">
      <img src="<?php echo base_url('/assets/images/contact-family.webp'); ?>" alt="Family contacting iSwift" style="width:100%;max-width:400px;border-radius:1rem;">
    </div>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
