<?
$pagg = 2;
include  "inc.php";
?>
<!-- About Us Area -->
<section class="about_us_area row2">
    <div class="container">
        <div class=" about_row block-contents checked-features-list my-5">
            <div class="subtittle">
                <h2><?= $pageTitle ?></h2>
            </div>
            <!-- <div class="group-title">
                <div class="line" style="background-image: url(images/icons/line-4.png);"></div>
                <h3><?= $pageTitle ?></h3>
            </div> -->
            <div class="row">
                <div class="who_we_area col-md-8 col-sm-12">
                    <p><?= getValue("about", $lang) ?></p>
                </div>
                <div class="col-lg-4">
                    <div class="quote-image">
                        <img src="images/map-cover.png" alt="google-map">

                        <div class="google-map">
                            <img src="images/about.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us Area -->
<?php include "inc/footer.php" ?>