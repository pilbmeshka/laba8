<?php
function kali_linux_enqueue_assets() {
    wp_enqueue_style('kali-linux-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');
}
add_action('wp_enqueue_scripts', 'kali_linux_enqueue_assets');
function kali_linux_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'kali-linux-theme'),
    ));
}
add_action('init', 'kali_linux_register_menus');
