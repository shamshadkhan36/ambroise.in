<?php
/**
 * Ambroise India - Footer Template
 *
 * @package AmbroiseIndia
 */
?>
  <!-- Site Footer -->
  <footer class="site-footer" id="contact">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="logo" style="color: #fff; margin-bottom: 16px;">
            AMBROISE <span class="logo-badge">INDIA</span>
          </div>
          <p style="font-size: 14px; line-height: 1.7; margin-bottom: 20px;">
            India's only NSE-listed pure-play exhibition company. End-to-end exhibition stalls, built in-house and delivered on time across 60+ countries worldwide.
          </p>
          <div style="font-size: 13px; color: #888;">
            Founder: <strong>Bibhash Biswas</strong> (ISM Dhanbad, IIM Calcutta)
          </div>
        </div>

        <div class="footer-col">
          <h4>Exhibition Stalls</h4>
          <ul class="footer-links">
            <li><a href="#services">Custom Stalls</a></li>
            <li><a href="#services">Double Decker Stands</a></li>
            <li><a href="#services">Modular Green Booths</a></li>
            <li><a href="#services">Country Pavilions</a></li>
            <li><a href="#calculator">Stall Cost Estimator</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Trade Hubs</h4>
          <ul class="footer-links">
            <li><a href="#global">Mumbai (BEC / Jio World)</a></li>
            <li><a href="#global">Delhi (IICC Yashobhoomi)</a></li>
            <li><a href="#global">Bangalore (BIEC)</a></li>
            <li><a href="#global">Dubai World Trade Centre</a></li>
            <li><a href="#global">Messe Frankfurt, Germany</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Get in Touch</h4>
          <p style="font-size: 14px; margin-bottom: 12px;">Corporate Headquarters:<br>Office #22, Anita Vihar, Akurli Road, Lokhandwala Township, Kandivali (E), Mumbai - 400101</p>
          <p style="font-size: 14px; margin-bottom: 6px;">📞 022 - 65 274 274</p>
          <p style="font-size: 14px; margin-bottom: 16px;">✉️ projects@ambroise.in.com</p>
          <button class="btn btn-red open-modal">Book Briefing Call</button>
        </div>
      </div>

      <div class="footer-bottom">
        <div>&copy; <?php echo date( 'Y' ); ?> Ambroise (Formerly 3 Arrows). All Rights Reserved.</div>
        <div style="color: #777;">Powered by WordPress • Ambroise Theme</div>
      </div>
    </div>
  </footer>

  <!-- Modal for Requesting 3D Proposal -->
  <div class="modal-overlay" id="quoteModal">
    <div class="modal-content">
      <button class="modal-close">&times;</button>
      <div class="section-label">Get Free 3D Proposal</div>
      <h3 style="font-family: var(--font-heading); font-size: 26px; text-transform: uppercase; margin-bottom: 16px; color: var(--ink);">
        REQUEST EXHIBITION BOOTH BRIEF
      </h3>
      <form id="quoteForm">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 14px;">
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Your Name *</label>
            <input type="text" required placeholder="John Doe" style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Work Email *</label>
            <input type="email" required placeholder="john@company.com" style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 14px;">
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Phone / WhatsApp *</label>
            <input type="tel" required placeholder="+91 98000 00000" style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Exhibition Name *</label>
            <input type="text" required placeholder="e.g. Auto Expo 2026" style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 14px;">
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Stall Size (sq.m)</label>
            <input type="text" placeholder="e.g. 36 sq.m" style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Estimated Budget</label>
            <select style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px;">
              <option>₹2 Lakhs - ₹5 Lakhs</option>
              <option>₹5 Lakhs - ₹10 Lakhs</option>
              <option>₹10 Lakhs - ₹25 Lakhs</option>
              <option>₹25 Lakhs+</option>
            </select>
          </div>
        </div>

        <div style="margin-bottom: 20px;">
          <label style="display: block; font-size: 12px; font-weight: 600; text-transform: uppercase; margin-bottom: 4px;">Project Details / Brief</label>
          <textarea rows="3" placeholder="Tell us about your brand goals, open sides, mezzanine requirements..." style="width: 100%; padding: 10px 14px; border: 1px solid #ccc; border-radius: 4px; resize: vertical;"></textarea>
        </div>

        <button type="submit" class="btn btn-red" style="width: 100%;">Submit Brief &amp; Get 3D Render</button>
      </form>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
