<?php
/**
 * Ambroise Worldwide - Main Template File
 *
 * @package AmbroiseWorldwide
 */

get_header(); ?>

  <!-- Hero Section -->
  <section class="ino-hero" id="about">
    <div class="container">
      <div class="hero-layout">
        <div>
          <div class="hero-pill">25+ Years of Engineering Precision</div>
          <h1>WORLDWIDE EXHIBIT SOLUTIONS <span>UNDER ONE ROOF</span></h1>
          <p>
            Ambroise empowers Fortune 500 leaders and ambitious brands across 45+ countries. We engineer custom exhibition stands, sustainable modular booths, and proprietary display systems that maximize trade show ROI.
          </p>

          <div class="hero-btn-group">
            <button class="btn-coral ino-download-btn">Request International Proposal</button>
            <a href="#systems" class="btn-primary-blue" style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.3);">Explore Systems</a>
          </div>

          <div class="hero-stats-row">
            <div class="hstat">
              <b>25+</b>
              <span>Years Experience</span>
            </div>
            <div class="hstat">
              <b>4,500+</b>
              <span>Projects Delivered</span>
            </div>
            <div class="hstat">
              <b>45+</b>
              <span>Countries Covered</span>
            </div>
            <div class="hstat">
              <b>WYSIWYG</b>
              <span>3D Precision Build</span>
            </div>
          </div>
        </div>

        <div class="hero-graphic">
          <div class="hero-graphic-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Ambroise Global Exhibition Stand">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Proprietary Display Systems (Tabs) -->
  <section class="systems-section" id="systems">
    <div class="container">
      <div class="sec-head-center">
        <span class="sec-tag">Proprietary Engineering</span>
        <h2>MODULAR HARDWARE &amp; DISPLAY SYSTEMS</h2>
        <p style="color: var(--text-muted); max-width: 650px; margin: 0 auto;">
          Designed and manufactured in-house. Reusable, tool-less, lightweight exhibition hardware that slashes shipping weight and assembly labor.
        </p>
      </div>

      <div class="system-tabs-nav">
        <button class="system-tab-btn active" data-system="fabrix">Fabrix™ Lightbox</button>
        <button class="system-tab-btn" data-system="magnafix">Magnafix™ Popup</button>
        <button class="system-tab-btn" data-system="inofix">Inofix™ Matrix</button>
        <button class="system-tab-btn" data-system="maxefx">Maxefx™ Rollups</button>
      </div>

      <div class="system-detail-box">
        <div class="system-detail-text">
          <span class="system-badge" id="sysBadge">PATENTED TENSION FABRIC SYSTEM</span>
          <h3 id="sysTitle">Fabrix™ Mobile Lightbox</h3>
          <p id="sysDesc" style="color: var(--text-muted); font-size: 15px; margin-bottom: 20px; line-height: 1.7;">
            Tool-free illuminated SEG fabric display system engineered with uniform edge-lit LEDs. Lightweight aluminum profiles pack effortlessly into compact wheeled travel flight cases.
          </p>

          <ul class="system-specs-list" id="sysSpecs">
            <li>
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
              <span>50mm &amp; 100mm double-sided depth options</span>
            </li>
            <li>
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
              <span>Tool-less latch assembly in under 15 minutes</span>
            </li>
            <li>
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
              <span>Vibrant dye-sublimation silicone edge graphics</span>
            </li>
            <li>
              <svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
              <span>CE &amp; UL certified LED electrical drivers</span>
            </li>
          </ul>

          <div style="margin-top: 24px;">
            <button class="btn-primary-blue ino-download-btn">Request Technical Data Sheet</button>
          </div>
        </div>

        <div class="system-img-wrap">
          <img id="sysImg" src="<?php echo get_template_directory_uri(); ?>/images/fabrix.jpg" alt="Fabrix System">
        </div>
      </div>
    </div>
  </section>

  <!-- Sustainability Impact Section -->
  <section class="sustain-section" id="sustainability">
    <div class="container">
      <div class="sustain-box">
        <div>
          <span style="color: var(--cyan-accent); font-weight: 800; font-size: 13px; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 8px;">
            ECO-ENGINEERING INITIATIVE
          </span>
          <h2 style="font-family: var(--font-brand); font-size: 38px; line-height: 1.15; margin-bottom: 16px;">
            SUSTAINABLE BOOTHS THAT REDUCE CARBON FOOTPRINTS
          </h2>
          <p style="color: #c0cee0; font-size: 15.5px; line-height: 1.7; margin-bottom: 24px;">
            Traditional timber booths generate tons of non-recyclable landfill waste after a 3-day exhibition. Ambroise' aluminum modular architectures are 100% reusable, cutting material waste by up to 80% and freight emissions by 65%.
          </p>
          <button class="btn-coral ino-download-btn">Download Sustainability Whitepaper</button>
        </div>

        <div class="sustain-stat-card">
          <div class="sustain-big-num">80%</div>
          <div style="font-size: 16px; font-weight: 700; color: #fff; margin-bottom: 8px;">Material Waste Reduction</div>
          <p style="font-size: 13px; color: #a4b4cc;">
            Compared to single-use carpentry build. Recyclable aluminum profiles and eco-solvent dyed SEG fabrics.
          </p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
