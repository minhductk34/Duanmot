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
                    Total Order: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $TotalOrder ?> Orders</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-secondary">
                <div class="card-body">
                    orderShipped <span style="font-weight: bold; color: blue; font-size:20px;"><?= $orderPrepare ?> Orders</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-success">
                <div class="card-body">
                    orderCompleted <span style="font-weight: bold; color: blue; font-size:20px;"><?= $orderDelivered?> Orders</span>
                </div>
            </div>

            <div class="card mb-4 py-3 border-left-info">
                <div class="card-body">
                    Revenue: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $total ?> VNĐ</span>
                </div>
            </div>
        </div>

        <!-- Border Bottom Utilities -->
        <div class="col-lg-6">

            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body">
                    orderProcessing <span style="font-weight: bold; color: blue; font-size:20px;"><?= $orderNew ?> Orders</span>
                </div>
            </div>

            <!-- <div class="card mb-4 py-3 border-bottom-secondary">
                <div class="card-body">
                    Order is being delivered: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $orderDelivered ?> Orders</span>
                </div>
            </div> -->

            <div class="card mb-4 py-3 border-bottom-success">
                <div class="card-body">
                    Order canceled: <span style="font-weight: bold; color: blue; font-size:20px;"><?= $OrderCanceled ?> Orders</span>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- /.container-fluid -->