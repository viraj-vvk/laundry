<?php
  session_start();

  if(isset($_GET["action"])){
  	if($_GET["action"] == "delete"){
  		foreach($_SESSION["shopping_cart"] as $keys => $values){
  			if($values["item_id"] == $_GET["id"]){
  				unset($_SESSION["shopping_cart"][$keys]);
  				echo '<script>alert("Item Removed")</script>';
  				echo '<script>window.location="newOrder.php"</script>';
  			}
  		}
  	}
  }

 ?>
<!doctype html>
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
    <style type="text/css">
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

  .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

    </style>
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
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="c_home.php#howitworks">HOW IT WORKS</a></li>
                                        <!--<li><a href="about.html">About</a></li>-->
                                        <li><a href="c_home.php#services">SERVICES</a></li>
                                        <li><a href="c_pricing.php">PRICING</a></li>
                                        <li><a class="active" href="newOrder.php">PLACE ORDER</a></li>
                                        <li><a href="">Hi User <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="account.php">My Account</a></li>
                                                <li><a href="orders.php">Order History</a></li>
                                                <li><a href="c_edit.php">Edit Account</a></li>
                                                <li><a href="forms/forgetPass.php">Change Password</a></li>
                                                <li><a href="logout.php">Log Out</a></li>
                                            </ul>
                                        </li>
                                        <!--<li><a class="active" href="pricing.php">PRICING <i class="ti-angle-down"></i></a>
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
    <div class="container box_1170">
    <div class="section-top-border" style="margin">
      <div class="row">
        <div class="col-lg-6 col-md-8">
          <h3 class="mb-30">Make an Order</h3>
          <form action="order.php" method="post">
            <fieldset id="order">
              <div class="mt-10">
                <input type="text" name="name" placeholder="Name"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                  class="single-input">
              </div>
              <div class="mt-10">
                <input type="number" name="cont" placeholder="Contact Number"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required
                  class="single-input">
              </div>
              <div class="mt-10">
                <input type="email" name="mail" placeholder="Mail ID"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mail ID'" required
                  class="single-input">
              </div>
              <div class="mt-10">
                <input type="date" name="deldate" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = ''" required class="single-input">
              </div>
              <div class=" mt-10">
                <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Address'" required class="single-input">
              </div>
              <div class="mt-10">
                <div class="form-select" id="default-select" name="paymentType">
                      <select>
                        <option value=" 1">Payment</option>
                        <option value="1">Online Payment</option>
                        <option value="1">Cash on Delivery</option>
                  </select>
                </div>
              </div>
              <div class="mt-10">
                <textarea class="single-textarea" placeholder="Message" name="message"onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Message'" required></textarea>
              </div>
              <div class="input-group-icon mt-10">
                <input type="submit" name="order" style="margin-top:5px;padding-left:20px;padding-right:20px;" class="btn btn-success" value="Order" />
              </div>
              <input type="hidden" name="total">
            </fieldset>
          </form>
         </div>
     <div class="col-lg-6 ">
      <?php
      if(empty($_SESSION["shopping_cart"])){
        ?>
        <h3 class="mb-30">Sorry, Cart Is Empty Cart</h3>
        <img src="img/nothing.png" width="100%">
        <script>  document.getElementById("order").disabled = true; </script>
        <?php
      }
      else {
        $total = 0;
        $count=1;
      ?>
        <h3 class="mb-30">Order Cart</h3>
        <div class="progress-table-wrap">
          <div class="progress-table">
            <div class="table-head">
              <div class="percentage">#</div>
              <div class="percentage">Item</div>
              <div class="percentage">Quantity</div>
              <div class="percentage">Price</div>
              <div class="percentage">Total</div>
            </div>
            <div class="percentage">Action</div>
            <?php
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
              ?>
            <div class="table-row">
              <div class="percentage"><?php echo $count++; ?></div>
              <div class="percentage"><?php echo $values["item_name"]; ?></div>
              <div class="percentage"><?php echo $values["item_quantity"]; ?></div>
              <div class="percentage">Rs. <?php echo $values["item_price"]; ?></div>
              <div class="percentage"><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></div>
              <div class="percentage"><a href="newOrder.php?action=delete&id=<?php echo $values['item_id']; ?>"> Remove </a></div>
            </div>
            <?php
             $total = $total + ($values["item_quantity"] * $values["item_price"]);
             ?><script> document.getElementById("total").value = <?php echo $total; ?></script><?php
           }
            ?>
          </div>
        </div>
        <h3 class="mb-30">Total: Rs.<?php echo number_format($total, 2); ?></h3>
  <?php
}
 ?>
</div>
  </div>
</div>
</div>
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
