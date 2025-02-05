<?php
  require("lock.php");
  require_once("config.php");
 ?>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundry Day</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                                <a href="tel:7767885027"><i class="fa fa-phone"></i> +91 7767 88 5027</a>
                                <a href="mailto:k.a.t.a.r.e.v.v.k@gmail.com"><i class="fa fa-envelope"></i> k.a.t.a.r.e.v.v.k@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-10">
                            <div class="header-top-menu">
                                <nav>
                                    <ul>
                                        <!--<li><a href="blog.html">News & media</a></li>
                                        <li><a href="review.html">Review</a></li>
                                        <li><a href="faq.html">FAQ</a></li>-->
                                        <li><a href="forms/login.php">LOGIN</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php#howitworks">HOW IT WORKS</a></li>
                                        <!--<li><a href="about.html">About</a></li>-->
                                        <li><a href="index.php#services">SERVICES</a></li>
                                        <li><a class="active" href="pricing.php">PRICING</a></li>
                                        <!--<li><a class="active" href="pricing.php">PRICING <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Laundry</a></li>
                                                <li><a href="single-blog.html">Men</a></li>
                                                <li><a href="single-blog.html">Women</a></li>
                                                <li><a href="single-blog.html">Household</a></li>
                                                <li><a href="single-blog.html">Woolen</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="forms/login.php">LOGIN</a></li>
                                        <!--<li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="service-details.html">service-details</a></li>
                                                <li><a href="project-details.html">project-details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">User <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
	                                            <li><a href="Login_v15/index.php">Login</a></li>
	                                          </ul>
                                        </li>
                                        <li><a href="service.html">Services</a></li>
                                        <li><a href="pricing.php">Pr</a></li>-->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--<div class="col-xl-2">
                          <div class="main-menu d-none d-lg-block float-right">
                            <ul id="navigation">
                              <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                  <ul class="submenu">
                                      <li><a href="elements.html">elements</a></li>
                                      <li><a href="service-details.html">service-details</a></li>
                                      <li><a href="project-details.html">project-details</a></li>
                                  </ul>
                              </li>
                            </ul>
                          </div>
                        </div>-->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="search_input" id="search_input_box">
                        <div class="container ">
                            <form class="d-flex justify-content-between search-inner">
                                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                <button type="submit" class="btn"></button>
                                <span class="fa fa-close" id="close_search" title="Close Search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<?php
  require_once("slider.php")
 ?>
    <!-- service-details-start -->
    <div class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="details-nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="laundry-tab" data-toggle="tab" href="#laundry" role="tab"
                                        aria-controls="laundry" aria-selected="true">Laundry</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="men-tab" data-toggle="tab" href="#men" role="tab"
                                        aria-controls="men" aria-selected="false">Men</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="women-tab" data-toggle="tab" href="#women" role="tab"
                                        aria-controls="women" aria-selected="false">Women</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="household-tab" data-toggle="tab" href="#household" role="tab"
                                        aria-controls="household" aria-selected="false">Household</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="woolen-tab" data-toggle="tab" href="#woolen" role="tab"
                                        aria-controls="woolen" aria-selected="false">Woolen</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="single-details">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="laundry" role="tabpanel" aria-labelledby="laundry-tab">
                              <!--<div class="details-wrap">
                                <div class="details-thumb">
                                  <img src="img/service/service-details.jpg" class="col-md-4"alt="">
                                </div>
                              </div>-->
                              <br>
                              <div class="details-info">
                                <div class="row">
                                  <?php
                                  $qry = mysql_query("SELECT * FROM sample WHERE s_category = 1");
                                    while( $row = mysql_fetch_array($qry) ){
                                      ?>
                                  <div class="col-xl-4 col-md-4">
                                    <div class="single-address text-center" style="border-bottom: solid red;margin-bottom:50px">
                                      <div class="addres-icon">
                                        <img src="img/pricing/<?php echo $row['s_name'];  ?>.png" width="200" height="150" alt="">
                                      </div><br>
                                      <h4><?php echo $row['s_title'];  ?></h4>
                                      <span style="font-family:rupee;font-size:20px"><?php echo $row['s_description']."<br>";  ?>Rs./Kg. </span><p><?php echo $row['s_prize'];  ?></p>
                                    </div>
                                  </div>
                                  <?php
                                }
                                   ?>
                                </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="men" role="tabpanel" aria-labelledby="men-tab">
                            <!--<div class="details-wrap">
                              <div class="details-thumb">
                                  <img src="img/service/service-details.jpg" alt="">
                              </div>
                            </div>-->
                            <br>
                            <div class="details-info">
                              <div class="row">
                                <?php
                                $qry = mysql_query("SELECT * FROM sample WHERE s_category = 2");
                                  while( $row = mysql_fetch_array($qry) ){
                                    ?>
                                <div class="col-xl-4 col-md-4">
                                  <div class="single-address text-center" style="border-bottom: solid red;margin-bottom:50px">
                                    <div class="addres-icon">
                                      <img src="img/pricing/<?php echo $row['s_name'];  ?>.png" width="200" height="150" alt="">
                                    </div><br>
                                    <h4><?php echo $row['s_title'];  ?></h4>
                                    <span style="font-family:rupee;font-size:20px"><?php echo $row['s_description']."<br>";  ?>Rs./Piece </span><p><?php echo $row['s_prize'];  ?></p>
                                  </div>
                                </div>
                                <?php
                              }
                                 ?>
                              </div>
                            </div>
                          </div>
                            <div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
                              <!--<div class="details-wrap">
                                <div class="details-thumb">
                                  <img src="img/service/service-details.jpg" alt="">
                                </div>
                              </div>-->
                              <br>
                              <div class="details-info">
                                <div class="row">
                                  <?php
                                  $qry = mysql_query("SELECT * FROM sample WHERE s_category = 3");
                                    while( $row = mysql_fetch_array($qry) ){
                                      ?>
                                  <div class="col-xl-4 col-md-4">
                                    <div class="single-address text-center" style="border-bottom: solid red;margin-bottom:50px">
                                      <div class="addres-icon">
                                        <img src="img/pricing/<?php echo $row['s_name'];  ?>.png" width="200" height="150" alt="">
                                      </div><br>
                                      <h4><?php echo $row['s_title'];  ?></h4>
                                      <span style="font-family:rupee;font-size:20px"><?php echo $row['s_description']."<br>";  ?>Rs./Piece </span><p><?php echo $row['s_prize'];  ?></p>
                                    </div>
                                  </div>
                                  <?php
                                }
                                   ?>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="household" role="tabpanel" aria-labelledby="household-tab">
                              <!--<div class="details-wrap">
                                <div class="details-thumb">
                                  <img src="img/service/service-details.jpg" alt="">
                                </div>
                              </div>-->
                              <br>
                              <div class="details-info">
                                <div class="row">
                                  <?php
                                  $qry = mysql_query("SELECT * FROM sample WHERE s_category = 4");
                                    while( $row = mysql_fetch_array($qry) ){
                                      ?>
                                  <div class="col-xl-4 col-md-4">
                                    <div class="single-address text-center" style="border-bottom: solid red;margin-bottom:50px">
                                      <div class="addres-icon">
                                        <img src="img/pricing/<?php echo $row['s_name'];  ?>.png" width="200" height="150" alt="">
                                      </div><br>
                                      <h4><?php echo $row['s_title'];  ?></h4>
                                      <span style="font-family:rupee;font-size:20px"><?php echo $row['s_description']."<br>";  ?>Rs./Piece </span><p><?php echo $row['s_prize'];  ?></p>
                                    </div>
                                  </div>
                                  <?php
                                }
                                   ?>
                                </div>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="woolen" role="tabpanel" aria-labelledby="woolen-tab">
                              <!--<div class="details-wrap">
                                <div class="details-thumb">
                                  <img src="img/service/service-details.jpg" alt="">
                                </div>
                              </div>-->
                              <br>
                              <div class="details-info">
                                <div class="row">
                                  <?php
                                  $qry = mysql_query("SELECT * FROM sample WHERE s_category = 5");
                                    while( $row = mysql_fetch_array($qry) ){
                                      ?>
                                  <div class="col-xl-4 col-md-4">
                                    <div class="single-address text-center" style="border-bottom: solid red;margin-bottom:50px">
                                      <div class="addres-icon">
                                        <img src="img/pricing/<?php echo $row['s_name'];  ?>.png" width="200" height="150" alt="">
                                      </div><br>
                                      <h4><?php echo $row['s_title'];  ?></h4>
                                      <span style="font-family:rupee;font-size:20px"><?php echo $row['s_description']."<br>";  ?>Rs./Piece </span><p><?php echo $row['s_prize'];  ?></p>
                                    </div>
                                  </div>
                                  <?php
                                }
                                   ?>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-details-end -->

    <!-- footer-start -->
    <footer class="footer-area ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <a href="index.php"> <img src="img/footer-logo.png" alt=""> </a>
                        <p>Waters make fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.</p>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="single-footer-widget">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Carrier</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Stability</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget">
                        <h4>Solutions</h4>
                        <ul>
                            <li><a href="#">Industrial problems</a></li>
                            <li><a href="#"> Construction solution</a></li>
                            <li><a href="#">Car manufacturing</a></li>
                            <li><a href="#">Mechanical problems</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <h4>Branch office</h4>
                        <div class="office-location">
                            <ul>
                                <li>
                                    <strong>London - UK</strong>
                                    <p>127, Manchaster city, London <br>
                                        +008 728 362 278</p>
                                </li>
                                <li>
                                    <strong>New York - USA</strong>
                                    <p>127, Manchaster city, London <br>
                                        +008 728 362 278</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
