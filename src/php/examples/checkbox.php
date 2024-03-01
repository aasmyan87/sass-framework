<?php include('parts/header.php') ?>
<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--tiitle">
            Radios in label
        </h2>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="radio" name="radio">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate doloribus nemo placeat quos. Ab accusamus blanditiis deleniti dignissimos dolorum eos, fugiat ipsa modi, nulla obcaecati provident, repellat suscipit voluptas.</span>
            </label>
        </div>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="radio" name="radio">
                <span>Radio</span>
            </label>
        </div>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="radio" name="radio" disabled>
                <span>Radio</span>
            </label>
        </div>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--tiitle">
            Checkboxes in label
        </h2>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="checkbox" name="checkbox">
                <span>Lorem ipsum dolor</span>
            </label>
        </div>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="checkbox" name="checkbox">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate doloribus nemo placeat quos. Ab accusamus blanditiis deleniti dignissimos dolorum eos, fugiat ipsa modi, nulla obcaecati provident, repellat suscipit voluptas.</span>
            </label>
        </div>
        <div class="">
            <label class="fw-chk-rad chk-rad-primary">
                <input type="checkbox" name="checkbox" disabled>
                <span>Lorem ipsum dolor</span>
            </label>
        </div>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">
            Radios out of label
        </h2>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="radio" id="radio1" name="radio">
            <label for="radio1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate doloribus nemo placeat quos. Ab accusamus blanditiis deleniti dignissimos dolorum eos, fugiat ipsa modi, nulla obcaecati provident, repellat suscipit voluptas.
            </label>
        </div>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="radio" id="radio2" name="radio">
            <label for="radio2">
                Radio
            </label>
        </div>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="radio" id="radio3" name="radio" disabled>
            <label for="radio3">
                Radio
            </label>
        </div>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">
            Checkbox out of label
        </h2>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="checkbox" id="checkbox1" name="radio">
            <label for="checkbox1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cupiditate doloribus nemo placeat quos. Ab accusamus blanditiis deleniti dignissimos dolorum eos, fugiat ipsa modi, nulla obcaecati provident, repellat suscipit voluptas.
            </label>
        </div>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="checkbox" id="checkbox2" name="radio">
            <label for="checkbox2">
                Checkbox
            </label>
        </div>
        <div class="fw-checkbox-radio checkbox-radio-primary">
            <input type="checkbox" id="checkbox3" name="radio" disabled>
            <label for="checkbox3">
                Checkbox
            </label>
        </div>
    </div>
</section>

<section class="fw-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="fw-section--title">
            Switch
        </h2>
        <label class="fw-switch switch-primary">
            <input id="ship-to-different-address-checkbox" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox" type="checkbox" name="ship_to_different_address" value="1">
            <span></span>
        </label>
    </div>
</section>
<?php include('parts/footer.php') ?>
