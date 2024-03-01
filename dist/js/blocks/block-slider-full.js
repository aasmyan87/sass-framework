window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function ($) {
        let full_slider = $('#full-slider_js');
        let full_slider_dots = '#md-fsl-dots_js';
        if (full_slider.length !== 0)
            full_slider.slick({
                autoplay: true,
                dots: true,
                arrows: true,
                prevArrow: $('.arrw-prev'),
                nextArrow: $('.arrw-next'),
                appendDots: full_slider_dots
            });
    });
});
