<?php

$pagg = 8;

include "inc.php";

$id = isv("level");

if (@$_POST["btnSubmit"]) {

  $_SESSION["cpost"] = $_POST;

  $firstname  = $_POST["name"];

  $email  = $_POST["email"];

  $mobile  = $_POST["mobile"];

  $subject  = $_POST["subject"];

  $message  = $_POST["message"];

  $address  = $_POST["address"];

  $phone  = $_POST["phone"];

  $city  = $_POST["city"];

  $country  = $_POST["country"];

  $Product  = $_POST["Product"];

  $file  = $_FILES["file"];

  if ($file) {

    $file = $_FILES["file"]["name"];

    move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $_FILES["file"]["name"]);
  }

  $core->SqlIn("order", array("email" => $email, "name" => $firstname, "mobile" => $mobile, "address" => $adress, "city" => $city, "phone" => $phone, "country" => $country, "product" => $Product));

  $writecode  = $_POST["writecode"];

  $securitycode  = $_POST["securitycode"];



  if ($writecode == $securitycode) {







    $text = "I have sent the following message to you through a form on the web.<br />";



    $text .= " Name  : $firstname <br />  Email  : $email <br /> Mobile  : $mobile <br /> Phone  : $phone <br /> Country  : $country <br /> City  : $city <br /> Address  : $adress " . ($Product ? "<br /> Product  : $Product" : "");



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



    $mail->Subject = "Contact us";

    $mail->Body = $text;

    //$mail->AltBody = "This is the body in plain text for non-HTML mail clients";



    if (!$mail->Send()) {

      $contactmessage = "???????? ???? ?????????? ?????????????? ?????????? ?????????? ?????????? ??????????";
    } else {

      $contactmessage = "???????? ?????? ?????????????? ?????? ???????????? ???????? ???????? 24 ????????";
    }
  } else {

    $contactmessage = "???????? ?????????? ?????????? ????????????";
  }
}



?>

<style type="text/css">
  .tittle {

    margin-bottom: 60px;

  }
</style>

<!-- Why Choose Us -->

<div class="about-company wow " style="margin-bottom: 10px">





  <div class="container">

    <div class="tittle wow fadeInUp">

      <h2><?= $pageTitle ?></h2>



    </div>

    <div class="row no-gutters">

      <div class="col-md-12" style="text-align: center;color: #237a57;

    font-size: 17px;

    margin-bottom: 10px;

    font-weight: 600;">

        <?= $contactmessage ?>

      </div>
      <div class="col-md-12 pull-rightt">
        <?= getValue("body_order", $lang) ?>
      </div>


      <div class="col-md-12  pull-rightt2">





        <div class="wprt-content-box">

          <div class="inner">





            <!-- Contact Form -->

            <form id="contact_form" name="contact_form" class="" action="#" method="post" enctype="multipart/form-data">



              <div class="row">



                <div class="col-sm-6 pull-righta">

                  <div class="form-group">

                    <label>??????????</label>

                    <input name="name" class="form-control" type="text" placeholder=" ???????? ??????????" required="required" value="">

                  </div>

                </div>

                <div class="col-sm-6">

                  <div class="form-group">

                    <label>???????????? ???????????????????? </label>

                    <input name="email" class="form-control required email" type="email" placeholder="???????? ???????????? ????????????????????" value="" required="required">

                  </div>

                </div>

              </div>



              <div class="row">

                <div class="col-md-6 col-lg-6">

                  <div class="form-group">

                    <label>??????????????</label>

                    <input name="mobile" class="form-control" type="text" placeholder="??????????????" value="">

                  </div>

                </div>

                <div class="col-sm-6">

                  <div class="form-group">

                    <label>??????????????</label>

                    <input name="city" class="form-control required " type="text" placeholder="???????? ????????????" value="" required="required">

                  </div>

                </div>

              </div>



              <div class="row">

                <div class="col-sm-12">

                  <div class="form-group">

                    <label><?= getTitle("products" . $plang) ?></label>



                    <select class="form-control" name="Product" style="width: 100%;">

                      <?php $sproducts = $core->getproducts(array("!level" => 1));  ?>

                      <?php for ($i = 0; $i < count($sproducts); $i++) {      ?>

                        <option value="<?= $sproducts[$i]["name" . $clang] ?>" <?php if ($id == $sproducts[$i]["id"]) { ?> selected="selected" <?php } ?>><?= $sproducts[$i]["name" . $clang] ?></option>

                      <?php } ?>

                    </select>

                  </div>

                </div>

              </div>







              <div class="form-group pull-left" style="width: 100%">

                <div class="col-md-12">

                  <div class="form-group" style="

    text-align: center;

">

                    <? $checknumber = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9); ?>



                    <span class="arabiccaptchaa" style="

    font-size: 37px;

    color: #000;

    text-align: right;

    margin-left: 5px;

    position: relative;

    top: -7px;

    float: left;"><?= $checknumber ?></span>



                    <input name="securitycode" class="form-control" type="hidden" style="width: 70%" placeholder="?????? ?????????? ?????? ??????????" required="required" value="<?= $checknumber ?>" autocomplete="off">

                    <input name="writecode" class="form-control" type="text" style="    width: 65%;

    float: none;

    display: inline;" placeholder="?????? ?????????? ?????? ??????????" required="required" autocomplete="off">



                  </div>

                </div>



              </div>





              <div class="form-group" style="    text-align: center;">

                <input name="form_botcheck" class="form-control" type="hidden" value="">

                <button type="submit" name="btnSubmit" value="btnSubmit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="???? ???????? ?????????? ..." id="btn" title="??????????">??????????</button>

                <button type="reset" class="btn btn-default btn-flat btn-theme-colored" title="??????">?????? ????????????????</button>

              </div>

            </form>







          </div>

        </div>

      </div><!-- /.col-md-6 -->









    </div><!-- /.row -->

  </div><!-- /.wprt-container -->

</div> <!-- /.row-ab-why-choose-us -->



</div> <!-- /.row-ab-why-choose-us -->



<?php include "inc/footer.php" ?>