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
                    Total account: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $TotalAcc ?> Accounts</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-secondary">
                <div class="card-body">
                    Administrator account: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $quantity_admin ?> Accounts</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-success">
                <div class="card-body">
                    Staff account: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $quantity_client ?> Accounts</span>
                </div>
            </div>

        </div>

        <!-- Border Bottom Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                    Client account <span style="font-weight: bold; color: blue; font-size:20px;"><?= $quantity_client ?> Accounts</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-bottom-secondary">
                <div class="card-body">
                    Account is active: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $is_Active ?> Accounts</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-bottom-success">
                <div class="card-body">
                    Account is disable: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $is_Disable ?> Accounts</span>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->