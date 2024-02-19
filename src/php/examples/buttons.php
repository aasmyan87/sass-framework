<?php include('parts/header.php') ?>
<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">1. Buttons on [ button ] tag</h2>

        <button type="submit" class="md-btn btn-primary">Primary</button>

        <button type="submit" class="md-btn btn-secondary">Secondary</button>

        <button disabled type="submit" class="md-btn btn-primary">Disabled Button</button>

    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">2. Buttons on [ a ] tag</h2>

        <a href="" class="md-btn btn-primary">Primary</a>

        <a href="" class="md-btn btn-secondary">Secondary</a>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">3. Buttons on [ input ] tag</h2>

        <input type="button" value="Primary" class="md-btn btn-primary" />

        <input type="button" value="Secondary" class="md-btn btn-secondary" />

        <input disabled type="button" value="Disabled button" class="md-btn btn-primary" />

    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">4. File Button</h2>
        <div class="file-btn-wrap">
            <button class="md-btn btn-primary">Upload An Image</button>
            <input class="md-btn" type="file" />
        </div>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">5. Button With Left Icon</h2>
        <a class="md-btn btn-primary btn-icon btn-icon-left lni-chevron-left" href="#">
            Left Chevron
        </a>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-secondary">
    <div class="container">
        <h2 class="md-section--title">6. Button With Right Icon</h2>
        <a class="md-btn btn-primary btn-icon btn-icon-right lni-chevron-right" href="#">
            Right Chevron
        </a>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-secondary">
    <div class="container">
        <h2 class="md-section--title">7. Large Button Example</h2>
        <a class="md-btn btn-primary btn-lg" href="#">
            Large Button Primary
        </a>
        <a class="md-btn btn-secondary btn-lg" href="#">
            Large Button Secondary
        </a>
    </div>
</section>
<?php include('parts/footer.php') ?>
