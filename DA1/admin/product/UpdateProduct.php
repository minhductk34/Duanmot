<?php

if (is_array($product)) {
    extract($product);
}
$imgPath = "uploads/products/" . $image_product;
if (is_file($imgPath)) {
    $image_product = "<img src='" . $imgPath . "' height='80'>";
} else {
    $image_product = "No Photo";
}
?>

<div class="container" ">
    <div class=" text">
    Update Product
</div>
<form action="index.php?act=update_product" method="post" style="min-height: 500px;" enctype="multipart/form-data">
    <div class="mb-3">
        <label style="margin-right: 20px">Categories</label>
        <select class="form-select" name="id_category" style="min-height: 40px;min-width: 200px">
            <?php
            foreach ($Categories as $category) {
                extract($category);
                if ($id_cat == $id_category) $s = "selected";
                else $s = "";
                echo '<option value="' . $id_category . '" ' . $s . '>' . $name_category . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Product</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name_product" value="<?= $name_product ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image Product</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_product" style="margin-bottom: 10px">
        <?= $image_product ?>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price Product</label>
        <input type="number" name="price_product" class="form-control" id="exampleFormControlInput1" required min="0" step="0.01" value="<?= $price_product ?>">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
        <input type="number" name="quantity" class="form-control" id="exampleFormControlInput1" required min="0" step="1" value="<?= $quantity ?>">
    </div>
    <div class=" form-row">
        <span>Status</span>
        <?php
        if ($status == 0 ) {
            $check0 = "checked";    
            $check1 = "";
        } else {
            $check1 = "checked";
            $check0 = "";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status1" value="0" <?= $check0 ?>>
            <label class="form-check-label" for="status1">
                Còn Hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status2"  value="1" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Hết Hàng
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc_product" required><?= $desc_product ?></textarea>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_product" value="<?= $id_product ?>">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- End of Main Content -->