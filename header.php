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
    <nav class="nav navbar bg-light">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary'
        ));?>

    </nav>
