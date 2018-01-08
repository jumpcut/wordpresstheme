<?php

function jumpcut_scripts() {

  wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
  wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
  wp_enqueue_style( 'navigation', get_template_directory_uri() . '/css/_nav.scss');
  wp_enqueue_style( 'homepage', get_template_directory_uri() . '/css/homepage.scss');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css');
  
}
add_action( 'wp_enqueue_scripts', 'jumpcut_scripts' );

/**
 * navigation bootstrap
 */
 
 if( ! class_exists( 'wp_bootstrap_navwalker' ) ) {
        require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
    }

?>