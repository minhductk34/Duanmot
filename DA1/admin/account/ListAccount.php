
<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Account</h1>

    <!-- DataTales Example -->
    <form action="index.php?act=list_account" method="post" style="margin-bottom: 10px">
        <input type="text" name="kyw">
        <select name="role">
            <option value="" selected>All</option>
            <option value="1">Administration</option>
            <option value="2">Staff </option>
            <option value="0">Client</option>
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
                        $changeStsAcc = "index.php?act=changeStsAcc&id_user=" . $id_user;
                        $imgPath = "../assets/imgs/logo/" . $image;
                        if (is_file($imgPath)) {
                            $image = "<img src='" . $imgPath . "' height='80'>";
                        } else {
                            $image = "No Photo";
                        }
                        if ($permissions == 1) {
                            $prn = "Administration";
                        } else if ($permissions == 2) {
                            $prn = "Staff";
                        } else {
                            $prn = "Client";
                        }
                        if ($status == 0) {
                            $check = "<p style='color:blue;'>Active</p>";
                        } else {
                            $check = "<p style='color:red;'>Disable</p>";
                        }
                        echo '<tr>
                            <td>' . $id_user . '</td>
                            <td>' . $full_name . '</td>
                            <td>' . $image . '</td>
                            <td>' . $username . '</td>
                            <td style="width:200px;">' . $password . '</td>
                            <td>' . $email . '</td>
                            <td style="width:200px;">' . $number_phone . '</td>
                            <td>' . $address . '</td>
                            <td>' . $prn . '</td>
                            <td>' . $check . '</td>';
                            if ($_SESSION['user']['permissions'] == 1) {
                                echo'<td><a href = "' . $editUser . '"><input type="button" class="btn btn-primary" value="Edit" style="margin-bottom: 10px"></a> 
                                <a href = "' . $changeStsAcc . '"><input type="button" class="btn btn-danger" value="Change Status"></a></td>
                                </tr>';
                            } else {
                                echo'<td><a href = "' . $changeStsAcc . '"><input type="button" class="btn btn-danger" value="Change Status"></a></td>
                                </tr>';
                            }
                            
                    }
                    ?>
                </table style="width:200px;">

            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->