        <!-- banner-section -->
        <section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
                <?php
                $sliderpram = array();
                $sliders = $core->getslider($sliderpram);
                $ie = 0;
                foreach ($sliders as $slider) {  ?>
                    <div class="slide-item bg-left">
                        <div class="image-layer" style="background-image:url(images/<?= $slider["image"] ?>)"></div>
                        <div class="container">
                            <div class="row clearfix">
                                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                                    <div class="content-box">
                                        <h1><?= $slider["title" . $clang] ?><h1>
                                                <div class="btn-box">
                                                    <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="theme-btn"><?= getTitle("about" . $plang) ?><i class="flaticon-login"></i></a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </section>
        <!-- banner-section end -->