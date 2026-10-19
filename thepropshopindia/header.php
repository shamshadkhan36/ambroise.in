<?php
/**
 * Ambroise India - Header Template
 *
 * @package AmbroiseIndia
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Announcement Bar -->
  <div class="top-notice">
    <div class="container top-notice-inner">
      <div class="nse-badge">
        <span>★ AMBROISE • IIM-CALCUTTA ALUMNUS VENTURE</span>
      </div>
      <div class="top-contact">
        <span>Global Delivery Across 60+ Countries</span>
        <a href="tel:+919820012345">📞 022 - 65 274 274</a>
        <a href="mailto:info@ambroise.in.com">✉️ info@ambroise.in.com</a>
      </div>
    </div>
  </div>

  <!-- Main Site Header -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        AMBROISE <span class="logo-badge">INDIA</span>
      </a>

      <nav class="main-nav">
        <a href="#about" class="nav-link active">About</a>
        <a href="#services" class="nav-link">Services</a>
        <a href="#calculator" class="nav-link">Cost Estimator</a>
        <a href="#portfolio" class="nav-link">Portfolio</a>
        <a href="#global" class="nav-link">Global Reach</a>
        <a href="#contact" class="nav-link">Contact</a>
      </nav>

      <div class="header-actions">
        <button class="btn btn-red open-modal">Request 3D Concept</button>
        <button class="mobile-toggle" aria-label="Toggle menu">☰</button>
      </div>
    </div>
  </header>
