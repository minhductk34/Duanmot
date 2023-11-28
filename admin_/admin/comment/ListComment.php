
<!-- /.container-fluid -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List Comment</h1>

    <!-- DataTales Example -->
    <form action="index.php?act=list_comment" method="post" style="margin-bottom: 10px;">
        <select name="date" style="min-width: 100px">
            <option value="" selected>All</option>
            <option value="latest">Latest</option>
            <option value="oldest">Oldest </option>
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
                            <th>ID Commnet</th>
                            <th>ID User</th>
                            <th>ID Product</th>
                            <th>Content</th>
                            <th>Date Comment</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($comments as $comment) {
                        extract($comment);
                        $changeSts = "index.php?act=change&id_comment=" . $id_comment;
                        if ($status == 0) {
                            $check = "Hiển thị";
                        } else {
                            $check = "Ản";
                        }
                        echo '<tr>
                                <td></td>
                                <td>' . $id_comment . '</td>
                                <td>' . $id_user . '</td>
                                <td>' . $id_product . '</td>
                                <td>' . $content . '</td>
                                <td>' . $create_at . '</td>
                                <td>' . $rate . '</td>
                                <td>' . $check . '</td>
                                <td> <a href="' . $changeSts . '"><input type="button" class="btn btn-danger" value="ChangeStatus" name="change"></a></td>
                             </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->