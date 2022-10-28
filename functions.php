<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'a7oliviaunderdah_setup' ) ) :
 
   function a7oliviaunderdah_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );

     register_nav_menus( array(
         'menu-main' => 'Main Menu',
         'menu-footer' => 'Secondary Menu',
         'menu-social' => 'Social Menu',
      ) );
   }
 
endif;
 
add_action('after_setup_theme', 'a7oliviaunderdah_setup');
 
function a7oliviaunderdah_scripts_styles(){
   wp_enqueue_style('a7oliviaunderdah_style', get_stylesheet_directory_uri() . '/css/style.css');
   wp_enqueue_style('oliviastheme_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Newsreader:wght@300;400', array(), null);
   wp_enqueue_style('oliviastheme_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
 
add_action('wp_enqueue_scripts', 'a7oliviaunderdah_scripts_styles');
