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

    <title>HOME</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div
        class="bg order-1 order-md-2"
        style="background-image: url('images/bg_4.jpg')"
      ></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <h3><strong> HOME </strong></h3>
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
                            Xin chào<br>
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