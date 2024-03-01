<?php
include('parts/header.php');
$tabs = [
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

<section class="fw-section has-bg">
    <div class="container">
        <h2 class="fw-section--title">Accordion</h2>
        <div class="fw-acc">
            <?php foreach ($tabs as $key => $value) { ?>
                <div class="fw-acc--item">
                    <a class="fw-acc--nav ac-nav_js <?php echo $value['class']; ?>" href="#" >
                        <span><?php echo $value['label']; ?></span>
                        <i class="fw-acc--ico icon-angle-down"></i>
                    </a>
                    <div class="fw-acc--content">
                        <?php if($key == 1) : ?>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet commodi corporis in iure laborum molestias quo temporibus! Accusamus doloribus eligendi enim exercitationem ipsum laborum non pariatur perspiciatis ratione saepe.
                        <?php elseif ($key == 2) :?>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolore eaque facere magnam natus nobis optio repellendus repudiandae sint vero. At autem deleniti eveniet maiores officia? Beatae consectetur deserunt quaerat.
                        <?php elseif ($key == 3) :?>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet at corporis distinctio doloremque hic incidunt inventore iste laborum sequi velit.
                        <?php elseif ($key == 4) :?>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, molestias?
                        <?php elseif ($key == 5) :?>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur dignissimos, dolore ipsam optio repudiandae. Ad alias consequatur consequuntur cumque, delectus deleniti dolor dolore earum excepturi expedita facere id iusto laudantium non numquam optio quidem soluta temporibus ullam vero vitae?
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include('parts/footer.php') ?>
