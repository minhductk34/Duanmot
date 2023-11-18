<div class="row mb ">
<div class="boxtitle">UPDATE USER</div>
            <div class="CSS">
                <?php
                    if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
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
                        <input type="text" name="numberphone" value="<?=$number_phone?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id_user?>">
                        <input type="submit" value="Cập nhật" name="update">
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
               
    <div class="boxphai">
        <?php include "view/box.php" ?>
    </div>
</div>
