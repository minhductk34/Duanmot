<?php

    if (is_array($discount)){
        extract($discount);
    }
?>
<div class="">
            <div class="">
                <h1>Update Discount</h1>
            </div>
            <div class="">
                <form action="index.php?act=update_discount" method="post">
                    <div class="">
                        <p>Name Discount</p><br>
                        <input type="text" name="name_discount" value="<?=$name_discount?>">
                    </div>
                    <div>
                        <p>Percent Discount</p><br>
                        <input type="number" name="percent_discount" value="<?=$percent_discount?>">
                    </div>
                    <div>
                        <p>Active</p><br>
                        <?php 
                        if ( $active == 0 ){
                            $check0 = "checked";
                            $check1 = "";
                        } else { 
                            $check1 = "checked";
                            $check0 = "";
                        }
                    ?> 
                    <span>Hiệu lực </span><input type="radio" name="active" value="0" <?=$check0?>>
                    <span>Hết hiệu lực </span><input type="radio" name="active" value="1" <?=$check1?>>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name = "id_discount" value="<?=$id_discount?>">
                        <input type="submit" value="Update" name = "update">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_discount"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti !="")) echo $noti
                    ?>
                </form>
            </div>
        </div>  