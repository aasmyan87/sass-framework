<?php

    theme_scripts('jquery-3.4.1.min.js', 'vendor');

    if(is_part('tabs')){
        theme_scripts('block-tabs-acc.js', 'blocks');
    }
    if(is_part('accordion')){
        theme_scripts('block-accordion.js', 'blocks');
    }
    if(is_part('slider-full')){
        theme_scripts('slick.min.js', 'vendor');
        theme_scripts('block-slider-full.js', 'blocks');
    }
    if(is_part('slider-grid')){
        theme_scripts('slick.min.js', 'vendor');
        theme_scripts('block-slider-grid.js', 'blocks');
    }
    if(is_part('inputs')){
        theme_scripts('jquery.validate.min.js', 'vendor');
        theme_scripts('validation.js', 'components');
    }
    theme_scripts('theme.js', '');

?>
