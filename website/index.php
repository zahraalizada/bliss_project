<?php include "header.php";
$page = 'index';
include '../settings/siteSetting.php';
?>

    <!-- top -->
    <div class="slider_main">
        <!-- carousel code -->
        <div id="banner1" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php foreach ($slide as $key => $val): ?>
                    <div class="carousel-item<?php echo ($key == 0) ? ' active' : ''; ?>">
                        <div class="container">
                            <div class="carousel-caption relative">
                                <div class="row d_flex">
                                    <div class="col-md-5">
                                        <div class="creative">
                                            <h1> <?= $val['title'] ?> </h1>
                                            <p>commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint</p>

                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row mar_right">
                                            <div class="col-md-6">
                                                <div class="agency">
                                                    <div class="img-box-slider">
                                                        <img src="<?php echo $val['video_img1']; ?>>" alt="#"/>
                                                    </div>
                                                    <div class="play_icon">
                                                        <a class="play-btn" href="<?= $val['video_url1']; ?>"
                                                           target="_blank">
                                                            <img src="images/play_icon.png">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="agency">
                                                    <div class="img-box-slider">
                                                        <img src="<?php echo $val['video_img2']; ?>>" alt="#"/>
                                                    </div>
                                                    <div class="play_icon">
                                                        <a class="play-btn" href="<?= $val['video_url1']; ?>"
                                                           target="_blank"><img src="images/play_icon.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- controls -->
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end banner -->
<!-- appointment -->
<div class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="titlepage text_align_center">
                    <h2>Make Appointment</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>
            </div>
            <div class="col-md-12">
                <form id="request" class="main_form">
                    <div class="row">
                        <div class="col-md-6 ">
                            <input class="form_control" placeholder="Your name" type="type" name=" Name">
                        </div>
                        <div class="col-md-6">
                            <input class="form_control" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-6">
                            <input class="form_control" placeholder="Phone Number" type="type" name="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input class="form_control" placeholder="Select Massage spa" type="type" name="Select">
                        </div>
                        <div class="col-md-6 ">
                            <input class="form_control" placeholder="Time" type="type" name=" Time">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form_control" id="my_date_picker" placeholder="Select Date">
                        </div>
                        <div class="col-md-12">
                            <textarea style=" color: #d0d0cf;" class="textarea" placeholder="Message" type="type"
                                      name="message">message </textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="send_btn">Send Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end appointment -->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>Our Massage Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($service as $key => $val): ?>
                <div class="col-md-4">
                    <div id="ho_shad" class="services_box text_align_left">
                        <h3><?= $val['title']; ?></h3>
                        <div class="img-box-service"><img src="<?= $val['image']; ?>" alt="#"/></div>
                        <p><?= $val['content']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end services -->

<!-- blog -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>Latest Blog</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>
            </div>
        </div>
        <div class="row d_flex">
            <?php foreach ($blog as $key => $val): ?>
                <div class=" col-md-4">
                    <div class="latest">
                        <div class="img-box-blog"><img src="<?= $val['image']; ?>" alt="#"/></div>
                        <span><?= $val['created_at']; ?></span>
                        <div class="nostrud">
                            <h3><?= $val['title']; ?> </h3>
                            <p><?= $val['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- end blog -->
<!-- about -->
<div class="about">
    <div class="container_width">
        <div class="row d_flex grig">
            <?php foreach ($about as $key => $val): ?>
                <div class="col-md-6">
                        <div class="img-box-about"><img src="<?= $val['image']; ?>" alt="#"/></div>
                </div>
                <div class="col-md-6 order">
                    <div class="titlepage text_align_left">
                        <h2><?= $val['title']; ?></h2>
                        <p><?= $val['content']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- end about -->


<!--  footer -->
<?php include "footer.php"; ?>
