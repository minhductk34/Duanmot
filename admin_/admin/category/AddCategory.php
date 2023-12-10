<div class="container" ">
    <div class=" text">
    Add Category
</div>
<form action="index.php?act=add_category" method="post" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="name_category" required>
            <div class="underline"></div>
            <label for="">Name Category</label>
        </div>
        <span style="color: red; margin: 10px 20px"><?=$nameErr?></span>
    </div>
    <div class="mb-3" style="margin-left: 20px">
        <label for="exampleFormControlTextarea1" class="form-label" style="color:#3498db;">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc_category" required></textarea>
        <span style="color: red; margin: 10px 0px"><?=$descErr?></span>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="Add" name="add">
                </div>
            </div>
        </div>
</form>
<script>
        var noti = "<?php  echo $noti ?>";
        if ( noti != ""){
            window.alert("Add New Product " + noti);
        }
</script>
</div>
<!-- End of Main Content -->
