<?php
require_once('view/home/user/page/header.php');
?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="./src/assets/img/breadcumb/breadcumb-img-1.jpg">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Wishlist</h1>
            <ul class="breadcumb-menu-style1 mx-auto">
                <li><a href="index.html">Home</a></li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<div class=" space">
    <div class="container">
        <div class="tinv-wishlist">
            <table>
                <thead>
                    <tr>
                        <th class="product-cb"><input type="checkbox"></th>
                        <th class="product-remove"></th>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Product Name</th>
                        <th class="product-price">Unit Price</th>
                        <th class="product-date">Date Added</th>
                        <th class="product-stock">Stock Status</th>
                        <th class="product-action">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="wishlist_item">
                        <td class="product-cb"><input type="checkbox"></td>
                        <td class="product-remove"><button type="submit" title="Remove"><i class="fal fa-times"></i></button></td>
                        <td class="product-thumbnail"><a href="shop-details.html"><img src="./src/assets/img/cart/cart-img-1-1.jpg" alt="image"></a></td>
                        <td class="product-name"><a href="shop-details.html">Sweet Mango</a></td>
                        <td class="product-price"><span class="amount">$45.00</span></td>
                        <td class="product-date"><time class="entry-date" datetime="2022-11-21 03:54:24">November
                                21, 2022</time></td>
                        <td class="product-stock">
                            <p><i class="fas fa-check"></i>In stock</p>
                        </td>
                        <td class="product-action"><button class="button vs-btn"><i class="fal fa-shopping-cart"></i>Add to Cart</button></td>
                    </tr>
                    <tr class="wishlist_item">
                        <td class="product-cb"><input type="checkbox"></td>
                        <td class="product-remove"><button type="submit" title="Remove"><i class="fal fa-times"></i></button></td>
                        <td class="product-thumbnail"><a href="shop-details.html"><img src="./src/assets/img/cart/cart-img-1-2.jpg" alt="image"></a></td>
                        <td class="product-name"><a href="shop-details.html">Apple Juice</a></td>
                        <td class="product-price"><span class="amount">$18.00</span></td>
                        <td class="product-date"><time class="entry-date" datetime="2022-12-15 04:54:24">December
                                15, 2022</time></td>
                        <td class="product-stock">
                            <p><i class="fas fa-check"></i>In stock</p>
                        </td>
                        <td class="product-action"><button class="button vs-btn"><i class="fal fa-shopping-cart"></i>Add to Cart</button></td>
                    </tr>
                    <tr class="wishlist_item">
                        <td class="product-cb"><input type="checkbox"></td>
                        <td class="product-remove"><button type="submit" title="Remove"><i class="fal fa-times"></i></button></td>
                        <td class="product-thumbnail"><a href="shop-details.html"><img src="./src/assets/img/cart/cart-img-1-3.jpg" alt="image"></a></td>
                        <td class="product-name"><a href="shop-details.html">Organic Egg</a></td>
                        <td class="product-price"><span class="amount">$45.00</span></td>
                        <td class="product-date"><time class="entry-date" datetime="2022-03-05 08:54:24">March 05,
                                2022</time></td>
                        <td class="product-stock">
                            <p><i class="fas fa-check"></i>In stock</p>
                        </td>
                        <td class="product-action"><button class="button vs-btn"><i class="fal fa-shopping-cart"></i>Add to Cart</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="social-buttons">
                <span>Share on</span>
                <ul>
                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#" title="Clipboard"><i class="far fa-clipboard"></i></a></li>
                    <li><a href="#" title="Email"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
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