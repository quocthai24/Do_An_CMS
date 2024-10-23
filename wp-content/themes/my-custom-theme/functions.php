<?php
// Thêm hỗ trợ cho menu
function my_custom_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'my_custom_theme'));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Tải CSS cho theme
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');
