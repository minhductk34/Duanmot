<div class="row">
            <div class="row formtile mb10 b">
                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <form action="index.php?act=listsp" method="post" class="mb10 b">
                        <input type="text" name="kwy" id="">
                        <select name="iddm" id="">
                            <option class="b" value="0" selected style="text-align: center; width: 100px;">tất cả</option>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id_.'">'.$name.'</option>';
                            
                            }                  
                            ?>                         
                        </select>
                        <input style="background-color: #FFC0B9; border: rgb(3, 255, 104) solid 1px; border-radius: 5px;" type="submit" name="listok" value="TÌM KIẾM">
            </form>
            <div class="row frmcontent">
                <div class="row mb10 fordslh">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>mã sản phẩm</th>
                            <th>tên sản phẩm</th>
                            <th>mô tả</th>
                            <th>hình</th>
                            <th>giá</th>
                            <th>status</th>
                            <th>mã loại</th>
                            <th>số lượng</th>
                            <th>giảm giá</th>
                            <th></th>
                        </tr>
                        <?php 
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id_product;
                                $xoasp="index.php?act=xoasp&id=".$id_product;
                                $hinhpath="../upload/".$image_product;
                                if (is_file($hinhpath)) {
                                    $image_product = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $image_produc = "không hình ảnh";
                                }
                                
                                echo'<tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$id_product.'</td>
                                    <td>'.$name_product.'</td>
                                    <td>'.$desc_product.'</td>
                                    <td>'.$image_produc.'</td>
                                    <td>'.$price_product.'</td>
                                    <td>'.$status.'</td>
                                    <td>'.$quantity.'</td>
                                    <td>'.$id_category.'</td>
                                    <td>'.$id_discount.'</td>
                                    <td> <a href="'.$suasp.'"><input type="button" value="sửa"></a>
                                         <a href="'.$xoasp.'"><input type="button" value="xóa"></a></td>
                                </tr>';
                            }
                        
                        ?>
                    </table>

                </div>
                <div class="row mb10 " >
                    <input class="mr" type="button" value="chọn tât cả">
                    <input class="mr" type="button" value="bỏ chọn tất cả">
                    <input class="mr" type="button" value="xóa mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>     
                </div>    
            </div>

        </div>