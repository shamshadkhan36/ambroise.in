// Ambroise Events & Exhibitions - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const burger = document.querySelector('.ambroise-burger');
  const nav = document.querySelector('.ambroise-nav');
  if (burger && nav) {
    burger.addEventListener('click', () => {
      const isVisible = nav.style.display === 'flex';
      nav.style.display = isVisible ? 'none' : 'flex';
      nav.style.flexDirection = 'column';
      nav.style.position = 'absolute';
      nav.style.top = '100%';
      nav.style.left = '0';
      nav.style.width = '100%';
      nav.style.background = '#0b132b';
      nav.style.padding = '24px';
      nav.style.borderBottom = '1px solid rgba(212,175,55,0.2)';
    });
  }

  // Consultation Form Handler
  const bookForm = document.getElementById('ambroiseForm');
  if (bookForm) {
    bookForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('✦ Thank you for your inquiry. A Ambroise Senior Exhibition Consultant from our Navi Mumbai office will contact you within 2 business hours.');
      bookForm.reset();
    });
  }
});
