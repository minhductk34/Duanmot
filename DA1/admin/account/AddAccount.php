<div class="container" ">
    <div class=" text">
    Add Product
</div>
<form action="index.php?act=add_account" method="post" style="min-height: 500px;" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="exampleFormControlInput1" required>
        <span style="color: red; margin: 10px 0px;"><?=$nameErr?></span>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" required>
        <span style="color: red; margin: 10px 0px;"><?=$passErr?></span>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
        <span style="color: red; margin: 10px 0px;"><?=$emailErr?></span>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Avartar</label>
        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        <span style="color: red; margin: 10px 0px;"><?=$imgErr?></span>
    </div>
    <div class=" form-row">
        <span>Permissions</span>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status1" value="0" checked>
            <label class="form-check-label" for="status1">
                Client
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status2" value="1">
            <label class="form-check-label" for="status2">
                Administration
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="permission" id="status2" value="2">
            <label class="form-check-label" for="status2">
                Staff
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="Add" name="add_account">
                </div>
            </div>
        </div>
    </div>
</form>
<script>
        var noti = "<?php  echo $noti ?>";
        if ( noti != ""){
            window.alert("Add New Account " + noti);
        }
</script>
</div>
<!-- End of Main Content -->