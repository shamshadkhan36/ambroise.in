<?php
/**
 * AMBROISE Exhibitions & Events - Header Template
 *
 * @package ExperienceAMBROISE
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

  <!-- Top Utility Bar -->
  <div class="sol-topbar">
    <div class="container topbar-flex">
      <div class="region-switcher">
        <span>Region:</span>
        <a href="#" class="active">India (IN)</a>
        <a href="#">UAE / Dubai</a>
        <a href="#">Europe (EU)</a>
        <a href="#">USA</a>
      </div>
      <div class="tb-contacts">
        <span class="tb-item">📍 Workshops: Mumbai &amp; Delhi NCR</span>
        <a href="tel:+919833012345" class="tb-item">📞 022 - 65 274 274</a>
        <a href="https://wa.me/919833012345" class="tb-item tb-wa">💬 WhatsApp Architect</a>
      </div>
    </div>
  </div>

  <!-- Header Navigation -->
  <header class="sol-header">
    <div class="container header-inner">
      <div class="brand-sol">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="sol-logo-text">AMBROISE</div>
          <div class="sol-logo-tag">Exhibitions & Events</div>
        </a>
      </div>

      <nav class="nav-links">
        <a href="#about" class="active">Overview</a>
        <a href="#pricing">Pricing &amp; Tiers</a>
        <a href="#configurator">Cost Planner</a>
        <a href="#work">Portfolio</a>
        <a href="#coverage">Pan-India Hubs</a>
        <a href="#faq">FAQ</a>
      </nav>

      <div style="display: flex; align-items: center; gap: 12px;">
        <button class="sol-cta-btn sol-rfq-btn">Get Itemized Quote</button>
        <button class="mobile-nav-btn" aria-label="Toggle navigation">☰</button>
      </div>
    </div>
  </header>
