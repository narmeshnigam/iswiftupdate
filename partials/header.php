<?php
/**
 * Public site header partial.
 *
 * Contains the logo and primary navigation. This file is included on
 * every public-facing page via boot.php and should therefore avoid
 * opening or closing any of the document root elements (html, head,
 * body). If you need to update navigation links or add new menu
 * items, modify the <nav> element below. Internal links should
 * reference the .php version of each page to ensure the correct
 * file extension.
 */
?>

<header>
  <div class="container nav-wrapper">
    <a href="<?php echo base_url('/index.php'); ?>" class="logo">
      <img src="<?php echo base_url('/assets/images/logo.webp'); ?>" alt="iSwift logo">
    </a>
    <div class="hamburger" aria-label="Toggle navigation" role="button" tabindex="0">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav>
      <a href="<?php echo base_url('/solutions.php'); ?>">Solutions</a>
      <a href="<?php echo base_url('/products.php'); ?>">Products</a>
      <a href="<?php echo base_url('/insights.php'); ?>">Insights</a>
      <a href="<?php echo base_url('/about.php'); ?>">About</a>
      <a href="<?php echo base_url('/partners.php'); ?>">Partners</a>
      <a href="<?php echo base_url('/testimonials.php'); ?>">Testimonials</a>
      <a href="<?php echo base_url('/transform.php'); ?>">Transform</a>
      <a href="<?php echo base_url('/contact.php'); ?>">Contact</a>
      <a href="<?php echo base_url('/book-demo.php'); ?>" class="btn btn-secondary" style="margin-left:0.5rem;">Book Demo</a>
    </nav>
  </div>
</header>
