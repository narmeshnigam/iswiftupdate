<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terms &amp; Conditions – iSwift</title>
  <meta name="description" content="Review the terms and conditions for using the iSwift website and services. These terms govern your interactions with our content and offerings.">
  <link rel="canonical" href="/terms.php">
  <meta property="og:title" content="Terms &amp; Conditions – iSwift" />
  <meta property="og:description" content="Understand the rules and guidelines for accessing and using iSwift’s website and services." />
  <meta property="og:image" content="/assets/images/hero-home.webp" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/terms.php" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<section class="page-banner" style="background:linear-gradient(135deg,var(--bg-start),var(--bg-end));padding:4rem 1rem;text-align:center;color:var(--dark);">
  <h1>Terms &amp; Conditions</h1>
</section>

<section class="section" id="terms" style="background:#ffffff;">
  <div class="container" style="max-width:900px;">
    <h2>Acceptance of Terms</h2>
    <p>By accessing and using this website, you agree to be bound by these terms and conditions and all applicable laws and regulations. If you do not agree with any of these terms, please do not use this website.</p>

    <h2>Use of Content</h2>
    <p>The content on this website, including text, images, and graphics, is provided for informational purposes only. You may view, download, and print portions of the content for your personal, non-commercial use, provided you do not modify or remove any proprietary notices.</p>

    <h2>Intellectual Property</h2>
    <p>All trademarks, logos, and service marks displayed on this site are the property of iSwift or third parties. You are not permitted to use these marks without the prior written consent of iSwift or such third party which may own the marks.</p>

    <h2>Disclaimer</h2>
    <p>The materials on this website are provided "as is" without any warranties of any kind. iSwift makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties of merchantability, fitness for a particular purpose, or non-infringement of intellectual property.</p>

    <h2>Limitation of Liability</h2>
    <p>In no event shall iSwift or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on iSwift’s website.</p>

    <h2>Links to Other Sites</h2>
    <p>Our website may contain links to third-party sites. These linked sites are not under our control, and we are not responsible for the contents of any linked site. Inclusion of any link does not imply endorsement by iSwift.</p>

    <h2>Modifications</h2>
    <p>iSwift may revise these terms at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms and conditions.</p>

    <p>If you have any questions about these terms, please contact us via our <a href="/contact.php">contact page</a>.</p>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
