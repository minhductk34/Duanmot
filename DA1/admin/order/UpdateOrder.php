<?php

if (is_array($bill)) {
    extract($bill);
}
?>
<div class="container" ">
    <div class=" text">
    Update Order
</div>
<form action="index.php?act=update_order" method="post" style="min-height: 500px;">
    <!-- <div class=" form-row">
        <label style="margin-left: 20px">Type Payment</label>
        <?php
        if ($type_payment == 1) {
            $type1 = "checked";
            $type2 = "";
            $type3 = "";
        } else if ($type_payment == 2) {
            $type2 = "checked";
            $type3 = "";
            $type1 = "";
        } else if ($type_payment == 3) {
            $type3 = "checked";
            $type2 = "";
            $type1 = "";
        }
        ?> 
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="type_payment" id="status1" value="1" <?= $type1 ?>>
            <label class="form-check-label" for="status1">
                Trả tiền trước khi nhận hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="type_payment" id="status2" value="2" <?= $type2 ?>>
            <label class="form-check-label" for="status2">
                Chuyển khoản ngân hàng
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="type_payment" id="status3" value="3" <?= $type3 ?>>
            <label class="form-check-label" for="status3    ">
               Thanh toán online
            </label>
        </div>
    </div> -->
    <div class=" form-row">
        <label style="margin-left: 20px">Status</label>
        <?php
        if ($status == 0) {
            $check0 = "checked";
            $check1 = "";
            $check2 = "";
            $check3 = "";
            $check4 = "";
        } else if ($status == 1) {
            $check1 = "checked";
            $check2 = "";
            $check3 = "";
            $check0 = "";
            $check4 = "";
        } else if ($status == 2) {
            $check2 = "checked";
            $check3 = "";
            $check1 = "";
            $check0 = "";
            $check4 = "";
        } else if ($status == 3) {
            $check2 = "";
            $check3 = "checked";
            $check1 = "";
            $check0 = "";
            $check4 = "";
        } else {
            $check2 = "";
            $check4 = "checked";
            $check1 = "";
            $check0 = "";
            $check3 = "";
            $check4 = "";
        }
        ?>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status1" value="0" <?= $check0 ?>>
            <label class="form-check-label" for="status1">
                New Orders
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status2" value="1" <?= $check1 ?>>
            <label class="form-check-label" for="status2">
                Order has been prepared
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status3" value="2" <?= $check2 ?>>
            <label class="form-check-label" for="status3">
                Order is being delivered
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status4" value="3" <?= $check3 ?>>
            <label class="form-check-label" for="status3">
                Successful delivery
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="status" id="status4" value="4" <?= $check4 ?>>
            <label class="form-check-label" for="status4">
                Order canceled
            </label>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="hidden" name="id_bill" value="<?= $id_bill ?>">
                    <input type="submit" value="Update" name="update">
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- End of Main Content -->