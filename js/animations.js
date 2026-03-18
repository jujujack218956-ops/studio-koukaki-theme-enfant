document.addEventListener('DOMContentLoaded', function () {

  const elements = document.querySelectorAll('h2, h3, #studio, .oscar-nomination');

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  elements.forEach(function (el) {
    observer.observe(el);
  });

  window.addEventListener('scroll', function () {
    const title = document.querySelector('.banner__title');
    if (title) {
      const scrollY = window.scrollY;
      title.style.transform = 'translateY(' + scrollY * 0.3 + 'px)';
    }
  });

});