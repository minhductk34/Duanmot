<div class="">
            <div class="">
                <h1>List Product</h1>
            </div>
            <form action="index.php?act=list_product" method="post">
                <input type="text" name="kyw">
                <select name="id_category">
                    <option value="0" selected>All</option>
                    <?php
                        foreach($Categories as $category){
                            extract($category);
                            echo '<option value="'.$id_category.'"   >'.$name_category.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="ok" value="GO">
            </form>
            <div class="">
                    <div class="">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID Product</th>
                                <th>Name Product</th>
                                <th>Image</th>    
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ( $products as $product){
                                    extract($product);
                                    $editPro = "index.php?act=editPro&id_product=".$id_product;
                                    $deletePro = "index.php?act=deletePro&id_product=".$id_product;
                                    $imgPath = "uploads/products/".$image_product;
                                    if ( is_file($imgPath)){
                                        $image_product = "<img src='".$imgPath."' height='80'>";
                                    } else {
                                        $image_product = "No Photo";
                                    }
                                    if ( $quantity > 0){
                                        $check = "Còn hàng";
                                    } else { 
                                        $check = "Hết hàng";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_product.'</td>
                                    <td>'.$name_product.'</td>
                                    <td>'.$image_product.'</td>
                                    <td>'.$price_product.'</td>
                                    <td>'.$quantity.'</td>
                                    <td>'.$check.'</td>
                                    <td>'.$desc_product.'</td>
                                    <td><a href = "'.$editPro.'"><input type="button" value="Sửa"></a> <a href = "'.$deletePro.'"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                                } 
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Choose All">
                        <input type="button" value="Deselect all">
                        <a href="index.php?act=add_product"> <input type="button" value="Add new"></a>
                    </div>
                </form>
            </div>
</div>  