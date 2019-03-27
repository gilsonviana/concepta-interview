<?php

if ( !function_exists( 'concepta_custom_theme_setup' ) ) {

    function concepta_custom_theme_setup() {

        function concepta_custom_theme_scripts() {
            wp_enqueue_style( 'concepta-custom-theme-style', get_stylesheet_uri() );
        }
        add_action( 'wp_enqueue_scripts' , 'concepta_custom_theme_scripts' );
    }
    add_action( 'after_setup_theme', 'concepta_custom_theme_setup' );

}