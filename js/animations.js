document.addEventListener('DOMContentLoaded', function () {

  // --- Titres au scroll ---
  const elements = document.querySelectorAll('h2, h3, #studio, .oscar-nomination');
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });
  elements.forEach(function (el) {
    observer.observe(el);
  });

  // --- Parallaxe logo ---
  const title = document.querySelector('.banner__title');
  const story = document.querySelector('.story');
  let titleHeight = null;

  if (title && story) {
    window.addEventListener('scroll', function () {

      // Mesure au premier scroll, image déjà rendue
      if (titleHeight === null) {
        titleHeight = title.offsetHeight;
      }

      const storyTop = story.getBoundingClientRect().top;
      const titleBottom = window.innerHeight / 2 + titleHeight / 2;

      if (storyTop <= titleBottom) {
        title.style.top = (storyTop - titleHeight) + 'px';
        title.style.transform = 'none';
      } else {
        title.style.top = '50%';
        title.style.transform = 'translateY(-50%)';
      }
    });
  }

});