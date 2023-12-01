<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-1 text-gray-800">Stas Products</h1>

<!-- Content Row -->
<div class="row">

    <!-- Border Left Utilities -->
    <div class="col-lg-6">

        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body">
                Products that receive the most attention: <span style="font-weight: bold; color: blue; font-size:20px;"><?=$nameProCom ?> Products</span>
            </div>
        </div>

        <div class="card mb-4 py-3 border-left-secondary">
            <div class="card-body">
                Most purchased product: <span style="font-weight: bold; color: blue; font-size:20px;"><?=$nameProOrder?> Products</span>
            </div>
        </div>

        <div class="card mb-4 py-3 border-left-success">
            <div class="card-body">
                Product is out of stock: <span style="font-weight: bold; color: blue; font-size:20px;"><?=$outOfStock?> Products</span>
            </div>
        </div>

    </div>

    <!-- Border Bottom Utilities -->
    <div class="col-lg-6">

        <div class="card mb-4 py-3 border-bottom-primary">
            <div class="card-body">
                Total products on the website: <span style="font-weight: bold; color: blue; font-size:20px;"><?=$totalPro?> Products</span>
            </div>
        </div>

        <div class="card mb-4 py-3 border-bottom-secondary">
            <div class="card-body">
                Product is in stock: <span style="font-weight: bold; color: blue; font-size:20px;"><?=$inStock?> Products</span>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->
