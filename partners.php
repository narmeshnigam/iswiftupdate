<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partners | iSwift</title>
  <meta name="description" content="Join iSwift’s partner network and collaborate with us to deliver premium smart home solutions across India. Learn about partnership benefits and how to sign up.">
  <link rel="canonical" href="/partners.php">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<section class="page-banner">
  <h2>Partner with Us</h2>
  <p>Grow together in the smart home revolution.</p>
</section>

<!-- Partnership Information -->
<section class="section" style="background:#ffffff;">
  <div class="container" style="display:grid;grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));gap:2rem;align-items:center;max-width:1000px;">
    <div>
      <h3 style="color: var(--sky);">Why Partner with iSwift?</h3>
      <p>We believe in growing with our partners. Whether you are an interior designer, architect, builder or technology distributor, partnering with iSwift opens up opportunities to offer premium automation solutions to your clients. Our products are designed to integrate seamlessly into modern homes and offices, adding value to your projects.</p>
      <h3 style="color: var(--saffron); margin-top:2rem;">Benefits</h3>
      <ul class="list">
        <li>Access to exclusive pricing and training</li>
        <li>Marketing collateral and demo kits</li>
        <li>Dedicated account manager and technical support</li>
        <li>Early access to new products and features</li>
      </ul>
      <p style="margin-top:2rem;">Ready to join us? Fill out the partner enquiry form and we’ll be in touch soon.</p>
      <a href="/contact.php" class="btn btn-primary">Become a Partner</a>
    </div>
    <div style="text-align:center;">
      <img src="/assets/images/partner-handshake.webp" alt="Partnership handshake" style="width:100%;max-width:400px;border-radius:1rem;">
    </div>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
