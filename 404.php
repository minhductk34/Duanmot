<?php
require_once('view/home/user/page/header.php');

?>
<section class="vs-error-wrapper space-md-top space-bottom">
    <div class="container">
        <div class="error-content text-center">
            <h1 class="error-number">404</h1>
            <h2 class="error-title h3 fw-semibold text-uppercase text-body mb-5 pb-1">The page you've requested is
                not available.</h2>
            <a href="index.php?controller=home" class="vs-btn">Return To Home</a>
            <img src="./src/assets/img/error/error-1.png" alt="Error Image">
        </div>
    </div>
</section>
<?php
require_once('view/home/user/page/footer.php');
?>