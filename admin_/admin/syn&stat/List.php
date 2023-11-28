<!-- <div class="row">
            <div class="row frmtitle mb">
                <h1>List</h1>
            </div>
            <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th>ID Category</th>
                                <th>Name Category</th>
                                <th>quantity</th>
                                <th>Highest Price</th>    
                                <th>Lowest Price</th>
                                <th>Average Price</th>
                            </tr>
                            <?php
                            foreach ($list as $item) {
                                extract($item);
                                echo '<tr>
                                    <td>' . $id_ctg . '</td>
                                    <td>' . $name_ctg . '</td>
                                    <td>' . $countpro . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $avgprice . '</td>
                                    </tr>';
                            }
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <a href="index.php?act=showchart"> <input type="button" value="Show Chart"></a>
                    </div>
                </form>
            </div>
</div>   -->

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
                            <th>quantity</th>
                            <th>Highest Price</th>
                            <th>Lowest Price</th>
                            <th>Average Price</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($list as $item) {
                        extract($item);
                        echo '<tr>
                                    <td>' . $id_ctg . '</td>
                                    <td>' . $name_ctg . '</td>
                                    <td>' . $countpro . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $avgprice . '</td>
                                    </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>