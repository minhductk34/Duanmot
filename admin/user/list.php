<div class="row">
    <div class="row formtile mb10">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 fordslh">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ TÀI KHOẢN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>ADDRESS</th>
                    <th>PHONE</th>
                    <th>STATUS</th>
                    <th>PERMISSION</th>
                    <th>FULL NAME</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listusername as $usernamename) {
                    extract($username);
                    $suatk = "index.php?act=suatk&id=" . $id_user;
                    $xoatk = "index.php?act=xoatk&id=" . $id_user;
                    echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id_user . '</td>
                            <td>' . $username . '</td>
                            <td>' . $password . '</td>
                            <td>' . $email . '</td>
                            <td>' . $address . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $status . '</td>
                            <td>' . $permissions . '</td>
                            <td>' . $full_name . '</td>
                
                            <td> <a href="' . $suatk . '"><input type="button" value="sửa"></a>
                                    <a href="' . $xoatk . '"><input type="button" value="xóa"></a></td>
                        </tr>';
                }
                ?>
            </table>

        </div>
        <!-- <div class="row mb10">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a>
        </div> -->
    </div>

</div>