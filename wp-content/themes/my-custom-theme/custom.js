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

let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.banner-slide');
    slides[currentSlide].classList.remove('active'); // Ẩn slide hiện tại
    currentSlide = (currentSlide + direction + slides.length) % slides.length; // Tính chỉ số slide tiếp theo
    slides[currentSlide].classList.add('active'); // Hiện slide mới

    const bannerContainer = document.querySelector('.banner-container');
    bannerContainer.style.transform = `translateX(-${currentSlide * 100}%)`; // Di chuyển banner
}