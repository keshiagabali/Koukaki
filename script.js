document.addEventListener("DOMContentLoaded", function() {

/* AFFICHAGE GENERAL */

    /* Effet d’animation sur les titres */

    var titres = document.querySelectorAll('.titre-anime'); // sélectionne les éléments à animer
      
    var observer = new IntersectionObserver(function(entries) { // détecter l'entrée des titres dans la fenêtre
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('titre-visible');
            }
        });
    });
      
    titres.forEach(function(titre) { 
        observer.observe(titre);
    });

/* HERO */

    /* Effet parallax */

 /* PERSONNAGES */

    /* swipper */

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows : false,
        },
        pagination: {
          el: '.swiper-pagination',
        },
        loop: true,
        freeMode: true,
    });  

/* LIEU */

    /* parallax */

    function parallaxTransform(element, scrollFactor) {
        const scrollPosition = window.pageYOffset;
        element.style.transform = `translate3d(${
          scrollPosition * scrollFactor
        }px, 0, 0)`;
    }
      
    const bigCloud = document.querySelector('.big-cloud');
    const littleCloud = document.querySelector('.little-cloud');
      
    window.addEventListener('scroll', function () {
        parallaxTransform(bigCloud, -0.2);
        parallaxTransform(littleCloud, -0.2);
    });

});
