<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  
  <?php get_search_form(); ?> 

  <h1 class="site-title">
    <?php 
    if(!is_home( )) : ?>
      <a href="<?php echo home_url( );?>">
        <?php bloginfo( 'name' ); ?>
      </a>
    <?php else:
      bloginfo( 'name' ); 
    endif;
    ?>
  </h1>

  <!-- Main Menu Location & creating containers for menu (nav) and classes -->
  <?php 
    wp_nav_menu( array(
      'theme_location'    =>  'menu-main',
      'container'         =>  'nav', 
      'container_class'   =>  'menu-container',
      'menu_class'        =>  'main-menu',
    )); 
  ?>

</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">