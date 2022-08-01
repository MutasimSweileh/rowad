<?php
$pagg = 7;
include "inc.php";
?>
<section class="cmt-row portfolio-style-2-section clearfix">
    <div class="container">
        <div class="row multi-columns-row my-3 cmt-boxes-spacing-10px cmt-bgcolor-white">
            <!-- row -->
            <?php
            $prodpram = array();
            $products2 = $core->getmGallery($prodpram);
            if ($products2 != null)
                for ($ii = 0; $ii < count($products2); $ii++) {
            ?>
                <div class="cmt-box-col-wrapper col-lg-4 col-md-6 col-sm-6 mb-2">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/<?= $products2[$ii]['image'] ?>" alt=""></figure>
                            <div class="lower-content">
                                <div class="box">
                                    <h3><a href="index.html"><?= $products2[$ii]['name' . $clang] ?></a></h3>
                                    <p><?= $alt ?></p>
                                </div>
                                <div class="view-btn">
                                    <a href="images/<?= $products2[$ii]['image'] ?>" class="lightbox-image" data-fancybox="gallery">+</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <? } ?>
        </div><!-- row end -->
    </div>
</section>
<?php
include "inc/footer.php";
?>