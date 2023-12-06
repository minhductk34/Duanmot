<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="fonts/icomoon/style.css" />

  <link rel="stylesheet" href="./view/login/css/owl.carousel.min.css" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./view/login/css/bootstrap.min.css" />

  <!-- Style -->
  <link rel="stylesheet" href="./view/login/css/style.css" />

  <title>Account information</title>
</head>

<body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong> Account information </strong></h3>
            <div class="boxconter formtaikhoan">
              <?php
              if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ;
              ?>
                <div class="form-group last mb-3">
                  Hello<br>
                  <?= $username ?>
                </div>
                <div class="form-group last mb-3">
                  <li>
                    <a href="index.php?act=forgot">Forgot password</a>
                  </li>
                  <li>
                    <a href="index.php?act=update">Update password</a>
                  </li>
                  <?php if ($permissions == 1) { ?>
                    <li>
                      <a href="admin/index.php">LogIn Admin</a>
                    </li>
                  <?php } ?>
                  <li>
                    <a href="index.php?act=logout">Logout</a>
                  </li>

                </div>
              <?php
              } else {
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
              <?php } ?>
            </div>
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

    <script src="./view/login/js/jquery-3.3.1.min.js"></script>
    <script src="./view/login/js/popper.min.js"></script>
    <script src="./view/login/js/bootstrap.min.js"></script>
    <script src="./view/login/js/main.js"></script>
</body>

</html>