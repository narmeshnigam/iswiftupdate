<?php
/**
 * Admin panel footer partial.
 *
 * Closes the main element opened by header.php and outputs a simple
 * footer for the admin pages. Also includes the global JavaScript
 * bundle to enable responsive navigation on mobile (shared with
 * public pages).
 */
?>
  </main>
  <footer style="text-align:center;padding:2rem 1rem;border-top:1px solid var(--border);">
    &copy; <?php echo date('Y'); ?> iSwift Admin Panel
  </footer>
  <script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>
</body>
</html>
