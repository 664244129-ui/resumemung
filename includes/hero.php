<?php
/**
 * Hero Section Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
$resumePdf = 'assets/files/Resume_Munggorn_Noinarai.pdf';
?>
<!-- Section 01 — Hero / Introduction -->
<section class="hero-section" id="home">
  <div class="container">
    <div class="hero-grid">
      <!-- Left Column: Introduction & CTAs -->
      <div class="hero-content">
        <div class="hero-eyebrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          <span>COMPUTER SCIENCE STUDENT · SOFTWARE &amp; IoT</span>
        </div>

        <h1 class="hero-title">
          Hi, I'm <span class="name-highlight">Munggorn Noinarai.</span>
        </h1>

        <div class="hero-headline">
          Driven by <span class="accent-mark">Practical Coding</span> &amp; Real-World Tech Solutions.
        </div>

        <p class="hero-desc">
          Motivated Computer Science student with a strong focus on practical implementation. Passionate about web development, embedded systems, and IoT solutions, with a hands-on approach to solving technical challenges and turning concepts into working software.
        </p>

        <!-- Internship Highlight Callout -->
        <div class="hero-internship-box">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          <div>
            <strong>Internship Objective:</strong> Seeking a 4-month internship in Software Engineering, Web Development, or IoT Systems.
          </div>
        </div>

        <!-- Call to Actions -->
        <div class="hero-cta-group">
          <a href="#projects" class="btn btn-primary">
            <span>Explore My Projects</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
          </a>

          <a href="#contact" class="btn btn-accent">
            <span>Contact Me</span>
          </a>
        </div>

        <!-- Direct Contact (GitHub removed) -->
        <div class="hero-social-links">
          <span>Direct Email:</span>
          <a href="mailto:koonsnook2555@gmail.com" class="hero-social-btn" title="Contact via Email">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span>koonsnook2555@gmail.com</span>
          </a>
        </div>

        <!-- 3 Highlight Cards -->
        <div class="hero-highlights">
          <div class="highlight-card">
            <span class="highlight-label">Academic Performance</span>
            <div class="highlight-value">GPA: 2.20 <span style="font-size:0.875rem; font-weight:600; color:var(--color-text-muted);">/ 4.00</span></div>
          </div>

          <div class="highlight-card featured">
            <span class="highlight-label">Practical Mindset</span>
            <div class="highlight-value" style="font-size:1.0625rem;">Hands-on Learning</div>
            <span style="font-size:0.75rem; color:var(--color-text-muted); font-weight:600;">Build &amp; Troubleshoot Real Projects</span>
          </div>

          <div class="highlight-card">
            <span class="highlight-label">Technical Specialty</span>
            <div class="highlight-value" style="font-size:1rem; color:var(--color-text);">Software · Web · IoT</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Visual Frame with Profile Photo -->
      <div class="hero-visual">
        <div class="hero-card-frame">
          <!-- Floating Chip 1: ESP32 / IoT -->
          <div class="floating-chip chip-esp32">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
            <span>ESP32 &amp; IoT</span>
          </div>

          <!-- Profile Image -->
          <div class="hero-image-wrapper">
            <img src="assets/images/profile.jpg" alt="Munggorn Noinarai — Computer Science Student">
            
            <!-- Live Availability Tag -->
            <div class="hero-tech-badge">
              <div>
                <span class="status-dot"></span>
                <span class="tech-role">Internship Candidate</span>
              </div>
              <span class="tech-title">4-Month Period</span>
            </div>
          </div>

          <!-- Floating Chip 2: Software Development -->
          <div class="floating-chip chip-ai">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            <span>Software &amp; Web Dev</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>