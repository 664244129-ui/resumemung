<?php
/**
 * Footer Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
$currentYear = date('Y');
?>
  </main>

  <!-- Section 11 — Footer -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <h3>MUNGGORN</h3>
          <p>Computer Science · Web Development · Software</p>
        </div>

        <nav class="footer-nav" aria-label="Footer Navigation">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#education">Education</a>
          <a href="#skills">Skills</a>
          <a href="#projects">Projects</a>
          <a href="#experience">Experience</a>
          <a href="#languages">Languages</a>
          <a href="#contact">Contact</a>
        </nav>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo $currentYear; ?> Munggorn Noinarai. All rights reserved.
        </div>

        <div class="footer-social-links">
          <a href="mailto:koonsnook2555@gmail.com" title="Send email">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>koonsnook2555@gmail.com</span>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Toast Notification element for copy clipboard -->
  <div class="toast-notice" id="toastNotice" role="status" aria-live="polite">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
    <span class="toast-text">Copied to clipboard!</span>
  </div>

  <!-- Vanilla JavaScript -->
  <script src="assets/js/script.js"></script>
</body>
</html>