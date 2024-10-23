$(document).ready(function() {
    // Khởi tạo Slick Slider
    if ($('.slider').length) {
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    }
});
