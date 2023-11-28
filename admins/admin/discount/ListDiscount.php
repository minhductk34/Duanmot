<!-- <div class="">
    <div class="">
        <h1>List Discount</h1>
    </div>
    <div class="">
            <div class="">
                <table>
                    <tr>
                        <th></th>
                        <th>ID Discount</th>
                        <th>Name Discount</th>
                        <th>Percent Discount</th>
                        <th>Status</th>
                        <th>Create At</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($discounts as $discount) {
                        extract($discount);
                        $editDis = "index.php?act=editDis&id_discount=" . $id_discount;
                        $deleteDis = "index.php?act=deleteCat&id_discount=" . $id_discount;
                        if ($active == 0) {
                            $status = "Hiệu lực";
                        } else {
                            $status = "Hết hiệu lực";
                        }
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_discount . '</td>
                            <td>' . $name_discount . '</td>
                            <td>' . $percent_discount . '</td>
                            <td>' . $status . '</td>
                            <td>' . $create_at . '</td>
                            <td><a href = "' . $editDis . '"><input type="button" value="Edit"></a> <a href = "' . $deleteDis . '"><input type="button" value="Delete"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=add_discount"> <input type="button" value="Add new"></a>
            </div>
    </div>
</div>  -->
<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List category</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID Discount</th>
                            <th>Name Discount</th>
                            <th>Percent Discount</th>
                            <th>Status</th>
                            <th>Create At</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($discounts as $discount) {
                        extract($discount);
                        $editDis = "index.php?act=editDis&id_discount=" . $id_discount;
                        $deleteDis = "index.php?act=deleteCat&id_discount=" . $id_discount;
                        if ($active == 0) {
                            $status = "Hiệu lực";
                        } else {
                            $status = "Hết hiệu lực";
                        }
                        echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_discount . '</td>
                            <td>' . $name_discount . '</td>
                            <td>' . $percent_discount . '</td>
                            <td>' . $status . '</td>
                            <td>' . $create_at . '</td>
                            <td><a href = "' . $editDis . '" style="margin-right: 10px"><input type="button" value="Edit"></a> <a href = "' . $deleteDis . '"><input type="button" value="Delete"></a></td>
                            </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->