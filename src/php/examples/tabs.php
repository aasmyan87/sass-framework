<?php include('parts/header.php') ?>


<?php
$tabs_hor = [
    1 => [
        'label' => 'Tab 1',
        'class' => 'active',
    ],
    2 => [
        'label' => 'Tab 2',
        'class' => '',
    ],
    3 => [
        'label' => 'Tab 3',
        'class' => '',
    ],
    4 => [
        'label' => 'Tab 4',
        'class' => '',
    ],
    5 => [
        'label' => 'Tab 5',
        'class' => '',
    ],

];
?>
<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">Horizontal Tabs</h2>
        <div class="fw-tb">
            <div  class="fw-tb--head">
                <ul class="fw-tb--nav">
                    <?php foreach ($tabs_hor as $key => $value) { ?>
                        <li data-tab="tab<?php echo $key; ?>" class="<?php echo $value['class']; ?>">
                            <a class="tabs-nav_js"  href="#">
                                <?php echo $value['label']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="fw-tb--tabs">
                <?php foreach ($tabs_hor as $key => $value) { ?>
                    <div id="tab<?php echo $key; ?>" class="fw-tb--content <?php echo $value['class']; ?>">
                        <a class="fw-tb--nav-mob acc-nav_js <?php echo $value['class']; ?>" href="#" >
                            <span><?php echo $value['label']; ?></span>
                            <span class="fw-tb--ico">></span>
                        </a>
                        <div class="fw-tb--inner">
                            <?php if($key == 1) : ?>
                                Content 1
                            <?php elseif ($key == 2) :?>
                                Content 2
                            <?php elseif ($key == 3) :?>
                                Content 3
                            <?php elseif ($key == 4) :?>
                                Content 4
                            <?php elseif ($key == 5) :?>
                                Content 5
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php
$tabs_ver = [
    1 => [
        'label' => 'Tab 1',
        'class' => 'active',
    ],
    2 => [
        'label' => 'Tab 2',
        'class' => '',
    ],
    3 => [
        'label' => 'Tab 3',
        'class' => '',
    ],
    4 => [
        'label' => 'Tab 4',
        'class' => '',
    ],
    5 => [
        'label' => 'Tab 5',
        'class' => '',
    ],

];
?>
<section class="fw-section">
    <div class="container">
        <h2 class="fw-section--title">Vertical Tabs</h2>
        <div class="fw-tb">
            <div class="row">
                <div class="col-md-4">
                    <div  class="fw-tbv--head">
                        <ul class="fw-tbv--nav">
                            <?php foreach ($tabs_ver as $key => $value) { ?>
                                <li data-tab="tabb<?php echo $key; ?>" class="<?php echo $value['class']; ?>">
                                    <a class="tabs-nav_js"  href="#">
                                        <?php echo $value['label']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="fw-tbv--tabs">
                        <?php foreach ($tabs_ver as $key => $value) { ?>
                            <div id="tabb<?php echo $key; ?>" class="fw-tbv--content <?php echo $value['class']; ?>">
                                <a class="fw-tbv--nav-mob acc-nav_js <?php echo $value['class']; ?>" href="#" >
                                    <span><?php echo $value['label']; ?></span>
                                    <span class="fw-tbv--ico">></span>
                                </a>
                                <div class="fw-tbv--inner">
                                    <?php if($key == 1) : ?>
                                        Content 1
                                    <?php elseif ($key == 2) :?>
                                        Content 2
                                    <?php elseif ($key == 3) :?>
                                        Content 3
                                    <?php elseif ($key == 4) :?>
                                        Content 4
                                    <?php elseif ($key == 5) :?>
                                        Content 5
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('parts/footer.php') ?>
