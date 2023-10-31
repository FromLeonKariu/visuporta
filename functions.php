<?php 

if ( ! function_exists( 'visuporta_theme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since My theme name 1.0
	 *
	 * @return void
	 */
	function visuporta_theme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'visuporta_theme_support' );

#Enqueue styles
if ( ! function_exists( 'visuporta_styles' ) ) :

    function visuporta_styles() {

        wp_enqueue_style('visuporta-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    }

endif;

add_action( 'wp_enqueue_scripts', 'visuporta_styles' );