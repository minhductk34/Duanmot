<div class="card-body">
            <div class="">
                <h1>Add Product</h1>
            </div>
            <div class="">
                <form action="index.php?act=add_product" method="post" enctype="multipart/form-data" style>
                    <div class="" >
                        <p>Category</p><br>
                        <select name="id_category" style="width: 11%">
                                <?php
                                    foreach($Categories as $category){
                                        extract($category);
                                        echo '<option value="'.$id_category.'">'.$name_category.'</option>';
                                    }
                                ?>
                        </select>
                    </div>  
                    <div class="">
                        <p>Name Product</p><br>
                        <input type="text" name="name_product" >
                    </div>
                    <div class="">
                        <p>Price Product</p><br>
                        <input type="number" name="price_product" >
                    </div>
                    <div class="">
                        <p>Image Product</p><br>
                        <input type="file" name="image_product" >
                    </div>
                    <div class="">
                        <p>Quantity</p><br>
                        <input type="number" name="quantity" >
                    </div>
                    <div class="">
                        <p>Description Product</p><br>
                        <textarea name="desc_product" cols="100" rows="10"></textarea>
                    </div>
                    <div class="">
                        <input type="submit" value="Add new" name = "add_product">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_product"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti !="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   
    </div> 
</div> 