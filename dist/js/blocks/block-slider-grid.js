window.addEventListener('DOMContentLoaded', function() {
    jQuery(document).ready(function ($) {
        let grid_slider = $('#grid-slider_js');
        let grid_slider_dots = '#md-gsl-dots_js';
        grid_slider.on('init', function (event, slick){
            $('.remove-gsl-preload-height').removeClass('remove-gsl-preload-height');
            $('.remove-gsl-arrow-preload').removeClass('remove-gsl-arrow-preload');
        })
        if (grid_slider.length !== 0){
            grid_slider.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                arrows: true,
                margin: 15,
                infinite: true,
                rows: 0,
                prevArrow: $('.arrw-prev'),
                nextArrow: $('.arrw-next'),
                appendDots: grid_slider_dots,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        }
    });
});
