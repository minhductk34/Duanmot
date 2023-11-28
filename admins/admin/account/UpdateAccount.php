<?php

if (is_array($user)) {
    extract($user);
}
$imgPath = "uploads/account/" . $image;
if (is_file($imgPath)) {
    $image = "<img src='" . $imgPath . "' height='80'>";
} else {
    $image = "No Photo";
}
?>
<!-- <div class="">
            <div class="">
                <h1>Update Account</h1>
            </div>
            <div class="">
                <form action="index.php?act=update_account" method="post" enctype="multipart/form-data">
                    <div class="">
                        <p>Full_name</p><br>
                        <input type="text" name="full_name" value="<?= $full_name ?>">
                    </div>
                    <div class="">
                        <p>Email</p><br>
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="">
                        <p>Number Phone</p><br>
                        <input type="number" name="number_phone" value="<?= $number_phone ?>">
                    </div>
                    <div class="">
                        <p>Address</p><br>
                        <input type="text" name="address" value="<?= $address ?>">
                    </div>
                    <div>
                    <p>Status</p><br>
                        <?php
                        if ($status == 0) {
                            $check0 = "checked";
                            $check1 = "";
                        } else {
                            $check1 = "checked";
                            $check0 = "";
                        }
                        ?> 
                    <span>Đang hoạt động </span><input type="radio" name="status" value="0" <?= $check0 ?>>
                    <span>Vô hiệu </span><input type="radio" name="status" value="1" <?= $check1 ?>>
                    </div>
                   <div>
                        <p>Permissions</p><br>
                        <?php
                        if ($permissions == 1) {
                            $check1 = "checked";
                            $check2 = "";
                            $check3 = "";
                        } else if ($permissions == 2) {
                            $check1 = "";
                            $check2 = "checked";
                            $check3 = "";
                        } else {
                            $check1 = "";
                            $check2 = "";
                            $check3 = "checked";
                        }
                        ?> 
                    <span>Khách hàng</span><input type="radio" name="permission" value = "3" <?= $check3 ?>>
                    <span>Quản trị viên </span><input type="radio" name="permission" value = "1" <?= $check1 ?>>
                    <span>Nhân viên</span><input type="radio" name="permission" value = "2" <?= $check2 ?>>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_user" value="<?= $id_user ?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_account"><input type="button" value="List"></a>
                    </div>
                    <?php
                    if (isset($noti) && ($noti != "")) echo $noti
                    ?>
                </form>
            </div>
        </div>   
    </div>
</div> -->
<div class="container" ">
    <div class=" text">
    Update Account
</div>
<form action="index.php?act=update_account" method="post" style="min-height: 500px;" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Fullname</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="full_name" value="<?= $full_name ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?= $email ?>" required>
    </div>
    <div class="form-group">
        <label f for="exampleFormControlInput1">Number Phone</label>
        <input type="number" name="number_phone" class="form-control" id="exampleFormControlInput1" value="<?= $number_phone ?>" required>
    </div>
    <div class="form-group">
        <label f for="exampleFormControlInput1">Địa chỉ</label>
        <input type="text" name="address" class="form-control" id="exampleFormControlInput1" value="<?= $address ?>" required>
    </div>
    <!-- <div class="form-group">
        <label for="exampleFormControlFile1">Image Product</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" style="margin-bottom: 10px">
        <?= $image ?>
    </div> -->

    <div class=" form-row">
        <span>Status</span>
        <?php
        if ($status == 0) {
            $check0 = "checked";
            $check1 = "";
        } else {
            $check1 = "checked";
            $check0 = "";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status1" value="0" <?= $check0 ?>>
            <label class="form-check-label" for="status1">
                Đang hoạt động
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status2" value="1" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Vô hiệu
            </label>
        </div>
    </div>

    <div class=" form-row">
        <span>Status</span>
        <?php
        if ($permissions == 1) {
            $check1 = "checked";
            $check2 = "";
            $check3 = "";
        } else if ($permissions == 2) {
            $check1 = "";
            $check2 = "checked";
            $check3 = "";
        } else {
            $check1 = "";
            $check2 = "";
            $check3 = "checked";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status1"  value = "3" <?= $check3 ?>>
            <label class="form-check-label" for="status1">
               Khách hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status2" value = "1" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Quản trị viên
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status3" value = "2" <?= $check2 ?>>
            <label class="form-check-label" for="status2">
                Nhân viên
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_user" value="<?= $id_user ?>">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- End of Main Content -->