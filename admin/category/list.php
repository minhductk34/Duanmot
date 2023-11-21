<div class="row">
            <div class="row formtile mb10">
                <h1>DANH SÁCH LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 fordslh">
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo'<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td> <a href="'.$suadm.'"><input type="button" value="sửa"></a>
                                         <a href="'.$xoadm.'"><input type="button" value="xóa"></a></td>
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