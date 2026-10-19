/**
 * Supavadee Junyakul — Personal Resume & Portfolio Website
 * Vanilla JavaScript (No Frameworks, No Dependencies)
 * Handles:
 * - Mobile navigation menu & accessibility
 * - Navbar scroll state
 * - Active navigation link highlighting (IntersectionObserver)
 * - Accessible Project Detail Modal (Esc key, focus trap & restore, backdrop click)
 * - Copy Email to Clipboard with fallback and Toast notification
 */

document.addEventListener('DOMContentLoaded', () => {
  // ----------------- 1. DOM Elements -----------------
  const navbar = document.querySelector('.navbar');
  const navHamburger = document.querySelector('.nav-hamburger');
  const navMenu = document.querySelector('.nav-menu-wrapper');
  const navLinks = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section[id]');
  const copyEmailBtns = document.querySelectorAll('.copy-email-btn');
  const toastNotice = document.getElementById('toastNotice');
  const projectModal = document.getElementById('projectModal');
  const modalCloseBtn = document.getElementById('modalCloseBtn');
  const modalTitle = document.getElementById('modalTitle');
  const modalCategory = document.getElementById('modalCategory');
  const modalYear = document.getElementById('modalYear');
  const modalOverview = document.getElementById('modalOverview');
  const modalObjectives = document.getElementById('modalObjectives');
  const modalContributions = document.getElementById('modalContributions');
  const modalTechTags = document.getElementById('modalTechTags');
  const modalArchitecture = document.getElementById('modalArchitecture');
  const modalLearnings = document.getElementById('modalLearnings');

  let lastActiveElement = null;

  // ----------------- 2. Sticky Navbar Shadow -----------------
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  }, { passive: true });

  // ----------------- 3. Mobile Hamburger Menu -----------------
  if (navHamburger && navMenu) {
    const toggleMenu = (open) => {
      const isOpen = open !== undefined ? open : !navMenu.classList.contains('open');
      navHamburger.classList.toggle('open', isOpen);
      navMenu.classList.toggle('open', isOpen);
      navHamburger.setAttribute('aria-expanded', String(isOpen));
      document.body.style.overflow = isOpen ? 'hidden' : '';
    };

    navHamburger.addEventListener('click', () => toggleMenu());

    // Close menu when clicking nav links
    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        if (navMenu.classList.contains('open')) {
          toggleMenu(false);
        }
      });
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('open')) {
        toggleMenu(false);
      }
    });
  }

  // ----------------- 4. Active Navigation State -----------------
  const observerOptions = {
    root: null,
    rootMargin: '-20% 0px -70% 0px',
    threshold: 0
  };

  const navObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach((link) => {
          if (link.getAttribute('href') === `#${id}`) {
            link.classList.add('active');
          } else {
            link.classList.remove('active');
          }
        });
      }
    });
  }, observerOptions);

  sections.forEach((sec) => navObserver.observe(sec));

  // ----------------- 5. Project Modal Data & Interaction -----------------
  const projectDetailsData = {
    'project-ai-neuropathy': {
      title: 'AI-Assisted Diabetic Neuropathy Screening Application',
      category: 'Artificial Intelligence · Healthcare Technology',
      year: '2026',
      badge: 'NSC 2026 4th Place Award Winner & Grant Recipient',
      overview: 'Developed as part of a research and development project that successfully received a project development grant and won the 4th Place Award at the National Software Contest 2026 (NSC 2026) in the Health, Disability, and Elderly Programs category. The project aims to explore intelligent assistive screening methods for sensory assessment data.',
      objectives: [
        'Explore non-invasive, AI-assisted screening workflows for sensory assessment data.',
        'Implement deep learning architectures for precise image and condition classification.',
        'Evaluate classification models rigorously using standard medical evaluation metrics.'
      ],
      contributions: [
        'Co-developed AI modules utilizing Convolutional Neural Networks (CNN) and YOLOv8 for image classification and feature extraction.',
        'Applied Confusion Matrix analysis to evaluate sensory assessment and screening data.',
        'Measured model performance using Accuracy, Precision, and Sensitivity metrics.',
        'Collaborated on application integration and research documentation for national competition evaluation.'
      ],
      techTags: ['CNN', 'YOLOv8', 'Image Classification', 'Confusion Matrix', 'Python', 'Evaluation Metrics'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">Screening & Evaluation Workflow:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Sensory Assessment & Visual Input</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Pre-processing & Normalization</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">CNN / YOLOv8 Feature Extraction</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Confusion Matrix & Metrics Evaluation</div>
          </div>
          <p style="font-size:0.8125rem; color:var(--color-text-muted); margin-top:8px;">
            <em>Note: Conceptual research prototype for academic research and competition evaluation. Not certified for independent medical diagnostics.</em>
          </p>
        </div>
      `,
      learnings: 'Gained practical expertise in deploying computer vision architectures (YOLOv8, CNN), balancing precision vs. sensitivity in critical assessment scenarios, and defending research methodologies in high-stakes national competitions.'
    },

    'project-smart-farm': {
      title: 'Smart Farm Environmental Monitoring & Data Logging System',
      category: 'IoT · Smart Agriculture · Automation',
      year: '2025',
      badge: 'Academic Engineering Project',
      overview: 'An automated irrigation and environmental monitoring system designed to optimize water distribution using an ESP32 microcontroller, environmental sensors, and Fuzzy Logic Control algorithms.',
      objectives: [
        'Automate farm irrigation based on continuous environmental factors rather than static timers.',
        'Integrate multi-sensor inputs to capture accurate ambient moisture, temperature, and light intensity.',
        'Implement real-time environmental data logging for analysis and simulation.'
      ],
      contributions: [
        'Built an automated irrigation system driven by ESP32 microcontroller and Fuzzy Logic control.',
        'Integrated DHT22 (temperature & humidity) and LDR (light-dependent resistor) sensors for ambient monitoring.',
        'Designed rule-based fuzzy membership sets to evaluate irrigation water output dynamically.',
        'Simulated and verified circuit performance using the Wokwi simulation platform before physical breadboard deployment.',
        'Implemented real-time environmental data logging for tracking conditions over time.'
      ],
      techTags: ['ESP32', 'DHT22', 'LDR Sensor', 'Fuzzy Logic Control', 'IoT', 'Wokwi', 'C/C++'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">System Architecture Pipeline:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Sensors (DHT22 Temp/Humidity + LDR Light)</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">ESP32 Microcontroller Core</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Fuzzy Logic Inference Engine</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Automated Irrigation & Data Logging</div>
          </div>
        </div>
      `,
      learnings: 'Learned microcontroller hardware interfacing, analog-to-digital conversion calibration, fuzzy rule tuning for smoother actuator control, and debugging asynchronous sensor data streams.'
    },

    'project-ebike': {
      title: 'Electric Bicycle (E-Bike) Control System',
      category: 'Electronics · Embedded Control · Hardware Integration',
      year: '2023',
      badge: 'Hardware & Electronics Engineering',
      overview: 'A customized electronic control and battery management system developed to convert a standard manual bicycle into a functional, safe electric bicycle (E-Bike).',
      objectives: [
        'Design and wire an electrical drive control system suited for standard bicycle conversion.',
        'Integrate high-torque DC motor drive with throttle feedback and safety shutoffs.',
        'Incorporate battery management circuitry for safe power distribution.'
      ],
      contributions: [
        'Developed customized electronic control circuitry and battery management system integration.',
        'Integrated DC motor drive with electronic controller for throttle regulation.',
        'Performed comprehensive hardware troubleshooting, wiring continuity checks, and electrical safety verification.',
        'Ensured mechanical and electrical integration reliability through systematic maintenance and testing.'
      ],
      techTags: ['Electronics', 'DC Motor', 'Electronic Controller', 'Battery Management', 'Troubleshooting', 'Wiring Safety'],
      architecture: `
        <div style="display:flex; flex-direction:column; gap:12px;">
          <div style="font-weight:700; font-size:0.875rem; color:var(--color-primary);">Hardware Power & Control Loop:</div>
          <div class="flow-diagram-container" style="flex-wrap:wrap; gap:8px;">
            <div class="flow-step-box">Battery Pack & BMS</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">Electronic Speed Controller</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box primary-step">DC Drive Motor</div>
            <div class="flow-arrow">→</div>
            <div class="flow-step-box accent-step">Throttle & Brake Safety Sensors</div>
          </div>
        </div>
      `,
      learnings: 'Deepened hands-on electrical troubleshooting skills, high-current circuit safety practices, motor driver commutation, and practical diagnostic methodology for embedded hardware systems.'
    }
  };

  const openProjectModal = (projectId, triggerBtn) => {
    const data = projectDetailsData[projectId];
    if (!data || !projectModal) return;

    lastActiveElement = triggerBtn;

    modalTitle.textContent = data.title;
    modalCategory.textContent = data.category;
    modalYear.textContent = data.year;
    modalOverview.textContent = data.overview;

    // Objectives
    modalObjectives.innerHTML = data.objectives
      .map(item => `<li>${escapeHtml(item)}</li>`)
      .join('');

    // Contributions
    modalContributions.innerHTML = data.contributions
      .map(item => `<li>${escapeHtml(item)}</li>`)
      .join('');

    // Tech Tags
    modalTechTags.innerHTML = data.techTags
      .map(tag => `<span class="tag tag-highlight">${escapeHtml(tag)}</span>`)
      .join('');

    // Architecture
    modalArchitecture.innerHTML = data.architecture;

    // Learnings
    modalLearnings.textContent = data.learnings;

    projectModal.classList.add('active');
    projectModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    // Focus close button for accessibility
    setTimeout(() => {
      modalCloseBtn?.focus();
    }, 50);
  };

  const closeProjectModal = () => {
    if (!projectModal) return;
    projectModal.classList.remove('active');
    projectModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';

    // Restore focus to original trigger button
    if (lastActiveElement && typeof lastActiveElement.focus === 'function') {
      lastActiveElement.focus();
    }
  };

  // Attach event listeners to "View Details" buttons
  document.querySelectorAll('[data-modal-target]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-modal-target');
      openProjectModal(targetId, btn);
    });
  });

  if (modalCloseBtn) {
    modalCloseBtn.addEventListener('click', closeProjectModal);
  }

  if (projectModal) {
    projectModal.addEventListener('click', (e) => {
      if (e.target === projectModal) {
        closeProjectModal();
      }
    });

    // Keyboard support: Escape closes modal, Tab traps focus
    document.addEventListener('keydown', (e) => {
      if (!projectModal.classList.contains('active')) return;

      if (e.key === 'Escape') {
        closeProjectModal();
        return;
      }

      if (e.key === 'Tab') {
        const focusableElements = projectModal.querySelectorAll(
          'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
        );
        const firstElement = focusableElements[0];
        const lastElement = focusableElements[focusableElements.length - 1];

        if (e.shiftKey) {
          if (document.activeElement === firstElement) {
            e.preventDefault();
            lastElement.focus();
          }
        } else {
          if (document.activeElement === lastElement) {
            e.preventDefault();
            firstElement.focus();
          }
        }
      }
    });
  }

  // ----------------- 6. Copy Email to Clipboard -----------------
  const emailAddress = '34supavadeejunyakul@gmail.com';

  const showToast = (message) => {
    if (!toastNotice) return;
    toastNotice.querySelector('.toast-text').textContent = message;
    toastNotice.classList.add('show');
    setTimeout(() => {
      toastNotice.classList.remove('show');
    }, 3500);
  };

  copyEmailBtns.forEach((btn) => {
    btn.addEventListener('click', async (e) => {
      e.preventDefault();
      try {
        if (navigator.clipboard && window.isSecureContext) {
          await navigator.clipboard.writeText(emailAddress);
        } else {
          // Fallback for older or non-https environments
          const textArea = document.createElement('textarea');
          textArea.value = emailAddress;
          textArea.style.position = 'fixed';
          textArea.style.left = '-999999px';
          textArea.style.top = '-999999px';
          document.body.appendChild(textArea);
          textArea.focus();
          textArea.select();
          document.execCommand('copy');
          textArea.remove();
        }
        showToast('Email address copied to clipboard!');
        btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Copied!`;
        setTimeout(() => {
          btn.innerHTML = `<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> Copy Email`;
        }, 2000);
      } catch (err) {
        showToast('Could not copy automatically. Email: ' + emailAddress);
      }
    });
  });

  // Utility helper
  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }
});
