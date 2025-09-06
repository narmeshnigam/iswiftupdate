<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials | iSwift</title>
  <meta name="description" content="Hear from real iSwift customers about how our smart home solutions improved their lives.">
  <link rel="canonical" href="/testimonials.php">
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>
<main id="content">
  <section class="page-banner">
    <h2>Testimonials</h2>
    <p>Stories from delighted customers.</p>
  </section>
  <section class="section" style="background:#ffffff;">
    <div class="container">
      <div class="grid" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">
        <div class="card">
          <p>“iSwift has transformed our daily lives. The automation feels natural and effortless.”</p>
          <strong>- Aditi Sharma, Gurugram</strong>
        </div>
        <div class="card">
          <p>“From smart locks to curtains, everything is intuitive. Highly recommended!”</p>
          <strong>- Rahul Mehta, Noida</strong>
        </div>
        <div class="card">
          <p>“Excellent service and great quality. My family feels safer and more comfortable.”</p>
          <strong>- Sneha Kapoor, Delhi</strong>
        </div>
        <div class="card">
          <p>“Installation was quick and the staff answered all my questions patiently.”</p>
          <strong>- Vivek Raj, Faridabad</strong>
        </div>
        <div class="card">
          <p>“The mesh Wi‑Fi solved all our connectivity issues. Kids love the speed!”</p>
          <strong>- Priya S., Ghaziabad</strong>
        </div>
      </div>
    </div>
  </section>
</main>
<?php tpl('footer'); ?>
</body>
</html>
