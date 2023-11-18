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
                    <div class="">
                        <p>Full_name</p><br>
                        <input type="text" name="full_name" value="<?=$full_name?>">
                    </div>
                    <div class="">
                        <p>Email</p><br>
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="">
                        <p>Number Phone</p><br>
                        <input type="number" name="number_phone" value="<?=$number_phone?>">
                    </div>
                    <div class="">
                        <p>Address</p><br>
                        <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div>
                    <p>Status</p><br>
                        <?php 
                        if ( $status == 0 ){
                            $check0 = "checked";
                            $check1 = "";
                        } else { 
                            $check1 = "checked";
                            $check0 = "";
                        }
                    ?> 
                    <span>Đang hoạt động </span><input type="radio" name="status" value="0" <?=$check0?>>
                    <span>Vô hiệu </span><input type="radio" name="status" value="1" <?=$check1?>>
                    </div>
                   <div>
                        <p>Permissions</p><br>
                        <?php 
                        if ( $permissions == 1 ){
                            $check1 = "checked";
                            $check2 = "";
                            $check3 = "";
                        } else if ( $permissions == 2) { 
                            $check1 = "";
                            $check2 = "checked";
                            $check3 = "";
                        } else {
                            $check1 = "";
                            $check2 = "";
                            $check3 = "checked";
                        }
                    ?> 
                    <span>Khách hàng</span><input type="radio" name="permission" value = "3" <?=$check3?>>
                    <span>Quản trị viên </span><input type="radio" name="permission" value = "1" <?=$check1?>>
                    <span>Nhân viên</span><input type="radio" name="permission" value = "2" <?=$check2?>>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_user" value="<?=$id_user?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_account"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti!="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   
    </div>
</div>