<div class="container" ">
    <div class=" text">
    Add Category
</div>
<form action="index.php?controller=add_category" method="post" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="name_category" required>
            <div class="underline"></div>
            <label for="">Name Category</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="desc_category" required>
            <div class="underline"></div>
            <label for="">Description</label>
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
