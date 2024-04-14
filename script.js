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

    /* effet d'acceleration de la rotation des fleurs */

    const flowersSpeed = document.querySelector("body");
    let scrollingTimeout;

    window.addEventListener("scroll", () => {
    flowersSpeed.style.setProperty("--flowersspeed", "5s");

    clearTimeout(scrollingTimeout);

    scrollingTimeout = setTimeout(() => {
        flowersSpeed.style.setProperty("--flowersspeed", "15s");
    }, 200); 
    });

    
  
/* HERO */

    /* Effet parallax */
    
    const logo = document.querySelector('.banner-img');
    const scrollThreshold = 320; 
    const stopScrollThreshold = 205; 
    
    window.addEventListener("scroll", () => {
        const verticale = window.scrollY;
    
        if (verticale < stopScrollThreshold) {
            
            logo.style.position = 'fixed';
            logo.style.top = `${scrollThreshold}px`; 
        } else {
            
            logo.style.position = 'fixed';
            logo.style.top = `${scrollThreshold - (verticale - stopScrollThreshold)}px`; 
        }
    
        if (verticale <= 0) {
            logo.style.position = 'fixed';
            logo.style.top = `${scrollThreshold}px`; 
        }
    });
                    
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

    /* parallax cloud */

    function parallaxClouds() {
        const articleplace = document.getElementById("place");
        const verticale = window.scrollY;
        const nuages = document.querySelectorAll(".big-cloud, .little-cloud");
    
        if (verticale >= articleplace.offsetTop) {
            const vitesse = 0.2;
            const initialPosition = 400;
            
            nuages.forEach(nuage => {
                const nuages_horizontale = -verticale * vitesse + initialPosition;
                nuage.style.transform = `translateX(${nuages_horizontale}px)`;
            });
        }
    }
    
    window.addEventListener("scroll", parallaxClouds);
                                        
/* MENU */

    const burger = document.querySelector('.menu-button-burger');
    const nav = document.querySelector('.menu-burger');

    burger.addEventListener('click', () => {
        burger.classList.toggle('burger-on');
        nav.classList.toggle('nav-on');
    });
    
    const menuLinks = document.querySelectorAll('.menu-burger .menu-list a');
    
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            // Fermeture du menu en retirant les classes qui l'affichent
            burger.classList.remove('burger-on');
            nav.classList.remove('nav-on');
        });
    });

});