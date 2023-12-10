<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Stas Account</h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Border Left Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">
                    Total Comment: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $TotalCom ?> Comments</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-secondary">
                <div class="card-body">
                    Comments are displayed : <span style="font-weight: bold; color: blue; font-size:20px;"><?= $comment_show ?> Comments</span>
                </div>
            </div>

        </div>

        <!-- Border Bottom Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                    Comments are hidden : <span style="font-weight: bold; color: blue; font-size:20px;"><?= $comment_hidden ?> Comments</span>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->