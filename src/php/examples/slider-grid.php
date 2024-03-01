<?php include('parts/header.php') ?>

<?php

$slides = [
    1 => [
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur felis eu semper condimentum. Cras viverra lectus id risus porttitor convallis. Morbi finibus massa velit, id bibendum tortor viverra et. Vestibulum a turpis placerat quam placerat faucibus. Etiam sed diam at magna placerat consequat ac eget lacus.'
    ],
    2 => [
        'text' => 'Etiam vel tortor non neque sodales ornare at id nulla. Cras in dictum nulla, sed tempor magna. Quisque et pellentesque metus, a placerat magna.'
    ],
    3 => [
        'text' => 'Nulla quis faucibus augue. Aliquam dapibus justo sed mauris dignissim, accumsan dignissim tellus consequat. Nunc fermentum, erat pretium bibendum varius, dolor augue venenatis diam, non ultrices sapien risus nec tortor. Aenean nec lobortis dui, sit amet consectetur nibh. In eu eros quis neque vulputate egestas.'
    ],
    4 => [
        'text' => 'Aliquam eu sapien at sem feugiat rhoncus. Fusce est turpis, volutpat eget nisl at, molestie accumsan dui. '
    ],
    5 => [
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur felis eu semper condimentum. Cras viverra lectus id risus porttitor convallis. Morbi finibus massa velit, id bibendum tortor viverra et. Vestibulum a turpis placerat quam placerat faucibus. Etiam sed diam at magna placerat consequat ac eget lacus.'
    ],
    6 => [
        'text' => 'Nulla quis faucibus augue. Aliquam dapibus justo sed mauris dignissim, accumsan dignissim tellus consequat. Nunc fermentum, erat pretium bibendum varius, dolor augue venenatis diam, non ultrices sapien risus nec tortor. Aenean nec lobortis dui, sit amet consectetur nibh. In eu eros quis neque vulputate egestas.'
    ],
]

?>
<section class="fw-section">
    <div class="container">
        <div class="fw-gsl">
            <button aria-label="Prev Slide" class="arrw-prev remove-gsl-arrow-preload">
                <i class="lni lni-chevron-left"></i>
            </button>
            <div class="fw-gsl--outer remove-gsl-preload-height">
                <div id="grid-slider_js" class="slick-slider slick-preloader">
                    <?php foreach ($slides as $key => $slide) {  ?>
                        <div class="">
                            <div class="fw-gsl--inner">
                                <?php echo $slide['text']; ?>
                            </div>
                        </div>
                    <?php  } ?>
                </div>
                <div id="fw-fgl-dots_js" class="fw-fgl--dots"></div>
            </div>
            <button aria-label="Next Slide" class="arrw-next remove-gsl-arrow-preload">
                <i class="lni lni-chevron-right"></i>
            </button>
            <div id="fw-gsl-dots_js" class="fw-gsl--dots"></div>
        </div>
    </div>
</section>

<section class="fw-section bg-secondary has-bg">
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
