<?php
session_start();
include 'db_connect.php';
?>

<section class="card-section" id="featureBannerGreen">
    <div class="container1">
        <?php
        $ret = mysqli_query($db_connection, 'select * from logement');
        $row = mysqli_num_rows($ret);
        if ($row > 0) {
            while ($row = mysqli_fetch_array($ret)) {
        ?>
                <div class="card">
                    <div class="card-header">
                        <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-teal"><?php echo $row['item_brand']; ?></span>
                        <h4><?php echo $row['item_name']; ?></h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos
                            sunt doloremque repellendus pariatur ad. Necessitatibus
                            beatae, alias assumenda.
                        </p>
                        <div class="user">
                            <a href="details.php"><button>Book Now</button></a>
                            <div class="user-info">
                                <h5>$<?php echo $row['item_price']; ?>/<small>day</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                // $cnt = $cnt + 1;
            }
        } else { ?>
            <p style="text-align:center; color:red;" colspan="6">No Record Found</p>
        <?php } ?>


        <!-- <div class="card">
            <div class="card-header">
                <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
            </div>
            <div class="card-body">
                <span class="tag tag-purple">Popular</span>
                <h4>
                    How to Keep Going When You Don’t Know What’s Next
                </h4>
                <p>
                    The future can be scary, but there are ways to
                    deal with that fear.
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
            </div>
            <div class="card-body">
                <span class="tag tag-pink">Design</span>
                <h4>
                    10 Rules of Dashboard Design
                </h4>
                <p>
                    Dashboard Design Guidelines
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
            </div>
            <div class="card-body">
                <span class="tag tag-purple">Popular</span>
                <h4>
                    How to Keep Going When You Don’t Know What’s Next
                </h4>
                <p>
                    The future can be scary, but there are ways to
                    deal with that fear.
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
            </div>
            <div class="card-body">
                <span class="tag tag-teal">Technology</span>
                <h4>
                    Why is the Tesla Cybertruck designed the way it
                    is?
                </h4>
                <p>
                    An exploration into the truck's polarising design
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
            </div>
            <div class="card-body">
                <span class="tag tag-purple">Popular</span>
                <h4>
                    How to Keep Going When You Don’t Know What’s Next
                </h4>
                <p>
                    The future can be scary, but there are ways to
                    deal with that fear.
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
            </div>
            <div class="card-body">
                <span class="tag tag-pink">Design</span>
                <h4>
                    10 Rules of Dashboard Design
                </h4>
                <p>
                    Dashboard Design Guidelines
                </p>
                <div class="user">
                    <a href="details.php"><button>Book Now</button></a>
                    <div class="user-info">
                        <h5>$109/<small>day</small></h5>
                    </div>
                </div>
            </div>
        </div> -->
</section>