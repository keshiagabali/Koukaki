<?php
function theme_enqueue_styles() {
    // le style parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // le script
    wp_enqueue_script( 'theme-script', get_stylesheet_directory_uri() . '/script.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}




