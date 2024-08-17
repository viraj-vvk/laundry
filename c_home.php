<!doctype html>
<?php
require("lock.php");
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
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="forms/login.php">LOGIN</a></li>-->
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
            <div class="col-xl-7 col-lg-5">
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><a class="active" href="#howitworks">HOW IT WORKS</a></li>
                    <!--<li><a href="about.html">About</a></li>-->
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="c_pricing.php">PRICING</a></li>
                    <li><a href="newOrder.php">PLACE ORDER</a></li>
                    <li><a href="">Hi User <i class="ti-angle-down"></i></a>
                      <ul class="submenu">
                        <li><a href="">My Account</a></li>
                        <li><a href="orders.php">Order History</a></li>
                        <li><a href="c_edit.php">Edit Account</a></li>
                        <li><a href="forms/forgetPass.php">Change Password</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                      </ul>
                    </li>
                    <!--<li><a href="pricing.php">PRICING <i class="ti-angle-down"></i></a>
                    <ul class="submenu">
                    <li><a href="blog.html">Laundry</a></li>
                    <li><a href="single-blog.html">Men</a></li>
                    <li><a href="single-blog.html">Women</a></li>
                    <li><a href="single-blog.html">Household</a></li>
                    <li><a href="single-blog.html">Woolen</a></li>
                  </ul>
                </li>
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
<!-- location-area-start -->
<div class="addres-area black-bg section-padding" id="howitworks">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="section-title text-center mb-65">
        <h3 style="color:white">How It Works</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-4">
        <div class="single-address text-center">
          <div class="addres-icon">
            <img src="img/icon/untitled2.png" alt="">
          </div><br>
          <h3>Schedule</h3>
          <p>Place an order online <br>
            anytime and from<br>
            anywhere.</p>
          </div>
        </div>
        <div class="col-xl-4 col-md-4">
          <div class="single-address text-center">
            <div class="addres-icon">
              <img src="img/icon/untitled.png" alt="">
            </div><br>
            <h3>Pick Up</h3>
            <p>Simply Laundry team will<br>
              pick up your laundry bag<br>
              right from your apartment,<br>
              house, business or concierge.</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-4">
            <div class="single-address text-center">
              <div class="addres-icon">
                <img src="img/icon/untitled3.png" alt="">
              </div><br>
              <h3>Deliver</h3>
              <p>Your clean laundry will be<br>
                dropped off in a reusable<br>
                eco-friendly bag according<br>
                to the time you specified.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- location-area-end -->

      <!-- service-area-start -->
      <p id="services"><br><br></p>
      <div class="service-area">
        <div class="container">
          <div class="section-title text-center mb-65">
            <h3>OUR SERVICES</h3>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-xl-4 col-md-4">
              <div class="single-service">
                <div class="service-thumb">
                  <img src="img/service/services1.jpg" width="210" height="180" alt="">
                </div>
                <h3>Dry Cleaning</h3>
                <p>Tired of rushing around and re-arranging your schedule trying to make it in time to drop off or pick up your dry cleaning? Wouldn't it be nice to have freshly pressed suits delivered right to your door, right when you need them? With Simply Laundry, now you can! We will pick up your clothes, dry clean them, and deliver them back to your door. The best part is that there are no delivery charges or hidden fees, the price you see is the price you pay.</p>
              </div>
            </div>
            <div class="col-xl-4 col-md-4">
              <div class="single-service">
                <div class="service-thumb">
                  <img src="img/service/services2.jpg"  width="210" height="180" alt="">
                </div>
                <h3>Wash and Fold</h3>
                <p>Don't waste another beautiful Sunday washing, drying and folding laundry - Let Simply Laundry handle the dirty work while you spend your time enjoying life. We take the utmost care of our clients' clothes and will accommodate special washing instructions.<br>
                  Delicate! Dry Flat! Hang Dry! Do Not Wring! - these words you fear, are the same ones we love. Simply select the 'Wash and Hang' option when placing your order and we'll make sure that you never have to fear washing your clothes again.</p>
                </div>
              </div>
              <div class="col-xl-4 col-md-4">
                <div class="single-service">
                  <div class="service-thumb">
                    <img src="img/service/services3.jpg" alt="">
                  </div>
                  <h3>Handled with Extra Love & Care</h3>
                  <p>We know how precious specific clothing items are to you and so we've assigned our Extra Love & Care Team to handle all these delicate requests. They'll get the job done right.<br>
                    Specialty dry cleaning: Wedding gowns, Prom dresses, leather, suede, Canada Goose® winter jackets, UGGs, North Face, Burton, wool, polyester.</p>
                  </div>
                </div>
                <div class="col-xl-3 col-md-5">
                  <div class="single-service">
                    <div class="service-thumb">
                      <img src="img/service/services4.jpg" height="180"alt="">
                    </div>
                    <h3>Hygenic</h3>
                    <p>No mixing of clothes. Ultra-clean laundromats with special packaging to maintain freshness.</p>
                  </div>
                </div>
                <div class="col-xl-3 col-md-5">
                  <div class="single-service">
                    <div class="service-thumb">
                      <img src="img/service/services5.jpg" height="180"alt="">
                    </div>
                    <h3>Professional</h3>
                    <p>Our professionals are well trained to handle your much-loved clothes with utmost care.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- service-area-end -->

          <!-- project-area-start -->
          <div class="project-area bg-img-2 overlay">
            <div class="container-fluid p-lg-0">
              <div class="row justify-content-end no-gutters">
                <div class="col-xl-4 col-md-6">
                  <div class="section-title text-white mb-65 ml-80">
                    <h3>Take a look around <br>
                      our projects</h3>
                      <p>Waters make fish every without firmament saw had. <br> Morning air subdue.</p>
                      <div class="more-project">
                        <a href="#">More Projects</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-6">
                    <div class="project-active owl-carousel">
                      <div class="single-project">
                        <div class="project-thumb">
                          <img src="img/project/1.jpg" alt="">
                        </div>
                        <div class="project-info">
                          <span>Industrial construction</span>
                          <h3>Research and development center</h3>
                        </div>
                      </div>
                      <div class="single-project">
                        <div class="project-thumb">
                          <img src="img/project/1.jpg" alt="">
                        </div>
                        <div class="project-info">
                          <span>Machine engineering</span>
                          <h3>Project of technological park</h3>
                        </div>
                      </div>
                      <div class="single-project">
                        <div class="project-thumb">
                          <img src="img/project/1.jpg" alt="">
                        </div>
                        <div class="project-info">
                          <span>Industrial construction</span>
                          <h3>Research and development center</h3>
                        </div>
                      </div>
                      <div class="single-project">
                        <div class="project-thumb">
                          <img src="img/project/1.jpg" alt="">
                        </div>
                        <div class="project-info">
                          <span>Machine engineering</span>
                          <h3>Project of technological park</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- project-area-end -->

            <!-- about start -->
            <div class="about-area section-padding">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-xl-7 col-md-12 col-lg-6">
                    <div class="about-thumb">
                      <img src="img/about/about.jpg" alt="">
                      <a class="video-icon popup-video" href="https://www.youtube.com/watch?v=vb9uYBtqmeM">
                        <i class="fa fa-play"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="section-title mb-65">
                      <span>About Company</span>
                      <h3>Deliver inovative
                        Industrial solution</h3>
                        <p class="para-text">
                          Waters makte fish every without firmament saw had. Morning air subdue very one. Whales grass
                          is fish whales winged.
                        </p>
                        <a href="#" class="boxed-btn">Learn More</a>
                      </div>
                    </div>
                  </div>
                  <div class="about-pro-active owl-carousel pt-120">
                    <div class="row align-items-center">
                      <div class="col-xl-6 col-md-6 col-lg-6 ">
                        <div class="about-info-text">
                          <div class="quote">
                            <i class="Flaticon flaticon-quote"></i>
                          </div>
                          <div class="about-ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                          </div>
                          <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                            very one. Whales grass is fish whales winged.</p>
                            <div class="about-author">
                              <div class="autor-thumb">
                                <img src="img/about/about-author.jpg" alt="">
                              </div>
                              <div class="auhor-text">
                                <span>Jon Snow</span>
                                <p>Business ownner</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-md-6">
                          <div class="about-review">
                            <img src="img/about/about-project.jpg" alt="">
                            <div class="project-review">
                              <h3>350+</h3>
                              <p>Positive review</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row  align-items-center">
                        <div class="col-xl-6 col-md-6">
                          <div class="about-info-text">
                            <div class="quote">
                              <i class="Flaticon flaticon-quote"></i>
                            </div>
                            <div class="about-ratting">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                            </div>
                            <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                              very one. Whales grass is fish whales winged.</p>
                              <div class="about-author">
                                <div class="autor-thumb">
                                  <img src="img/about/about-author.jpg" alt="">
                                </div>
                                <div class="auhor-text">
                                  <span>Jon Snow</span>
                                  <p>Business ownner</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-5 offset-xl-1 col-md-6">
                            <div class="about-review">
                              <img src="img/about/about-project.jpg" alt="">
                              <div class="project-review">
                                <h3>350+</h3>
                                <p>Positive review</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center">
                          <div class="col-xl-6 col-md-6">
                            <div class="about-info-text">
                              <div class="quote">
                                <i class="Flaticon flaticon-quote"></i>
                              </div>
                              <div class="about-ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                              </div>
                              <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                                <div class="about-author">
                                  <div class="autor-thumb">
                                    <img src="img/about/about-author.jpg" alt="">
                                  </div>
                                  <div class="auhor-text">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-5 offset-xl-1 col-md-6">
                              <div class="about-review">
                                <img src="img/about/about-project.jpg" alt="">
                                <div class="project-review">
                                  <h3>350+</h3>
                                  <p>Positive review</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- about end -->

                    <!-- cta-area-start -->
                    <!--<div class="cta-area cta-bg-1">
                    <div class="container">
                    <div class="col-xl-6 col-lg-7">
                    <div class="cta-content">
                    <h3>Let’s talk about your <br>
                    industrial problems</h3>
                    <p>Waters make fish every without firmament saw had. <br> Morning air subdue very one. Whales grass
                    is
                    fish <br> whales winged.</p>
                    <div class="cta-btn">
                    <a class="boxed-btn2 black-bg" href="#">Discuss now <i
                    class="Flaticon flaticon-right-arrow"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- cta-area-end -->

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
                      <h4 class="color-red">Company</h4>
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
