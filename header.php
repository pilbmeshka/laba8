<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => 'menu',
            ));
            ?>
        </nav>
        <div class="banner">
            <h1><?php bloginfo('Kali'); ?></h1> 
            <button><?php _e('More', 'kali-linux-theme'); ?></button>
        </div>
    </header>
