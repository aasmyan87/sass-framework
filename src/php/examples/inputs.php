<?php include('parts/header.php') ?>
<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">1. Basic input + button</h2>
        <form action="">
            <div class="row gy-15 gx-15">
                <div class="col-sm">
                    <input type="text" class="md-input input-primary" placeholder="Email"/>
                </div>
                <div class="col-sm-auto">
                    <input type="button" class="md-btn btn-block btn-primary" value="Subscribe"/>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">2. Custom color scheme input</h2>
        <form action="">
            <div class="row gy-15 gx-15">
                <div class="col-sm">
                    <input type="text" class="md-input input-custom" placeholder="Emial"/>
                </div>
                <div class="col-sm-auto">
                    <input type="button" class="md-btn btn-block btn-primary"  value="Subscribe"/>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">3. Custom size input and button</h2>
        <form action="">
            <div class="row gy-15 gx-15">
                <div class="col-sm">
                    <input type="text" class="md-input input-primary input-lg" placeholder="Emial"/>
                </div>
                <div class="col-sm-auto">
                    <input type="button" class="md-btn btn-block btn-primary btn-lg"  value="Subscribe"/>
                </div>
            </div>
        </form>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">4. Form and validation with icon input</h2>
        <form id="myform" novalidate="novalidate">
            <div class="row gy-15">
                <div class="col-sm-12">
                    <label for="firstname" class="md-label">First Name</label>
                    <div class="md-input-icon lni-user">
                        <input required type="text" name="firstname" id="firstname"  class="md-input input-primary" placeholder="First Name">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="lastname" class="md-label">Last Name</label>
                    <div class="md-input-icon lni-user">
                        <input required type="text" name="lastname" id="lastname" class="md-input input-primary" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="email" class="md-label">Email</label>
                    <div class="md-input-icon lni-envelope">
                        <input required type="email" id="email" name="email" class="md-input input-primary" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label for="message" class="md-label">Your Massage</label>
                    <textarea placeholder="Your Massage" name="message" id="message" class="md-input input-primary" cols="30" rows="10"></textarea>
                </div>
                <div class="col-sm-12">
                    <input type="submit" value="Send your massage" class="md-btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</section>

<section class="md-section has-bg brd-bottom brd-primary">
    <div class="container">
        <h2 class="md-section--title">
            5. Default Select
        </h2>
        <label for="select">Choose your option</label>
        <select class="md-input input-primary" name="" id="select">
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
            <option value="">Option 4</option>
            <option value="">Option 5</option>
            <option value="">Option 6</option>
            <option value="">Option 7</option>
            <option value="">Option 8</option>
            <option value="">Option 9</option>
            <option value="">Option 10</option>
        </select>
    </div>
</section>
<?php include('parts/footer.php') ?>
