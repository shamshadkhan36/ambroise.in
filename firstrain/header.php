<?php
/**
 * Ambroise - Header Template
 *
 * @package Ambroise3D
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

  <!-- Site Header -->
  <header class="rain-header">
    <div class="container header-inner">
      <div class="brand-rain">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rain-logo-title">
          AMBROISE<span>3D</span>
        </a>
      </div>

      <nav class="rain-nav">
        <a href="#about" class="active">Overview</a>
        <a href="#showcase">Render Vs Reality</a>
        <a href="#capabilities">Capabilities</a>
        <a href="#locations">Strategic Hubs</a>
        <a href="#brief">Submit Brief</a>
      </nav>

      <div style="display: flex; align-items: center; gap: 14px;">
        <a href="#brief" class="neon-btn">Design Consultation</a>
        <button class="mobile-toggle-btn" aria-label="Toggle navigation">☰</button>
      </div>
    </div>
  </header>
