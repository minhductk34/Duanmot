<div class="container" ">
    <div class=" text">
    Add Discount
</div>
<form action="index.php?controller=add_category" method="post" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="name_discount" required>
            <div class="underline"></div>
            <label for="">Name Discount</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="number" name="percent_discount" required>
            <div class="underline"></div>
            <label for="">Percent Discount</label>
        </div>
    </div>
    <div class=" form-row">
        <span style="margin-left: 20px">Active</span>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="active" id="status1">
            <label class="form-check-label" for="status1">
                Hiệu lực
            </label>
        </div>
        <div class="form-check" style="margin: 20px;">
            <input class="form-check-input" type="radio" name="active" id="status2">
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
                    <input type="submit" value="Add">
                </div>
            </div>
        </div>
</form>
<?php
if (isset($noti) && ($noti != "")) echo $noti
?>
</div>
<!-- End of Main Content -->