
<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Account</h1>

    <!-- DataTales Example -->
    <form action="index.php?act=list_account" method="post" style="margin-bottom: 10px">
        <input type="text" name="kyw">
        <select name="role">
            <option value="0" selected>All</option>
            <option value="1">Quản trị viên</option>
            <option value="2">Nhân viên </option>
            <option value="3">Khách hàng</option>
        </select>
        <input type="submit" name="ok" value="GO">
    </form>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID User</th>
                            <th>Full Name</th>
                            <th>Avartar</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th>Permission</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($users as $user) {
                        extract($user);
                        $editUser = "index.php?act=editUser&id_user=" . $id_user;
                        $deleteUser = "index.php?act=deleteUser&id_user=" . $id_user;
                        $imgPath = "uploads/accounts/" . $image;
                        if (is_file($imgPath)) {
                            $image = "<img src='" . $imgPath . "' height='80'>";
                        } else {
                            $image = "No Photo";
                        }
                        if ($permissions == 1) {
                            $prn = "Quản trị viên";
                        } else if ($permissions == 2) {
                            $prn = "Nhân viên";
                        } else {
                            $prn = "Khách hàng";
                        }
                        if ($status == 0) {
                            $check = "Đang hoạt động";
                        } else {
                            $check = "Vô hiệu";
                        }
                        echo '<tr>
                            <td>' . $id_user . '</td>
                            <td>' . $full_name . '</td>
                            <td>' . $image . '</td>
                            <td>' . $username . '</td>
                            <td>' . $password . '</td>
                            <td>' . $email . '</td>
                            <td>' . $number_phone . '</td>
                            <td>' . $address . '</td>
                            <td>' . $prn . '</td>
                            <td>' . $check . '</td>
                            <td><a href = "' . $editUser . '"><input type="button" class="btn btn-primary" value="Edit" style="margin-bottom: 10px"></a> 
                            <a href = "' . $deleteUser . '"><input type="button" class="btn btn-danger" value="Change Status"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->