<?php
/**
 * Ambroise Worldwide - Header Template
 *
 * @package AmbroiseWorldwide
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

  <!-- Top Strip -->
  <div class="top-strip">
    <div class="container top-strip-flex">
      <div>
        <span>Global Exhibit Strategy, Modular Engineering &amp; On-Site Build</span>
      </div>
      <div style="display: flex; gap: 20px;">
        <span>Operations in 45+ Countries</span>
        <a href="tel:+912267891234" style="color: #fff;">📞 022 - 65 274 274</a>
        <a href="mailto:info@ambroise.com" style="color: #fff;">✉️ info@ambroise.com</a>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header class="ambroise-header">
    <div class="container header-flex">
      <div class="brand-ambroise">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="ambroise-logo">
            AMBROISE<span>.</span>
          </div>
          <div class="ambroise-tagline">Exhibitions & Events</div>
        </a>
      </div>

      <nav class="ino-nav">
        <a href="#about" class="active">About</a>
        <a href="#systems">Display Systems</a>
        <a href="#services">Services</a>
        <a href="#global">Worldwide Reach</a>
        <a href="#sustainability">Sustainability</a>
        <a href="#contact">Contact</a>
      </nav>

      <div style="display: flex; align-items: center; gap: 14px;">
        <button class="btn-coral ino-download-btn">Download Catalog</button>
        <button class="mobile-menu-btn" aria-label="Toggle Navigation">☰</button>
      </div>
    </div>
  </header>
