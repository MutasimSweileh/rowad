<?php if (isset($_POST["subscribe"])) {
    $text =  $_POST["name"] . "<br>" . $_POST["email"];
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
    $mail->Subject = "Subscribe";
    $mail->Body = $text;
    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";
    $core->addemail(array("email" => $_POST["email"]));
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




<!-- main-footer -->
<footer class="main-footer style-one" id="footer">
    <div class="footer-top bg-color-1">


        <div class="auto-container">
            <div class="widget-section">
                <div class="pattern-scale" style="background-image: url(images/shape/shape-7.png);"></div>
                <div class="row clearfix">




                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget post-widget">
                            <div class="widget-title">
                                <div class="pattern-layer" style="background-image: url(images/shape/shape-8.png);"></div>
                                <h3><?= plang("معلومات الاتصال", "Contact Info") ?></h3>
                            </div>
                            <div class="widget-content contact-widget">

                                <ul class="contact-info">
                                    <li>
                                        <div class="icon"><span class="fal fa-map-marker"></span></div>
                                        <div class="text"><span><?= plang('العنوان', 'Address') ?></span>
                                            <a href=""><?= getValue('header_address', $lang) ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fal fa-envelope"></span></div>
                                        <div class="text"><span><?= plang('البريد الالكترونى', 'Mail') ?></span>
                                            <a href="mailto:"><?= getValue('email') ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fal fa-phone"></span></div>
                                        <div class="text"><span><?= plang('الموبيل', 'Phone') ?></span>
                                            <a href="tel:<?= getValue('header_phone') ?>"><?= getValue('header_phone') ?></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <div class="pattern-layer" style="background-image: url(images/shape/shape-8.png);"></div>
                                <h3><?= plang('روابط مفيدة', 'Useful Links') ?></h3>
                            </div>
                            <div class="widget-content clearfix">
                                <ul class="list clearfix">
                                    <li><a href="<?= $core->getPageUrl("index" . $plang) ?>"><?= getTitle("index" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("about" . $plang) ?>"><?= getTitle("about" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("products" . $plang) ?>"><?= getTitle("products" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("order" . $plang) ?>"><?= getTitle("order" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("gallery" . $plang) ?>"><?= getTitle("gallery" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("video" . $plang) ?>"><?= getTitle("video" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("news" . $plang) ?>"><?= getTitle("news" . $plang) ?></a></li>
                                    <li><a href="<?= $core->getPageUrl("contact" . $plang) ?>"><?= getTitle("contact" . $plang) ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <div class="pattern-layer" style="background-image: url(images/shape/shape-8.png);"></div>
                                <h3><?= plang('النشرة البريدية', 'Newsletter') ?></h3>
                            </div>
                            <div class="subscribe-box">
                                <h4><?= plang('اشترك في النشرة البريدية ليصلك اخر
                                    الاخبار والعروض', 'Subscribe to the newsletter to receive the latest
                                    news and offers') ?></h4>
                                <form action="" method="post" class="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="<?= ($plang ? "اكتب بريدك" : "Your Email") ?>" required="">
                                        <button type="submit" name="subscribe" value="subscribe"><i class="flaticon-send"></i></button>
                                    </div>
                                </form>
                            </div>

                            <ul class="social-links">
                                <li><a href="<?= getValue('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= getValue('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= getValue('google-plus') ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="<?= getValue('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
                            </ul>


                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="copyright">
                    <p>Copyright &copy; 2022 All Rights Reserved by <a href="">Erasoft</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fal fa-arrow-up"></span>
</button>
</div>


<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/timePicker.js"></script>
<script src="js/pagenav.js"></script>
<script src="js/jquery.nice-select.min.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>
</body>

</html>