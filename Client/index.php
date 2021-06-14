<?php
require('./sections/top.php')
?>
<div class="top-nav"></div>
<!-- Navigation Bar -->
<?php
require('./sections/navigation.php')
?>
<!-- End Of Navigation Bar -->

<!-- Hero Section -->
<?php
require('./sections/banner.php');
?>
<!-- End of Hero Section -->

<!-- Product Sections -->
<?php
require('./sections/card.php');
?>
<!-- End Of Product Sections -->

<!-- About Section -->
<section class="section-about">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
            Exciting tours for adventurous people
        </h2>
    </div>

    <div class="row">
        <div class="col-1-of-2">
            <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
            <p class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                ducimus quam nisi exercitationem omnis earum qui.
            </p>

            <h3 class="heading-tertiary u-margin-bottom-small">Live adventures like you never have before</h3>
            <p class="paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nulla deserunt voluptatum nam.
            </p>

            <a href="about.php" class="btn-text">Learn more &rarr;</a>
        </div>
        <div class="col-1-of-2">
            <div class="composition">

                <img alt="Photo 1" class="composition__photo composition__photo--p1" src="./images/Rectangle.png" />

                <img alt="Photo 1" class="composition__photo composition__photo--p2" src="./images/Rectangle 27.png" />

                <img alt="Photo 3" class="composition__photo composition__photo--p3" src="./images/Rectangle 28.png" />

                <!--
                            <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                            -->
            </div>
        </div>
    </div>
</section>
<!-- End of About Section -->

<!-- Feature Section -->
<section class="section-features">

    <div class="row">
        <div class="col-1-of-4">
            <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                <p class="feature-box__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <div class="feature-box">
                <i class="feature-box__icon icon-basic-compass"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                <p class="feature-box__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <div class="feature-box">
                <i class="feature-box__icon icon-basic-map"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                <p class="feature-box__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                </p>
            </div>
        </div>

        <div class="col-1-of-4">
            <div class="feature-box">
                <i class="feature-box__icon icon-basic-heart"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">Live a healthier life</h3>
                <p class="feature-box__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End of Feature Section -->

<!-- Stories Section -->
<section class="section-stories">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">
            We make people genuinely happy
        </h2>
    </div>

    <div class="row">
        <div class="story">
            <figure class="story__shape">
                <img src="./images/nat-8.jpg" alt="Person on a tour" class="story__img">
                <figcaption class="story__caption">Mary Smith</figcaption>
            </figure>
            <div class="story__text">
                <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                    ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                    repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                </p>
            </div>
        </div>
    </div>

    <div class="u-center-text u-margin-top-huge">
        <a href="#" class="btn-text">Read all stories &rarr;</a>
    </div>
</section>
<!-- Stories Section -->

<?php
require('./sections/footer.php');
?>