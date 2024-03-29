<?php
    include(dirname(__DIR__).'/inc/head.php');
    include (dirname(__DIR__).'/parts/nav.php');
    $website_title = 'My Project';
    global $website_title;
?>

<!--header-fixed, header-jump_js, header-reduce_js, header-transparent_js -->
<header class="fw-header--outer <?php header_effect_type() ?>">
    <div class="fw-header">
        <div class="fw-header--container">
            <button aria-label="Open Mobile Menu" class="menu-open-btn menu-open-btn_js">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a title="<?php echo $website_title; ?>" class="fw-logo d-none d-lg-block" href="./">
                <!--Add your Logo-->
                <?php theme_get_picture('logo.svg', 'logo.svg', '', 'Your Logo', '', true) ?>
            </a>
            <a title="<?php echo $website_title; ?>" class="fw-logo d-lg-none text-center" href="./">
                <!--Add your Logo-->
                <?php theme_get_picture('logo.svg', 'logo.svg', '', 'Your Logo', '', true) ?>
            </a>
            <?php

                include (dirname(__DIR__).'/parts/menu-default.php');
                //include (dirname(__DIR__).'/parts/menu-flipping.php');

            ?>
        </div>
    </div>
</header>
<main class="fw-main">