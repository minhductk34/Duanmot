<div class="">
    <div class="">
        <h1>List Category</h1>
    </div>
    <div class="">
            <div class="">
                <table>
                    <tr>
                        <th></th>
                        <th>ID Category</th>
                        <th>Name Category</th>
                        <th>Description Category</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ( $Categories as $category){
                            extract($category);
                            $editCat= "index.php?act=editCat&id_category=".$id_category;
                            $deleteCat = "index.php?act=deleteCat&id_category=".$id_category;
                            if ( $category['status'] == 0 ){
                                $status = "Còn hàng";
                            } else {
                                $status = "Hết hàng";
                            }
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id_category.'</td>
                            <td>'.$name_category.'</td>
                            <td>'.$desc_category.'</td>
                            <td>'.$status.'</td>
                            <td><a href = "'.$editCat.'"><input type="button" value="Edit"></a> <a href = "'.$deleteCat.'"><input type="button" value="Delete"></a></td>
                            </tr>';
                        } 
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=add_category"> <input type="button" value="Add new"></a>
            </div>
    </div>
</div>  