<?php
require_once('view/home/user/page/header.php');
?>
<!--==============================
    Breadcumb
============================== -->
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
    Shop Details
    ==============================-->
<section class="vs-shop-wrapper shop-details space-top space-md-bottom">
    <div class="container">
        <?php
        require_once('DAO/ProductDAO.php');
        $items = new ProductDAO();
        $id = $_GET['idpro'];
        $item = $items->selectOneItem($id);
        // $user = $_SESSION['username'];
        // $user_id = $user['id_user'];
        // var_dump($user_id);
        // print_r($item);
        ?>
        <div class="row mb-5">
            <div class="col-md-6 col-xl-5 mb-30 mb-md-0">
                <div class="product-big-img vs-carousel" data-slide-show="1" data-lg-slide-show="1" data-md-slide-show="1" data-sm-slide-show="1" data-fade="true" data-dots="true" data-asnavfor="#thumbproductimg" id="bigproductimg">
                    <div class="product-img">
                        <img src="admin_/uploads/products/<?php echo $item->getImage() ?>" alt="Shop Image" class="w-100">
                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">
                <div class="product-content">
                    <h3 class="product-title mb-1"><?php echo $item->getName(); ?></h3>
                    <span class="price font-theme"><strong><?php echo $item->getPrice(); ?></strong></span>
                    <div class="mt-2">
                        <div class="star-rating" permissions="img" aria-label="Rated 5.00 out of 5">
                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on
                                <span class="rating">1</span> customer rating</span>
                        </div>
                    </div>
                    <p class="fs-xs my-4"><?php echo $item->getDescription(); ?></p>
                    <div class="mt-2 link-inherit fs-xs">
                        <p><strong class="text-title me-3 font-theme">Availability :</strong><a href="#"><i class="far fa-check-square me-2 ms-1"></i>In Stock</a></p>
                    </div>
                    <div class="actions mb-4 pb-2">
                        <div class="quantity style2 me-4">
                            <input type="number" class="qty-input" value="1" min="1" max="99" name="quantity">
                            <button class="quantity-minus qut-btn"><i class="far fa-chevron-down"></i></button>
                            <button class="quantity-plus qut-btn"><i class="far fa-chevron-up"></i></button>
                        </div>
                        <a href="index.php?controller=addCart&id=<?php echo $item->getId(); ?>" class="vs-btn shadow-none">Add To Cart</a>
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">D2300-3-1</span></span>
                        <span class="posted_in">Category: <a href="#" rel="tag">Glassware</a> <a href="#" rel="tag">Fast Food</a></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-none d-xl-block">

                <div class="widget   ">
                    <h3 class="widget_title">Best Seller</h3>
                    <div class="vs-widget-recent-post">
                        <div class="recent-post d-flex align-items-center">
                            <div class="media-img">
                                <img src="./src/assets/img/widget/recent-1.jpg" width="100" height="73" alt="Recent Post Image">
                            </div>
                            <div class="media-body pl-30">
                                <h4 class="recent-post-title h5 mb-0"><a href="blog.html">100% organic healthy</a>
                                </h4>
                                <a href="#" class="text-theme fs-12">January 04, 2022</a>
                            </div>
                        </div>
                        <div class="recent-post d-flex align-items-center">
                            <div class="media-img">
                                <img src="./src/assets/img/widget/recent-2.jpg" width="100" height="73" alt="Recent Post Image">
                            </div>
                            <div class="media-body pl-30">
                                <h4 class="recent-post-title h5 mb-0"><a href="blog.html">Keep Your Fruits frash</a>
                                </h4>
                                <a href="#" class="text-theme fs-12">March 04, 2022</a>
                            </div>
                        </div>
                        <div class="recent-post d-flex align-items-center">
                            <div class="media-img">
                                <img src="./src/assets/img/widget/recent-3.jpg" width="100" height="73" alt="Recent Post Image">
                            </div>
                            <div class="media-body pl-30">
                                <h4 class="recent-post-title h5 mb-0"><a href="blog.html">Get natural healthy
                                        food</a></h4>
                                <a href="#" class="text-theme fs-12">April 04, 2022</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav product-tab-style1 mb-30 justify-content-center mb-4" id="productTab" permissions="tablist">
            <li class="nav-item" permissions="presentation">
                <a class="nav-link " id="description-tab" data-bs-toggle="tab" href="#description" permissions="tab" aria-controls="description" aria-selected="false">description</a>
            </li>
            <li class="nav-item" permissions="presentation">
                <a class="nav-link active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" permissions="tab" aria-controls="reviews" aria-selected="true">reviews</a>
            </li>
        </ul>
        <div class="tab-content mb-30" id="productTabContent">
            <div class="tab-pane fade" id="description" permissions="tabpanel" aria-labelledby="description-tab">
                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                    cupidatat non proident, </p>
                <div class="row mt-30">
                    <div class="col-md-6 mb-30">
                        <img src="./src/assets/img/shop/shop-desc-1.jpg" class="w-100" alt="Shop Image">
                    </div>
                    <div class="col-md-6 mb-30">
                        <img src="./src/assets/img/shop/shop-desc-2.jpg" class="w-100" alt="Shop Image">
                    </div>
                </div>
                <div class="product-inner-list mb-4">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Fusce vitae orci id leo pulvinar euismod et placerat diam.</li>
                        <li>Etiam pharetra mauris at fringilla laoreet.</li>
                        <li>Vivamus eu tellus pretium, fringilla justo nec, volutpat sapien.</li>
                    </ul>
                </div>
                <div class="product-inner-list ">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Fusce vitae orci id leo pulvinar euismod et placerat diam.</li>
                        <li>Etiam pharetra mauris at fringilla laoreet.</li>
                        <li>Vivamus eu tellus pretium, fringilla justo nec, volutpat sapien.</li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="reviews" permissions="tabpanel" aria-labelledby="reviews-tab">
                <div class="vs-comment-area list-style-none vs-comments-layout1 pt-3 ">
                    <ul class="comment-list">

                        <li class="review vs-comment" id="showCmtFull">


                        </li>

                    </ul>
                </div> <!-- Comment Form -->
                <div class="vs-comment-form pt-3">
                    <div class="form-title">
                        <h3 class="h4 mb-lg-4 pb-lg-1">Add a review</h3>
                    </div>
                    <div class="row g-2">
                        <div class="form-group rating-select d-flex align">

                        </div>

                        <div class="col-12 form-group mb-0">
                            <textarea placeholder="Write a Message" class="form-control" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="col-12 form-group mb-0">
                        <button class="vs-btn rounded-1" onclick="addCmt(<?php echo $id ?>)">Post Review</button>
                    </div>
                    <script>
                        function addCmt(id) {
                            // Lấy giá trị đánh giá từ sao được chọn
                            var selectedStar = document.querySelector('.star:checked');
                            var rate = selectedStar ? selectedStar.value : null;

                            var productInfo = {
                                id: id,
                                text: document.getElementById("comment").value,
                                rate: rate
                                // Thêm thông tin khác nếu cần thiết
                            };

                            var xml = new XMLHttpRequest();
                            xml.open("POST", "api/comment/addComment.php", true);
                            xml.setRequestHeader("Content-Type", "application/json");
                            xml.onreadystatechange = function() {
                                if (xml.readyState === 4) {
                                    if (xml.status === 200) {
                                        // Xử lý kết quả từ máy chủ nếu cần
                                        var show = document.getElementById("showCmtFull");
                                        xml.open("POST", "api/comment/showComment.php", true);
                                        xml.setRequestHeader("Content-Type", "application/json");
                                        xml.onreadystatechange = function() {
                                            if (xml.readyState === 4) {
                                                if (xml.status === 200) {
                                                    // Xử lý kết quả từ máy chủ nếu cần
                                                    show.innerHTML = xml.responseText;
                                                } else {
                                                    // Xử lý lỗi nếu có
                                                    alert("Login");
                                                }
                                            }
                                        };
                                        xml.send(JSON.stringify(productInfo));
                                        document.getElementById("comment").value = "";
                                        // Cập nhật nội dung thẻ có id là "card" với dữ liệu từ máy chủ
                                    } else {
                                        // header("Location:index.php");
                                        alert("You need to log in before commenting");
                                        window.location.href = "index.php?controller=login";
                                    }
                                }
                            };
                            xml.send(JSON.stringify(productInfo));
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--==============================
			Footer Area
	==============================-->
<div class="bg2" data-bg-src="./src/assets/img/footer/footer-bg-1.jpg">
    <!--==============================
    Subscribe Area
    ==============================-->
    <section class="vs-newsletter-wrpper   ">
        <div class="container">
            <div class="inner-wrap1 bg-fluid px-70 py-70" data-bg-src="./src/assets/img/bg/newsletter-bg-1-1.png">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6">
                        <div class="form-title mb-30 mb-xl-0 text-center text-xl-start">
                            <span class="sub-title3">Get Connected</span>
                            <h2 class="h1 mb-0 lh-1">Subscribe <span class="fw-light text-theme">Newsletter</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-6">
                        <form action="#" class="newsletter-style1">
                            <div class="form-group m-0">
                                <input type="text" placeholder="Enter Your mail" class="form-control">
                                <button class="vs-btn style2">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    require_once('view/home/user/page/footer.php');
    ?>
    </body>

    </html>