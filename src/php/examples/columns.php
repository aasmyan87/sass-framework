<?php include('parts/header.php') ?>
<section class="md-section">
    <div class="container">
        <h2 class="md-section--title">Columns</h2>
        <div class="row gy-15">
            <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid assumenda atque blanditiis, culpa deleniti deserunt dolore eaque, fugiat illo libero magnam nisi numquam odit praesentium quis repudiandae tenetur veritatis.
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis
                dolore dolorem laboriosam modi molestias numquam quas quos similique sint. Asperiores
                consectetur cum dicta iure odio omnis praesentium, ut vero!
            </div>
            <div class="col-md-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum labore non quos
                ratione. A explicabo incidunt modi neque nihil nisi quos rerum sit voluptas. Modi molestiae
                mollitia quas quo voluptas!
            </div>
        </div>
    </div>
</section>

<section class="md-section">
    <div class="container">
        <h2 class="md-section--title">Image Object feet Columns</h2>
        <div class="row gy-15">
            <div class="col-md-4">
                <?php theme_get_picture('col-img-1x.jpg', 'col-img-2x.jpg', 'obj-img md-col-img', 'Column Image', true, false); ?>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid assumenda atque blanditiis, culpa deleniti deserunt dolore eaque, fugiat illo libero magnam nisi numquam odit praesentium quis repudiandae tenetur veritatis.
            </div>
            <div class="col-md-4">
                <?php theme_get_picture('col-img-1x.jpg', 'col-img-2x.jpg', 'obj-img md-col-img', 'Column Image', true, false); ?>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus debitis
                dolore dolorem laboriosam modi molestias numquam quas quos similique sint. Asperiores
                consectetur cum dicta iure odio omnis praesentium, ut vero!
            </div>
            <div class="col-md-4">
                <?php theme_get_picture('col-img-1x.jpg', 'col-img-2x.jpg', 'obj-img md-col-img', 'Column Image', true, false); ?>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum labore non quos
                ratione. A explicabo incidunt modi neque nihil nisi quos rerum sit voluptas. Modi molestiae
                mollitia quas quo voluptas!
            </div>
        </div>
    </div>
</section>

<?php include('parts/footer.php') ?>
