<?php
/**
 * Public site footer partial.
 */
?>

<footer>
  <div class="container footer-grid">
    <!-- Column 1: Contact -->
    <div class="footer-col">
      <h4>Contact</h4>
      <ul class="list-unstyled">
        <li><img class="icon" src="<?php echo base_url('/assets/icons/phone.png'); ?>" alt="Phone"> <a href="tel:+919654640101">+919654640101</a></li>
        <li><img class="icon" src="<?php echo base_url('/assets/icons/email.png'); ?>" alt="Email"> <a href="mailto:hello@iswift.in">hello@iswift.in</a></li>
        <li><img class="icon" src="<?php echo base_url('/assets/icons/whatsapp.png'); ?>" alt="WhatsApp"> <a href="https://wa.me/919654640101" target="_blank" rel="noopener">WhatsApp</a></li>
        <li><img class="icon" src="<?php echo base_url('/assets/icons/website.png'); ?>" alt="Website"> <a href="https://iswift.in" target="_blank" rel="noopener">iswift.in</a></li>
        <li><img class="icon" src="<?php echo base_url('/assets/icons/map.png'); ?>" alt="Map"> <a href="https://www.google.com/maps/search/?api=1&query=1605%2C%2016th%20Floor%2C%20S-3%20Towers%2C%20Cloud%209%20Apartments%2C%20Vaishali%2C%20Ghaziabad%20-%20201010" target="_blank" rel="noopener">View on Maps</a></li>
      </ul>
    </div>

    <!-- Column 2: Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul class="list-unstyled">
        <li><a href="<?php echo base_url('/solutions.php'); ?>">Solutions</a></li>
        <li><a href="<?php echo base_url('/products.php'); ?>">Products</a></li>
        <li><a href="<?php echo base_url('/insights.php'); ?>">Insights</a></li>
        <li><a href="<?php echo base_url('/about.php'); ?>">About</a></li>
        <li><a href="<?php echo base_url('/partners.php'); ?>">Partners</a></li>
        <li><a href="<?php echo base_url('/testimonials.php'); ?>">Testimonials</a></li>
        <li><a href="<?php echo base_url('/transform.php'); ?>">Transform</a></li>
        <li><a href="<?php echo base_url('/contact.php'); ?>">Contact</a></li>
        <li><a href="<?php echo base_url('/book-demo.php'); ?>">Book Demo</a></li>
      </ul>
    </div>

    <!-- Column 3: Legal & Social -->
    <div class="footer-col">
      <h4>Legal &amp; Follow Us</h4>
      <ul class="list-unstyled">
        <li><a href="<?php echo base_url('/privacy.php'); ?>">Privacy Policy</a></li>
        <li><a href="<?php echo base_url('/terms.php'); ?>">Terms</a></li>
      </ul>
      <div class="social">
        <a href="https://www.youtube.com/@smarthomeautomations" target="_blank" rel="noopener" aria-label="YouTube"><img class="icon" src="<?php echo base_url('/assets/icons/youtube.png'); ?>" alt="YouTube"></a>
        <a href="https://www.facebook.com/Secureindia8" target="_blank" rel="noopener" aria-label="Facebook"><img class="icon" src="<?php echo base_url('/assets/icons/facebook.png'); ?>" alt="Facebook"></a>
        <a href="https://www.instagram.com/secureindia.smarthome/" target="_blank" rel="noopener" aria-label="Instagram"><img class="icon" src="<?php echo base_url('/assets/icons/instagram.png'); ?>" alt="Instagram"></a>
      </div>
    </div>
  </div>
  <div class="divider"></div>
  <div class="container">
    <p>&copy; <?php echo date('Y'); ?> iSwift — Smart Home &amp; Automation</p>
  </div>
</footer>

<!-- Sticky WhatsApp floating action button -->
<a class="floating-whatsapp" href="https://wa.me/919654640101?text=Hi%20iSwift%2C%20I%27d%20like%20to%20enquire%20about%20your%20smart%20home%20solutions." target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <img src="<?php echo base_url('/assets/icons/whatsapp.png'); ?>" alt="">
  <span class="sr-only">Chat on WhatsApp</span>
</a>

<script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>
