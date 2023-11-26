<?php
if (is_array($product)) {
    extract($product);
}
?>
<div class="container" ">
    <div class=" text">
    Add Variant Product
</div>
<form action="index.php?act=addVariant" method="post" style="min-height: 500px;" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name_product"  value="<?= $name_product ?>" disabled>
    </div>
    <div class="mb-3">  
        <label style="margin-right: 20px;">Size</label>
        <select class="form-select" name="id_size" style="min-height: 40px; min-width: 200px; margin-left: 37px">
            <?php
            foreach ($sizes as $size) {
                extract($size);
                echo '<option value="' . $id_size . '">' . $type . '</option>';
            }
            ?>
        </select>
        <?=$errSize?>
    </div>

    <div class="mb-3">
        <label style="margin-right: 20px; margin-top: 30px">Type Box</label>
        <select class="form-select" name="id_box" style="min-height: 40px;min-width: 200px">
            <?php
            foreach ($boxs as $box) {
                extract($box);
                echo '<option value="' . $id_box . '">' . $type_box . '</option>';
            }
            ?>
        </select>
        <?=$errBox?>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_product" value="<?= $id_product ?>">
                    <input type="submit" value="add" name="add">
                </div>
            </div>
        </div>
    </div>
</form>
<?php
if (isset($noti) && ($noti != "")) echo $noti
?>
</div>
<!-- End of Main Content -->