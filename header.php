<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <title>My Document</title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>

<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary" role="navigation">
  <div class="container">
  <a class="navbar-brand" href="<?php echo home_url();?>"><?php bloginfo('name');?></a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'mytheme' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
     <?php 
        $args = array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        );
        wp_nav_menu($args);?>
  </div>
</nav>
