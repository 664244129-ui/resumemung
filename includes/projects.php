<?php
/**
 * Featured Projects Section & Modal Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
?>
<!-- Section 05 — Featured Projects -->
<section class="section" id="projects">
  <div class="container">
    <div class="section-header">
      <div class="section-eyebrow">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <span>Portfolio Highlights</span>
      </div>
      <h2 class="section-title">Featured <span class="highlight">Projects</span></h2>
      <p class="section-subtitle">Web application development and database solutions for real-world e-commerce operations.</p>
    </div>

    <div class="projects-grid" style="grid-template-columns: 1fr;">
      <!-- Project 01: SnookToys E-Commerce Platform -->
      <article class="project-card featured-project">
        <div class="project-featured-ribbon">
          <span class="badge badge-accent">Web Development &amp; E-Commerce</span>
        </div>

        <div class="project-visual-header">
          <!-- Web Dashboard & Shopping Cart SVG Illustration -->
          <svg viewBox="0 0 360 140" width="100%" height="140" style="display:block;">
            <defs>
              <linearGradient id="webGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#2F6B3F" stop-opacity="0.15"/>
                <stop offset="100%" stop-color="#7FB77E" stop-opacity="0.3"/>
              </linearGradient>
            </defs>
            <rect x="10" y="10" width="340" height="120" rx="12" fill="url(#webGrad)" stroke="#7FB77E" stroke-width="1.5"/>
            <!-- Web Browser Window -->
            <rect x="30" y="25" width="180" height="90" rx="6" fill="#ffffff" stroke="#2F6B3F" stroke-width="1.5"/>
            <path d="M30 37 h180" stroke="#E3E9E2" stroke-width="1.5"/>
            <circle cx="40" cy="31" r="2.5" fill="#ef4444"/>
            <circle cx="48" cy="31" r="2.5" fill="#f59e0b"/>
            <circle cx="56" cy="31" r="2.5" fill="#10b981"/>
            <!-- Product Grid Items inside Web -->
            <rect x="40" y="45" width="40" height="30" rx="3" fill="#FFF6C0" stroke="#F7C85C"/>
            <rect x="88" y="45" width="40" height="30" rx="3" fill="#edf6ec" stroke="#7FB77E"/>
            <rect x="136" y="45" width="40" height="30" rx="3" fill="#edf6ec" stroke="#7FB77E"/>
            <rect x="40" y="82" width="136" height="20" rx="3" fill="#f4f8f4"/>
            <!-- Shopping Cart & MySQL Database Box -->
            <rect x="225" y="25" width="100" height="90" rx="6" fill="#ffffff" stroke="#2F6B3F" stroke-width="1.5"/>
            <text x="240" y="45" font-family="'Manrope', sans-serif" font-size="10" font-weight="bold" fill="#2F6B3F">PHP &amp; MySQL</text>
            <text x="240" y="62" font-family="'Inter', sans-serif" font-size="8" fill="#647067">· Stock Control</text>
            <text x="240" y="75" font-family="'Inter', sans-serif" font-size="8" fill="#647067">· Order System</text>
            <text x="240" y="88" font-family="'Inter', sans-serif" font-size="8" fill="#647067">· Cart Manager</text>
            <rect x="240" y="96" width="70" height="12" rx="3" fill="#2F6B3F"/>
            <text x="252" y="105" font-family="'Inter', sans-serif" font-size="7" font-weight="bold" fill="#ffffff">SnookToys DB</text>
          </svg>
          <span class="illustration-caption">E-Commerce &amp; Database Architecture</span>
        </div>

        <div class="project-body">
          <div class="project-meta">
            <span class="project-category">Full-Stack Web Development · E-Commerce</span>
            <span class="project-year">2025 – 2026</span>
          </div>

          <h3 class="project-title">การพัฒนาระบบพาณิชย์อิเล็กทรอนิกส์สำหรับร้าน SnookToys</h3>

          <p class="project-desc">
            ระบบเว็บไซต์ขายของเล่นออนไลน์สำหรับร้าน SnookToys รวบรวมหมวดหมู่ของเล่นยอดนิยมไว้อย่างครบครัน ไม่ว่าจะเป็น สกุชชี่ (Squishies), รถบังคับวิทยุ (RC Cars), หุ่นโมเดลสะสม, บอร์ดเกม และของเล่นเสริมทักษะ พัฒนาขึ้นเพื่อช่วยให้ออเดอร์สินค้าและระบบจัดการหน้าร้านเป็นไปอย่างสะดวก รวดเร็ว และเป็นระบบ
          </p>

          <div class="project-contributions">
            <h4>Key Features &amp; Capabilities:</h4>
            <ul>
              <li><strong>ระบบแคตตาล็อกสินค้า (Product Catalog):</strong> จัดหมวดหมู่ของเล่น ค้นหาสินค้า ค้นหาตามประเภท และแสดงรายละเอียดราคา/สต็อก</li>
              <li><strong>ระบบตะกร้าสินค้า &amp; สั่งซื้อ (Shopping Cart &amp; Checkout):</strong> เลือกคำนวณราคาสินค้าอัตโนมัติ และทำรายการสั่งซื้อผ่านหน้าเว็บ</li>
              <li><strong>ระบบจัดการหลังบ้าน (Admin Stock Control):</strong> เพิ่ม แก้ไข ลบรายการของเล่น (CRUD) และตรวจสอบยอดสั่งซื้อในระบบ</li>
            </ul>
          </div>

          <div class="project-tags">
            <span class="tag">PHP</span>
            <span class="tag">MySQL</span>
            <span class="tag">HTML5</span>
            <span class="tag">CSS3</span>
            <span class="tag">JavaScript</span>
            <span class="tag">Bootstrap</span>
            <span class="tag">XAMPP</span>
          </div>

          <div class="project-footer">
            <button type="button" class="btn btn-primary btn-sm" data-modal-target="project-snooktoys">
              <span>View Details</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            </button>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Accessible Project Details Modal Dialog -->
<div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-hidden="true" aria-labelledby="modalTitle">
  <div class="modal-window">
    <div class="modal-header">
      <div class="modal-title-group">
        <h2 id="modalTitle">การพัฒนาระบบพาณิชย์อิเล็กทรอนิกส์สำหรับร้าน SnookToys</h2>
        <div class="modal-subtitle">
          <span id="modalCategory" class="badge badge-primary">Web Development &amp; E-Commerce</span>
          <span>•</span>
          <span id="modalYear">2025 – 2026</span>
        </div>
      </div>
      <button type="button" class="modal-close-btn" id="modalCloseBtn" aria-label="Close project details">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>

    <div class="modal-content-area">
      <!-- Section: Overview -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
          Overview (ภาพรวมโครงการ)
        </h3>
        <p style="font-size:0.9375rem; line-height:1.7;">
          โครงการพัฒนาระบบเว็บไซต์อีคอมเมิร์ซสำหรับร้าน <strong>SnookToys</strong> ออกแบบมาเพื่อยกระดับการขายของเล่นหน้าร้านสู่ระบบออนไลน์ สามารถรองรับการแสดงรายการของเล่นหลากหลายหมวดหมู่ เช่น สกุชชี่, รถบังคับวิทยุ, หุ่นฟิกเกอร์, บอร์ดเกม และของเล่นเสริมพัฒนาการ โดยเน้นการใช้งานที่ง่ายสำหรับลูกค้า และมีระบบคลังสินค้าที่แม่นยำสำหรับผู้ดูแลร้าน
        </p>
      </div>

      <!-- Section: Objectives -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polygon points="12 6 12 12 16 14"/></svg>
          Objectives (วัตถุประสงค์ระบบ)
        </h3>
        <ul style="padding-left:20px; font-size:0.9375rem; line-height:1.6; color:var(--color-text-muted);">
          <li>สร้างช่องทางการสั่งซื้อของเล่นออนไลน์ที่สะดวกรวดเร็วสำหรับลูกค้า SnookToys</li>
          <li>พัฒนาระบบจัดการฐานข้อมูลสินค้า คลังสินค้า (Stock Management) และคำนวณราคาสินค้าอัตโนมัติ</li>
          <li>ช่วยลดข้อผิดพลาดในการเช็กสต็อกและการจดบันทึกออเดอร์ของร้านค้าด้วยระบบจัดการหลังบ้าน (Back-Office Admin System)</li>
        </ul>
      </div>

      <!-- Section: Key Contributions -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
          My Contributions (สิ่งที่ได้ลงมือทำ)
        </h3>
        <ul style="padding-left:20px; font-size:0.9375rem; line-height:1.6; color:var(--color-text-muted);">
          <li><strong>ออกแบบฐานข้อมูล (Database Design):</strong> ตารางข้อมูลสินค้า หมวดหมู่ของเล่น สต็อกสินค้า และคำสั่งซื้อด้วย MySQL</li>
          <li><strong>เขียนโปรแกรมฝั่งเซิร์ฟเวอร์ (Backend Logic):</strong> ใช้ภาษา PHP เชื่อมต่อฐานข้อมูล จัดการ Session การตะกร้าสินค้า การบันทึกออเดอร์ และระบบเข้าสู่ระบบสำหรับ Admin</li>
          <li><strong>ออกแบบหน้าเว็บ (Frontend &amp; UI):</strong> ใช้ HTML5, CSS3, JavaScript และ Bootstrap สร้าง Responsive Web ที่แสดงผลได้สวยงามทั้งบนคอมพิวเตอร์และมือถือ</li>
        </ul>
      </div>

      <!-- Section: Technologies Used -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2"/></svg>
          Technologies Used (เทคโนโลยีที่ใช้)
        </h3>
        <div class="project-tags">
          <span class="tag">PHP Scripting</span>
          <span class="tag">MySQL Database</span>
          <span class="tag">HTML5 &amp; CSS3</span>
          <span class="tag">JavaScript (ES6)</span>
          <span class="tag">Bootstrap Design</span>
          <span class="tag">Apache / XAMPP Server</span>
        </div>
      </div>

      <!-- Section: System Architecture & Workflow -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
          System Flow (ขั้นตอนการทำงานของระบบ)
        </h3>
        <div style="background:#f8faf8; border:1px solid #e2e8f0; padding:15px; border-radius:8px; font-size:0.875rem; color:var(--color-text);">
          <strong>User Flow:</strong> เลือกชมสินค้า / หมวดหมู่ของเล่น &rarr; เพิ่มสินค้าลงตะกร้า &rarr; กดยืนยันการสั่งซื้อ &rarr; บันทึกออเดอร์ลงระบบ MySQL Database<br><br>
          <strong>Admin Flow:</strong> ล็อกอินเข้าสู่ระบบหลังบ้าน &rarr; จัดการเพิ่ม/แก้ไข/ลบรายการของเล่น (CRUD) &rarr; อัปเดตสต็อกสินค้า &rarr; ตรวจสอบรายการออเดอร์สั่งซื้อ
        </div>
      </div>

      <!-- Section: Technical Learnings -->
      <div class="modal-section-block">
        <h3 class="modal-section-title">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          Technical Learnings (ความรู้ที่ได้รับ)
        </h3>
        <p style="font-size:0.9375rem; line-height:1.7; color:var(--color-text-muted);">
          เข้าใจกระบวนการพัฒนาเว็บแอปพลิเคชันแบบเต็มรูปแบบ (Full-Stack Web Development) เริ่มตั้งแต่วิเคราะห์ความต้องการของธุรกิจร้านของเล่นจริง การเขียนคำสั่ง SQL เพื่อดึงข้อมูลอย่างมีประสิทธิภาพ การจัดการ Session ใน PHP เพื่อจดจำรายการสินค้าในตะกร้า รวมถึงการตรวจสอบความปลอดภัยของฟอร์มรับข้อมูลเบื้องต้น
        </p>
      </div>
    </div>
  </div>
</div>