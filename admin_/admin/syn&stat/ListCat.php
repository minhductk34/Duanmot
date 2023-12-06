

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
                            <th>ID Category</th>
                            <th>Name Category</th>
                            <th>Quantity Product</th>
                            <th>Highest Price Product</th>
                            <th>Lowest Price Products</th>
                            <th>Average Price Produts</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list as $item) {
                        extract($item);
                        echo '<tr>
                                    <td>' . $id_ctg . '</td>
                                    <td>' . $name_ctg . '</td>
                                    <td>' . $countpro . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $avgprice . '</td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>