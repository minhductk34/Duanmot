<?php

if (is_array($category)) {
    extract($category);
}
?>
<div class="container" ">
    <div class=" text">
    Update Category
</div>
<form action="index.php?act=update_category" method="post" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="name_category" value="<?php if (isset($name_category) && ($name_category != "")) echo $name_category ?>">
            <label for="">Name Category</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <label>Description Category</label><br>
            <input type="text" name="desc_category" value="<?php if (isset($desc_category) && ($desc_category != "")) echo $desc_category ?>">
        </div>
    </div>
    <div class=" form-row">
        <?php
        if ($status == 0) {
            $check0 = "checked";
            $check1 = "";
        } else {
            $check1 = "checked";
            $check0 = "";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status1" <?= $check0 ?>>
            <label class="form-check-label" for="status1">
                Còn Hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status2" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Hết Hàng
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_category" value="<?php if (isset($id_category) && ($id_category > 0)) echo $id_category ?>">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- End of Main Content -->