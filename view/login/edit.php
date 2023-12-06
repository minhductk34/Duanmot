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

  <title>Update <strong>Colorlib</strong> </title>
</head>

<body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_4.jpg')"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3> Update <strong> User </strong></h3>
            <p class="mb-4">
              Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
              consectetur adipisicing.
            </p>
            <?php


            if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
              extract($_SESSION['user']);
              var_dump($_SESSION['user']);
            }
            ?>
            <form action="index.php?act=update" method="POST" class="needs-validation" novalidate="" autocomplete="on">
              <div class="form-group first">
                <label for="email"> <strong>Email</strong></label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" value="<?= isset($email) ? $email : 'null' ?>" name="email" id="email" />
              </div>
              <div class="form-group first">
                <label for="username"> <strong>Username</strong> </label>
                <input type="text" class="form-control" placeholder="your-abc" name="username" value="<?= isset($username) ? $username : 'null' ?>" id="username" />
              </div>
              <div class="form-group first">
                <label class="mb-2 text-muted" for="full_name"> <strong>Full name</strong> </label>
                <input id="full_name" type="text" class="form-control" placeholder="your-abc" name="full_name" value="<?= isset($full_name) ? $full_name : 'null' ?>" required autofocus />
                <div class="invalid-feedback">Full name is required</div>
              </div>
              <div class="form-group last mb-3">
                <label for="password"> <strong>Password</strong> </label>
                <input type="password" class="form-control" placeholder="Your Password" name="password" value="<?= isset($password) ? $password : 'null' ?>" id="password" />
              </div>
              <div class="form-group first">
                <label for="address"> <strong>Address</strong> </label>
                <input type="text" class="form-control" placeholder="your-location" name="address" value="<?= isset($address) ? $address : 'null' ?>" id="address" />
              </div>
              <div class="form-group first">
                <label for="number_phone"> <strong>Phone</strong> </label>
                <input type="text" class="form-control" placeholder="your-phone" name="number_phone" value="<?= isset($number_phone) ? $number_phone : 'null' ?>" id="phone" />
              </div>

              <div class="invalid-feedback">Password is required</div>

              <div class="form-group first">
               
                <input type="submit" class="btn btn-block btn-primary" name="update" value="Send">
              </div>
              <div class="btn btn-block btn-primary">
                <input type="reset" value="Reset">
              </div>
            </form>
          </div>
        </div>
      </div>
      </form>