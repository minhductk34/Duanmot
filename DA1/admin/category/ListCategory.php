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
                            <th>ID Category</th>
                            <th>Name Category</th>
                            <th >Description Category</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($Categories as $category) {
                        extract($category);
                        $editCat = "index.php?act=editCat&id_category=" . $id_category;
                        $changeStsCat = "index.php?act=changeStsCat&id_category=" . $id_category;
                        if ($category['status'] == 0) {
                            $status = "<p style='color: blue;'>In Stock</p>";
                        } else {
                            $status = "<p style='color: red;'>Out of Stock</p>";
                        }
                        echo '<tbody>
                            <tr>
                            <td>' . $id_category . '</td>
                            <td>' . $name_category . '</td>
                            <td style="width: 500px;">' . $desc_category . '</td>
                            <td>' . $status . '</td>';
                            if ($_SESSION['user']['permissions'] == 1) {
                                echo'<td><a href = "' . $editCat . '" style="margin-right: 10px"><input type="button"  class="btn btn-primary" value="Edit"></a> 
                            <a href = "' . $changeStsCat . '"><input type="button" class="btn btn-danger" value="Change Status"></a></td>
                            </tr></tbody>';
                            } 
   
                    }
                    ?>
                </table>
                
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->