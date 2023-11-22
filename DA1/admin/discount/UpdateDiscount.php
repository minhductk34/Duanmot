<?php

if (is_array($discount)) {
    extract($discount);
}
?>
<div class="container" ">
    <div class=" text">
    Update Discount
</div>
<form action="index.php?act=update_discount" method="post" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="name_discount" value="<?= $name_discount ?>" required>
            <label for="">Name Discount</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <label>Percent Discount</label><br>
            <input type="number" name="percent_discount" value="<?= $percent_discount ?>" required>
        </div>
    </div>
    <div class=" form-row">
        <label style="margin-left: 20px">Active</label>
        <?php
        if ($active == 0) {
            $check0 = "checked";
            $check1 = "";
        } else {
            $check1 = "checked";
            $check0 = "";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="active" id="status1" value="0" <?= $check0 ?>>
            <label class="form-check-label" for="status1">
                Hiệu lực
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="active" id="status2" value="1" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Hết hiệu lực
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_discount" value="<?= $id_discount ?>">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- End of Main Content -->