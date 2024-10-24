<?php get_header(); ?>
<main>

<!-- Slide Banner -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo wp_get_attachment_url(18); ?>" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Street Style</h5>
                <p>Select Your Style</p>
                <div class="button-group">
                    <a href="#" class="btn btn-primary">View More</a>
                    <a href="<?php echo get_permalink(get_page_by_path('san-pham')); ?>" class="btn btn-secondary">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo wp_get_attachment_url(19); ?>" class="d-block w-100" alt="Image 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Street Style</h5>
                <p>Select Your Style</p>
                <div class="button-group">
                    <a href="#" class="btn btn-primary">View More</a>
                    <a href="<?php echo get_permalink(get_page_by_path('san-pham')); ?>" class="btn btn-secondary">Buy Now</a>
                </div>
            </div>
        </div>
        <!-- Thêm nhiều slide nếu cần -->
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Sản phẩm -->
<section class="products py-5">
    <div class="container">
        <h2 class="text-center mb-4">Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo wp_get_attachment_url(19); ?>" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Product 1</h5>
                        <p class="card-text">Description of Product 1.</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo wp_get_attachment_url(19); ?>" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Product 2</h5>
                        <p class="card-text">Description of Product 2.</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo wp_get_attachment_url(19); ?>" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Product 3</h5>
                        <p class="card-text">Description of Product 3.</p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
            <!-- Thêm nhiều sản phẩm nếu cần -->
        </div>
    </div>
</section>

<!-- Ý kiến -->
<section id="customer-reviews" class="container my-5">
    <h2 class="text-center">Ý Kiến Khách Hàng</h2>
    <div id="customerCarousel" class="carousel slide" data-ride="carousel" data-touch="true"> <!-- Thêm data-touch -->
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="<?php echo esc_url( wp_get_attachment_url(15) ); ?>" class="rounded-circle" alt="Customer Avatar" style="width: 90px;">
                <p class="mt-3">"Dịch vụ tuyệt vời! Sản phẩm rất chất lượng."</p>
                <p>- Khách Hàng 1</p>
            </div>
            <div class="carousel-item text-center">
                <img src="<?php echo esc_url( wp_get_attachment_url(26) ); ?>" class="rounded-circle" alt="Customer Avatar" style="width: 90px;">
                <p class="mt-3">"Tôi rất hài lòng với sự phục vụ và sản phẩm ở đây."</p>
                <p>- Khách Hàng 2</p>
            </div>
            <div class="carousel-item text-center">
                <img src="<?php echo esc_url( wp_get_attachment_url(27) ); ?>" class="rounded-circle" alt="Customer Avatar" style="width: 90px;">
                <p class="mt-3">"Chất lượng tuyệt vời, tôi sẽ quay lại!"</p>
                <p>- Khách Hàng 3</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#customerCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customerCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

</main>
<?php get_footer(); ?>
