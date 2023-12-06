
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
                            <th>ID Order</th>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                            <th>Type Payment</th>
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
                                $editBill = "index.php?act=editBill&id_bill=" . $id_bill;
                                if ($status == 0) {
                                    $check = "New Orders";
                                } elseif ($status == 1) {
                                    $check = "Order has been prepared";
                                } elseif ($status == 2) {
                                    $check = "Order is being delivered";
                                } elseif ($status == 3) {
                                    $check = "Successful delivery";
                                }
                                 else {
                                    $check = "Order canceled";
                                }
                                if ($type_payment == 1) {
                                    $pay = "Pay upon receipt";
                                } elseif ($type_payment == 2) {
                                    $pay = "Bank transfer";
                                } else {
                                    $pay = "Online Payment";
                                }
                                echo '<tr>
                                    <td>' . $id_bill . '</td>
                                    <td>' . $user . '</td>
                                    <td>' . $create_at . '</td>
                                    <td>' . $check . '</td>
                                    <td>' . $pay . '</td>
                                    <td><a href = "' . $showDetail . '"><input type="button" class="btn btn-info" value="Show Detail"></a>
                                        <a href = "' . $editBill . '"><input type="button" class="btn btn-primary" value="Update Status"></a>
                                    </td>
                                    </tr>';
                            }
                            ?>
                </table>
            </div>
        </div>
    </div>
</div>