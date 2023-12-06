<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Order Detail</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Product</th>
                            <th>Image</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($details as $detail) {
                        extract($detail);
                        $total = $price_product * $quantity;
                        $image = load_status_img($id_product);
                        $imgPath = "./uploads/products/" . $image;
                        if (is_file($imgPath)) {
                            $image_product = "<img src='" . $imgPath . "' height='100px'>";
                        } else {    
                            $image_product = "No Photo";
                        }
                        echo '<tr>
                                    <td>' . $id_product . '</td>
                                    <td>' . $image_product . '</td>
                                    <td>' . $name_product . '</td>
                                    <td>' . $price_product . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '  VNĐ</td>
                                    <td></td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <div class="form-row" style="margin-left: 10px">
        <a href="index.php?act=list_order"><input type="button" class="btn btn-primary" value="Back"></a>
    </div>
</div>