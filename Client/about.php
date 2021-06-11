<?php
require('./sections/top.php')
?>

<div class="top-nav"></div>
<!-- Navigation Bar -->
<?php
require('./sections/navigation.php')
?>

<!-- Banner Section -->
<section class="banner" id="banner">
    <div id="bannerBgAddition" class="banner-addition-bg"></div>
    <div id="bannerBg" class="banner-bg"></div>
    <div class="container">
        <div class="row">
            <div class="banner-inner" id="bannerInner">
                <div class="content">
                    <div class="content-inner">
                        <h1>
                            <div class="line">
                                <span>About US</span>
                            </div>
                        </h1>
                        <p>Is where your vacations starts</p>
                        <div class="btn-row">
                            <a href="#">Explore Our top Destinations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require('./sections/footer.php');
?>