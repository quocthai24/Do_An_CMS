<?php get_header(); ?>
<?php 
$image_id = 6; // ID của hình ảnh từ Media Library
$image_url = wp_get_attachment_url( $image_id ); 
?>


<div class="hero-section">
    <h1>I DONT KNOW</h1>
    <h2>WHAT IS THE WORLD</h2>
    <a href="#" class="btn-shop">SHOP NOW</a>
    <a href="#" class="btn-view-more">VIEW MORE</a>
</div>

<div class="featured-product">
    <img src="<?php echo $image_url; ?>" alt="Product Name">
</div>

<?php get_footer(); ?>
