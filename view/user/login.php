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

    <title>Login #2</title>
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
              <h3> Login <strong> User </strong></h3>
              <p class="mb-4">
                Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
                consectetur adipisicing.
              </p>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username"> <strong>Username</strong> </label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="your-abc"
                    name="username"
                    id="username"
                  />
                </div>
              
                <div class="form-group last mb-3">
                  <label for="password"> <strong>Passwords</strong> </label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Your Password"
                    name="password"
                    id="password"
                  />
                </div>
                
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"
                    ><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" />
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"
                    ><a href="index.php?act=forgot" class="forgot-pass">Forgot Password</a></span
                  >
                </div>

                <div class="card-footer py-3 border-0">
                  <div class="text-center">
                    Don't have an account?
                    <a href="index.php?act=register" class="text-dark"
                      >Create One</a
                    >
                  </div>
                </div>

                <input
                  type="submit" class="btn btn-block btn-primary" name="login" 
                  value="Log In" 

                />
              </form>
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
