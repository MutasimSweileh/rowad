<?php
$pagg = 7;
include "inc.php";
?>
<style>
    li.wow.fadeInUp.col-md-3.col-sm-6.mb-2.galley.animated {}

    .inter {
        position: relative;
        display: inline-block;
        border: 5px solid #eee;
        height: 290px;
        width: 100%;
    }

    /* 
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    body {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background: cornflowerblue;
    } */

    /* .container {
        width: 1100px;
        height: 480px;
        display: flex;
        background: rgb(238, 236, 236);
    } */

    .container .videos {
        width: 20%;
        padding: 10px 0 10px 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .container .videos a {
        width: 95%;
        height: 100px;
        margin: 10px;
        object-fit: cover;
        cursor: pointer;
        transition: 0.2s;
        position: relative;
    }

    .container .videos img {
        width: 100%;
        height: 100%;
    }

    .container .videos a:nth-child(1) {
        margin-top: 0;
    }

    .container .videos a:hover .play-btn svg path:first-child,
    .container .videos .active .play-btn svg path:first-child {
        fill: #212121;
    }

    .play-btn {
        position: absolute;
        top: 35%;
        right: 43%;
        width: 30px;
    }

    .play-btn svg path:first-child:hover {
        fill: #212121;
    }

    .container .videos a:hover,
    .container .videos .active {
        transform: scale(1.06);
        border: 3px solid #242424;
    }

    .container .main-video {
        width: 80%;
        padding: 10px;
    }

    .container .main-video video,
    .container .main-video iframe {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border: 3px solid #242424;
    }

    @media only screen and (max-width: 767px) {
        .container .videos {
            padding: 10px 0 0px 0px;
        }

        .play-btn {
            position: absolute;
            top: 30%;
            right: 25%;
            width: 25px;
        }

        .container .videos a {
            margin: 5px;
            height: 75px;
        }
    }
</style>
<div class="container" style=" display: flex;">
    <div class="videos">
        <?php
        $prodpram = array();
        $products2 = $core->getvideo($prodpram);
        if ($products2 != null)
            for ($ii = 0; $ii < count($products2); $ii++) {
        ?>
            <a class="<?= (!$ii ? "active" : "") ?>" href="https://www.youtube.com/embed/<?= $products2[$ii]["video"] ?>">
                <div class="play-btn"> <svg height="100%" version="1.1" viewBox="0 0 68 48" width="100%">
                        <path class="ytp-large-play-button-bg" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z" fill="#f00"></path>
                        <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                    </svg></div>
                <img src="images/<?= $products2[$ii]["image"]; ?>" alt="" srcset="">
            </a>
            <!-- <iframe class="active" width="100%" src="https://www.youtube.com/embed/<?= $products2[$ii]["video"] ?>" allowfullscreen></iframe> -->
            <!-- <video class="active" src="videos/video1.mp4" muted></video> -->
        <? } ?>
        <!-- <video src="videos/video2.mp4" muted></video>
        <video src="videos/video3.mp4" muted></video>
        <video src="videos/video4.mp4" muted></video> -->
    </div>
    <div class="main-video">
        <!-- <video src="videos/video1.mp4" muted controls autoplay></video> -->
        <iframe width="100%" src="https://www.youtube.com/embed/<?= $products2[0]["video"] ?>" allowfullscreen></iframe>

    </div>
</div>

<!-- <section class="gallery-one">
    <div class="gallery-one__container-box clearfix">
        <div class=" container">
            <ul class="list-unstyled gallery2-one-carousel owl3-carousel custom-nav row">
                <?php
                $prodpram = array();
                $products2 = $core->getvideo($prodpram);
                if ($products2 != null)
                    for ($ii = 0; $ii < count($products2); $ii++) {
                ?>
                    <li class="wow fadeInUp col-md-3 col-sm-6 mb-2 galley" data-wow-delay="<?= $ii + 1 ?>00ms">
                        <div class="inter">
                            <iframe width="100%" height="280" src="https://www.youtube.com/embed/<?= $products2[$ii]["video"] ?>" allowfullscreen></iframe>
                        </div>
                    </li>
                <? } ?>
            </ul>
        </div>
    </div>
</section> -->
<?php
include "inc/footer.php";
?>
<script>
    $(document).ready(function() {

        $('.videos a').click(function() {

            $(this).addClass('active').siblings().removeClass('active');

            var src = $(this).attr('href') + "?autoplay=1";
            $('.main-video iframe').attr('src', src);
            return false;
        });
    });
</script>