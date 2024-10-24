<?php
// Thêm hỗ trợ cho menu
function my_custom_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary', __('Primary Menu', 'my_custom_theme'));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

// Tải CSS cho theme
function my_custom_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery'); // Bootstrap cần jQuery
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_styles');

function my_custom_theme_enqueue_scripts() {
    // Tải CSS cho Slick Slider
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/path/to/slick.css');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/path/to/slick-theme.css');

    // Tải jQuery (nếu chưa có)
    wp_enqueue_script('jquery');

    // Tải JS cho Slick Slider
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/path/to/slick.min.js', array('jquery'), null, true);

    // Tải custom.js
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/custom.js', array('jquery', 'slick-js'), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');

function create_product_page() {
    // Kiểm tra xem trang "Sản Phẩm" đã tồn tại chưa
    if (!get_page_by_title('Sản Phẩm')) {
        // Tạo trang mới
        $new_page_id = wp_insert_post(array(
            'post_title'     => 'Sản Phẩm',
            'post_content'   => '',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'page_template'  => 'page-products.php' // Chỉ định template cho trang
        ));
    }
}
add_action('after_setup_theme', 'create_product_page');
