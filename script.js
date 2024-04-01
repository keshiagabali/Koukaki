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

});
