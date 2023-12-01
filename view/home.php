<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Account information</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div
        class="bg order-1 order-md-2"
        style="background-image: url('images/bg_3.jpg')"
      ></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3><strong> Account information </strong></h3>
              <p class="mb-4">
                Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
                consectetur adipisicing.
              </p>

              <div class="boxconter formtaikhoan">
                    <?php 
                        if (isset($_SESSION['username'])) {
                            extract($_SESSION['username']);
                           
                        

                    ?>
                        <div class="form-group last mb-3">
                            Hello<br>
                            <?=$username?>
                        </div>
                        <div class="form-group last mb-3">
                            <li>
                                <a href="index.php?act=forgot">Forgot password</a>
                            </li>
                            <li>
                                <a href="index.php?act=update">Update password</a>
                            </li>
                            <?php if($permissions==1){ ?>
                            <li>
                                <a href="admin/index.php">LogIn Admin</a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="index.php?act=logout">Logout</a>
                            </li>

                        </div>
                        <?php
                            }else {
                         ?>


                    <li>
                        <a href="index.php?act=login">LogIn</a>
                    </li>
                    <li>
                        <a href="#">For got password</a>
                    </li>
                    <li>
                        <a href="index.php?act=register">SignIn</a>
                    </li>
                    <?php }?>
        </div>
        <div style="border: none; -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); 
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1); border-radius: 4px; weight: 150px; height: 300px; background: #fff;">
        <div class="account__content">
              <h2 class="account__content--title mb-20"> <strong>Information</strong> </h2>
            <div class="col-md-7">
                <p class="form-group last mb-3">Full name: <?= $full_name ?> </p>
                <p class="form-group last mb-3">Email:  <?= $email ?></p>
                <p class="form-group last mb-3">Password: <?= $password ?> </p>
                <p class="form-group last mb-3">Number phone: <?= $number_phone ?> </p>
                <p class="form-group last mb-3">Address:  <?= $address ?></p>

            </div>
                            </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
<!-- BẮT ĐẦU TỪ ĐÂY  -->
        <!-- Start login section  -->
        <!-- <div style="margin-top:5%">
            <div class="container">
            <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>

            <h2 class="account__content--title h3 mb-20">Thông tin tài khoản</h2>
            <section class="my__account--section section " style=" margin-bottom:10%;">
            <div class="container">
            <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                                                                   
            <ul class="account__menu">
                <li class="account__menu--list"><a href="index.php?act=edittaikhoan">Cập nhật tài khoản</a></li>
                <li class="account__menu--list "><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <?php
                if ($role == 1) {  ?>
                <li class="account__menu--list"><a href="admin/index.php">Đăng nhập Admin</a></li>
            <?php }
            ?>
                <li class="account__menu--list"><a href="index.php?act=thoat">Đăng xuất</a></li>

                </ul>
            </div>
            <div class="account__wrapper">
            <div class="account__content">
            <h3 class="account__content--title mb-20">Thông tin</h3>
            <div class="account__details two">
                <p class="form-group last mb-3">Họ tên: <?= $user ?> </p>
                <p class="form-group last mb-3">Email:  <?= $email ?></p>
                <p class="form-group last mb-3">Mật khẩu: <?= $pass ?> </p>
                <p class="form-group last mb-3">Số điện thoại: <?= $tel ?> </p>
                <p class="form-group last mb-3">Địa chỉ:  <?= $address ?></p>

            </div>
                                                                    
            </div>
            </div>
            <?php
                } else {

                ?>
                                                               
            </div>
            </div>
                  </section>
                                                 
                  <div class="login__section--inner" >
                  <div class="row row-cols-md-2 row-cols-1">
                  <div class="col">
                  <div class="account__login" style="margin-left: 60%;  margin-bottom:10%;">
                  <div class="account__login--header mb-25">
                      <h2 class="account__login--header__title h3 mb-10">Đăng Nhập </h2>
                  </div>
                  <div class="account__login--inner">
                                       
            <form action="index.php?act=login" method="POST" >
                  <input class="account__login--input" placeholder="Tên đăng nhập" type="text" name="user">
                  <input class="account__login--input" placeholder="Mật khẩu " type="password" name="pass">
            <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
            <div class="account__login--remember position__relative">
                  <input class="checkout__checkbox--input" id="check1" type="checkbox">
                  <span class="checkout__checkbox--checkmark"></span>
                  <label class="checkout__checkbox--label login__remember--label" for="check1">
                  Ghi nhớ</label>
            </div>
                  <button class="account__login--forgot" >
                  <a href="index.php?act=quenmk">Quên mật khẩu</a></button>
            </div>
                  <input class="account__login--btn primary__btn" type="submit" name="login" value="Đăng Nhập">

            <div class="account__login--divide">
                  <span class="account__login--divide__text">OR</span>
            </div>
            <div class="account__social d-flex justify-content-center mb-15">
                  <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com/">Facebook</a>
                  <a class="account__social--link google" target="_blank" href="https://www.google.com/">Google</a>
                  <a class="account__social--link twitter" target="_blank" href="https://twitter.com/">Twitter</a>
            </div>
                  <p class="account__login--signup__text">Bạn chưa có tài khoản?<button type="submit"><a href="index.php?act=dangky"> Đăng ký ngay </a></button></p>
                  </form>
             <?php } ?>
                  </div>
                      </div>
                            </div>
                           
                        </div>
                    </div>
               
            </div>     
        </div> -->