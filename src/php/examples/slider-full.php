<?php include('parts/header.php') ?>

<?php

$slides = [
    1 => [
        'title' => 'Slide Content 1',
        'title-class' => 'color-white'
    ],
    2 => [
        'title' => 'Slide Content 2',
        'title-class' => 'color-black'
    ],
    3 => [
        'title' => 'Slide Content 3',
        'title-class' => 'color-white'
    ],
]

?>
<section>
    <div class="fw-fsl">
        <div id="full-slider_js" class="slick-slider slick-preloader">
            <?php foreach ($slides as $key => $slide) {  ?>
                <div class="fw-fsl--slide">
                    <div class="fw-fsl--inner">
                        <div class="fw-fsl--content container">
                            <h1 class="<?php echo $slide['title-class'] ?> text-center"><?php echo $slide['title'] ?></h1>
                        </div>
                        <img src="../src/images/bg-<?php echo $key; ?>.jpg" alt="<?php echo $slide['title'] ?>">
                    </div>
                </div>
            <?php  } ?>
        </div>
        <div class="fw-fsl--arrw">
            <button aria-label="Prev Slide" class="arrw-prev">
                <i class="icon-angle-left"></i>
            </button>
            <button aria-label="Next Slide" class="arrw-next">
                <i class="icon-angle-right"></i>
            </button>
        </div>
        <div id="fw-fsl-dots_js" class="fw-fsl--dots"></div>
    </div>

</section>

<section class="fw-section">
    <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur modi perspiciatis saepe unde.
            Adipisci animi at, cupiditate, dolore dolores ea harum iste molestiae necessitatibus nisi officia,
            tempora unde vel!</p>
        <p>Asperiores atque dolores facere incidunt ipsum modi nulla, obcaecati odio quas quibusdam quis quo ratione
            sequi suscipit vero? Enim fugit laudantium maxime optio tenetur! Aliquam dicta dignissimos fuga iste
            mollitia!</p>
        <p>Maiores natus optio pariatur porro reprehenderit sapiente sit vero. Aut deleniti dolores ea enim facilis,
            harum illum, impedit minus perferendis quis reprehenderit sed sequi ullam voluptates voluptatibus! A
            eos, nemo.</p>
        <p>Ab architecto eligendi nesciunt, obcaecati ratione sapiente voluptas voluptate? A ad animi aperiam atque
            aut corporis delectus dolorem error et facere labore laboriosam, maxime nobis nulla, quia quos tempora,
            voluptatibus.</p>
        <p>Corporis deleniti explicabo libero minus placeat! Aliquid beatae deserunt dignissimos eligendi, et facere
            iste mollitia odit officia, omnis porro quisquam quos rem saepe similique tempore vero. Eveniet maxime
            quia sint.</p>
        <p>A accusamus accusantium at atque beatae cupiditate deleniti deserunt dignissimos doloremque earum eum
            fugit illum molestiae necessitatibus nesciunt nobis non, quae quasi rem sunt! Animi debitis hic omnis
            quidem quod.</p>
        <p>Accusamus, beatae, dolores doloribus earum, esse iusto obcaecati optio placeat quam qui suscipit
            voluptates. Adipisci at, commodi dolor dolorem officiis pariatur perferendis quam rerum sapiente. Alias
            consequatur dolor laborum tempore!</p>
        <p>A aliquam atque ducimus eaque eos esse facere facilis id iure odit officia omnis optio, praesentium
            repudiandae rerum saepe sint. Aliquid, animi quasi! Doloremque eveniet labore quibusdam repellendus
            tenetur, vero.</p>
        <p>Accusantium amet corporis debitis earum, eos est explicabo inventore ipsam laborum minus repellat
            temporibus, tenetur voluptas? Aperiam ipsa laboriosam molestias obcaecati repellendus. Eos est, iste
            iusto porro quis reprehenderit tempore.</p>
        <p>Accusamus adipisci debitis delectus dolorem doloremque hic in inventore ipsa, laboriosam modi
            necessitatibus nemo non perferendis quidem quisquam quod quos reiciendis reprehenderit suscipit
            veritatis. In laudantium omnis quasi rerum vel!</p>
    </div>
</section>
<?php include('parts/footer.php') ?>
