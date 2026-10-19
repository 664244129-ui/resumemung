<?php
/**
 * Contact & Internship CTA Section Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
$resumePdf = 'assets/files/Resume_Munggorn_Noinarai.pdf';

// CSRF Token generation
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Variables passed from index.php if form submitted
$formStatus = $formStatus ?? null;
$formMessage = $formMessage ?? null;
$formData = $formData ?? ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
?>
<!-- Section 09 — Personal Information & Contact -->
<section class="section" id="contact">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        <span>Get in Touch</span>
      </div>
      <h2 class="section-title">Let's <span class="highlight">Connect</span></h2>
      <p class="section-subtitle">Interested in discussing internship opportunities or technical projects? Feel free to reach out.</p>
    </div>

    <div class="contact-grid">
      <!-- Left Column: Direct Contact Details & Quick Copy -->
      <div class="contact-info-col">
        <!-- Email Card with Copy Button -->
        <div class="contact-card">
          <div class="contact-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </div>
          <div class="contact-details">
            <div class="contact-label">Email Address</div>
            <div class="contact-value">
              <a href="mailto:koonsnook2555@gmail.com">koonsnook2555@gmail.com</a>
            </div>
          </div>
          <button type="button" class="copy-email-btn" aria-label="Copy email address to clipboard">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
            <span>Copy</span>
          </button>
        </div>

        <!-- Phone Card -->
        <div class="contact-card">
          <div class="contact-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div class="contact-details">
            <div class="contact-label">Phone Number</div>
            <div class="contact-value">
              <a href="tel:0826572927">082-657-2927</a>
            </div>
          </div>
        </div>

        <!-- Location Card -->
        <div class="contact-card">
          <div class="contact-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div class="contact-details">
            <div class="contact-label">Location</div>
            <div class="contact-value">164 ถ.ราชดำเนิน ต.คลองกระแชง อ.เมือง จ.เพชรบุรี 76000</div>
          </div>
        </div>
      </div>

      <!-- Right Column: Direct Message Form -->
      <div class="contact-form-box">
        <h3>Send a Direct Message</h3>
        <p>Have an inquiry or internship opening? Send a message directly or email <a href="mailto:koonsnook2555@gmail.com" style="color:var(--color-primary); font-weight:600;">koonsnook2555@gmail.com</a>.</p>

        <?php if ($formStatus === 'success'): ?>
          <div class="form-alert form-alert-success" role="alert">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
            <div><?php echo htmlspecialchars($formMessage); ?></div>
          </div>
        <?php elseif ($formStatus === 'error'): ?>
          <div class="form-alert form-alert-error" role="alert">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <div><?php echo htmlspecialchars($formMessage); ?></div>
          </div>
        <?php endif; ?>

        <form action="#contact" method="POST" novalidate>
          <!-- CSRF Token -->
          <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
          
          <!-- Honeypot anti-spam -->
          <div style="display:none;" aria-hidden="true">
            <label for="contact_website_check">Leave empty</label>
            <input type="text" id="contact_website_check" name="website_trap" autocomplete="off" tabindex="-1">
          </div>

          <div class="form-group">
            <label for="sender_name" class="form-label">Your Name <span style="color:#ef4444;">*</span></label>
            <input type="text" id="sender_name" name="sender_name" class="form-control" required placeholder="e.g., HR / Engineering Manager" value="<?php echo htmlspecialchars($formData['name']); ?>">
          </div>

          <div class="form-group">
            <label for="sender_email" class="form-label">Your Email <span style="color:#ef4444;">*</span></label>
            <input type="email" id="sender_email" name="sender_email" class="form-control" required placeholder="name@company.com" value="<?php echo htmlspecialchars($formData['email']); ?>">
          </div>

          <div class="form-group">
            <label for="message_subject" class="form-label">Subject</label>
            <input type="text" id="message_subject" name="message_subject" class="form-control" placeholder="Internship Opportunity / Technical Inquiry" value="<?php echo htmlspecialchars($formData['subject']); ?>">
          </div>

          <div class="form-group">
            <label for="message_body" class="form-label">Message <span style="color:#ef4444;">*</span></label>
            <textarea id="message_body" name="message_body" class="form-control" required placeholder="Details about the role or project..."><?php echo htmlspecialchars($formData['message']); ?></textarea>
          </div>

          <button type="submit" name="submit_contact" class="btn btn-primary" style="width:100%;">
            <span>Send Message</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Section 10 — Internship Call to Action Banner -->
<section class="cta-banner-section" aria-label="Internship Call to Action">
  <div class="container cta-container">
    <div class="cta-badge">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
      <span>Open for 4-Month Internship</span>
    </div>

    <h2 class="cta-title">Ready to Build Something Meaningful?</h2>

    <p class="cta-desc">
      I am looking for a 4-month internship in Software Engineering or Web Development, where I can contribute my programming, web development, and problem-solving skills while learning from an experienced team.
    </p>

    <div class="cta-buttons">
      <a href="#contact" class="btn btn-accent">
        <span>Contact Me</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
      </a>

      <a href="<?php echo htmlspecialchars($resumePdf); ?>" download="Resume_Munggorn_Noinarai.pdf" class="btn btn-outline-white">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        <span>Download Resume (PDF)</span>
      </a>
    </div>
  </div>
</section>