<?php
//*****************************************************css y js**********************************************************************
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'counter', get_template_directory_uri() . '/assets/js/counter.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);

}
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');
add_theme_support( 'post-thumbnails' );
?>