<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner"><!-- ajout de la video du hero -->

            <video id="banner_video" src="<?php echo get_stylesheet_directory_uri() . '/video/video_header.mp4'; ?>" autoplay loop muted></video>
            <img class="banner-img" src="<?php echo get_stylesheet_directory_uri() . '/images/image-logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">  
        
        </section>

        <section id="story" class="story">

            <h2>
                <div class="titre-anime">L'histoire</div><!-- ajout de la class "titre-anime" pour animation du titre-->
            </h2>

            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

            <article id="characters">

                <div class="main-character">

                    <h3> 
                        <div class="titre-anime">Les personnages</div><!-- ajout de la class "titre-anime" pour animation du titre-->
                    </h3>

                    <div class="swiper-container"><!-- ajout du carrousel-->

                        <?php include ('/Users/keshia/Local Sites/koukaki/app/public/wp-content/themes/foce-child/carrousel.php'); ?>
                        
                    </div>


                </div>

            </article>

            <article id="place">

                <div>

                    <h3>
                        <div class="titre-anime">Le Lieu</div><!-- ajout de la class "titre-anime" pour animation du titre-->
                    </h3>

                    <p><?php echo get_theme_mod('place'); ?></p>

                    <!-- ajout des nuages-->
                    <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/images/big_cloud.png'; ?> " alt="logo Fleurs d'oranger & chats errants">        
                    <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/images/little_cloud.png'; ?> " alt="logo Fleurs d'oranger & chats errants">        

                </div>

            </article>

        </section>

        <section id="studio">

            <h2> 
                <div class="titre-anime">Studio Koukaki</div><!-- ajout de la class "titre-anime" pour animation du titre-->
            </h2>

            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>

        </section>

        <section id="oscars"> <!-- ajout de la section oscars -->

            <?php include ('/Users/keshia/Local Sites/koukaki/app/public/wp-content/themes/foce-child/section-oscars.php'); ?>

        </section>

    </main><!-- #main -->

<?php
get_footer();
