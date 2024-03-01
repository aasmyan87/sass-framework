<?php

//  Body Classes By Page
function theme_body_class(){
    if(is_part('header-fixed')){
        echo 'page-header-fixed';
    }
}

//  Header Types
function header_effect_type(){
    if(is_part('header-fixed')){
        echo 'header-fixed';
    }
    if(is_part('header-jump')){
        echo 'header-jump_js';
    }
    if(is_part('header-reduce')){
        echo 'header-reduce_js';
    }
    if(is_part('header-transparent')){
        echo 'header-transparent_js';
    }
    if(is_part('slider-full')){
        echo 'header-jump_js';
    }
}


//  Print inline styles from array of styles
function theme_print_inline_styles($styles_array = []){
    if(!empty($styles_array)){
        foreach ($styles_array as $styles){
            echo $styles;
        }
    }
    else{
        echo 'styles not found';
    }
}

//  Get Website Favicon
function theme_get_favicon($url = ''){
    ?>
    <link rel="icon" type="image/png" href="<?php echo $url; ?>"/>
    <?php
}

//  Get meta title
function theme_get_meta_title($home_title = ''){
    $current_title = basename($_SERVER["SCRIPT_FILENAME"], '');
    $current_str_title = str_replace('.php', '', $current_title);
    if($current_str_title == 'index'){
        echo '<title>'.$home_title.'</title>';
    } else{
        echo '<title>'.ucwords($current_str_title).'</title>';
    }
}


//  Get CSS Style
function theme_css($file = '', $folder = '', $preload = false){
    ?>
    <?php if($preload) : ?>
        <link rel="preload" as="style" href="<?php echo '../dist/css/'.$folder.'/'.$file; ?>" media="all"/>
        <link rel="stylesheet" href="<?php echo '../dist/css/'.$folder.'/'.$file; ?>" media="all"/>
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo '../dist/css/'.$folder.'/'.$file; ?>" media="all"/>
    <?php endif; ?>
    <?php
}

//  Get CSS Array Styles
function theme_css_array( $base_css = [], $preload = false ){
    foreach ($base_css as $css) { ?>
        <?php if($preload) : ?>
            <link rel="preload" as="style" href="../dist/css/<?php echo $css ?>" media="all"/>
            <link rel="stylesheet" href="../dist/css/<?php echo $css ?>" media="all"/>
        <?php else: ?>
            <link rel="stylesheet" href="../dist/css/<?php echo $css ?>" media="all"/>
        <?php endif; ?>
        <?php
    }
}

//  Get JS Scripts
function theme_scripts($file = '', $folder = '', $loading = ''){
    $path = !empty( $folder ) ? $folder.'/' : '';
    ?>
    <script <?php echo $loading; ?> src="<?php echo '../dist/js/'.$path.$file; ?>"></script>
    <?php
}

//  Check page part name
function is_part($filename = ''){
    $current_file = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    if($current_file == $filename){
        return true;
    }
    else{
        return false;
    }
}

//  Get Image
function theme_get_picture($img_1x = '', $img_2x ='', $class = '', $alt ='', $lazy = false, $fetchpriority = false ){
    $project_images_path = '../dist/images/';
    $project_images_path_abs = 'http://localhost/sass-framework/dist/images/';
    list($width, $height, $type, $attr) = getimagesize($project_images_path_abs.$img_1x);
    ?>
    <picture class="<?php echo $class; ?>">
        <source srcset="<?php echo $project_images_path.$img_1x; ?> 1x, <?php echo $project_images_path.$img_2x; ?> 2x">
        <source srcset="<?php echo $project_images_path.$img_1x; ?>" media="(max-width: 767px)">
        <img
            width="<?php echo $width; ?>"
            height="<?php echo $height; ?>"
            src="<?php echo $project_images_path.$img_1x; ?>"
            alt="<?php echo $alt; ?>"
            <?php if($fetchpriority){ echo 'fetchpriority="high"'; } ?>
            <?php if($lazy){ echo 'loading="lazy"'; } ?>
        />
    </picture>
    <?php
}


