<?php

add_theme_support( 'title-tag' );

function register_my_menus() {
  register_nav_menus( array(
    'main' => esc_html__( 'Primary' )
  ) );
}
add_action( 'init', 'register_my_menus' );



function include_my_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);


  wp_enqueue_script('mapbox-script', 'https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js', array(), null, true);
  wp_enqueue_script('owl-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true);
  wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);

  wp_enqueue_style('mapbox-style', 'https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style('owl-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
  wp_enqueue_style('aos-default', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
  
  }
  
  add_action('wp_enqueue_scripts', 'include_my_scripts');


  

  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page();
    
  }

?>


