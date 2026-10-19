<?php
/**
 * Ambroise Events & Exhibitions - Main Template File
 *
 * @package AmbroiseEvents
 */

get_header(); ?>

  <!-- Hero Section -->
  <section class="ambroise-hero" id="about">
    <div class="container">
      <div>
        <div class="heritage-pill">✦ TWO DECADES OF TRADE SHOW EXCELLENCE • EST. 2004</div>
      </div>

      <h1 class="hero-gold-title">
        CONCEPTUALIZE. CONSTRUCT.<br><span>CAPTIVATE THE WORLD.</span>
      </h1>

      <p class="hero-intro">
        Based in Navi Mumbai, Ambroise Events &amp; Exhibitions transforms corporate brand narratives into breathtaking architectural realities. From bespoke high-end booths to sprawling national pavilions, we orchestrate turnkey spatial perfection across major trade fairs in India and abroad.
      </p>

      <div class="hero-cta-wrap">
        <a href="#consultation" class="gold-btn">Commission An Exhibition Stall</a>
        <a href="#portfolio" class="gold-outline-btn">Explore Iconic Builds</a>
      </div>
    </div>
  </section>

  <!-- Heritage Numbers Bar -->
  <section class="heritage-bar">
    <div class="container">
      <div class="heritage-grid">
        <div class="heritage-item">
          <div class="heritage-num">20+</div>
          <div class="heritage-lbl">Years of Proven Expertise</div>
        </div>
        <div class="heritage-item">
          <div class="heritage-num">1,000+</div>
          <div class="heritage-lbl">Stalls Handed Over</div>
        </div>
        <div class="heritage-item">
          <div class="heritage-num">250+</div>
          <div class="heritage-lbl">Retained Global Clients</div>
        </div>
        <div class="heritage-item">
          <div class="heritage-num">99.8%</div>
          <div class="heritage-lbl">Client Satisfaction Rating</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Craftsmanship / Capabilities -->
  <section class="craft-section" id="craft">
    <div class="container">
      <div class="sec-title-area">
        <span class="sec-gold-tag">Turnkey Verticals</span>
        <h2>PRECISION WORKMANSHIP ACROSS EVERY DETAIL</h2>
      </div>

      <div class="craft-grid">
        <div class="craft-card">
          <div class="craft-card-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/craft-bespoke.jpg" alt="Custom Exhibition Stall Design">
          </div>
          <div class="craft-card-body">
            <h3>Bespoke Exhibition Stalls</h3>
            <p>Every line, contour, and light well is custom engineered to reflect corporate prestige, creating awe-inspiring landmarks on crowded trade floors.</p>
          </div>
        </div>

        <div class="craft-card">
          <div class="craft-card-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/craft-pavilion.jpg" alt="Corporate Pavilions">
          </div>
          <div class="craft-card-body">
            <h3>Corporate &amp; State Pavilions</h3>
            <p>Grand architectural pavilions built to host dignitaries, VIP delegates, bilateral business meetings, and multi-exhibitor industry clusters.</p>
          </div>
        </div>

        <div class="craft-card">
          <div class="craft-card-thumb">
            <img src="<?php echo get_template_directory_uri(); ?>/images/craft-activation.jpg" alt="Experiential Retail & Brand Activations">
          </div>
          <div class="craft-card-body">
            <h3>Experiential Brand Activations</h3>
            <p>From high-profile product launches to retail flagship pop-ups, we engineer spaces that engage human senses and generate unforgettable impressions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Consultation Booking Section -->
  <section class="booking-section" id="consultation">
    <div class="container">
      <div class="booking-card">
        <div style="text-align: center; margin-bottom: 30px;">
          <span class="sec-gold-tag">Bespoke Design Brief</span>
          <h2 style="font-family: var(--font-serif); font-size: 36px; color: #fff; margin-bottom: 8px;">
            REQUEST A CONFIDENTIAL PROPOSAL
          </h2>
          <p style="font-size: 14px; color: var(--text-muted);">
            Share your upcoming trade show schedule with our Navi Mumbai senior project directors.
          </p>
        </div>

        <form id="ambroiseForm">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
            <div>
              <label style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: var(--gold-light);">Your Name</label>
              <input type="text" required placeholder="Siddharth Mehta" class="ambroise-input">
            </div>
            <div>
              <label style="font-size: 12px; font-weight: 600; text-transform: uppercase; color: var(--gold-light);">Corporate Email</label>
              <input type="email" required placeholder="siddharth@conglomerate.com" class="ambroise-input">
            </div>
          </div>

          <button type="submit" class="gold-btn" style="width: 100%; padding: 16px;">Submit Brief For 3D Conceptualization</button>
        </form>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
