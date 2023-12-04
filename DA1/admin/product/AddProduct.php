
    <div class="container" ">
    <div class=" text">
        Add Product
    </div>
    <form action="index.php?act=add_product" method="post" style="min-height: 500px;" enctype="multipart/form-data">
        <div class="mb-3">
            <label style="margin-right: 20px">Categoriest</label>
            <select class="form-select" name="id_category" style="min-height: 40px;min-width: 200px">
                <?php
                foreach ($Categories as $category) {
                    extract($category);
                    echo '<option value="' . $id_category . '">' . $name_category . '</option>';
                }
                ?>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name Product</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name_product" required>
            <span style="color: red; margin: 10px 0px;"><?=$nameErr?></span>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image Product</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_product" accept=".jpg, .png">
            <span style="color: red; margin: 10px 0px;"><?=$imgErr?></span>
        </div>
       
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price Product</label>
            <input type="number" name="price_product"  class="form-control" id="exampleFormControlInput1" required min="0" step="0.01" >
            <span style="color: red; margin: 10px 0px;"><?=$priceErr?></span>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
            <input type="number" name="quantity"  class="form-control" id="exampleFormControlInput1" required min="0" step="1" >
            <span style="color: red; margin: 10px 0px;"><?=$quanErr?></span>
        </div>
       
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc_product"></textarea>
            <span style="color: red; margin: 10px 0px;"><?=$descErr?></span>
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