<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/css/style.css">
    <title>Booking - Home</title>
</head>

<body>
    <div class="top-nav"></div>
    <nav class="site-navigation">
        <span class="menu-title">Booking</span>
        <div id="header" class="header">
            <form class="nav__search-btn">
                <button>
                    <svg>
                        <use href="./images/icons.svg"></use>
                    </svg>
                </button>
                <input type="text" placeholder="Search Article ... " class="nav__search-input" />
            </form>
        </div>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="hotels.php">Hotels</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Hero Section -->
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
                                    <span>Helping clients with</span>
                                </div>
                                <div class="line">
                                    <span>their Dream Vacation</span>
                                </div>
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                                sunt doloremque repellendus pariatur ad. Necessitatibus
                                beatae, alias assumenda.
                            </p>
                            <div class="btn-row">
                                <a href="/blogs">Explore Articles</a>
                            </div>
                            <div class="play-video">
                                <div class="play-video cover"></div>
                                <span>
                                    <img src="" alt="play icon" />
                                    Watch Video
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <div class="image-inner">
                            <img src="./images/Rectangle.png" alt="">
                            <!-- <div class="feature-banner not-found" id="featureBanner">
                                Write to me
                            </div>
                            <div class="feature-banner green not-found" id="featureBannerGreen">
                                All answers here
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Hero Section -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
    <script src="./js/animation.js"></script>
</body>

</html>