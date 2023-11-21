<?php
require_once('view/home/user/page/header.php');

?>
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="./src/assets/img/breadcumb/breadcumb-img-1.jpg">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Organic</h1>
            <ul class="breadcumb-menu-style1 mx-auto">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Feature Products
    ==============================-->
<section class="vs-shop-wrapper position-relative space-top space-md-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="vs-sort-bar row justify-content-center justify-content-sm-between align-items-center pb-4 mb-1 ">
                    <div class="col-auto mb-3 mb-sm-0">
                        <div class="nav" permissions="tablist">
                            <!-- <a href="shop.html" class="icon-btn style3 active me-2" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" permissions="tab" aria-controls="tab-grid" aria-selected="true"><i class="fas fa-th"></i></a>
                            <a href="shop-list.html" class="icon-btn style3  " id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" permissions="tab" aria-controls="tab-grid" aria-selected="false"><i class="far fa-bars"></i></a> -->
                        </div>
                    </div>
                    <div class="col d-none d-md-block">
                        <div class="border-top"></div>
                    </div>
                    <!-- <div class="col-sm-9 col-md-7 col-lg-8 col-xl-6">
                        <div class="row justify-content-center justify-content-sm-between">
                            <div class="col-auto d-flex align-items-center mb-3 mb-sm-0">
                                <label class="text-body2" for="sortBy">Sort by</label>
                                <select name="sortBy" id="sortBy" class="form-select">
                                    <option value="productName">Sorted Product Name</option>
                                    <option value="productName">Sorted Product New</option>
                                    <option value="productName">Sorted Product Popular</option>
                                </select>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <label class="text-body2" for="showTotal">Show</label>
                                <select name="showTotal" id="showTotal" class="form-select">
                                    <option value="productName">01</option>
                                    <option value="productName">02</option>
                                    <option value="productName">03</option>
                                    <option value="productName">04</option>
                                    <option value="productName">05</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="tab-grid" permissions="tabpanel" aria-labelledby="tab-shop-grid">
                        <div class="row">

                            <?php
                            require_once 'DAO/ProductDAO.php';

                            $productDao = new ProductDao();
                            $products = $productDao->select(); // Lấy danh sách sản phẩm

                            $linkpro = "index.php?controller=product_details&idpro="; // Xây dựng đường dẫn sản phẩm
                            ?>

                            <?php foreach ($products as $product) : ?>

                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag1">sale</div>
                                        <div class="product-img">
                                            <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-1-1.png" alt="Product Image" class="w-100"></a>
                                            <!-- <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-1-8.png" alt="Product Image" class="w-100 img_swap"></a>
                                     -->
                                            <!-- <a href=<?php echo $linkpro . $product->getId(); ?>><img src="<?php echo $product->getImage(); ?>" alt="Product Image" class="w-100" /></a>-->
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="<?php echo $linkpro . $product->getId(); ?>"><i class="fal fa-cart-plus"></i></a>
                                                <a href="./src/assets/img/shop/product-1-1.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="index.php?controller=wishlistCart"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href=<?php echo $linkpro . $product->getId(); ?>><?php echo $product->getName(); ?></a></h4>
                                            <span class="price font-theme"><strong><?php echo $product->getPrice(); ?></strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-list" permissions="tabpanel" aria-labelledby="tab-shop-list">
                        <div class="row ">
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-1.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-8.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Apple
                                                    juice</a></h4>
                                            <span class="price font-theme"><strong>$40.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-tag1">sale</div>
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-2.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-7.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Black
                                                    Beans</a></h4>
                                            <span class="price font-theme"><strong>$22 .00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-3.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-6.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Plum
                                                    Silho</a></h4>
                                            <span class="price font-theme"><strong>$83.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-4.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-5.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Carne
                                                    Asada</a></h4>
                                            <span class="price font-theme"><strong>$78.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-5.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-4.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Quesadilla</a></h4>
                                            <span class="price font-theme"><strong>$48.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-tag1">sale</div>
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-6.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-3.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Pepperoni</a></h4>
                                            <span class="price font-theme"><strong>$45.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-7.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-2.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>Meatballs</a></h4>
                                            <span class="price font-theme"><strong>$52.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6 col-xl-6">
                                <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                    <div class="product-img">
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-8.png" alt="Product Image" class="w-100"></a>
                                        <a href=<?php echo $linkpro . $product->getId(); ?>><img src="./src/assets/img/shop/product-2-1.png" alt="Product Image" class="w-100 img_swap"></a>
                                    </div>
                                    <div class="product-content d-xl-flex align-items-center">
                                        <div>
                                            <h4 class="product-title h5 mb-1"><a href=<?php echo $linkpro . $product->getId(); ?>>kidney
                                                    beans</a></h4>
                                            <span class="price font-theme"><strong>$23.00</strong></span>
                                            <p class="m-0 rating fs-xs text-theme lh-base">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-layout1 list-style-none mt-0 mt-lg-4 mb-30">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                <aside class="sidebar-area">
                    <div class="widget  ">
                        <h3 class="widget_title">Filter By</h3>
                        <div class="range-slider-area">
                            <strong class="fs-xs">Price</strong>
                            <div id="slider-range"></div>
                            <div class="price-amount">
                                <span id="minAmount"></span>
                                <span id="maxAmount"></span>
                            </div>
                        </div>
                    </div>



                    <?php
                    // Nạp file chứa hàm showCategory()
                    require_once('DAO/CategoryDAO.php');
                    $categoryDao = new CategoryDAO();

                    // Gọi hàm showCategory() để lấy danh sách danh mục
                    $categories = $categoryDao->showCategory();
                    ?>
                    <div class="widget widget_categories">

                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <?php foreach ($categories as $category) : ?>
                                <li>
                                    <input type="checkbox">
                                    <label><?php echo $category->getName(); ?></label>

                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>



                    <div class="widget widget_search">
                        <h3 class="widget_title">Product Name</h3>
                        <form class="search-form" action="index.php?controller=product_search" method="post">
                            <input type="text" placeholder="Search" name="search">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
            </div>

            </aside>
        </div>
    </div>
    </div>
</section>
<!--==============================
			Footer Area
	==============================-->
<?php
require_once('view/home/user/page/footer.php');
?>
</body>

</html>