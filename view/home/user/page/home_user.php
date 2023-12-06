<?php
require_once('DAO/CategoryDAO.php');
require_once('DAO/ProductDAO.php');
require_once('DAO/CartDAO.php');
?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>FeeTech - Organic Food Store HTML Template - Shop Details</title>
  <meta name="author" content="">
  <meta name="description" content="FeeTech - Organic Food Store HTML Template">
  <meta name="keywords" content="FeeTech - Organic Food Store HTML Template" />
  <meta name="robots" content="INDEX,FOLLOW">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--==============================
	   Google Web Fonts
	============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200;300;400;500;600;700&family=Amatic+SC:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="57x57" href="./src/assets/img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./src/assets/img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./src/assets/img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./src/assets/img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./src/assets/img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./src/assets/img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./src/assets/img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./src/assets/img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="./src/assets/img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./src/assets/img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="./src/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="./src/assets/img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./src/assets/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="./src/assets/css/bootstrap.rtl.min.css"> -->
  <!-- <link rel="stylesheet" href="./src/assets/css/app.min.css"> -->
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="./src/assets/css/fontawesome.min.css">
  <!-- Flaticon -->
  <link rel="stylesheet" href="./src/assets/css/flaticon.min.css">
  <!-- Layerslider -->
  <link rel="stylesheet" href="./src/assets/css/layerslider.min.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./src/assets/css/jquery.datetimepicker.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="./src/assets/css/magnific-popup.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="./src/assets/css/slick.min.css">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="./src/assets/css/animate.min.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="./src/assets/css/style.css">

</head>

<body class=" ">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .d-lg-flex.half {
      min-height: 100vh;
    }

    .contents {
      padding: 20px;
    }

    .boxconter {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
      background-color: #fff;
    }

    .form-group.last {
      margin-bottom: 15px;
    }

    .form-group.last a {
      color: #007bff;
      text-decoration: none;
    }

    .form-group.last a:hover {
      text-decoration: underline;
    }
  </style>


  <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



  <!--********************************
   		Code Start From Here 
	******************************** -->

  <!--==============================
     Preloader
  ==============================-->
  <div class="preloader  ">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
      <div class="loader-logo">
        <img src="./src/assets/img/logo.svg" alt="FeeTech">
      </div>
      <div class="loader-wrap pt-4">
        <span class="loader"></span>
      </div>
    </div>
  </div>
  <!--==============================
        Header Top
    ==============================-->
  <div class="header-top-wrapper bg-black pb-2 pt-10 z-index-step1 d-none d-lg-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-sm-6 col-md-4 col-lg-4 d-none d-sm-block">

        </div>
        <div class="col col-md-5 col-lg-4 text-center">
          <p class="text-body2 mb-0 fs-xs fw-semibold font-theme d-none d-md-inline-block"><span class="text-theme">Free exress</span> international delevery + Easy returens</p>
        </div>
        <div class="col-sm-5 col-md-3 col-lg-4 text-center text-sm-end">
          <div class="social-header fs-xs">
            <span class="text-body2 fs-xs fw-semibold font-theme me-2">Social Network</span>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fal fa-basketball-ball"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--========================
    Sticky Header
========================-->
  <div class="sticky-header-wrap sticky-header py-2 py-lg-1">
    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-5 col-md-3">
          <div class="logo">
            <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
          </div>
        </div>
        <div class="col-7 col-md-9 text-end position-static">
          <nav class="main-menu menu-sticky1 d-none d-lg-block link-inherit">
            <ul>
              <li class="menu-item">
                <a href="index.php?controller=home">Home</a>
              </li>
              <li class="menu-item-has-children">
                <a href="index.php?controller=product_show">Shop</a>
                <ul class="sub-menu">
                  <li><a href="index.php?controller=product_show">Shop</a></li>
                  <!-- <li><a href="index.php?controller=product_favorite">Shop List</a></li>
                                    <li><a href="index.php?controller=product_details">Shop Details</a></li> -->
                  <li><a href="index.php?controller=listCart">Shopping Cart</a></li>
                  <li><a href="index.php?controller=checkOut">Check Out</a></li>
                  <li><a href="index.php?controller=wishlistCart">Wishlist</a></li>
                  <li><a href="index.php?controller=login">Login & Register</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="blog.html">Blog</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-list.html">Blog List</a></li>
                  <li><a href="blog-grid.html">Blog Grid</a></li>
                  <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                  <li><a href="blog-masonry.html">Blog Masonry</a></li>
                  <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
              </li>


              <li>
                <a href="index.php?controller=contact">Contact Us</a>
              </li>
            </ul>
          </nav>
          <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area">
      <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
      </div>
      <div class="vs-mobile-menu link-inherit"></div><!-- Menu Will Append With Javascript -->
    </div>
  </div>
  <!--==============================
    Sidemenu
============================== -->
  <div class="sidemenu-wrapper d-none d-lg-block  ">
    <div class="sidemenu-content">
      <button class="closeButton border-theme text-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget widget_shopping_cart">
        <h3 class="widget_title">Shopping cart</h3>
        <div class="widget_shopping_cart_content">
          <ul class="cart_list ">
            <li class="mini_cart_item">
              <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
              <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-1.jpg" alt="Cart Image">Hot
                Burger</a>
              <span class="quantity">1 ×
                <span class="amount">
                  <span>$</span>40.00
                </span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
              <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-2.jpg" alt="Cart Image">Vegetable</a>
              <span class="quantity">1 ×
                <span class="amount">
                  <span>$</span>99.00
                </span>
              </span>
            </li>

            <li class="mini_cart_item">
              <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
              <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-3.jpg" alt="Cart Image">Pop
                Pizza</a>
              <span class="quantity">1 ×
                <span class="amount">
                  <span>$</span>56.00
                </span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
              <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-4.jpg" alt="Cart Image">Onion &
                Tomato</a>
              <span class="quantity">1 ×
                <span class="amount">
                  <span>$</span>23.00
                </span>
              </span>
            </li>
            <li class="mini_cart_item">
              <a href="index.php?controller=product_show" class="remove"><i class="fal fa-trash-alt"></i></a>
              <a href="index.php?controller=product_show"><img src="./src/assets/img/cart/cart-img-1-5.jpg" alt="Cart Image">Cool
                Drinks</a>
              <span class="quantity">1 ×
                <span class="amount">
                  <span>$</span>100.00
                </span>
              </span>
            </li>
          </ul>
          <p class="total">
            <strong>Subtotal:</strong>
            <span class="amount">
              <span>$</span>318.00
            </span>
          </p>
          <p class="buttons">
            <a href="index.php?controller=listCart" class="vs-btn">View cart</a>
            <a href="index.php?controller=checkOut" class="vs-btn">Checkout</a>
          </p>
        </div>
      </div>
    </div>

  </div>
  <!--==============================
        Header Area
    ==============================-->
  <header class="header-wrapper header-layout3 header3-margin ">
    <div class="container py-30">
      <div class="row align-items-center">
        <div class="col-6">
          <div class="header-logo">
            <a href="index.php?controller=home"><img src="./src/assets/img/logo.svg" alt="FeeTech"></a>
          </div>
        </div>
        <div class="col-6 text-end">
          <button type="button" class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
          <div class="head-top-links text-body2 d-none d-lg-block">
            <a href="index.php?controller=wishlistCart" class="icon-btn has-badge bg3 me-3"><i class="fal fa-heart"></i><span class="badge">0</span></a>
            <a href="index.php?controller=listCart" class="icon-btn has-badge bg2 me-4 "><i class="fal fa-shopping-cart"></i><span class="badge">0</span></a>
            <a href="index.php?controller=home_user" class="icon-btn bg4">
              <i class="fal fa-user"></i>
            </a>


          </div>
        </div>
      </div>
    </div>
    <div class="container d-none d-lg-block">
      <div class="header3-inner position-relative">
        <div class="row align-items-center">
          <div class="col-lg-6 col-xl-7">
            <nav class="main-menu menu-style1 mobile-menu-active menu-style2">
              <ul>
                <li class="menu-item">
                  <a href="index.php?controller=home">Home</a>

                </li>
                <li class="menu-item-has-children">
                  <a href="index.php?controller=product_show">Shop</a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=product_show">Shop</a></li>
                    <!-- <li><a href="index.php?controller=product_favorite">Shop List</a></li>
                                        <li><a href="index.php?controller=product_details">Shop Details</a></li> -->
                    <li><a href="index.php?controller=listCart">Shopping Cart</a></li>
                    <li><a href="index.php?controller=checkOut">Check Out</a></li>
                    <li><a href="index.php?controller=wishlistCart">Wishlist</a></li>
                    <li><a href="index.php?controller=login">Login & Register</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="blog.html">Blog</a>
                  <ul class="sub-menu">
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                    <li><a href="blog-masonry.html">Blog Masonry</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li>

                <li>
                  <a href="index.php?controller=contact">Contact Us</a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-6 col-xl-5">
            <form action="index.php?controller=product_search" method="post" class="header-search">

              <input type="text" placeholder="Search your product" class="form-control" name="search">

              <button type="submit" class="vs-btn">Search</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Add this script block to your HTML or PHP file -->
  <script>
    // Assuming you have a variable mesess from your PHP code
    var mesess = "<?php echo $mesess ?? ''; ?>";

    // Check if mesess is not an empty string, then display the message
    if (mesess !== '') {
      // Create a new element to display the message
      var messageElement = document.createElement('div');
      messageElement.textContent = mesess;

      // Append the new element to the message container
      document.getElementById('message-container').appendChild(messageElement);
    }
  </script>

  <body>
    <section class="space-top space-md-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div id="page-10" class="post-10 page type-page status-publish hentry page--item">
              <div class="woocommerce--content">
                <div class="woocommerce">
                  <div class="woocommerce-notices-wrapper"></div>
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="login-register-wrapper">
                        <div class="tab-btn mb-20">
                          <ul class="nav nav-tabs login-tab" permissions="tablist">
                            <li class="nav-item" data-tab-select="login"><button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" permissions="tab" aria-controls="login" aria-selected="true">Your Infomation</button></li>
                          </ul>

                        </div>
                        <?php
                        if (isset($_SESSION['user']))
                          $user = $_SESSION['user'];
                        // var_dump($user);
                        ?>

                        <div class="tab-content">
                          <div class="tab-pane fade active show" data-tab="login" id="login" aria-labelledby="login-tab">
                            <form method="post" class="woocommerce-form login">


                              <p class="form-group">
                                User Name
                                <input name="username" class="form-control border" type="text" readonly value="<?= $user['username']; ?>">
                              </p>
                              Password
                              <p class="form-group">
                                <input name="password" class="form-control border" type="password" readonly value="<?= $user['password']; ?>">
                              </p>
                              Email
                              <p class="form-group">
                                <input name="email" class="form-control border" type="email" readonly value="<?= $user['email']; ?>">
                              </p>
                              Address
                              <p class="form-group">
                                <input name="address" class="form-control border" type="text" readonly value="<?= $user['address']; ?>">
                              </p>
                              Phone Number
                              <p class="form-group">
                                <input name="number_phone" class="form-control border" type="text" readonly value="<?= $user['number_phone']; ?>">
                              </p>



                              <p class="form-group mt-40"> <a href="index.php?controller=logout" class="vs-btn">Logout</a></p>
                              <p><a href="index.php?controller=forgot_password" class="btn-inline">Forgot Your Password?</a></p>
                              <p><a href="index.php?controller=update" class="btn-inline">Update password</a></p>
                              <?php
                                if ($_SESSION['user']['permissions'] == 1 || ($_SESSION['user']['permissions'] == 2 )){
                                  echo '<p><a href="admin_/index.php" class="btn-inline">Login Admin</a></p>';
                                }
                              ?>
                              <p><a href="index.php?controller=historyBill" class="btn-inline">Your Bill</a></p>
                              <p><a href="index.php?controller=processReturn" class="btn-inline">Put Back Your Order</a></p>
                              
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <div style="border: none; -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); 
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; weight: 150px; height: 300px; background: #fff;">
              <div class="account__content">
                <h2 class="account__content--title mb-20"> <strong>Information</strong> </h2>
                <div class="col-md-7">
                  <p class="form-group last mb-3">Full name: <?= $username ?> </p>
                  <p class="form-group last mb-3">Email: <?= $email ?></p>
                  <p class="form-group last mb-3">Password: <?= $password ?> </p>
                  <p class="form-group last mb-3">Number phone: <?= $number_phone ?> </p>
                  <p class="form-group last mb-3">Address: <?= $address ?></p>

                </div>
              </div>

            </div> -->
    </div>
    </div>
    </div>
    </div>
  </body>

  <footer class="footer-wrapper footer-layout1">
    <div class="container">
      <div class="widget-area pt-100">
        <div class="row align-items-start justify-content-between">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="widget footer-widget  ">
              <h3 class="widget_title">Contact Us</h3>
              <div class="vs-widget-about">
                <p class="fs-md">Tòa nhà FPT Polytechnic., Cổng số 2, 13 P. Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm<br> Hà Nội</p>
                <p class="mb-1 link-inherit"><i class="fas fa-paper-plane me-3"></i><a href="mailto:foodano@example.com">foodano@gmail.com</a></p>
                <p class="mb-0 link-inherit"><i class="fal fa-fax me-3"></i><a href="tel:0964255760">0964255760</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 col-xl-2">
            <div class="widget widget_nav_menu  footer-widget  ">
              <h3 class="widget_title">Useful Links</h3>
              <div class="menu-all-pages-container">
                <ul class="menu">
                  <li><a href="index.php?controller=home">Home</a></li>
                  <li><a href="about.html">About us</a></li>
                  <li><a href="blog.html">Blogs</a></li>
                  <li><a href="error.html">Terms Of Service</a></li>
                  <li><a href="error.html">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2 col-xl-2">
            <div class="widget  footer-widget  ">
              <h3 class="widget_title">Follow Us Now</h3>
              <div class="footer-social-links">
                <ul>
                  <li><a href="htttps://google.com"><i class="fab fa-facebook-f"></i>facebook</a>
                  </li>
                  <li><a href="htttps://google.com"><i class="fab fa-twitter"></i>twitter</a></li>
                  <li><a href="htttps://google.com"><i class="fab fa-behance"></i>Behance</a></li>
                  <li><a href="htttps://google.com"><i class="fal fa-basketball-ball"></i>dribvble</a></li>
                  <li><a href="htttps://google.com"><i class="fab fa-linkedin-in"></i>linkedin</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-4">


            <div class="widget footer-widget   ">
              <h3 class="widget_title">Get Direction</h3>
              <div class="footer-map pt-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14895.454672857642!2d105.7472546!3d21.0381403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1sen!2s!4v1700466585989!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583088354!2d-74.11976389828038!3d40.697663748695746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1612886249367!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" aria-hidden="false"></iframe> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright text-center pb-35">
        <p class="mb-0 link-inherit">Copyright &copy; 2022 <a href="index.php?controller=home">DTT FPOLY</a> </p>
      </div>
    </div>
  </footer>
  </div>


  <!--********************************
			Code End  Here 
	******************************** -->


  <!-- Scroll Top Top Button -->
  <a href="#" class="scrollToTop"><i class="far fa-angle-up"></i></a>




  <!--==============================
        All Js File
    ============================== -->
  <!-- Jquery -->
  <script src="./src/assets/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- Slick Slider -->
  <script src="./src/assets/js/slick.min.js"></script>
  <!-- <script src="./src/assets/js/app.min.js"></script> -->
  <!-- Layerslider -->
  <script src="./src/assets/js/layerslider.utils.js"></script>
  <script src="./src/assets/js/layerslider.transitions.js"></script>
  <script src="./src/assets/js/layerslider.kreaturamedia.jquery.js"></script>
  <!-- Bootstrap -->
  <script src="./src/assets/js/bootstrap.bundle.min.js"></script>
  <!-- Date Picker -->
  <script src="./src/assets/js/jquery.datetimepicker.min.js"></script>
  <!-- Filter -->
  <script src="./src/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="./src/assets/js/isotope.pkgd.min.js"></script>
  <!-- Magnific Popup -->
  <script src="./src/assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Jquery UI -->
  <script src="./src/assets/js/jquery-ui.min.js"></script>
  <!-- WOW JS (Animation JS) -->
  <script src="./src/assets/js/wow.min.js"></script>
  <!-- Custom Carousel -->
  <script src="./src/assets/js/vscustom-carousel.min.js"></script>
  <!-- Mobile Menu -->
  <script src="./src/assets/js/vsmenu.min.js"></script>
  <!-- Form Js -->
  <script src="./src/assets/js/ajax-mail.js"></script>
  <!-- Main Js File -->
  <script src="./src/assets/js/main.js"></script>