document.addEventListener('DOMContentLoaded', function () {
    const mainSlider = new Swiper('#tourSlider4', {
        effect: 'fade',
        loop: true,
        autoplay: {
            delay: 3000,
        },
        thumbs: {
            swiper: new Swiper('.tour-thumb-slider', {
                slidesPerView: 3,
                spaceBetween: 10,
                loop: true,
            }),
        },
    });
});
