// Navigation link interaction
document.querySelectorAll('.main-nav .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      if (!this.classList.contains('active')) {
        e.preventDefault();
        console.log(`Navigation to "${this.textContent}" is a placeholder.`);
      }
    });
  });
  
  // Cart badge (hardcoded to 2, but could be dynamic)
  document.getElementById('cart-badge').textContent = 2;
  
  // Dark mode toggle
  const darkToggle = document.getElementById('dark-toggle');
  darkToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('kc_dark', document.body.classList.contains('dark-mode') ? '1' : '0');
  });
  if (localStorage.getItem('kc_dark') === '1') {
    document.body.classList.add('dark-mode');
  }
  
  // Fade-in animation for timeline and value cards
  function fadeInOnScroll() {
    document.querySelectorAll('.fade-in').forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 60) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', fadeInOnScroll);
  window.addEventListener('DOMContentLoaded', fadeInOnScroll);
  
  // Optional: Smooth scroll to sections (if you add section IDs to nav links)
  document.querySelectorAll('.main-nav .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
      const sectionId = this.getAttribute('href');
      if (sectionId && sectionId.startsWith('#')) {
        e.preventDefault();
        document.querySelector(sectionId).scrollIntoView({ behavior: 'smooth' });
      }
    });
  });