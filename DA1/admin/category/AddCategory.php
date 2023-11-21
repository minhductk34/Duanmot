<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">



            <div class="card shadow mb-4">
                <div class="card-header py-3">
                </div>
                <div class="card-body">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <div>
                            <div>
                                <h1>Add Category</h1>
                            </div>
                            <div>
                                <form action="index.php?act=add_category" method="post">
                                    <div>
                                        <p>ID Category</p><br>
                                        <input type="text" name="id_category" disabled>
                                    </div>
                                    <div>
                                        <p>Name Category</p><br>
                                        <input type="text" name="name_category">
                                    </div>
                                    <div>
                                        <p>Description Category</p><br>
                                        <input type="text" name="desc_category">
                                    </div>
                                    <div>
                                        <input type="submit" value="Add new" name="add_category">
                                        <input type="reset" value="Reset">
                                        <a href="index.php?act=list_category"><input type="button" value="List Category"></a>
                                    </div>
                                    <?php
                                    if (isset($noti) && ($noti != "")) echo $noti
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>