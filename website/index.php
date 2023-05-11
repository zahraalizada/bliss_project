<?php include "header.php";
$page = 'index';
include '../settings/siteSetting.php';
?>

<!-- body -->

<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<div class="full_bg">
    <!-- header -->
    <header class="header-area">
        <div class="container">
            <div class="row d_flex">
                <div class=" col-md-3 col-sm-3">
                    <div class="logo">
                        <a href="index.php">Bliss</a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="navbar-area">
                        <nav class="site-navbar">
                            <ul>
                                <li><a class="active" href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="service.html">Service</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li class="d_none"><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                                </li>
                                <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-search"
                                                                                   aria-hidden="true"></i></a></li>
                            </ul>
                            <button class="nav-toggler">
                                <span></span>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
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
                                                    <div class="img-box-slider"><img src="<?php echo $val['video_img1']; ?>>" alt="#"/></div>
                                                    <div class="play_icon">
                                                        <a class="play-btn" href="javascript:void(0)"><img
                                                                    src="images/play_icon.png"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="agency">
                                                    <figure><img src="<?php echo $val['video_img2']; ?>>" alt="#"/></figure>
                                                    <div class="play_icon">
                                                        <a class="play-btn" href="javascript:void(0)"><img
                                                                    src="images/play_icon.png"></a>
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
            <div class="col-md-4">
                <div id="ho_shad" class="services_box text_align_left">
                    <h3>Ayurveda Spa</h3>
                    <figure><img src="images/service1.jpg" alt="#"/></figure>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip</p>
                    <a class="read_more" href="service.html">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="ho_shad" class="services_box text_align_left">
                    <h3>Massage Spa</h3>
                    <figure><img src="images/service2.jpg" alt="#"/></figure>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip</p>
                    <a class="read_more" href="service.html">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div id="ho_shad" class="services_box text_align_left">
                    <h3>Luxury Spa</h3>
                    <figure><img src="images/service3.jpg" alt="#"/></figure>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip</p>
                    <a class="read_more" href="service.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services -->
<!-- priceing -->
<div class="priceing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Our Priceing </h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                            <div class="our_pri">
                                <h3>Regular Price</h3>
                                <span>$<strong>50</strong></span>
                                <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim
                                    <br> ad minim aliquip</p>
                            </div>
                            <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_priceing text_align_center">
                            <div class="our_pri">
                                <h3>Special Price</h3>
                                <span>$<strong>100</strong></span>
                                <p>sed do eiusmod <br>tempor incididunt ut <br>labore et dolore<br> magna aliqua. Utenim
                                    <br> ad minim aliquip</p>
                            </div>
                            <a class="read_more" href="javascript:void(0)">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end priceing -->
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
            <div class=" col-md-4">
                <div class="latest">
                    <figure><img src="images/blog1.jpg" alt="#"/></figure>
                    <span>16 March</span>
                    <div class="nostrud">
                        <h3>Quis Nostrud </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="latest">
                    <figure><img src="images/blog2.jpg" alt="#"/></figure>
                    <span class="yellow">17 March</span>
                    <div class="nostrud">
                        <h3>Veniam, Quis </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class=" col-md-4">
                <div class="latest">
                    <figure><img src="images/blog3.jpg" alt="#"/></figure>
                    <span>18 March</span>
                    <div class="nostrud">
                        <h3>Tempor incididunt </h3>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                        <a class="read_more" href="blog.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end blog -->
<!-- about -->
<div class="about">
    <div class="container_width">
        <div class="row d_flex grig">
            <div class="col-md-6">
                <div class="about_img">
                    <figure><img src="images/about_img.jpg" alt="#"/>
                    </figure>
                </div>
            </div>
            <div class="col-md-6 order">
                <div class="titlepage text_align_left">
                    <h2>About Our Center</h2>
                    <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquipsed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip</p>
                    <a class="read_more" href="about.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- customers -->
<div class="customers">
    <div class="clients_bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage text_align_center">
                        <h2>What is Says Customers</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start slider section -->
    <div id="myCarousel" class="carousel slide clients_banner" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-2 col-sm-8">
                                <div class="pro_file">
                                    <i><img src="images/test2.png" alt="#"/></i>
                                    <h4>English.Many</h4>
                                    <span>normal distribution</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="test_box text_align_left">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem Ipsum passage, and going </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-2 col-sm-8">
                                <div class="pro_file">
                                    <i><img src="images/test2.png" alt="#"/></i>
                                    <h4>English.Many</h4>
                                    <span>normal distribution</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="test_box text_align_left">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem Ipsum passage, and going </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption relative">
                        <div class="row d_flex">
                            <div class="col-md-2 col-sm-8">
                                <div class="pro_file">
                                    <i><img src="images/test2.png" alt="#"/></i>
                                    <h4>English.Many</h4>
                                    <span>normal distribution</span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="test_box text_align_left">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                        in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                        Virginia, looked up one of the more obscure Latin words, consectetur, from a
                                        Lorem Ipsum passage, and going </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- end customers -->


<!--  footer -->
<?php include "footer.php"; ?>
