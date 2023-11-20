<?php
require_once('view/home/user/page/header.php');

?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="./src/assets/img/breadcumb/breadcumb-img-1.jpg">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Login & Register</h1>
            <ul class="breadcumb-menu-style1 mx-auto">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login & Register</li>
            </ul>
        </div>
    </div>
</div>
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
                                                <li class="nav-item" data-tab-select="login"><button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" permissions="tab" aria-controls="login" aria-selected="true">Log In</button></li>
                                                <li class="nav-item" data-tab-select="register"><button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" permissions="tab" aria-controls="register" aria-selected="false">Register</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" data-tab="login" id="login" aria-labelledby="login-tab">
                                                <form method="post" class="woocommerce-form login">
                                                    <p class="form-group"><input name="username" class="form-control border" type="text" placeholder="User Name"></p>
                                                    <p class="form-group"><input class="form-control border" name="password" type="password" placeholder="Password">
                                                    </p>
                                                    <p class="custom-checkbox notice"><input id="remember" value="forever" name="rememberme" type="checkbox"><label for="remember">Remember me<span class="checkmark"></span></label></p>
                                                    <p class="form-group"><button type="submit" class="vs-btn">Login</button></p>
                                                    <p><a href="#" class="btn-inline">Forgot Your Password?</a></p>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" data-tab="register" id="register" aria-labelledby="register-tab">
                                                <form method="post" class="woocommerce-form register">
                                                    <p class="form-group"><input name="email" class="form-control" type="email" placeholder="Email"></p>
                                                    <p class="form-group"><input name="password" class="form-control" type="password" placeholder="Password"></p>
                                                    <div class="user-permissions mt-40">
                                                        <div class="custom-checkbox">
                                                            <input id="customer" type="radio" name="permissions" value="customer" checked="checked">
                                                            <label for="customer" class="radio">I am a customer
                                                                <span class="checkmark"></span></label>
                                                        </div>
                                                        <div class="custom-checkbox">
                                                            <input id="seller" type="radio" name="permissions" value="seller">
                                                            <label for="seller" class="radio">I am a vendor <span class="checkmark"></span></label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <p>Your personal data will be used to support your
                                                            experience throughout this website, to manage access to
                                                            your account, and for other purposes described in our <a href="#">privacy policy</a>.</p>
                                                    </div>
                                                    <p class="form-group mt-40"><button type="submit" class="vs-btn">Register</button></p>
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
<!--==============================
			Footer Area
	==============================-->
<div class="bg2" data-bg-src="./src/assets/img/footer/footer-bg-1.jpg">
    <!--==============================
    Subscribe Area
    ==============================-->
    <section class="vs-newsletter-wrpper   ">
        <div class="container">
            <div class="inner-wrap1 bg-fluid px-70 py-70" data-bg-src="./src/assets/img/bg/newsletter-bg-1-1.png">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="form-title mb-30 mb-xl-0 text-center text-xl-start">
                            <span class="sub-title3">Get Connected</span>
                            <h2 class="h1 mb-0 lh-1">Subscribe <span class="fw-light text-theme">Newsletter</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-6">
                        <form action="#" class="newsletter-style1">
                            <div class="form-group m-0">
                                <input type="text" placeholder="Enter Your mail" class="form-control">
                                <button class="vs-btn style2">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once('view/home/user/page/footer.php');
    ?>
    </body>

    </html>