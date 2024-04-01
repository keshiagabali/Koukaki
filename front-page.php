<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner"><!-- ajout de la video en hero -->

            <video id="banner_video" src="<?php echo get_stylesheet_directory_uri() . '/video/video_header.mp4'; ?>" autoplay loop muted></video>
            <img src="<?php echo get_stylesheet_directory_uri() . '/images/image-logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">        
        
        </section>

        <section id="#story" class="story">

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

                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>

                </div>

                <div class="other-characters">

                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>

                </div>

            </article>

            <article id="place">

                <div>

                    <h3>
                        <div class="titre-anime">Le Lieu</div><!-- ajout de la class "titre-anime" pour animation du titre-->
                    </h3>

                    <p><?php echo get_theme_mod('place'); ?></p>

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
