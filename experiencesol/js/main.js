// Ambroise - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const mobileBtn = document.querySelector('.mobile-nav-btn');
  const navLinks = document.querySelector('.nav-links');
  if (mobileBtn && navLinks) {
    mobileBtn.addEventListener('click', () => {
      const isVisible = navLinks.style.display === 'flex';
      navLinks.style.display = isVisible ? 'none' : 'flex';
      navLinks.style.flexDirection = 'column';
      navLinks.style.position = 'absolute';
      navLinks.style.top = '100%';
      navLinks.style.left = '0';
      navLinks.style.width = '100%';
      navLinks.style.background = '#ffffff';
      navLinks.style.padding = '20px';
      navLinks.style.boxShadow = '0 12px 24px rgba(0,0,0,0.1)';
      navLinks.style.borderBottom = '1px solid #e4e7ea';
    });
  }

  // Interactive Configurator
  const chipsFormat = document.querySelectorAll('.chip[data-format-price]');
  const chipsSize = document.querySelectorAll('.chip[data-size-sqm]');
  const summaryVal = document.getElementById('configTotal');
  const summaryDesc = document.getElementById('configDetails');

  let baseRate = 9500; // per sqm
  let sqm = 36;
  let currentFormat = 'Custom Bespoke';

  chipsFormat.forEach(chip => {
    chip.addEventListener('click', () => {
      chipsFormat.forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      baseRate = parseInt(chip.getAttribute('data-format-price'), 10);
      currentFormat = chip.textContent;
      calcConfig();
    });
  });

  chipsSize.forEach(chip => {
    chip.addEventListener('click', () => {
      chipsSize.forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      sqm = parseInt(chip.getAttribute('data-size-sqm'), 10);
      calcConfig();
    });
  });

  function calcConfig() {
    if (!summaryVal) return;
    const total = baseRate * sqm;
    const inLakhs = (total / 100000).toFixed(2);
    summaryVal.textContent = `₹${inLakhs} Lakhs*`;
    if (summaryDesc) {
      summaryDesc.textContent = `${currentFormat} • ${sqm} sq.m All-Inclusive (Design + Fabrication + Turnkey On-Site Handover)`;
    }
  }

  // FAQ Accordion
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');
      faqItems.forEach(f => f.classList.remove('active'));
      if (!isOpen) {
        item.classList.add('active');
      }
    });
  });

  // RFQ Submission
  const rfqButtons = document.querySelectorAll('.sol-rfq-btn');
  rfqButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const email = prompt('Enter your corporate email address to receive the full itemized 3D proposal:');
      if (email) {
        alert(`Success! We have generated an inquiry ticket for ${email}. Our Mumbai project architect will contact you shortly.`);
      }
    });
  });
});
