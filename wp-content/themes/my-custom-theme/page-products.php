<?php
/* Template Name: Sản Phẩm */
get_header();
?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php
        // Hiển thị nội dung được nhập từ Dashboard
        while (have_posts()) : the_post();
            the_content();  // Hiển thị nội dung từ trang chỉnh sửa
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
