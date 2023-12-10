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
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($details as $detail) {
                        extract($detail);
                        $total = $price_product * $quantity;
                        $image = load_status_img($id_product);
                        $imgPath = "./uploads/products/" . $image;
                        $changeStsBill = "index.php?act=changeStsBill&id_bill=" . $id_bill;
                        $refundConfirm = "index.php?act=refundConfirm&id_bill=" . $id_bill;
                        if (is_file($imgPath)) {
                            $image_product = "<img src='" . $imgPath . "' height='100px'>";
                        } else {
                            $image_product = "No Photo";
                        }
                        if ($status == 0) {
                            $check = "Processing";
                        } elseif ($status == 1) {
                            $check = "Shipped";
                        } elseif ($status == 2) {
                            $check = "Completed";
                        } elseif ($status == 3) {
                            $check = "Cancelled";
                        } else {
                            $check = "Refunded";
                        }
                        echo '<tr>
                                    <td>' . $id_product . '</td>
                                    <td>' . $image_product . '</td>
                                    <td>' . $name_product . '</td>
                                    <td>' . $price_product . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '  VNĐ</td>
                                    <td>' . $check . '</td>';
                                    if ( $status == 0 || $status == 1 ){
                                        echo ' <td><a href = "' . $changeStsBill . '"><input type="button" class="btn btn-info" value="Change Status"></a></td>
                                        </tr>';
                                    }
                                    // } else if ($returned == 1 && $status != 3) {
                                    //     echo '<td><a href = "' . $refundConfirm . '"><input type="button" class="btn btn-danger" value="Refund Confirm"></a></td>
                                    //     </tr>';
                                    // }
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