<?php
$pagg = 7;
include "inc.php";
$id =  isv("level");
$name = isv("name");
$prodpram = array();
if ($id)
    $prodpram = array("id" => $id);
if ($name)
    $prodpram = array("name" => $name);
$islevel = false;
$products = $core->getproducts($prodpram);
if ($id && !$products[0]["level"]) {
    $prodpram = array("level" => $products[0]["id"]);
    $lproducts = $core->getproducts($prodpram);
    $p_name = $products[0]["name" . $clang];
    if ($lproducts) {
        $islevel = $products[0]["name" . $clang];
        $products = $lproducts;
    }
}
?>
<style type="text/css">
    .tittle {
        margin-bottom: 60px;
    }

    .services-bl {
        padding: 5px;
    }

    .services-bl img {
        width: 100%;
    }

    .service-details-content .upper-box .text p {
        font-size: 15px;
        font-weight: normal;
        color: #5a5a68;
        margin-bottom: 25px;
        margin-top: 15px;
    }

    .single-service-sidebar .service-pages li a .title h3 {
        color: #131313;

    }

    .single-service-sidebar .service-pages li a .icon span:before {

        color: #131313;

    }

    .single-service-sidebar .service-pages li:hover a .title,
    .single-service-sidebar .service-pages li.active a .title {
        background: #5b3230;
    }

    .single-service-sidebar .service-pages li:hover a .icon,
    .single-service-sidebar .service-pages li.active a .icon {
        background: #131313;
        border-color: #131313;
    }

    .single-service-sidebar .service-pages li.active a .title h3 {
        color: #ffff;
    }

    .single-service-sidebar .single-sidebar .service-title h3 {
        color: #000;
    }

    .single-service-image-box img {
        width: 100%;
        max-height: 500px;
    }

    .single-service-sidebar .service-pack-download li {
        position: relative;
        display: block;
        background: #131313;
        transition: all 500ms ease;
        padding: 23px 40px 23px;
    }

    .single-pricing-box {

        padding: 2px;

    }

    .single-pricing-box .inner {

        padding: 0px;
    }

    .col-md-3.col-sm-6.galley img {
        display: inline-block;
        float: none;
        height: 150px;
        position: relative;
        overflow: hidden;
    }
</style>
<div id="slides" class="services services-style1-area">
    <div class="container">

        <div class="subtittle">
            <h2><?= ($name ? ($plang ? "نتيجة البحث عن  ' " . $name . " '" : "Search result for ' " . $name . " '") : ($id ? $p_name : getTitle("services" . $plang))) ?></h2>
        </div>

        <div class="serv_carosele services-area row ">


            <?php
            if ($products)
                for ($i = 0; $i < count($products); $i++) {
                    if (!$id || $islevel) {
                        if (!$id && !$islevel && $products[$i]["level"])
                            continue;
                        $link = $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang);

            ?>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="single-services-item">
                            <div class="image">
                                <a href="<?= $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang) ?>">
                                    <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>" />
                                </a>
                            </div>
                            <div class="content">
                                <h3>
                                    <a href="<?= $core->getPageUrl(array($products[$i]['id'], $products[$i]['name' . $clang]), "products" . $plang) ?>"><?= $products[$i]["name" . $clang] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>


                <?php } else { ?>
                    <section style="transform: none;">
                        <div class="w-100 pt3-100 pb3-100 position-relative" style="transform: none;">
                            <div class="container" style="transform: none;">
                                <div class="post-detail-wrap w-100" style="transform: none;">
                                    <div class="row" style="transform: none;">
                                        <div class="col-md-12 col-sm-12 col-lg-8">
                                            <div class="service-details-content">
                                                <div class="upper-box">
                                                    <div class="group-title">
                                                        <div class="line" style="background-image: url(images/icons/line-4.png);"></div>
                                                        <h3><?= $products[$i]["name" . $clang] ?></h3>
                                                    </div>
                                                    <figure class="image-box">
                                                        <img src="images/<?= $products[$i]["image"] ?>" alt="">

                                                    </figure>
                                                    <div class="text">
                                                        <?= $products[$i]["description" . $clang] ?>
                                                    </div>
                                                    <?php

                                                    if ($pagg == 7) {

                                                        $videospaaaarm = array("product_id" => $products[0]["id"]);

                                                        $videos = $core->getproducts_images($videospaaaarm);
                                                    } else if ($pagg == 6) {

                                                        $videospaaaarm = array("event_id" => $products[0]["id"]);

                                                        $videos = $core->geteventimages($videospaaaarm);
                                                    } else {

                                                        $videospaaaarm = array("services_id" => $products[0]["id"]);

                                                        $videos = $core->getservices_images($videospaaaarm);
                                                    }

                                                    if ($videos) {

                                                    ?>
                                                        <div class="detail-gal w-100">
                                                            <div class="row">
                                                                <?php

                                                                for ($i = 0; $i < count($videos); $i++) { ?>
                                                                    <div class="col-md-6 col-sm-4 col-lg-3">
                                                                        <a href="images/<?= $videos[$i]["image"] ?>" data-fancybox="gallery" title=""><img style="height: 200px;
    width: 100%;" class="img-fluid" src="images/<?= $videos[$i]["image"] ?>" alt="Blog Detail Gallery Image 1"></a>
                                                                    </div>
                                                                <? } ?>

                                                            </div>
                                                        </div>

                                                    <? } ?>
                                                </div>
                                            </div>
                                            <div class="blog-details-content">



                                                <div class="post-share-option clearfix">

                                                    <ul class="social-links pull-right clearfix">
                                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?= $FUr ?>"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="http://twitter.com/share?text=<?= $products[0]["smoll_description" . $clang] ?>&amp;url=<?= $FUr ?>"><i class="fab fa-twitter"></i></a></li>

                                                    </ul>
                                                </div>




                                            </div>
                                            <div class="theiaStickySidebar" style="display:none">
                                                <div class="post-detail w-100">
                                                    <img class="img-fluid w-100" src="images/<?= $products[$i]["image"] ?>" alt="Blog Detail Image">
                                                    <h2 class="mb-0"><?= $products[$i]["name" . $clang] ?></h2>
                                                    <p class="mb-0"><?= $products[$i]["description" . $clang] ?></p>

                                                    <?php

                                                    if ($pagg == 7) {

                                                        $videospaaaarm = array("product_id" => $products[0]["id"]);

                                                        $videos = $core->getproducts_images($videospaaaarm);
                                                    } else if ($pagg == 6) {

                                                        $videospaaaarm = array("event_id" => $products[0]["id"]);

                                                        $videos = $core->geteventimages($videospaaaarm);
                                                    } else {

                                                        $videospaaaarm = array("services_id" => $products[0]["id"]);

                                                        $videos = $core->getservices_images($videospaaaarm);
                                                    }

                                                    if ($videos) {

                                                    ?>
                                                        <div class="detail-gal w-100">
                                                            <div class="row">
                                                                <?php

                                                                for ($i = 0; $i < count($videos); $i++) { ?>
                                                                    <div class="col-md-6 col-sm-4 col-lg-3">
                                                                        <a href="images/<?= $videos[$i]["image"] ?>" data-fancybox="gallery" title=""><img class="img-fluid" src="images/<?= $videos[$i]["image"] ?>" alt="Blog Detail Gallery Image 1"></a>
                                                                    </div>
                                                                <? } ?>

                                                            </div>
                                                        </div>

                                                    <? } ?>



                                                    <div class="detail-share w-100 mt-2">
                                                        <span>Share:</span>
                                                        <a class="facebook-clr" href="https://www.facebook.com/sharer/sharer.php?u=<?= $FUr ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                        <a class="twitter-clr" href="http://twitter.com/share?text=<?= $products[0]["smoll_description" . $clang] ?>&amp;url=<?= $FUr ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>

                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-lg-4" style="">
                                            <div class="service-sidebar default-sidebar">
                                                <div class="sidebar-categories sidebar-widget">
                                                    <div class="widget-title">
                                                        <h3><?= getTitle("products" . $plang) ?></h3>
                                                        <div class="line" style="background-image: url(images/icons/line-4.png);"></div>
                                                    </div>
                                                    <ul class="categories-list clearfix">
                                                        <? $variable = $core->getproducts([]);
                                                        foreach ($variable as $k => $v) {
                                                            $link = $core->getPageUrl(array($v['id'], $v['name' . $clang]), "products" . $plang);
                                                        ?>
                                                            <li><a href="<?= $link ?>"><?= $v["name"] ?></a>.</li>
                                                        <? } ?>
                                                    </ul>
                                                </div>
                                                <? if ($products[0]["file"] != null) { ?>
                                                    <div class="sidebar-brochures sidebar-widget">
                                                        <ul class="download-file clearfix">
                                                            <li>
                                                                <a href="images/<?= $products[0]["file"] ?>">
                                                                    <i class="flaticon-pdf"></i>
                                                                    <h5><?= plang('حزمة خدمة مفصلة', 'Detailed Service Pack') ?></h5>

                                                                </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                <? } ?>
                                                <?php if ($products[0]["video"] != null) { ?>
                                                    <div class="sidebar-support">
                                                        <div class="support-inner">
                                                            <iframe width="100%" height="100%" style="margin: auto; margin-right: 0%; border: 0px; min-height: 200px;" src="https://www.youtube.com/embed/<? echo $products[0]["video"]; ?>" allowfullscreen></iframe>


                                                        </div>
                                                    <?php } ?>
                                                    </div>
                                            </div>
                                            <!-- Sidebar Wrap -->

                                        </div>
                                    </div>
                                </div><!-- Blog Detail Wrap -->
                            </div>
                        </div>
                    </section>


            <?php }
                } ?>





        </div>

    </div>
</div>
<?php
include "inc/footer.php";
?>