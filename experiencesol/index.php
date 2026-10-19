<?php
/**
 * Ambroise Brand Solutions - Main Template File
 *
 * @package ExperienceAmbroise
 */

get_header(); ?>

  <!-- Hero Section -->
  <section class="sol-hero" id="about">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-text">
          <div class="eyebrow">Mumbai Workshop • In-House Fabrication Since 2014</div>
          <h1>EXHIBITION STANDS THAT <span>BUILD BRANDS</span></h1>
          <p class="lead">
            Turnkey trade show exhibits fabricated and installed by our own dedicated team. Transparent pricing, structural engineering approval, and zero surprise bills—all-inclusive packages starting from ₹1.8 Lakh.
          </p>

          <div class="hero-actions">
            <button class="sol-cta-btn sol-rfq-btn">Request 3D Pitch Deck</button>
            <a href="#pricing" class="btn-secondary">View Fixed Packages</a>
          </div>

          <div class="hero-trust-bar">
            <div class="tfact">
              <b>₹1.8 LAKH</b>
              <span>Starting All-Inclusive</span>
            </div>
            <div class="tsep"></div>
            <div class="tfact">
              <b>1,850+</b>
              <span>Stalls Delivered</span>
            </div>
            <div class="tsep"></div>
            <div class="tfact">
              <b>10+ YEARS</b>
              <span>Mumbai Engineering HQ</span>
            </div>
            <div class="tsep"></div>
            <div class="tfact">
              <b>4.9 ★</b>
              <span>Client Satisfaction</span>
            </div>
          </div>
        </div>

        <div class="hero-media">
          <div class="hero-panel-card">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg" alt="Ambroise Exhibition Stand Execution">
            <div class="panel-meta">
              <div>
                <h4>Pharma &amp; Healthcare Tech Stand</h4>
                <span style="color: #bbb; font-size: 0.8rem;">CPhI South Asia • 72 sq.m Island Booth</span>
              </div>
              <span>Turnkey Delivered</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Cities Coverage Bar -->
  <div class="cities-bar" id="coverage">
    <div class="container cities-flex">
      <span style="font-size: 0.82rem; font-weight: 800; text-transform: uppercase; color: var(--saffron-ink);">
        DIRECT ON-SITE CREWS IN:
      </span>
      <span class="city-pill">Mumbai (BEC / NESCO / Jio)</span>
      <span class="city-pill">Delhi NCR (Yashobhoomi / Pragati Maidan)</span>
      <span class="city-pill">Bangalore (BIEC)</span>
      <span class="city-pill">Hyderabad (HITEX)</span>
      <span class="city-pill">Chennai (CTC)</span>
      <span class="city-pill">Ahmedabad (Helipad Ground)</span>
    </div>
  </div>

  <!-- Pricing Tiers Section -->
  <section class="pricing-section" id="pricing">
    <div class="container">
      <div class="section-head">
        <div class="eyebrow" style="margin-bottom: 8px;">Transparent Pricing System</div>
        <h2>STAND PACKAGES WITH <em>ZERO HIDDEN CHARGES</em></h2>
        <p>
          Unlike conventional vendors with unpredictable add-on fees, Ambroise offers fixed-scope turnkey packages including design, fabrication, logistics, and on-site handover.
        </p>
      </div>

      <div class="tiers-grid">
        <div class="tier-card">
          <div class="tier-name">Essential Custom</div>
          <div class="tier-price">₹1.80 Lakh*</div>
          <div class="tier-for">Ideal for 9 to 18 sq.m corner or shell-upgrade stalls</div>
          <ul class="tier-features">
            <li><span>Custom timber/MDF fascia with 3D brand logo</span></li>
            <li><span>Wooden raised floor with carpet finish</span></li>
            <li><span>LED floodlights + reception counter</span></li>
            <li><span>Turnkey dismantle &amp; venue debris clearance</span></li>
          </ul>
          <button class="sol-cta-btn sol-rfq-btn" style="width: 100%;">Select Essential</button>
        </div>

        <div class="tier-card featured">
          <div class="tier-name">Impact Experience</div>
          <div class="tier-price">₹4.50 Lakh*</div>
          <div class="tier-for">Best for 36 to 54 sq.m 2-side open or peninsula stands</div>
          <ul class="tier-features">
            <li><span>Architectural ceiling canopy with backlit branding</span></li>
            <li><span>Semi-private VIP lounge with acoustic wall panels</span></li>
            <li><span>Integrated LED video wall or 65" interactive displays</span></li>
            <li><span>Dedicated on-site standby technician during show hours</span></li>
          </ul>
          <button class="sol-cta-btn sol-rfq-btn" style="width: 100%;">Select Impact</button>
        </div>

        <div class="tier-card">
          <div class="tier-name">Flagship Pavilion</div>
          <div class="tier-price">₹12.00 Lakh*</div>
          <div class="tier-for">For 72 to 200+ sq.m 4-side island or mezzanine stands</div>
          <ul class="tier-features">
            <li><span>Structural double-deck certified with safety sign-off</span></li>
            <li><span>Executive hospitality bar &amp; private boardroom</span></li>
            <li><span>Curved seamless high-resolution LED perimeter arches</span></li>
            <li><span>Full international show liaison &amp; organizer documentation</span></li>
          </ul>
          <button class="sol-cta-btn sol-rfq-btn" style="width: 100%;">Select Flagship</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Stand Configurator -->
  <section class="config-section" id="configurator">
    <div class="container">
      <div class="section-head">
        <div class="eyebrow" style="margin-bottom: 8px;">Real-Time Estimator</div>
        <h2>CUSTOMIZE YOUR <em>BOOTH SPECIFICATIONS</em></h2>
        <p>Pick your stall layout and size to see an instant turnkey quotation.</p>
      </div>

      <div class="config-box">
        <div>
          <div class="config-group">
            <div class="config-title">1. Execution Style</div>
            <div class="chips-row">
              <span class="chip active" data-format-price="9500">Custom Bespoke</span>
              <span class="chip" data-format-price="13500">Double Deck Mezzanine</span>
              <span class="chip" data-format-price="7200">Sustainable Modular</span>
              <span class="chip" data-format-price="11500">Experiential Tech Pod</span>
            </div>
          </div>

          <div class="config-group">
            <div class="config-title">2. Floor Space Allocation</div>
            <div class="chips-row">
              <span class="chip" data-size-sqm="18">18 sq.m</span>
              <span class="chip active" data-size-sqm="36">36 sq.m</span>
              <span class="chip" data-size-sqm="54">54 sq.m</span>
              <span class="chip" data-size-sqm="72">72 sq.m</span>
              <span class="chip" data-size-sqm="120">120 sq.m</span>
            </div>
          </div>
        </div>

        <div class="summary-card">
          <div class="summary-head">Projected Turnkey Cost</div>
          <div class="summary-val" id="configTotal">₹3.42 Lakhs*</div>
          <div style="font-size: 0.88rem; color: var(--muted); margin-bottom: 24px;" id="configDetails">
            Custom Bespoke • 36 sq.m All-Inclusive (Design + Fabrication + Turnkey On-Site Handover)
          </div>
          <button class="sol-cta-btn sol-rfq-btn">Get Itemized Breakdown (PDF)</button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="section-head">
        <div class="eyebrow" style="margin-bottom: 8px;">Clear Answers</div>
        <h2>FREQUENTLY ASKED <em>QUESTIONS</em></h2>
      </div>

      <div class="faq-list">
        <div class="faq-item active">
          <div class="faq-q">
            <span>What is included in the ₹1.8 Lakh all-inclusive price?</span>
            <span>▾</span>
          </div>
          <div class="faq-a">
            The package includes custom 3D design concept, workshop fabrication of wooden/paint structures, raised wooden floor with carpet, LED lighting fixtures, basic furniture (reception desk &amp; meeting table), electricity wiring, transport to venue, on-site installation, and post-show dismantling.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">
            <span>How fast can Ambroise provide a 3D booth design concept?</span>
            <span>▾</span>
          </div>
          <div class="faq-a">
            Our 3D design team delivers the first comprehensive 3D render proposal with multiple angle views within 48 to 72 hours of receiving your booth size and design brief.
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
