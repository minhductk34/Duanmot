<div class="">
            <div class="">
                <h1>Add Account</h1>
            </div>
            <div class="">
                <form action="index.php?act=add_account" method="post" enctype="multipart/form-data" style>
                    <div class="">
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
                    <div class="">
                        <input type="submit" value="Add new" name="add_account">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_account"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti !="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   