<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insights &amp; Guides – iSwift</title>
  <meta name="description" content="Explore our insights, guides and tips on smart home technologies, Vastu-aligned living and getting the most from your automation investment.">
  <link rel="canonical" href="<?php echo base_url('/insights.php'); ?>">
  <!-- Open Graph / Twitter -->
  <meta property="og:title" content="Insights &amp; Guides – iSwift" />
  <meta property="og:description" content="Learn from our articles on smart locks, Wi‑Fi networks, smart curtains, and more." />
  <meta property="og:image" content="<?php echo base_url('/assets/images/hero-home.webp'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo base_url('/insights.php'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<section class="page-banner" style="background:linear-gradient(135deg,var(--bg-start),var(--bg-end));padding:4rem 1rem;text-align:center;color:var(--dark);">
  <h1>Insights &amp; Guides</h1>
  <p style="max-width:720px;margin:0 auto;color:var(--muted);">Deepen your understanding of smart home technologies and discover practical tips for integrating automation into Indian lifestyles.</p>
</section>

<section class="section" id="insights-list">
  <div class="container" style="max-width:900px;">
    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
      <article class="card" style="align-items:flex-start;">
        <h3><a href="<?php echo base_url('/insights/smart-locks-benefits.php'); ?>">Top Benefits of Smart Locks</a></h3>
        <p style="color:var(--muted);font-size:0.9rem;">Understand how keyless solutions simplify access, enhance security and integrate with your digital life.</p>
        <a href="<?php echo base_url('/insights/smart-locks-benefits.php'); ?>" class="btn btn-secondary" style="margin-top:auto;">Read More</a>
      </article>
      <article class="card" style="align-items:flex-start;">
        <h3><a href="/insights/wifi-mesh-vs-extenders.php">Wi‑Fi Mesh vs Extenders</a></h3>
        <p style="color:var(--muted);font-size:0.9rem;">Explore why mesh networks provide superior coverage and performance compared to traditional range extenders.</p>
        <a href="<?php echo base_url('/insights/wifi-mesh-vs-extenders.php'); ?>" class="btn btn-secondary" style="margin-top:auto;">Read More</a>
      </article>
      <article class="card" style="align-items:flex-start;">
        <h3><a href="<?php echo base_url('/insights/smart-curtains-vastu.php'); ?>">Smart Curtains &amp; Vastu</a></h3>
        <p style="color:var(--muted);font-size:0.9rem;">See how automated light and curtain control supports Vastu principles and enhances wellbeing.</p>
        <a href="<?php echo base_url('/insights/smart-curtains-vastu.php'); ?>" class="btn btn-secondary" style="margin-top:auto;">Read More</a>
      </article>
    </div>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
