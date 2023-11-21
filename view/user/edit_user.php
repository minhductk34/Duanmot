<div class="row mb ">
    <div class="boxtrai mr mb10">
        <div class="row mb">

            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="boxconter row formtaikhoan">
                <?php
                    if (isset($_SESSION['username'])&&(is_array($_SESSION['username']))){
                        extract($_SESSION['username']);
                    }
                ?>

                <form action="index.php?act=edit_user" method="post">
                    <div class="row mb10">
                        Email<br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="username" value="<?=$username?>">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="password" value="<?=$password?>">
                    </div>
                    <div class="row mb10">
                        Địa chỉ
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Điện thoại
                        <input type="text" name="phone" value="<?=$phone?>">
                    </div>
                    <!-- <div class="row mb10">
                        Full Name
                        <input type="text" name="full_name" value="<?=$full_name?>">
                    </div> -->
                    <div class="row mb10">
                        <input type="hidden" name="id_user" value="<?=$id_user?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                    </div><div class="row mb10">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php 
                    
                    if(isset($thongbao) && $thongbao!=""){
                        echo $thongbao;
                    }
                    
                ?>
                </h2>
            </div>              
        </div>
                
    </div>     
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>
