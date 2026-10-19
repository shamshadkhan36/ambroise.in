// Ambroise India - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (mobileToggle && mainNav) {
    mobileToggle.addEventListener('click', () => {
      if (mainNav.style.display === 'flex') {
        mainNav.style.display = 'none';
      } else {
        mainNav.style.display = 'flex';
        mainNav.style.flexDirection = 'column';
        mainNav.style.position = 'absolute';
        mainNav.style.top = '100%';
        mainNav.style.left = '0';
        mainNav.style.width = '100%';
        mainNav.style.background = '#ffffff';
        mainNav.style.padding = '20px';
        mainNav.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
      }
    });
  }

  // Interactive Stall Cost Estimator
  const areaRange = document.getElementById('areaRange');
  const areaValue = document.getElementById('areaValue');
  const estPrice = document.getElementById('estPrice');
  const stallTypePills = document.querySelectorAll('.calc-pill[data-rate]');
  let currentRate = 8500; // default Custom Stall rate per sqm

  if (stallTypePills.length > 0) {
    stallTypePills.forEach(pill => {
      pill.addEventListener('click', () => {
        stallTypePills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
        currentRate = parseInt(pill.getAttribute('data-rate'), 10);
        updateEstimate();
      });
    });
  }

  if (areaRange && areaValue && estPrice) {
    areaRange.addEventListener('input', () => {
      areaValue.textContent = `${areaRange.value} sq.m`;
      updateEstimate();
    });
  }

  function updateEstimate() {
    if (!areaRange || !estPrice) return;
    const area = parseInt(areaRange.value, 10);
    const total = area * currentRate;
    const lakhs = (total / 100000).toFixed(2);
    estPrice.textContent = `₹${lakhs} Lakhs*`;
  }

  // Portfolio Category Filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const portfolioItems = document.querySelectorAll('.portfolio-card');

  if (filterButtons.length > 0 && portfolioItems.length > 0) {
    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const filter = btn.getAttribute('data-filter');

        portfolioItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }

  // Modal Handlers
  const modalOverlay = document.getElementById('quoteModal');
  const openModalBtns = document.querySelectorAll('.open-modal');
  const closeModalBtn = document.querySelector('.modal-close');

  openModalBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      if (modalOverlay) modalOverlay.classList.add('active');
    });
  });

  if (closeModalBtn && modalOverlay) {
    closeModalBtn.addEventListener('click', () => {
      modalOverlay.classList.remove('active');
    });

    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('active');
      }
    });
  }

  // Form Submit Handler
  const quoteForm = document.getElementById('quoteForm');
  if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Thank you! Your exhibition design request has been received. Our team will contact you within 2 business hours with a custom 3D proposal.');
      if (modalOverlay) modalOverlay.classList.remove('active');
      quoteForm.reset();
    });
  }
});
