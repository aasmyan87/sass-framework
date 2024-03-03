<?php
    include(dirname(__DIR__).'/inc/head.php');
    include (dirname(__DIR__).'/parts/nav.php');
    $menu = get_menu();
    $mobile_menu_html_icon = false;
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
            <a class="fw-logo" href="./">
                <!--Add your Logo-->
                <?php theme_get_picture('logo.svg', 'logo.svg', '', 'Your Logo', '', true) ?>
            </a>
            <nav role="navigation" class="mobile-nav_js fw-menu">
                <div class="fw-menu--mobile-head">
                    <div class="fw-menu--head-logo">
                        <a href="./">
                            <!--Add your Logo-->
                            <?php theme_get_picture('logo.svg', 'logo.svg', '', 'Your Logo', '', true) ?>
                        </a>
                    </div>
                    <div class="menu-close-btn menu-close-btn_js">
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="fw-menu--mobile-body">
                    <!--Start Menu -->
                    <ul class="general-menu_js fw-menu--nav">
                        <!--  1 Level-->
                        <?php $i = 0; foreach ($menu as $key => $value) {$i++; ?>
                            <li <?php if(!empty($value['class'])){echo "class=".$value['class'];} ?>>
                                <a href="<?php echo $value['link'] ?>">
                                    <?php echo $value['label'] ?>
                                </a>
                                <?php if (!empty($value['class'])): ?>
                                    <?php if( $mobile_menu_html_icon ) :?>
                                        <div class="mobile-menu-icon">
                                            <i class="lni lni-chevron-down"></i>
                                        </div>
                                    <?php endif; ?>
                                    <ul class="fw-menu--sub sub-menu_js">
                                        <!--  2 Level-->
                                        <?php $i = 0; foreach ($value['submenu'] as $key2 => $value2) { $i++; ?>
                                            <li <?php if(!empty($value2['class'])){echo "class=".$value2['class'];} ?>>
                                                <a href="<?php echo $value2['link'] ?>">
                                                    <?php echo $value2['label'] ?>
                                                </a>
                                                <?php if (!empty($value2['class'])): ?>
                                                    <?php if( $mobile_menu_html_icon ) :?>
                                                        <div class="mobile-menu-icon">
                                                            <i class="lni lni-chevron-down"></i>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if(!empty($value2['submenu2'])) : ?>
                                                        <ul class="fw-menu--sub sub-menu_js">
                                                            <!--  3 Level-->
                                                                <?php $i = 0; foreach ($value2['submenu2'] as $key3 => $value3) { $i++; ?>
                                                                    <li>
                                                                        <a href="<?php echo $value3['link'] ?>">
                                                                            <?php echo $value3['label'] ?>
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <!--End Menu -->
                </div>
            </nav>
        </div>
    </div>
</header>
<main class="fw-main">