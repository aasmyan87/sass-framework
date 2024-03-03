<?php

$menu = get_menu();
global $website_title;
?>
<nav role="navigation" class="mobile-nav_js fw-menu">
    <div class="fw-menu--mobile-head">
        <div class="fw-menu--head-logo">
            <a title="<?php echo $website_title; ?>" href="./">
                <!--Add your Logo-->
                <?php theme_get_picture('logo.svg', 'logo.svg', '', 'Your Logo', '', true) ?>
            </a>
        </div>
        <button aria-label="Close Mobile Menu" class="menu-close-btn menu-close-btn_js">
            <span></span>
            <span></span>
        </button>
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
                        <ul class="fw-menu--sub sub-menu_js">
                            <!--  2 Level-->
                            <?php $i = 0; foreach ($value['submenu'] as $key2 => $value2) { $i++; ?>
                                <li <?php if(!empty($value2['class'])){echo "class=".$value2['class'];} ?>>
                                    <a href="<?php echo $value2['link'] ?>">
                                        <?php echo $value2['label'] ?>
                                    </a>
                                    <?php if (!empty($value2['class'])): ?>
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