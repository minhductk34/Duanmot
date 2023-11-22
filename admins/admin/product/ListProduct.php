<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Product</h1>

    <!-- DataTales Example -->
    <form action="index.php?act=list_product" method="post" style="margin-bottom: 10px">
        <input type="text" name="kyw">
        <select name="id_category">
            <option value="0" selected>All</option>
            <?php
            foreach ($Categories as $category) {
                extract($category);
                echo '<option value="' . $id_category . '"   >' . $name_category . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="ok" value="GO">
    </form>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                                <th>ID Product</th>
                                <th>Name Product</th>
                                <th>Image</th>    
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th></th>
                        </tr>
                    </thead>
                    <?php
                            foreach ($products as $product) {
                                extract($product);
                                $editPro = "index.php?act=editPro&id_product=" . $id_product;
                                $deletePro = "index.php?act=deletePro&id_product=" . $id_product;
                                $imgPath = "uploads/products/" . $image_product;
                                if (is_file($imgPath)) {
                                    $image_product = "<img src='" . $imgPath . "' height='80'>";
                                } else {
                                    $image_product = "No Photo";
                                }
                                if ($quantity == 0 || $status == 1) {
                                    $check = "Hết hàng";
                                } else {
                                    $check = "Còn hàng";
                                }
                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id_product. '</td>
                                    <td>' . $name_product . '</td>
                                    <td>' . $image_product . '</td>
                                    <td>' . $price_product . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $check . '</td>
                                    <td>' . $desc_product . '</td>
                                    <td><a href = "' . $editPro . '"><input type="button" value="Sửa" style="margin-bottom: 10px"></a> <a href = "' . $deletePro . '"><input type="button" value="Xóa"></a></td>
                                    </tr>';
                            }
                            ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->