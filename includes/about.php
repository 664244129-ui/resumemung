<?php
/**
 * About Me Section Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
?>
<!-- Section 02 — About Me -->
<section class="section section-alt" id="about">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
        <span>Background &amp; Philosophy</span>
      </div>
      <h2 class="section-title">About <span class="highlight">Me</span></h2>
      <p class="section-subtitle">Computer Science Student &amp; E-Commerce Entrepreneur</p>
    </div>

    <div class="about-grid">
      <!-- Left: Narrative & Background -->
      <div class="about-narrative">
        <p>
          I am a fourth-year Computer Science student in the Faculty of Information Technology at Phetchaburi Rajabhat University, having graduated from Benchamatheputhit Phetchaburi School. My academic journey has provided me with a solid foundation in computer science principles and technical problem-solving.
        </p>
        <p>
          I have a passion for practical web development, with a strong focus on PHP backend programming, MySQL database management, and building functional web systems. I enjoy writing clear code and creating software logic that serves real business and user requirements.
        </p>
        <p>
          In addition to my studies, I run a personal business called <strong>SnookToys</strong>, an online and local toy store. Managing this business has equipped me with real-world skills in e-commerce operations, digital stock management, customer service, and practical troubleshooting. I am currently seeking a 4-month internship where I can apply my PHP development and technical capabilities in a professional environment.
        </p>

        <!-- Quick Summary Metrics -->
        <div class="about-highlights-box">
          <div class="about-stat">
            <div class="about-stat-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
            </div>
            <div class="about-stat-info">
              <div class="stat-value">2.20 / 4.00</div>
              <div class="stat-label">B.Sc. Computer Science GPA</div>
            </div>
          </div>

          <div class="about-stat">
            <div class="about-stat-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
            </div>
            <div class="about-stat-info">
              <div class="stat-value">High School</div>
              <div class="stat-label">Benchamatheputhit Phetchaburi</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: 4 Key Interest Cards -->
      <div class="interest-cards-grid">
        <!-- Card 1: PHP & Web Development -->
        <div class="interest-card">
          <div class="interest-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
          </div>
          <div class="interest-content">
            <h3>PHP &amp; Web Development</h3>
            <p>PHP Scripting, Dynamic Websites, Database Design &amp; MySQL.</p>
          </div>
        </div>

        <!-- Card 2: E-Commerce & Business Operations -->
        <div class="interest-card">
          <div class="interest-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          </div>
          <div class="interest-content">
            <h3>E-Commerce &amp; SnookToys</h3>
            <p>Store Operations, Digital Inventory, Customer Management.</p>
          </div>
        </div>

        <!-- Card 3: Hardware & IoT Systems -->
        <div class="interest-card">
          <div class="interest-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/></svg>
          </div>
          <div class="interest-content">
            <h3>IoT &amp; Hardware Tech</h3>
            <p>ESP32, Basic Sensors, Microcontroller Integration.</p>
          </div>
        </div>

        <!-- Card 4: Practical Problem Solving -->
        <div class="interest-card">
          <div class="interest-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
          </div>
          <div class="interest-content">
            <h3>Practical Problem Solving</h3>
            <p>Hands-on Troubleshooting, System Setup &amp; Maintenance.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>