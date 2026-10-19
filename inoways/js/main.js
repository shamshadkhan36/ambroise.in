// Ambroise - Interactive Product & System Scripts

document.addEventListener('DOMContentLoaded', () => {
  // Mobile Nav Toggle
  const menuBtn = document.querySelector('.mobile-menu-btn');
  const inoNav = document.querySelector('.ino-nav');
  if (menuBtn && inoNav) {
    menuBtn.addEventListener('click', () => {
      const isVisible = inoNav.style.display === 'flex';
      inoNav.style.display = isVisible ? 'none' : 'flex';
      inoNav.style.flexDirection = 'column';
      inoNav.style.position = 'absolute';
      inoNav.style.top = '100%';
      inoNav.style.left = '0';
      inoNav.style.width = '100%';
      inoNav.style.background = '#ffffff';
      inoNav.style.padding = '20px';
      inoNav.style.boxShadow = '0 12px 24px rgba(9,30,66,0.1)';
      inoNav.style.borderBottom = '1px solid #ebecf0';
    });
  }

  // Proprietary Product Systems Data
  const systemsData = {
    fabrix: {
      title: 'Fabrix™ Mobile Lightbox',
      badge: 'PATENTED TENSION FABRIC SYSTEM',
      desc: 'Tool-free illuminated SEG fabric display system engineered with uniform edge-lit LEDs. Lightweight aluminum profiles pack effortlessly into compact wheeled travel flight cases.',
      specs: [
        '50mm & 100mm double-sided depth options',
        'Tool-less latch assembly in under 15 minutes',
        'Vibrant dye-sublimation silicone edge graphics',
        'CE & UL certified LED electrical drivers'
      ],
      img: 'images/fabrix.jpg'
    },
    magnafix: {
      title: 'Magnafix™ Modular Popup Wall',
      badge: 'MAGNETIC FAST-LOCK SYSTEM',
      desc: 'Rapid deployment exhibition wall system utilizing heavy-duty neodymium magnetic connectors. Expand from a compact 3x3 backwall into an entire 36 sq.m island booth in minutes.',
      specs: [
        'Zero tools required for full setup',
        'Integrated shelving and monitor mounting arms',
        'Reconfigurable into straight, L-shaped or curved walls',
        'Tested for 100+ reassembly exhibition cycles'
      ],
      img: 'images/magnafix.jpg'
    },
    inofix: {
      title: 'Inofix™ Architectural Frames',
      badge: 'HEAVY STRUCTURAL MATRIX',
      desc: 'Engineered structural aluminum framework for large-scale multi-tier pavilions and suspended ceiling overhead halos. Supports heavy machinery mounts and digital video tiles.',
      specs: [
        'German-grade anodized architectural aluminum',
        'High load capacity for overhead truss suspension',
        'Seamless integration with acrylic, wood and glass',
        'Fully reusable and zero-waste exhibition solution'
      ],
      img: 'images/inofix.jpg'
    },
    maxefx: {
      title: 'Maxefx™ Rollup & Hanging Displays',
      badge: 'PREMIUM PROMOTIONAL HARDWARE',
      desc: 'Heavy-gauge telescopic rollup banners and motorized rotating hanging ceiling cubes engineered for superior visual merchandising and high-traffic exhibition aisles.',
      specs: [
        'Anti-curl silverback blockout graphic material',
        'Heavy-gauge aluminum cassette with tension adjustment',
        'Available in widths from 85cm up to 240cm giant displays',
        'Padded reinforced ballistic nylon carrying case'
      ],
      img: 'images/maxefx.jpg'
    }
  };

  const tabButtons = document.querySelectorAll('.system-tab-btn');
  const sysTitle = document.getElementById('sysTitle');
  const sysBadge = document.getElementById('sysBadge');
  const sysDesc = document.getElementById('sysDesc');
  const sysSpecs = document.getElementById('sysSpecs');
  const sysImg = document.getElementById('sysImg');

  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      tabButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const key = btn.getAttribute('data-system');
      const data = systemsData[key];

      if (data && sysTitle && sysDesc && sysSpecs && sysImg) {
        sysTitle.textContent = data.title;
        sysBadge.textContent = data.badge;
        sysDesc.textContent = data.desc;
        sysImg.src = data.img;

        sysSpecs.innerHTML = '';
        data.specs.forEach(spec => {
          const li = document.createElement('li');
          li.innerHTML = `<svg width="18" height="18" fill="currentColor" viewBox="0 0 20 20"><path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg> <span>${spec}</span>`;
          sysSpecs.appendChild(li);
        });
      }
    });
  });

  // Download Catalog Modal
  const downloadBtns = document.querySelectorAll('.ino-download-btn');
  downloadBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const email = prompt('Enter your corporate email to download the Ambroise 2026 Product Catalogue (PDF):');
      if (email) {
        alert(`Thank you! The comprehensive Ambroise Product & Modular Specifications guide has been sent to ${email}.`);
      }
    });
  });
});
