<?php
/**
 * Ambroise Events & Exhibitions - Header Template
 *
 * @package AmbroiseEvents
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

  <!-- Header -->
  <header class="ambroise-header">
    <div class="container header-row">
      <div class="ambroise-brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="ambroise-logo">
            AMBROISE<span>.IN</span>
          </div>
          <div class="ambroise-tagline">Events &amp; Exhibitions Pvt. Ltd.</div>
        </a>
      </div>

      <nav class="ambroise-nav">
        <a href="#about" class="active">Heritage</a>
        <a href="#craft">Craftsmanship</a>
        <a href="#portfolio">Masterpieces</a>
        <a href="#consultation">Request Proposal</a>
        <a href="#contact">Contact</a>
      </nav>

      <div style="display: flex; align-items: center; gap: 14px;">
        <a href="#consultation" class="gold-btn">Private Consultation</a>
        <button class="ambroise-burger" aria-label="Toggle Navigation">☰</button>
      </div>
    </div>
  </header>
