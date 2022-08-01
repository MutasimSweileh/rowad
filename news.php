<?php
$pagg = 6;
include "inc.php";
$id =  isv("id");
if (!$id)
    $id =  isv("level");
$name = isv("name");
$prodpram = array();
if ($id)
    $prodpram = array("id" => $id);
$products = $core->getevents($prodpram);
?>
<!-- Our Latest Blog Area -->
<section class="latest-blog latest_blog_area blog-section blog-wrapper2 construction-news">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2><?= ($id ? $products[0]["name" . $clang] : getTitle("news" . $plang)) ?></h2>
        </div>
        <div class="row latest_blog blog-grids clearfix mt-3">
            <?php
            if ($products != null)
                for ($i = 0; $i < count($products); $i++) {
                    $date = getDateTime($products[$i]["date"], $lang);
                    if (!$id) {
            ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>">
                                    <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>" class="link"><i class="fas fa-link"></i></a>

                                </figure>
                                <div class="lower-content">
                                    <div class="upper-box">
                                        <h3><a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><?= $products[$i]["name" . $clang] ?></a></h3>
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-calendar"></i><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box clearfix">

                                        <div class="link-box pull-right">
                                            <a href="news<?= $plang ?>.php?id=<?= $products[$i]["id"] ?>"><span><?= plang('اقرأ المزيد', 'Read More') ?></span><i class="flaticon-login"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="container block-contents checked-features-list">
                        <div class="image image-inter">
                            <!-- <p><?= $date[0] ?>, <?= $date[1] ?> <?= $date[2] ?></p> -->
                            <img src="images/<?= $products[$i]["image"] ?>" alt="<?= $products[$i]["name" . $clang] ?>">
                            <!-- <ul class="styled-icons icon-dark icon-sm icon-circled">
                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $FUr ?>" data-bg-color="#3B5998" style="background: rgb(59, 89, 152) !important;"><i class="fab fa-facebook"></i></a></li>
                                <li><a target="_blank" href="http://twitter.com/share?text=<?= $products[0]["smoll_description" . $clang] ?>&amp;url=<?= $FUr ?>" data-bg-color="#02B0E8" style="background: rgb(2, 176, 232) !important;"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://plus.google.com/share?url=<?= $FUr ?>" data-bg-color="#D71619" style="background: rgb(215, 22, 25) !important;"><i class="fab fa-google-plus"></i></a></li>
                            </ul> -->
                        </div>
                        <p> <?= $products[$i]["description" . $clang] ?>
                        </p>
                        <?php if ($products[$i]["video"] != null) { ?>
                            <p style="text-align: center;">
                                <iframe width="30%" height="100%" style="margin: auto; margin-right: 0%; border: 0px; min-height: 200px;" src="https://www.youtube.com/embed/<?
                                                                                                                                                                                echo $products[$i]["video"];
                                                                                                                                                                                ?>" allowfullscreen>
                                </iframe>
                            </p>
                        <?php } ?>
                        <?php
                        if ($pagg == 3) {
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
                            <div class="clear"></div>
                            <div class="row" style="text-align: center;">
                                <div class="tittle wow fadeInUp" style=" margin-bottom: 60px; ">
                                    <h2><?= getTitle("gallery" . $plang) ?></h2>
                                </div>
                                <div class="productSlider">
                                    <?php
                                    for ($i = 0; $i < count($videos); $i++) { ?>
                                        <div class="progalleyy wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                                            <a class="example-image-link" href="images/<?= $videos[$i]["image"] ?>" data-lightbox="example-set" title="<?= $products[$i]["name" . $clang] ?>" data-rel="prettyPhoto[gallery]"><img class="example-image proimmmg" src="images/<?= $videos[$i]["image"] ?>" style="margin: auto;    max-width: 80%;
    height: auto; " alt="<?= $products[0]["name" . $clang] ?>" />
                                                <div class="shadow"></div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
            <?php }
                } ?>
        </div>
    </div>
</section>
<!-- End Our Latest Blog Area -->
<?php
include "inc/footer.php";
?>