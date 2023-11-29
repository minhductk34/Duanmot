<?php

// session_start();

?>
<div class="row mb ">
    <div class="boxtrai mr mb10">
        <div class="row mb">

            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="boxconter row formtaikhoan">
                <?php


                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                    var_dump($_SESSION['user']);
                }
                ?>

                <form action="index.php?controller=edit_user" method="post">
                    <div class="row mb10">
                        Email<br>
                        <input type="email" name="email" value="<?= isset($email) ? $email : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="username" value="<?= isset($username) ? $username : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="password" value="<?= isset($password) ? $password : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?= isset($address) ? $address : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="phone" value="<?= isset($phone) ? $phone : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        Full Name
                        <input type="text" name="full_name" value="<?= isset($full_name) ? $full_name : 'null' ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_user" value="<?= isset($id_user) ? $id_user : 'null' ?>">
                        <input type="submit" value="Cập nhật" name="update">
                    </div>
                    <div class="row mb10">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    }

                    ?>
                </h2>
            </div>
        </div>

    </div>
    <div class="boxphai">
        <!-- <?php include "view/user.php" ?> -->
    </div>
</div>