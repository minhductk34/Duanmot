<div class="row">
    <div class="row formtile mb10">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 fordslh">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Iduser</th>
                    <th>Idpro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $suabl = "index.php?act=suabl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id . '</td>
                            <td>' . $noidung . '</td>
                            <td>' . $iduser . '</td>
                            <td>' . $idpro . '</td>
                            <td>' . $ngaybinhluan . '</td>
                            <td> <a href="' . $suabl . '"><input type="button" value="sửa"></a>
                                 <a href="' . $xoabl . '"><input type="button" value="xóa"></a></td>
                        </tr>';
                }
                ?>
            </table>

        </div>
        <div class="row mb10">
            <input class="mr" type="button" value="chọn tât cả">
            <input class="mr" type="button" value="bỏ chọn tất cả">
            <input class="mr" type="button" value="xóa mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="nhập thêm"></a>
        </div>
    </div>

</div>