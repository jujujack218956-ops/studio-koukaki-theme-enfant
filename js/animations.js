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

  // --- Carrousel personnages ---
  // new Swiper('.characters-swiper', {
  //   effect: 'coverflow',
  //   grabCursor: true,
  //   centeredSlides: true,
  //   slidesPerView: 3,
  //   coverflowEffect: {
  //     rotate: 0,
  //     stretch: 0,
  //     depth: 100,
  //     modifier: 1,
  //     slideShadows: false,
  //   },
  // });


  // --- Nuages parallaxe ---
  const place = document.querySelector('#place');
  const clouds = document.querySelectorAll('.place__cloud');

  if (place && clouds.length) {
    window.addEventListener('scroll', function () {
      const placeTop = place.getBoundingClientRect().top;
      const placeHeight = place.offsetHeight;
      const windowHeight = window.innerHeight;

      if (placeTop < windowHeight && placeTop > -placeHeight) {
        // Progression de 0 à 1 pendant le scroll sur la section
        const progress = 1 - (placeTop / windowHeight);
        const offset = Math.min(progress * 300, 300); // max 300px

        clouds.forEach(function (cloud) {
          cloud.style.transform = 'translateX(-' + offset + 'px)';
        });
      }
    });
  }
});