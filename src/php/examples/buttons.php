<?php include('parts/header.php') ?>
<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">1. Buttons on [ button ] tag</h2>

        <button type="submit" class="fw-btn btn-primary">Primary</button>

        <button type="submit" class="fw-btn btn-secondary">Secondary</button>

        <button disabled type="submit" class="fw-btn btn-primary">Disabled Button</button>

    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">2. Buttons on [ a ] tag</h2>

        <a href="" class="fw-btn btn-primary">Primary</a>

        <a href="" class="fw-btn btn-secondary">Secondary</a>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">3. Buttons on [ input ] tag</h2>

        <input type="button" value="Primary" class="fw-btn btn-primary" />

        <input type="button" value="Secondary" class="fw-btn btn-secondary" />

        <input disabled type="button" value="Disabled button" class="fw-btn btn-primary" />

    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">4. File Button</h2>
        <div class="file-btn-wrap">
            <button class="fw-btn btn-primary">Upload An Image</button>
            <input class="fw-btn" type="file" />
        </div>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">5. Button With Left Icon</h2>
        <a class="fw-btn btn-primary btn-icon btn-icon-left lni-chevron-left" href="#">
            Left Chevron
        </a>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-secondary">
    <div class="container">
        <h2 class="fw-section--title">6. Button With Right Icon</h2>
        <a class="fw-btn btn-primary btn-icon btn-icon-right lni-chevron-right" href="#">
            Right Chevron
        </a>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-secondary">
    <div class="container">
        <h2 class="fw-section--title">7. Large Button Example</h2>
        <a class="fw-btn btn-primary btn-lg" href="#">
            Large Button Primary
        </a>
        <a class="fw-btn btn-secondary btn-lg" href="#">
            Large Button Secondary
        </a>
    </div>
</section>
<?php include('parts/footer.php') ?>
