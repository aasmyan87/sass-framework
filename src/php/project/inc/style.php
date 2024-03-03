<?php
    $base_css = [
        'vendor/bootstrap.css',
        'components/normalize.css',
        'vendor/icons.css',
        'components/typography.css',
        'components/media.css',
        'components/inputs.css',
        'components/buttons.css',
        'components/switch.css',
        'components/checkbox-radio-out.css',
        'components/checkbox-radio-in.css',
        'layout/header.css',
        'layout/desktop-menu.css',
        'layout/mobile-menu.css',
//        'layout/desktop-menu-flipping.css',
//        'layout/mobile-menu-flipping.css',
        'layout/layout.css',
        'layout/sections.css',
        'layout/sidebar.css',
    ];

    theme_css_array($base_css, '');

    if(is_part('index')){
        theme_css('home.css', 'pages');
    }
    if(is_part('tabs')){
        theme_css('block-tabs-acc-vertical.css', 'blocks');
        theme_css('block-tabs-acc-horizontal.css', 'blocks');
    }
    if(is_part('accordion')){
        theme_css('block-accordion.css', 'blocks');
    }
    if(is_part('slider-full')){
        theme_css('slick-slider.css', 'vendor');
        theme_css('block-slider-full.css', 'blocks');
    }
    if(is_part('slider-grid')){
        theme_css('slick-slider.css', 'vendor');
        theme_css('block-slider-grid.css', 'blocks');
    }

    theme_css('footer.css', 'layout', true);

    theme_css('css-classes.css', 'classes');

?>


