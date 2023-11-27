<?php
require_once('view/home/user/page/header.php');
?>
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="./src/assets/img/breadcumb/breadcumb-img-1.jpg">
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Cart</h1>
            <ul class="breadcumb-menu-style1 mx-auto">
                <li><a href="index.html">Home</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Cart Area
    ==============================-->

<?php
require_once('DAO/CartDAO.php');
$items = new CartDAO();
$item = $items->showCart($id_user);

// print_r($item);
?>
<div class="vs-cart-wrapper  space-top space-md-bottom">
    <div class="container">
        <div class="woocommerce-notices-wrapper">
            <div class="woocommerce-message">Shipping costs updated.</div>
        </div>
        <form action="index.php?controller=addCart " class="woocommerce-cart-form">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($item as $key => $value) { ?>
                        <tr class="cart_item">
                            <td data-title="Product">
                                <a class="cart-productimage" href="shop-details.html"><img width="91" height="91" src="./src/assets/img/shop/product-3-3.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cart-productname" href="shop-details.html"><?php echo $value->getNameProduct(); ?></a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span><?php echo $value->getPrice(); ?></bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qut-btn"><i class="far fa-minus"></i></button>
                                    <input type="number" class="qty-input" value="<?php echo $value->getQuantity()  ?>" min="1" max="99">
                                    <button class="quantity-plus qut-btn"><i class="far fa-plus"></i></button>
                                </div>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span><?php echo $value->getPrice() * $value->getQuantity()  ?></bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="index.php?controller=deleteCart&id=<?php echo $value->getProductId() ?>" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    <?php } ?>
                    <tr>
                        <td colspan="6" class="actions">
                            <div class="vs-cart-coupon">
                                <input type="text" class="form-control" placeholder="Coupon Code...">
                                <button type="submit" class="vs-btn rounded-1 shadow-none">Apply Coupon</button>
                            </div>
                            <button type="submit" class="vs-btn style2 rounded-1 shadow-none" href="index.php?controller=updateCart" name="updateCart">Update cart</button>
                            <a href="index.php?controller=product_show" class="vs-btn rounded-1 shadow-none">Continue Shopping</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Cart Totals</h2>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><bdi><span>$</span><?php echo $value->getPrice() * $value->getQuantity()  ?></bdi></span>
                            </td>
                        </tr>
                        <tr class="shipping">
                            <th>Shipping and Handling</th>
                            <td data-title="Shipping and Handling">
                                <ul class="woocommerce-shipping-methods list-unstyled">
                                    <li>
                                        <input type="radio" id="free_shipping" name="shipping_method" class="shipping_method">
                                        <label for="free_shipping">Free shipping</label>
                                    </li>
                                    <li>
                                        <input type="radio" id="flat_rate" name="shipping_method" class="shipping_method" checked="checked">
                                        <label for="flat_rate">Flat rate</label>
                                    </li>
                                </ul>
                                <p class="woocommerce-shipping-destination">
                                    Shipping options will be updated during checkout.
                                </p>
                                <form action="#" method="post">
                                    <a href="shop-details.html" class="shipping-calculator-button">Change
                                        address</a>
                                    <div class="shipping-calculator-form">
                                        <p class="form-row">
                                            <select class="form-select">
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="BD" selected="selected">Hà Nội</option>
                                            </select>
                                        </p>
                                        <p>
                                            <select class="form-select">
                                                <option value="">Select an option…</option>
                                                <option value="BD-05">Sài Gòn</option>
                                                <option value="BD-01">Đà Nẵng</option>
                                                <option value="BD-02">Hải Phòng</option>
                                                <option value="BD-06">Hải Dương</option>
                                            </select>
                                        </p>
                                        <p class="form-row">
                                            <input type="text" class="form-control" placeholder="Town / City">
                                        </p>
                                        <p class="form-row">
                                            <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                        </p>
                                        <p>
                                            <button class="vs-btn shadow-none rounded-1">Update</button>
                                        </p>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>Order Total</td>
                            <td data-title="Total">
                                <strong><span class="amount"><bdi><span>$</span><?php echo $value->getPrice() * $value->getQuantity()  ?></bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                <div class="wc-proceed-to-checkout mb-30">
                    <a href="index.php?controller=process" class="vs-btn rounded-1 shadow-none" name="checkOut">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
			Footer Area
	==============================-->
<?php
require_once('view/home/user/page/footer.php');
?>