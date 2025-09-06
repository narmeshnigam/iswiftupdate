<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You – iSwift</title>
  <meta name="description" content="Your request has been received. We appreciate your interest in iSwift smart home solutions and will respond shortly.">
  <link rel="canonical" href="/thank-you.php">
  <!-- Open Graph / Twitter -->
  <meta property="og:title" content="Thank You – iSwift" />
  <meta property="og:description" content="Thank you for contacting iSwift. We will get back to you soon." />
  <meta property="og:image" content="/assets/images/hero-home.webp" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/thank-you.php" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<section class="section" style="padding:6rem 1rem;text-align:center;">
  <div class="container" style="max-width:720px;">
    <h1 style="color:var(--saffron);margin-bottom:1rem;">Thank You!</h1>
    <p style="color:var(--muted);font-size:1.125rem;margin-bottom:2rem;">We’ve received your submission and one of our specialists will contact you soon. In the meantime, feel free to explore more about our smart home solutions.</p>
    <a href="/index.php" class="btn btn-primary">Back to Home</a>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
