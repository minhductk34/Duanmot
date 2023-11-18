<div class="">
            <div class="">
                <h1>List Account</h1>
            </div>
            <form action="index.php?act=list_account" method="post">
                <input type="text" name="kyw">
                <select name="role">
                    <option value="0" selected>All</option>
                    <option value="1">Quản trị viên</option>
                    <option value="2">Nhân viên </option>
                    <option value="3">Khách hàng</option>
                </select>
                <input type="submit" name="ok" value="GO">
            </form>
            <div class="">
                    <div class="">
                        <table>
                            <tr>
                                <th></th>
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
                            <?php
                                foreach ( $users as $user){
                                    extract($user);
                                    $editUser = "index.php?act=editUser&id_user=".$id_user;
                                    $deleteUser = "index.php?act=deleteUser&id_user=".$id_user;
                                    $imgPath = "uploads/accounts/".$image;
                                    if ( is_file($imgPath)){
                                        $image = "<img src='".$imgPath."' height='80'>";
                                    } else {
                                        $image = "No Photo";
                                    }
                                    if ($permissions == 1){
                                        $prn = "Quản trị viên";
                                    } else if ( $permissions == 2){
                                        $prn = "Nhân viên";
                                    } else{
                                        $prn = "Khách hàng";
                                    }
                                    if ( $status == 0 ){
                                        $check = "Đang hoạt động";
                                    } else {
                                        $check = "Vô hiệu";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_user.'</td>
                                    <td>'.$full_name.'</td>
                                    <td>'.$image.'</td>
                                    <td>'.$username.'</td>
                                    <td>'.$password.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$number_phone.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$prn.'</td>
                                    <td>'.$check.'</td>
                                    <td><a href = "'.$editUser.'"><input type="button" value="Sửa"></a> <a href = "'.$deleteUser.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                } 
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Choose All">
                        <input type="button" value="Deselect all">
                        <a href="index.php?act=add_account"> <input type="button" value="Add new"></a>
                    </div>
                </form>
            </div>
</div>  