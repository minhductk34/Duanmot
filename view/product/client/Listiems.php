<?php
require_once('view/home/user/page/header.php');
?>
<section class="vs-shop-wrapper position-relative space-top space-md-bottom">
    <div class="container">
        <div class="row flex-row-reverse ">
            <div class="col-lg-8 col-xl-9 ">
                <div class="sticky-top overflow-hidden">
                    <div class="vs-sort-bar row justify-content-center justify-content-sm-between align-items-center pb-3 pb-lg-5 mb-1 ">
                        <div class="col-auto mb-3 mb-sm-0">
                            <div class="nav" permissions="tablist">
                                <a href="shop.html" class="icon-btn style3  me-2" id="tab-shop-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" permissions="tab" aria-controls="tab-grid" aria-selected="false"><i class="fas fa-th"></i></a>
                                <a href="shop-list.html" class="icon-btn active style3  " id="tab-shop-list" data-bs-toggle="tab" data-bs-target="#tab-list" permissions="tab" aria-controls="tab-grid" aria-selected="true"><i class="far fa-bars"></i></a>
                            </div>
                        </div>
                        <div class="col d-none d-md-block">
                            <div class="border-top"></div>
                        </div>
                        <div class="col-sm-9 col-md-7 col-lg-8 col-xl-6">
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
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade " id="tab-grid" permissions="tabpanel" aria-labelledby="tab-shop-grid">
                            <div class="row">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag1">sale</div>
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-1.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-8.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-1.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Apple
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag2">Hot</div>
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-2.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-7.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-2.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Black
                                                    Beans</a></h4>
                                            <span class="price font-theme"><strong>$22.00</strong></span>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-3.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-6.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-3.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Plum
                                                    Silho</a></h4>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag1">sale</div>
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-4.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-5.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-4.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Carne
                                                    Asada</a></h4>
                                            <span class="price font-theme"><strong>$99.12</strong></span>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-5.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-4.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-5.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Quesadilla</a></h4>
                                            <span class="price font-theme"><strong>$26.78</strong></span>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-6.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-3.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-6.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Pepperoni</a></h4>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-7.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-2.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-7.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Meatballs</a></h4>
                                            <span class="price font-theme"><strong>$11.00</strong></span>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag1">sale</div>
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-8.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-1.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-8.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">kidney
                                                    beans</a></h4>
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
                                <div class="col-sm-6 col-xl-4">
                                    <div class="vs-product-box1 thumb_swap">
                                        <div class="product-tag1">sale</div>
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-9.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-1-6.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content">
                                            <div class="actions-btn">
                                                <a href="cart.html"><i class="fal fa-cart-plus"></i></a>
                                                <a href="assets/img/shop/product-1-9.png" class="popup-image"><i class="far fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fal fa-heart"></i></a>
                                            </div>
                                            <h4 class="product-title h5 mb-0"><a href="shop-details.html">Ziti
                                                    Food</a></h4>
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
                        </div>
                        <div class="tab-pane fade show active" id="tab-list" permissions="tabpanel" aria-labelledby="tab-shop-list">
                            <div class="row ">
                                <div class="col-sm-6 col-lg-6 col-xl-6">
                                    <div class="vs-product-box2 d-xl-flex has-border thumb_swap">
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-1.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-8.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Apple
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-2.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-7.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Black
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-3.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-6.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Plum
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-4.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-5.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Carne
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-5.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-4.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Quesadilla</a></h4>
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-6.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-3.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Pepperoni</a></h4>
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-7.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-2.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">Meatballs</a></h4>
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
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-8.png" alt="Product Image" class="w-100"></a>
                                            <a href="shop-details.html"><img src="assets/img/shop/product-2-1.png" alt="Product Image" class="w-100 img_swap"></a>
                                        </div>
                                        <div class="product-content d-xl-flex align-items-center">
                                            <div>
                                                <h4 class="product-title h5 mb-1"><a href="shop-details.html">kidney
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
                    <div class="pagination-layout1 list-style-none text-center text-lg-end mt-0 mt-lg-4 mb-30">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
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
                    <div class="widget widget_categories   ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Juice</a>
                                <span>(06)</span>
                            </li>
                            <li>
                                <a href="#">Fresh</a>
                                <span>(10)</span>
                            </li>
                            <li>
                                <a href="#">Smoothie</a>
                                <span>(06)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_categories   ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <input type="checkbox" name="juice" id="juice">
                                <label for="juice">Juice</label>
                                <span>(06)</span>
                            </li>
                            <li>
                                <input type="checkbox" name="Fresh" id="Fresh">
                                <label for="Fresh">Fresh</label>
                                <span>(06)</span>
                            </li>
                            <li>
                                <input type="checkbox" name="Smoothie" id="Smoothie">
                                <label for="Smoothie">Smoothie</label>
                                <span>(06)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_search   ">
                        <h3 class="widget_title">Product Name</h3>
                        <form class="search-form">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Size</h3>
                        <div class="tagcloud">
                            <a href="shop.html">300G</a>
                            <a href="shop.html">450G</a>
                            <a href="shop.html">1000G</a>
                            <a href="shop.html">500G</a>
                            <a href="shop.html">1200G</a>
                        </div>
                    </div>
                    <div class="widget   ">
                        <h3 class="widget_title">Best Seller</h3>
                        <div class="vs-widget-recent-post">
                            <div class="recent-post d-flex align-items-center">
                                <div class="media-img">
                                    <img src="assets/img/widget/recent-1.jpg" width="100" height="73" alt="Recent Post Image">
                                </div>
                                <div class="media-body pl-30">
                                    <h4 class="recent-post-title h5 mb-0"><a href="blog.html">100% organic
                                            healthy</a></h4>
                                    <a href="#" class="text-theme fs-12">January 04, 2022</a>
                                </div>
                            </div>
                            <div class="recent-post d-flex align-items-center">
                                <div class="media-img">
                                    <img src="assets/img/widget/recent-2.jpg" width="100" height="73" alt="Recent Post Image">
                                </div>
                                <div class="media-body pl-30">
                                    <h4 class="recent-post-title h5 mb-0"><a href="blog.html">Keep Your Fruits
                                            frash</a></h4>
                                    <a href="#" class="text-theme fs-12">March 04, 2022</a>
                                </div>
                            </div>
                            <div class="recent-post d-flex align-items-center">
                                <div class="media-img">
                                    <img src="assets/img/widget/recent-3.jpg" width="100" height="73" alt="Recent Post Image">
                                </div>
                                <div class="media-body pl-30">
                                    <h4 class="recent-post-title h5 mb-0"><a href="blog.html">Get natural healthy
                                            food</a></h4>
                                    <a href="#" class="text-theme fs-12">April 04, 2022</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<?php
require_once('view/home/user/page/footer.php');
?>