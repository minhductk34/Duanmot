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

    <title>Register</title>
</head>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('./view/login/images/bg_4.jpg')"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Register to <strong> User </strong></h3>
                        <br>
                        <form action="index.php?controller=register" method="POST" class="needs-validation" novalidate="" autocomplete="on">
                            <div class="form-group first">
                                <label class="mb-2 text-muted" for="username"> <strong>Username</strong> </label>
                                <input id="username" type="text" class="form-control" placeholder="Your Username" name="username" value="" required autofocus />
                                <div class="invalid-feedback">Username is required</div>
                            </div>
                            <div class="form-group first">
                                <label for="email"> <strong>Email</strong> </label>
                                <input type="text" class="form-control" placeholder="your-email@gmail.com" name="email" id="email" />
                            </div>
                            <div class="form-group first">
                                <label class="mb-2 text-muted" for="full_name"> <strong>Full name</strong> </label>
                                <input id="full_name" type="text" class="form-control" placeholder="your-abc" name="full_name" value=" " required autofocus />
                                <div class="invalid-feedback">Full name is required</div>
                            </div>
                            <div class="form-group first">
                                <label for="address"> <strong>Address</strong> </label>
                                <input type="text" class="form-control" placeholder="your-location" name="address" value=" " id="address" />
                            </div>
                            <div class="form-group first">
                                <label for="phone"> <strong>Phone</strong> </label>
                                <input type="text" class="form-control" placeholder="your-phone" name="phone" value="" id="phone" />
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password"> <strong>Passwords</strong> </label>
                                <input type="password" class="form-control" placeholder="Your Password" name="password" id="password" />
                            </div>
                            <div class="invalid-feedback">Password is required</div>

                    

                            <input type="submit" class="btn btn-block btn-primary" name="register" value="Sign in">
                        </form>
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