
<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Order</h1>

    <!-- DataTales Example -->
    <form action="index.php?act=list_order" method="post" style="margin-bottom: 10px">
        <input type="text" name="kyw" placeholder="Enter ID Order">
        <input type="submit" name="ok" value="GO">
    </form>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID Order</th>
                            <th>User</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Date Order</th>
                            <th>Type Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                            foreach ($bills as $bill) {
                                extract($bill);
                                $user = $bill["full_name"] . '
                                    <br> ' . $bill["email"] . '
                                    <br> ' . $bill["address"] . '
                                    <br> ' . $bill["number_phone"];
                                $showDetail = "index.php?act=showDetail&id_bill=" . $id_bill;
                                if ($status == 0) {
                                    $check = "Đơn hàng mới";
                                } elseif ($status == 1) {
                                    $check = "Đơn hàng đã chuẩn bị";
                                } elseif ($status == 2) {
                                    $check = "Đang giao hàng";
                                } else {
                                    $check = "Đã giao thành công";
                                }
                                if ($type_payment == 1) {
                                    $pay = "Trả tiền khi nhận hàng";
                                } elseif ($type_payment == 2) {
                                    $pay = "Chuyển khoản ngân hàng";
                                } else {
                                    $pay = "Thanh toán Online";
                                }
                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>' . $id_bill . '</td>
                                    <td>' . $user . '</td>
                                    <td>' . $quantity . '</td>
                                    <td>' . $total . '  VNĐ</td>
                                    <td>' . $create_at . '</td>
                                    <td>' . $check . '</td>
                                    <td>' . $pay . '</td>
                                    <td><a href = "' . $showDetail . '"><input type="button" value="Show Detail"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                </table>
            </div>
        </div>
    </div>
</div>