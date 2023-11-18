<?php

    if (is_array($category)){
        extract($category);
    }
?>
<div class="">
            <div class="">
                <h1>Update Category</h1>
            </div>
            <div class="">
                <form action="index.php?act=update_category" method="post">
                    <div class="">
                        <p>ID Category</p> <br>
                        <input type="text" name="id_category" disabled >
                    </div>
                    <div class="">
                        <p>Name Category</p><br>
                        <input type="text" name="name_category" value="<?php if(isset($name_category) && ($name_category != ""))echo $name_category?>">
                    </div>
                    <div>
                        <p>Description Category</p><br>
                        <input type="text" name="desc_category" value="<?php if(isset($desc_category) && ($desc_category != ""))echo $desc_category?>">
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
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name = "id_category" value="<?php if(isset($id_category) && ($id_category > 0 ))echo $id_category?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_category"><input type="button" value="List Category"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti !="")) echo $noti
                    ?>
                </form>
            </div>
        </div>  