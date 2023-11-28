
<div class="container" ">
    <div class=" text">
        Add Product
    </div>
    <form action="index.php?act=add_product" method="post" style="min-height: 500px;" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Avartar</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" >
        </div>
        <div class=" form-row">
        <span>Permissions</span>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status1" value="3">
            <label class="form-check-label" for="status1">
                Khách hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status2" value="1">
            <label class="form-check-label" for="status2">
                Quản trị viên
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status2" value="2">
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
                        <input type="submit" value="Add" name="add_product">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (isset($noti) && ($noti != "")) echo $noti
    ?>
</div>
<!-- End of Main Content -->