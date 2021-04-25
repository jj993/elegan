<?php
add_action( 'wp_enqueue_scripts', 'ch_enqueue_child_theme_styles', PHP_INT_MAX);

function ch_enqueue_child_theme_styles() {
		
 wp_enqueue_style( 'child-custom-css', get_stylesheet_directory_uri() . '/assets/css/child-custom.css', array( 'sydney-style' ) );
}
?>