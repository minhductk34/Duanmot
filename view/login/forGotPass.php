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

    <title>Forgot</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('./view/login/images/bg_5.jpg')"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3> Forgot <strong> Password </strong></h3>
                        <p class="mb-4">

                        </p>
                        <form action="index.php?controller=forgot_password" method="post">
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" id="email" />
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <a href="index.php?controller=login">Login</a>
                            </div>


                            <form action="index.php?controller=forgot_password" method="post">
                                <div class="form-group first">

                                </div>
                                <input type="submit" value="Send" class="btn btn-block btn-primary" name="sendEmail" />
                            </form>
                            <h2 class="">
                                <?php
                                if (isset($mess) && $mess != "") {
                                    echo $mess;
                                }
                                ?>
                            </h2>
                    </div>
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