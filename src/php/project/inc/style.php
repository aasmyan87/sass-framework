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
        'layout/layout.css',
        'layout/sections.css',
        'layout/sidebar.css',
    ];

    theme_css_array($base_css);

    if(is_part('index')){
        theme_css('home.css', 'pages');
    }

    theme_css('footer.css', 'layout', true);

    theme_css('css-classes.css', 'classes');

?>


