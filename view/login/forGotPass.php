<?php
require_once 'header.php';
?>
<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <!-- Logo -->
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Forgot Password</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="on">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <input style="border-radius: 5px;padding: 5px 10px ;background-color: rgb(3, 255, 104);border: 1px solid #9000ff;" type="submit" value="Send" name="sendEmail">
                                <input style="border-radius: 5px;padding: 5px 10px ;background-color: rgb(3, 255, 104);border: 1px solid #9000ff;" type="reset" value="Nhập lại">
                            </div>
                        </form>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                        ?>

                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Remember your password? <a href="index.php?controller=login" class="text-dark">Login</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once 'footer.php';
?>