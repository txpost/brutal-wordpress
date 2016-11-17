<?php 

function theme_slug_setup() {
   add_theme_support('title-tag');
   add_theme_support('automatic-feed-links');
   add_theme_support('post-thumbnails');
   add_theme_support('post-formats', array('link')); 
} add_action( 'after_setup_theme', 'theme_slug_setup' );

function theme_styles() { 
  wp_register_style( 'fonts-style', '//fonts.googleapis.com/css?family=Roboto+Mono', array(), null, null );
  wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', array(), null, null );
  wp_enqueue_style( 'fonts-style' );    
  wp_enqueue_style( 'main-style' );    
} add_action('wp_enqueue_scripts', 'theme_styles');

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
} add_action( 'init', 'register_my_menu');

function get_content_link($content = false, $echo = false){
  if ($content === false) {
    $content = get_the_content();
  }
  $content = preg_match_all('/href\s*=\s*[\"\']([^\"\']+)/', $content, $links);
  $content = $links[1][0];
  $content = make_clickable($content);

  return $content;
}

function get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

?>