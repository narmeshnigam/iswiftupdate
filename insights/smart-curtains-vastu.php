<?php
require_once __DIR__ . '/../backend/boot.php';
// Article metadata
$article_title   = 'Smart Curtains & Vastu: Harmonising Light and Energy';
$article_desc    = 'Learn how automated curtains and lighting align with Vastu principles to enhance wellbeing and productivity.';
$article_url     = 'https://' . $_SERVER['HTTP_HOST'] . '/insights/smart-curtains-vastu.php';
$article_image   = '/assets/images/smart-curtains.webp';
$article_date    = '2025-09-05';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($article_title); ?> – iSwift</title>
  <meta name="description" content="<?php echo htmlspecialchars($article_desc); ?>">
  <link rel="canonical" href="<?php echo base_url('/insights/smart-curtains-vastu.php'); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($article_title); ?>" />
  <meta property="og:description" content="<?php echo htmlspecialchars($article_desc); ?>" />
  <meta property="og:image" content="<?php echo base_url($article_image); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?php echo $article_url; ?>" />
  <link rel="stylesheet" href="/assets/css/style.css">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?php echo htmlspecialchars($article_title); ?>",
    "description": "<?php echo htmlspecialchars($article_desc); ?>",
    "image": "<?php echo $article_image; ?>",
    "author": {
      "@type": "Organization",
      "name": "iSwift"
    },
    "datePublished": "<?php echo $article_date; ?>",
    "publisher": {
      "@type": "Organization",
      "name": "iSwift",
      "logo": {
        "@type": "ImageObject",
        "url": "/assets/images/logo.webp"
      }
    }
  }
  </script>
</head>
<body>
<?php tpl('header'); ?>

<section class="page-banner" style="background:linear-gradient(135deg,var(--bg-start),var(--bg-end));padding:3rem 1rem;text-align:center;color:var(--dark);">
  <h1><?php echo htmlspecialchars($article_title); ?></h1>
  <p style="max-width:720px;margin:0 auto;color:var(--muted);">Optimise natural light and create a balanced environment using smart curtains that adhere to Vastu guidelines.</p>
</section>

<section class="section" id="article-content" style="background:#ffffff;">
  <div class="container" style="max-width:900px;">
    <p>Vastu Shastra emphasises harmonious flow of energy through proper placement of elements and careful control of light. Natural light is believed to influence our mood, health and prosperity. With smart curtains and blinds, you can automate the play of light to align with Vastu recommendations and modern convenience.</p>
    <h2>The Importance of Light in Vastu</h2>
    <p>According to Vastu, inviting gentle morning sun and diffusing harsh afternoon rays can improve wellbeing. East‑facing windows should open to allow sunrise energy, while west‑facing windows benefit from controlled shading during sunset.</p>
    <h2>Automated Control for Daily Rhythms</h2>
    <p>Smart curtains allow you to schedule opening and closing times based on sunrise and sunset. This ensures your home is bathed in natural light at auspicious times and shielded when needed, without manual intervention.</p>
    <h2>Energy Efficiency & Comfort</h2>
    <p>Automated blinds help maintain indoor temperature by blocking heat during peak hours and retaining warmth during cooler nights. This reduces reliance on air conditioning and enhances comfort.</p>
    <h2>Integration with Scenes & Voice Commands</h2>
    <p>Create scenes that adjust curtains, lights and music with a single tap or voice command. Align your morning routine with uplifting light and your evening routine with calming ambiance, supporting productivity and relaxation.</p>
    <p>By combining ancient wisdom with modern technology, smart curtains empower you to live in harmony with natural cycles while enjoying contemporary convenience.</p>
    <div style="margin-top:2rem;text-align:center;">
      <a href="/solutions/smart-curtains.php" class="btn btn-primary">Explore Smart Curtains &amp; Blinds</a>
    </div>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
