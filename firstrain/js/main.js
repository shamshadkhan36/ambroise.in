// Ambroise - Interactive Scripts

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const toggleBtn = document.querySelector('.mobile-toggle-btn');
  const rainNav = document.querySelector('.rain-nav');
  if (toggleBtn && rainNav) {
    toggleBtn.addEventListener('click', () => {
      const isVisible = rainNav.style.display === 'flex';
      rainNav.style.display = isVisible ? 'none' : 'flex';
      rainNav.style.flexDirection = 'column';
      rainNav.style.position = 'absolute';
      rainNav.style.top = '100%';
      rainNav.style.left = '0';
      rainNav.style.width = '100%';
      rainNav.style.background = '#0a0a0a';
      rainNav.style.padding = '24px';
      rainNav.style.borderBottom = '1px solid #282828';
    });
  }

  // Render vs Reality Interactive Switcher
  const toggleViewBtn = document.getElementById('toggleViewBtn');
  const showcaseImg = document.getElementById('showcaseImg');
  const viewBadge = document.getElementById('viewBadge');

  const views = [
    {
      badge: '3D PHOTOREALISTIC CONCEPT RENDER',
      src: 'images/render.jpg',
      caption: 'Client Approved 3D Architectural Model'
    },
    {
      badge: 'LIVE ON-SITE PHOTOGRAPHY (REALITY)',
      src: 'images/reality.jpg',
      caption: '100% Identical Physical Handover at Pragati Maidan'
    }
  ];

  let currentViewIdx = 0;

  if (toggleViewBtn && showcaseImg && viewBadge) {
    toggleViewBtn.addEventListener('click', () => {
      currentViewIdx = (currentViewIdx + 1) % views.length;
      showcaseImg.src = views[currentViewIdx].src;
      viewBadge.textContent = views[currentViewIdx].badge;
      toggleViewBtn.textContent = currentViewIdx === 0 ? 'Switch to Live Photo ➔' : 'Switch to 3D Render ➔';
    });
  }

  // Stand Brief Form
  const briefForm = document.getElementById('briefForm');
  if (briefForm) {
    briefForm.addEventListener('submit', (e) => {
      e.preventDefault();
      alert('⚡ Brief Transmitted! A Ambroise senior spatial design architect will review your stall specifications and reply within 4 hours.');
      briefForm.reset();
    });
  }
});
