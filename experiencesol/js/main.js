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

  // RFQ Buttons scroll to Hero Lead Form
  const rfqButtons = document.querySelectorAll('.sol-rfq-btn');
  rfqButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const heroForm = document.getElementById('heroForm');
      if (heroForm) {
        heroForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
        const nameInput = heroForm.querySelector('input[name="name"]');
        if (nameInput) setTimeout(() => nameInput.focus(), 400);
      }
    });
  });
});

function handleHeroFormSubmit(event, brandName) {
  event.preventDefault();
  const form = event.target;
  const card = form.closest('.hero-lead-card');
  const nameInput = form.querySelector('input[name="name"]');
  const name = nameInput && nameInput.value.trim() ? nameInput.value.trim() : 'Valued Client';
  const successBox = card.querySelector('.hero-form-success');
  const refSpan = card.querySelector('.lead-ref-id');
  const nameSpan = card.querySelector('.user-submitted-name');

  const randomId = 'SOL-' + Math.floor(1000 + Math.random() * 9000);
  if (refSpan) refSpan.textContent = randomId;
  if (nameSpan) nameSpan.textContent = name;

  form.style.display = 'none';
  if (successBox) successBox.style.display = 'block';
}
