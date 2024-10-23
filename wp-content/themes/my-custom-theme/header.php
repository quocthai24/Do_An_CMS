<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <!-- Sử dụng wp_get_attachment_image() để lấy logo từ Media Library -->
                <?php echo wp_get_attachment_image(8, 'full'); ?>
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Collections</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Shortcodes</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
            </ul>
        </nav>
        <div class="header-icons">
            <a href="#"><i class="search-icon"></i></a>
            <a href="#"><i class="user-icon"></i></a>
            <a href="#"><i class="language-icon"></i></a>
            <a href="#"><i class="cart-icon"></i><span class="cart-count">0</span></a>
        </div>
    </header>
    <?php wp_footer(); ?>
</body>
</html>
