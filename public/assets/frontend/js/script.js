// ===== NAVBAR SCROLL =====
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 60) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// ===== MOBILE MENU =====
const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

menuToggle.addEventListener('click', () => {
  navLinks.classList.toggle('open');
  menuToggle.textContent = navLinks.classList.contains('open') ? '✕' : '☰';
});

document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('open');
    menuToggle.textContent = '☰';
  });
});

// ===== SMOOTH SCROLL =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// ===== SCROLL REVEAL =====
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('revealed');
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

document.querySelectorAll('.reveal').forEach(el => {
  revealObserver.observe(el);
});

// ===== COUNTER ANIMATION =====
function animateCounter(el, target, suffix = '', decimal = 0, duration = 2000) {
  let start = 0;
  const step = target / (duration / 16);
  const timer = setInterval(() => {
    start += step;
    if (start >= target) {
      start = target;
      clearInterval(timer);
    }
    el.textContent = (decimal > 0 ? start.toFixed(decimal) : Math.floor(start)
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ',')) + suffix;
  }, 16);
}

let countersRun = false;
const statsSection = document.querySelector('.showcase-section');
if (statsSection) {
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !countersRun) {
        countersRun = true;
        document.querySelectorAll('.stat-number[data-target]').forEach(el => {
          const target = parseFloat(el.dataset.target);
          const suffix = el.dataset.suffix || '';
          const decimal = parseInt(el.dataset.decimal || '0');
          animateCounter(el, target, suffix, decimal);
        });
      }
    });
  }, { threshold: 0.4 });
  statsObserver.observe(statsSection);
}

// ===== BUTTON RIPPLE =====
document.querySelectorAll('.btn-primary, .btn-secondary, .cta-button').forEach(btn => {
  btn.addEventListener('click', function (e) {
    const rect = this.getBoundingClientRect();
    const ripple = document.createElement('span');
    const size = Math.max(rect.width, rect.height);
    ripple.style.cssText = `
      position: absolute;
      width: ${size}px; height: ${size}px;
      left: ${e.clientX - rect.left - size / 2}px;
      top: ${e.clientY - rect.top - size / 2}px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      transform: scale(0);
      animation: rippleAnim 0.6s ease-out;
      pointer-events: none;
    `;
    this.style.position = 'relative';
    this.style.overflow = 'hidden';
    this.appendChild(ripple);
    setTimeout(() => ripple.remove(), 600);
  });
});

const rippleStyle = document.createElement('style');
rippleStyle.textContent = `@keyframes rippleAnim { to { transform: scale(2.5); opacity: 0; } }`;
document.head.appendChild(rippleStyle);

// ===== REDIRECT FOR GLOBAL FINANCE DELIVERY CENTER CARD =====
(() => {
  try {
    // Find service-card whose heading contains 'Global Finance Delivery Center'
    document.querySelectorAll('.service-card').forEach(card => {
      const h3 = card.querySelector('h3');
      if (h3 && h3.textContent.trim().toLowerCase().includes('global finance delivery center')) {
        const link = card.querySelector('.service-link');
        // if (link) {
        //   link.addEventListener('click', function (e) {
        //     e.preventDefault();
        //     window.location.href = '/global-finance-delivery-center.html';
        //   });
        // }
      }
    });
  } catch (err) {
    // silent fail
    console.error('GDC redirect setup failed', err);
  }
})();

// ===== HERO VISUAL ENTRANCE =====
(function () {
  var frame = document.querySelector('.hv-frame');
  if (!frame) return;

  var pill     = frame.querySelector('.hv-pill');
  var metrics  = frame.querySelector('.hv-metrics');
  var services = frame.querySelector('.hv-services');
  var svcs     = frame.querySelectorAll('.hv-svc');

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        if (pill)     pill.classList.add('hv-visible');
        if (metrics)  metrics.classList.add('hv-visible');
        if (services) services.classList.add('hv-visible');
        svcs.forEach(function (s) { s.classList.add('hv-visible'); });
        io.disconnect();
      }
    });
  }, { threshold: 0.2 });

  io.observe(frame);
})();

// ===== MEDIA VIDEO PLAY =====
['1','2'].forEach(function(n) {
  var btn   = document.getElementById('playBtn' + n);
  var video = document.getElementById('video' + n);
  if (!btn || !video) return;
  btn.addEventListener('click', function() {
    var src = video.querySelector('source') ? video.querySelector('source').getAttribute('src') : '';
    if (!src) {
      btn.style.transform = 'translate(-50%,-50%) scale(0.92)';
      setTimeout(function(){ btn.style.transform = ''; }, 200);
      return;
    }
    video.style.display = 'block';
    btn.style.display   = 'none';
    video.play();
  });
});





// // ===== NAVBAR SCROLL =====
// const navbar = document.getElementById('navbar');
// window.addEventListener('scroll', () => {
//   if (window.scrollY > 60) {
//     navbar.classList.add('scrolled');
//   } else {
//     navbar.classList.remove('scrolled');
//   }
// });

// // ===== MOBILE MENU =====
// const menuToggle = document.getElementById('menuToggle');
// const navLinks = document.getElementById('navLinks');

// menuToggle.addEventListener('click', () => {
//   navLinks.classList.toggle('open');
//   menuToggle.textContent = navLinks.classList.contains('open') ? '✕' : '☰';
// });

// document.querySelectorAll('.nav-links a').forEach(link => {
//   link.addEventListener('click', () => {
//     navLinks.classList.remove('open');
//     menuToggle.textContent = '☰';
//   });
// });

// // ===== SMOOTH SCROLL =====
// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//   anchor.addEventListener('click', function (e) {
//     e.preventDefault();
//     const target = document.querySelector(this.getAttribute('href'));
//     if (target) {
//       target.scrollIntoView({ behavior: 'smooth' });
//     }
//   });
// });

// // ===== SCROLL REVEAL =====
// const revealObserver = new IntersectionObserver((entries) => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       entry.target.classList.add('revealed');
//       revealObserver.unobserve(entry.target);
//     }
//   });
// }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });

// document.querySelectorAll('.reveal').forEach(el => {
//   revealObserver.observe(el);
// });

// // ===== COUNTER ANIMATION =====
// function animateCounter(el, target, suffix = '', decimal = 0, duration = 2000) {
//   let start = 0;
//   const step = target / (duration / 16);
//   const timer = setInterval(() => {
//     start += step;
//     if (start >= target) {
//       start = target;
//       clearInterval(timer);
//     }
//     el.textContent = (decimal > 0 ? start.toFixed(decimal) : Math.floor(start)
//       .toString()
//       .replace(/\B(?=(\d{3})+(?!\d))/g, ',')) + suffix;
//   }, 16);
// }

// let countersRun = false;
// const statsSection = document.querySelector('.showcase-section');
// if (statsSection) {
//   const statsObserver = new IntersectionObserver((entries) => {
//     entries.forEach(entry => {
//       if (entry.isIntersecting && !countersRun) {
//         countersRun = true;
//         document.querySelectorAll('.stat-number[data-target]').forEach(el => {
//           const target = parseFloat(el.dataset.target);
//           const suffix = el.dataset.suffix || '';
//           const decimal = parseInt(el.dataset.decimal || '0');
//           animateCounter(el, target, suffix, decimal);
//         });
//       }
//     });
//   }, { threshold: 0.4 });
//   statsObserver.observe(statsSection);
// }

// // ===== BUTTON RIPPLE =====
// document.querySelectorAll('.btn-primary, .btn-secondary, .cta-button').forEach(btn => {
//   btn.addEventListener('click', function (e) {
//     const rect = this.getBoundingClientRect();
//     const ripple = document.createElement('span');
//     const size = Math.max(rect.width, rect.height);
//     ripple.style.cssText = `
//       position: absolute;
//       width: ${size}px; height: ${size}px;
//       left: ${e.clientX - rect.left - size / 2}px;
//       top: ${e.clientY - rect.top - size / 2}px;
//       background: rgba(255,255,255,0.2);
//       border-radius: 50%;
//       transform: scale(0);
//       animation: rippleAnim 0.6s ease-out;
//       pointer-events: none;
//     `;
//     this.style.position = 'relative';
//     this.style.overflow = 'hidden';
//     this.appendChild(ripple);
//     setTimeout(() => ripple.remove(), 600);
//   });
// });

// const rippleStyle = document.createElement('style');
// rippleStyle.textContent = `@keyframes rippleAnim { to { transform: scale(2.5); opacity: 0; } }`;
// document.head.appendChild(rippleStyle);

// // ===== REDIRECT FOR GLOBAL FINANCE DELIVERY CENTER CARD =====
// (() => {
//   try {
//     // Find service-card whose heading contains 'Global Finance Delivery Center'
//     document.querySelectorAll('.service-card').forEach(card => {
//       const h3 = card.querySelector('h3');
//       if (h3 && h3.textContent.trim().toLowerCase().includes('global finance delivery center')) {
//         const link = card.querySelector('.service-link');
//         // if (link) {
//         //   link.addEventListener('click', function (e) {
//         //     e.preventDefault();
//         //     window.location.href = '/global-finance-delivery-center.html';
//         //   });
//         // }
//       }
//     });
//   } catch (err) {
//     // silent fail
//     console.error('GDC redirect setup failed', err);
//   }
// })();

// // ===== HERO VISUAL ENTRANCE =====
// (function () {
//   var frame = document.querySelector('.hv-frame');
//   if (!frame) return;

//   var pill     = frame.querySelector('.hv-pill');
//   var metrics  = frame.querySelector('.hv-metrics');
//   var services = frame.querySelector('.hv-services');
//   var svcs     = frame.querySelectorAll('.hv-svc');

//   var io = new IntersectionObserver(function (entries) {
//     entries.forEach(function (entry) {
//       if (entry.isIntersecting) {
//         if (pill)     pill.classList.add('hv-visible');
//         if (metrics)  metrics.classList.add('hv-visible');
//         if (services) services.classList.add('hv-visible');
//         svcs.forEach(function (s) { s.classList.add('hv-visible'); });
//         io.disconnect();
//       }
//     });
//   }, { threshold: 0.2 });

//   io.observe(frame);
// })();

// // ===== MEDIA VIDEO PLAY =====
// ['1','2'].forEach(function(n) {
//   var btn   = document.getElementById('playBtn' + n);
//   var video = document.getElementById('video' + n);
//   if (!btn || !video) return;
//   btn.addEventListener('click', function() {
//     var src = video.querySelector('source') ? video.querySelector('source').getAttribute('src') : '';
//     if (!src) {
//       btn.style.transform = 'translate(-50%,-50%) scale(0.92)';
//       setTimeout(function(){ btn.style.transform = ''; }, 200);
//       return;
//     }
//     video.style.display = 'block';
//     btn.style.display   = 'none';
//     video.play();
//   });
// });

