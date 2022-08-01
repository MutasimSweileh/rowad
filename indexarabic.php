<?php
$pagg = 1;
include "inc.php";
/*
$lang : get form  inc.php  = arabic || english;
$plang : get form  inc.php for  php file name  = arabic || "";
$clang : get form  inc.php for column name  =  _arabic || "" ;
*/
?>


<section class="about-area">
    <div class="container">
        <div class="row">

            <!--
                    <div class="col-lg-6">
                        <div class="about-image-warp"><img src="images/img-team.png" alt="" /></div>
                    </div>

-->

            <div class="col-lg-6">
                <div class="quote-image">
                    <img src="images/map-cover.png" alt="google-map">

                    <div class="google-map">
                        <img src="images/about.jpg" alt="image">
                    </div>
                </div>
            </div>





            <div class="col-lg-6">
                <div class="about-content warp">


                    <div class="sec-title">
                        <h6><?= plang('عن الشركة', 'About Company') ?></h6>
                        <? $alts = explode("-", $alt); ?>
                        <h2><?= $alts[0] ?><br> <?= $alts[1] ?></h2>
                    </div>


                    <?= getValue('home_text', $lang) ?>
                    <a href="<?= $core->getPageUrl("about" . $plang) ?>" class="theme-btn"><?= plang('اقرأ المزيد', 'Read More') ?><i class="flaticon-login"></i></a>


                </div>
            </div>
        </div>
    </div>
</section>


<!--
watch?v=nfP5N9Yc72A&amp;t=28s
-->
<!-- funfact-section -->
<section class="funfact-section">
    <div class="auto-container">
        <div class="inner-container clearfix wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="counter-block-one">
                <div class="inner-box">
                    <div class="shap-box" style="background-image: url(images/icons/line-2.png);"></div>
                    <div class="icon-box"><i class="flaticon-roof-2"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="<?= getValue("products_count") ?>">0</span><span>+</span>
                    </div>
                    <h3><?= plang('مجموع المنتجات', 'Total Our Products') ?></h3>
                </div>
            </div>
            <div class="counter-block-one">
                <div class="inner-box">
                    <div class="shap-box" style="background-image: url(images/icons/line-2.png);"></div>
                    <div class="icon-box"><i class="flaticon-labor"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="<?= getValue("experience_count") ?>">0</span><span>+</span>
                    </div>
                    <h3><?= plang('سنوات الخبرة', 'Years Of Experience') ?></h3>
                </div>
            </div>
            <div class="counter-block-one">
                <div class="inner-box">
                    <div class="shap-box" style="background-image: url(images/icons/line-2.png);"></div>
                    <div class="icon-box"><i class="flaticon-user"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="<?= getValue("clients_count") ?>">0</span><span>+</span>
                    </div>
                    <h3><?= plang('عملائنا', 'Our Clients') ?></h3>
                </div>
            </div>
            <div class="counter-block-one">
                <div class="inner-box">
                    <div class="shap-box" style="background-image: url(images/icons/line-2.png);"></div>
                    <div class="icon-box"><i class="flaticon-medal"></i></div>
                    <div class="count-outer count-box">
                        <span class="count-text" data-speed="1500" data-stop="<?= getValue("certifications_count") ?>">0</span><span>+</span>
                    </div>
                    <h3><?= plang('حصل على الشهادات', 'Received Certifications') ?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->




<section class="services-area">
    <div class="back-services">
        <div class="container">



            <div class="sec-title centred">
                <h2><?= getTitle("products" . $plang) ?></h2>
            </div>


            <div class="owl-carousel Products-slider owl-theme custom-nav ">

                <?php
                $products = $core->getData("products", "where special=1");
                if ($products)
                    for ($i = 0; $i < count($products); $i++) {
                        // if (!$products[$i]["level"])
                        //    continue;
                        //$price = $products[$i]["price"];
                        // $outofstock = $products[$i]["stock"];
                        $id = $products[$i]["id"];
                ?>

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
                <? } ?>

            </div>
        </div>
    </div>
</section>

<!-- chooseus-section -->
<section class="chooseus-section">
    <figure class="image-layer wow slideInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/worker-1.png" alt=""></figure>
    <div class="pattern-layer" style="background-image: url(images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="sec-title light">
            <h2><?= plang('لماذا تختارنا', 'Why Choose Us') ?></h2>
        </div>
        <div class="inner-content">
            <div class="content-box-one clearfix">




                <div class="single-item">
                    <div class="inner-box">
                        <div class="content-box">
                            <figure class="icon-box"><img src="images/icons/icon-5.png" alt=""></figure>
                            <h4><?= plang('معتمد', 'Accredited') ?></h4>
                        </div>
                    </div>
                </div>



                <div class="single-item">
                    <div class="inner-box">
                        <div class="content-box">
                            <figure class="icon-box"><img src="images/icons/icon-8.png" alt=""></figure>
                            <h4><?= plang('جودة المواد', 'Quality Material') ?></h4>
                        </div>
                    </div>
                </div>



            </div>
            <div class="content-box-two clearfix">


                <div class="single-item">
                    <div class="inner-box">
                        <div class="content-box">
                            <figure class="icon-box"><img src="images/icons/icon-7.png" alt=""></figure>
                            <h4><?= plang('عمال مدربون', 'Trained Workers') ?></h4>
                        </div>
                    </div>
                </div>


                <div class="single-item">
                    <div class="inner-box">
                        <div class="content-box">
                            <figure class="icon-box"><img src="images/icons/icon-6.png" alt=""></figure>
                            <h4><?= plang('رد سريع', 'Quick Response') ?></h4>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->


<!-- clients-section -->
<section class="clients-section centred">
    <div class="auto-container">
        <div class="sec-title">
            <h2><?= plang('شركائنا', 'Our Partners') ?></h2>
        </div>
        <div class="clients-carousel owl-carousel owl-theme owl-nav-none custom-nav">
            <? $variable = $core->getData('partners', 'where active = 1');
            foreach ($variable as $k => $v) { ?>
                <figure class="clients-logo-box"><a href=""><img src="images/<?= $v["image"] ?>" alt=""></a></figure>
            <? } ?>
        </div>
    </div>
</section>
<!-- clients-section end -->

<!--Start home google map area style2-->
<?php if (isset($_POST["form_message"])) {
    $text = "";
    foreach ($_POST as $key => $value) {
        $text .= ($text ? "<br>" : "") . ucfirst($key) . " : " . $value;
    }
    require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "mail.sherktk.net";

    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = "ssl";
    $mail->Port = 587;
    $mail->Username = "mail@sherktk.net";
    $mail->Password = "JCrS%^)qc!eH";

    $mail->From = "mail@sherktk.net";

    $mail->FromName = $name;
    $info_media["code"] = "email";
    $contents = $core->getinfo_media($info_media);
    $emaills = $contents[0]["link"];
    $mail->AddAddress($emaills);
    //$mail->AddReplyTo("mail@mail.com");
    $mail->IsHTML(true);
    $mail->Subject = "Form Message";
    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    // $core->addemail(array("email" => $_POST["email"]));
    if ($mail->Send()) {
?>

        <script type="text/javascript">
            alert("Thank you !!");
        </script>

    <?php
    } else { ?>
        <script type="text/javascript">
            alert("<?= trim(htmlspecialchars_decode(str_replace("</p>", " ", str_replace("<p>", " ", $mail->ErrorInfo)))) ?>");
        </script>
<?php  }
} ?>





<section class="quote-area">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <div class="single-footer-widget">
                    <div class="quote-form">



                        <div class="sec-title centred">
                            <h2><?= plang('ابقى على تواصل', 'Get in touch with Us') ?></h2>
                        </div>


                        <form method="POST">
                            <div class="form-group"><i class="fal fa-user"></i>
                                <input type="text" class="form-control" id="Name" placeholder="<?= plang(" ادخل الاسم", "Your name") ?>">
                            </div>
                            <div class="form-group"><i class="fal fa-envelope"></i>
                                <input type="email" class="form-control" id="Email" placeholder="<?= plang("ادخل البريد الالكتروني", "Your email") ?>">
                            </div>
                            <div class="form-group"><i class="fal fa-phone"></i>
                                <input type="phone" class="form-control" id="Phone" placeholder="<?= plang("الموبيل", "Mobile") ?>">
                            </div>

                            <div class="form-group"><i class="fal fa-list"></i>
                                <textarea name="form_message" class="form-control" placeholder="<?= plang("ادخل رسالتك", "Message") ?>"></textarea>
                            </div>



                            <div class="quote-btn">
                                <button type="submit" class="bt_bb_link theme-btn">
                                    <?= plang('ارسل رسالة', ' Send Message') ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="single-footer-widget">
                    <ul class="social">
                        <li>
                            <a href="<?= getValue("facebook") ?>" class="facebook" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= getValue("twitter") ?>" class="twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= getValue("pinterest") ?>" class="pinterest" target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= getValue("youtube") ?>" class="youtube" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>

                    </ul>


                    <div class="quote-image">
                        <img src="images/map-cover.png" alt="google-map">

                        <div class="google-map">
                            <iframe src="<?= getValue("googlemap") ?>" width="100%" height="450" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<?php
include "inc/footer.php";
?>