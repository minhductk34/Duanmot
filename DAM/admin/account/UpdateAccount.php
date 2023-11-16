<?php

    if (is_array($user)){
        extract($user);
    }
    $imgPath = "uploads/account/".$image;
    if ( is_file($imgPath)){
        $image = "<img src='".$imgPath."' height='80'>";
    } else {
        $image = "No Photo";
    }   
?>
<div class="">
            <div class="">
                <h1>Update Account</h1>
            </div>
            <div class="">
                <form action="index.php?act=update_account" method="post" enctype="multipart/form-data">
                    <<div class="">
                        <p>Username</p><br>
                        <input type="text" name="username" value="<?=$username?>">
                    </div>
                    <<div class="">
                        <p>Username</p><br>
                        <input type="text" name="username" >
                    </div>
                    <div class="">
                        <p>Password</p><br>
                        <input type="password" name="password" >
                    </div>
                    <div class="">
                        <p>Email</p><br>
                        <input type="email" name="email" >
                    </div>
                    <div class="">
                        <p>Avartar</p><br>
                        <input type="file" name="image" >
                    </div>
                    <div class="">
                        <p>Permissions</p><br>
                        <span>Khách hàng</span><input type="radio" name="permission" value = "3" checked>
                        <span>Quản trị viên </span><input type="radio" name="permission" value = "1">
                        <span>Nhân viên</span><input type="radio" name="permission" value = "2">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_product" value="<?=$id_product?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_product"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti!="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   
    </div>
</div>