document.addEventListener('DOMContentLoaded', function () {

  // Apparition des titres au scroll avec IntersectionObserver
  const titres = document.querySelectorAll('h2, h3');

  const observerOptions = {
    threshold: 0.2, // déclenche quand 20% du titre est visible
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target); // ne se déclenche qu'une fois
      }
    });
  }, observerOptions);

  titres.forEach(function (titre) {
    observer.observe(titre);
  });

});