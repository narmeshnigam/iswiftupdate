<?php
require_once __DIR__ . '/backend/boot.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy – iSwift</title>
  <meta name="description" content="Learn how iSwift collects, uses, and protects your personal data. Our privacy policy outlines our commitment to safeguarding your information.">
  <link rel="canonical" href="/privacy.php">
  <meta property="og:title" content="Privacy Policy – iSwift" />
  <meta property="og:description" content="Read our privacy policy to understand how iSwift handles your data and respects your privacy." />
  <meta property="og:image" content="/assets/images/hero-home.webp" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="/privacy.php" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
</head>
<body>
<?php tpl('header'); ?>

<section class="page-banner" style="background:linear-gradient(135deg,var(--bg-start),var(--bg-end));padding:4rem 1rem;text-align:center;color:var(--dark);">
  <h1>Privacy Policy</h1>
</section>

<section class="section" id="privacy" style="background:#ffffff;">
  <div class="container" style="max-width:900px;">
    <h2>Introduction</h2>
    <p>At iSwift, we value your privacy and take data protection seriously. This policy explains what information we collect when you use our website, how we use it, and your rights concerning your personal data.</p>

    <h2>Information We Collect</h2>
    <p>We collect information that you voluntarily provide via forms on our website, such as your name, phone number, email address, city, and your areas of interest. When you browse our site, we may also automatically collect limited technical data such as your IP address, browser type, and pages visited to help improve our services.</p>

    <h2>How We Use Your Information</h2>
    <p>Your personal information is used to respond to enquiries, process demo bookings, and provide you with relevant marketing or support communications. We may also use aggregated, anonymised data for analytics to better understand how visitors use our website.</p>

    <h2>Data Security</h2>
    <p>We implement reasonable technical and organisational measures to protect your personal data from unauthorised access or disclosure. While no system can be completely secure, we strive to use best practices to safeguard your information.</p>

    <h2>Sharing Your Data</h2>
    <p>We do not sell or rent your personal data to third parties. We may share information with trusted service providers who assist us in operating our website or conducting our business, provided they agree to keep this information confidential. We may also disclose information if required by law.</p>

    <h2>Your Rights</h2>
    <p>You have the right to request access to the personal data we hold about you, to correct inaccurate data, or to request deletion of your data. To exercise these rights, please contact us at <a href="mailto:privacy@iswift.in">privacy@iswift.in</a>.</p>

    <h2>Changes to This Policy</h2>
    <p>We may update this privacy policy from time to time to reflect changes to our practices or for other operational, legal, or regulatory reasons. Please revisit this page periodically to stay informed.</p>

    <p>If you have any questions or concerns about our privacy policy, please reach out via our <a href="/contact.php">contact page</a>.</p>
  </div>
</section>

<?php tpl('footer'); ?>
</body>
</html>
