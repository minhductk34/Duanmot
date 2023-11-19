<?php

    if (is_array($product)){
        extract($product);
    }
    $imgPath = "uploads/products/".$image_product;
    if ( is_file($imgPath)){
        $image_product = "<img src='".$imgPath."' height='80'>";
    } else {
        $image_product = "No Photo";
    }   
?>
<div class="">
            <div class="">
                <h1>Update Product</h1>
            </div>
            <div class="">
                <form action="index.php?act=update_product" method="post" enctype="multipart/form-data">
                    <div class="">
                    <select name="id_category">
                                <option value="0" selected>All</option>
                                <?php
                                    foreach($Categories as $category){
                                        extract($category);
                                        if ( $id_category == $id_category) $s = "selected"; else $s = "";
                                        echo '<option value="'.$id_category.'" '.$s.'>'.$name_category.'</option>';
                                    }
                                ?>
                            </select>
                    </div>  
                    <div class="">
                    <div class="">
                        <p>Name Product</p><br>
                        <input type="text" name="name_product" value="<?=$name_product?>">
                    </div>
                    </div>
                    <div class="">
                        <p>Price Product</p><br>
                        <input type="number" name="price_product" value="<?=$price_product?>">
                    </div>
                    <div class="">
                        <p>Image Product</p><br>
                        <input type="file" name="image_product">
                        <?=$image_product?>
                    </div>
                    <div class="">
                        <p>Quantity</p><br>
                        <input type="number" name="quantity" value="<?=$quantity?>">
                    </div>
                    <div>
                        <p>Status</p><br>
                        <?php 
                        if ( $status == 0 ){
                            $check0 = "checked";
                            $check1 = "";
                        } else { 
                            $check1 = "checked";
                            $check0 = "";
                        }
                    ?> 
                    <span>Còn hàng </span><input type="radio" name="status" value="0" <?=$check0?>>
                    <span>Hết hàng </span><input type="radio" name="status" value="1" <?=$check1?>>
                    <div class="">
                        <p>Description Product</p><br>
                        <textarea name="desc_product" cols="100" rows="10"><?=$desc_product?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_product" value="<?=$id_product?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_product"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti!="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   
    </div>
</div>