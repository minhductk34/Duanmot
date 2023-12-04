<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Variant Product</h1>

    <!-- DataTales Example -->
    <!-- <form action="index.php?act=listVariant" method="post" style="margin-bottom: 10px">
        <input type="text" name="kyw">
        <select  name="id_size" style="margin: 0px 5px;">
            <option value="0" selected>All</option>
            <?php
            foreach ($sizes as $size) {
                extract($size);
                echo '<option value="' . $id_size . '">' . $type . '</option>';
            }
            ?>
            
        </select>
        <select  name="id_box" style="margin: 0px 5px; width: 120px">
            <option value="0" selected>All</option>
            <?php
            foreach ($boxs as $box) {
                extract($box);
                echo '<option value="' . $id_box . '">' . $type_box . '</option>';
            }
            ?>
        </select>
        </select>
        <input type="submit" name="ok" value="GO">
    </form> -->

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name Variant Product</th>   
                            <th>Name Product</th>
                            <th>Size</th>
                            <th>Box</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($variants as $variant) {
                        extract($variant);
                        // $editPro = "index.php?act=editPro&id_product=" . $id_product;
                        echo '<tr>
                                    <td>' . $variant_product . '</td>
                                    <td>' . $NameProduct . '</td>
                                    <td>' . $Size . '</td>
                                    <td>' . $Box . '</td>
                                    <td>' . $Box . '</td>
                                    <td><a href = "#"><input type="button" class="btn btn-danger" value="Change Status"></a></td></td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->