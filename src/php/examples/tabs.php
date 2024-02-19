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
<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">Horizontal Tabs</h2>
        <div class="md-tb">
            <div  class="md-tb--head">
                <ul class="md-tb--nav">
                    <?php foreach ($tabs_hor as $key => $value) { ?>
                        <li data-tab="tab<?php echo $key; ?>" class="<?php echo $value['class']; ?>">
                            <a class="tabs-nav_js"  href="#">
                                <?php echo $value['label']; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="md-tb--tabs">
                <?php foreach ($tabs_hor as $key => $value) { ?>
                    <div id="tab<?php echo $key; ?>" class="md-tb--content <?php echo $value['class']; ?>">
                        <a class="md-tb--nav-mob acc-nav_js <?php echo $value['class']; ?>" href="#" >
                            <span><?php echo $value['label']; ?></span>
                            <span class="md-tb--ico">></span>
                        </a>
                        <div class="md-tb--inner">
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
<section class="md-section">
    <div class="container">
        <h2 class="md-section--title">Vertical Tabs</h2>
        <div class="md-tb">
            <div class="row">
                <div class="col-md-4">
                    <div  class="md-tbv--head">
                        <ul class="md-tbv--nav">
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
                    <div class="md-tbv--tabs">
                        <?php foreach ($tabs_ver as $key => $value) { ?>
                            <div id="tabb<?php echo $key; ?>" class="md-tbv--content <?php echo $value['class']; ?>">
                                <a class="md-tbv--nav-mob acc-nav_js <?php echo $value['class']; ?>" href="#" >
                                    <span><?php echo $value['label']; ?></span>
                                    <span class="md-tbv--ico">></span>
                                </a>
                                <div class="md-tbv--inner">
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
