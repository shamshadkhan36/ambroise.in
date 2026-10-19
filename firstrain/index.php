<?php
/**
 * Ambroise - Main Template File
 *
 * @package Ambroise3D
 */

get_header(); ?>

  <!-- Hero Section -->
  <section class="rain-hero" id="about">
    <div class="container">
      <div>
        <div class="elevate-badge">✦ ELEVATE YOUR TRADE SHOW PRESENCE</div>
      </div>

      <h1 class="hero-main-title">
        DISRUPTIVE SPATIAL ARCHITECTURE<br>FOR GLOBAL TRADE EXHIBITS
      </h1>

      <p class="hero-sub-serif">
        "Where architectural precision meets sensory brand experience."
      </p>

      <p class="hero-body-text">
        Ambroise conceptualizes and builds world-class trade show booths across India’s premier exhibition centers. From Mumbai &amp; New Delhi to Europe &amp; the Americas, we turn square footage into memorable customer conversions.
      </p>

      <div class="hero-actions-row">
        <a href="#brief" class="neon-btn">Commission Your Stall</a>
        <a href="#showcase" class="ghost-btn">Explore Live Projects</a>
      </div>
    </div>
  </section>

  <!-- Neon Marquee Ticker -->
  <section class="neon-marquee-section">
    <div class="marquee-flex">
      <span>BESPOKE EXHIBITION BOOTHS</span>
      <span>DOUBLE DECKER MEZZANINES</span>
      <span>IMMERSIVE DIGITAL STALLS</span>
      <span>100% TIMELY HANDOVER</span>
      <span>PAN-INDIA FABRICATION HUBS</span>
      <span>GLOBAL OVERSEAS SUPPORT</span>
    </div>
  </section>

  <!-- Interactive Render vs Reality Section -->
  <section class="render-section" id="showcase">
    <div class="container">
      <div class="section-head-dark">
        <span class="section-tag">Zero Variation Philosophy</span>
        <h2>WHAT WE RENDER IS <em>WHAT WE FABRICATE</em></h2>
        <p style="color: #888; max-width: 650px;">
          Too many agencies promise 3D wonders and deliver disappointing compromises. At Ambroise, our advanced engineering workflow guarantees millimeter precision from 3D model to trade floor.
        </p>
      </div>

      <div class="render-showcase-box">
        <img id="showcaseImg" class="render-img-layer" src="<?php echo get_template_directory_uri(); ?>/images/render.jpg" alt="Ambroise Exhibition Stand">
        <div class="render-overlay-badge" id="viewBadge">3D PHOTOREALISTIC CONCEPT RENDER</div>
        <div class="render-bottom-panel">
          <div>
            <h3 style="font-family: var(--font-bebas); font-size: 28px; color: #fff; margin-bottom: 4px;">Gaggenau Luxury Pavilion • 180 sq.m</h3>
            <span style="font-size: 13px; color: #bbb;">Pragati Maidan Hall 5 • Multi-Level Kinetic Exhibit</span>
          </div>
          <button id="toggleViewBtn" class="neon-btn" style="padding: 10px 20px; font-size: 13px;">
            Switch to Live Photo ➔
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Capabilities Section -->
  <section class="capabilities-section" id="capabilities">
    <div class="container">
      <div class="section-head-dark">
        <span class="section-tag">Our Core Disciplines</span>
        <h2>END-TO-END EXHIBITION INFRASTRUCTURE</h2>
      </div>

      <div class="cap-grid">
        <div class="cap-card">
          <div class="cap-num">01</div>
          <h3>Custom 3D Spatial Design</h3>
          <p>Cutting-edge architectural conceptualization with VR walk-throughs, lighting simulation, and structural load calculations.</p>
        </div>

        <div class="cap-card">
          <div class="cap-num">02</div>
          <h3>CNC &amp; Automated Fabrication</h3>
          <p>In-house computerized routing, laser steel cutting, PU paint booths, and specialized acrylic joinery workshops.</p>
        </div>

        <div class="cap-card">
          <div class="cap-num">03</div>
          <h3>Multi-Deck Structures</h3>
          <p>German-certified steel double decker scaffolding with verified structural stability certificates and VIP private salons.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Brief Submission -->
  <section class="brief-section" id="brief">
    <div class="container">
      <div class="brief-box">
        <div style="text-align: center; margin-bottom: 30px;">
          <span class="section-tag">Initiate Project</span>
          <h2 style="font-family: var(--font-bebas); font-size: 44px; color: #fff; line-height: 1;">
            SUBMIT YOUR EXHIBITION BRIEF
          </h2>
          <p style="font-size: 14px; color: #888;">
            Fill in your trade show specifications to receive our custom 3D concept deck within 48 business hours.
          </p>
        </div>

        <form id="briefForm">
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 16px;">
            <div>
              <label style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #aaa;">Full Name</label>
              <input type="text" required placeholder="Alex Verma" class="brief-input">
            </div>
            <div>
              <label style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #aaa;">Company Email</label>
              <input type="email" required placeholder="alex@innovations.com" class="brief-input">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px; margin-bottom: 16px;">
            <div>
              <label style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #aaa;">Trade Show &amp; City</label>
              <input type="text" required placeholder="e.g. ELECRAMA 2026, Greater Noida" class="brief-input">
            </div>
            <div>
              <label style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #aaa;">Stall Dimensions / Area</label>
              <input type="text" required placeholder="e.g. 54 sq.m (9m x 6m Island)" class="brief-input">
            </div>
          </div>

          <button type="submit" class="neon-btn" style="width: 100%; padding: 16px;">Transmit Brief to Ambroise Architects</button>
        </form>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
