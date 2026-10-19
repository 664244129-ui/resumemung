<?php
/**
 * Header & Navigation Component
 * Munggorn Noinarai — Personal Resume & Portfolio Website
 */
$resumePdfPath = 'C:\xampp\htdocs\664244103_Resume_Website\assets\images';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Munggorn Noinarai | Software &amp; IoT Portfolio</title>
  <meta name="description" content="Explore Munggorn Noinarai's portfolio, featuring software development, IoT, embedded systems, AI-assisted applications, and engineering experience.">
  <meta name="keywords" content="Munggorn Noinarai, Portfolio, Resume, Computer Science, Software Engineering, IoT, ESP32, Automation, AI, YOLOv8">
  <meta name="author" content="Munggorn Noinarai">

  <!-- Open Graph / Social Meta -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="Munggorn Noinarai | Software &amp; IoT Portfolio">
  <meta property="og:description" content="Fourth-year Computer Science student with an Electronics background seeking a 4-month internship in Software Engineering for Automation or IoT Development.">
  <meta property="og:image" content="assets/images/854994118_1590001143146895_8867058332921292428_n.jpg">

  <!-- SVG Favicon with MN Monogram -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%232F6B3F'/%3E%3Ctext x='50%25' y='55%25' font-family='Arial, sans-serif' font-weight='800' font-size='16' fill='%23F7C85C' dominant-baseline='middle' text-anchor='middle'%3EMN%3C/text%3E%3C/svg%3E">

  <!-- Typography: Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&family=Noto+Sans+Thai:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS Design System -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <!-- Sticky Navigation Bar -->
  <header class="navbar" id="navbar">
    <div class="container nav-container">
      <!-- Brand Logo -->
      <a href="#home" class="nav-logo" aria-label="Munggorn Noinarai Home">
        <span class="nav-logo-badge">MN</span>
        <span>MUNGGORN</span>
      </a>

      <!-- Desktop & Mobile Navigation Links -->
      <nav class="nav-menu-wrapper" id="navMenuWrapper" aria-label="Main Navigation">
        <ul class="nav-links">
          <li><a href="#home" class="nav-link active">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#education" class="nav-link">Education</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="#projects" class="nav-link">Projects</a></li>
          <li><a href="#experience" class="nav-link">Experience</a></li>
          <li><a href="#achievements" class="nav-link">Achievements</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <!-- Hamburger Button (Mobile) -->
      <button class="nav-hamburger" id="navHamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navMenuWrapper">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
  <main id="mainContent">