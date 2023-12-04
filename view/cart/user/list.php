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
require_once('DAO/ProductDAO.php');
$quantity = new ProductDAO();


// var_dump($item);
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

                    <?php
                    $total = 0;
                    ?>
                    <?php foreach ($item as $key => $value) { ?>

                        <tr class="cart_item">

                            <td data-title="Product">
                                <a class="cart-productimage" href="shop-details.html"><img width="91" height="91" src="admin_/uploads/products/<?php echo $value->getImage() ?>" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cart-productname" href="shop-details.html"><?php echo $value->getNameProduct(); ?></a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span><span id="price_one"><?php echo $value->getPrice(); ?></span></bdi></span>
                            </td>
                            <td data-title="Quantity">
                                <div class="quantity">
                                    <button class="quantity-minus qut-btn" onclick="down(<?php echo $value->getIdCart() ?>);"><i class="far fa-minus"></i></button>
                                    <span> <input type="number" class="qty-input" price="<?php echo $quantity->selectQuantity($value->getProductId()) ?>" id="showNumber<?php echo $value->getIdCart() ?>" value="<?php echo $value->getQuantity() ?>" \ min="1" max="<?php echo $quantity->selectQuantity($value->getProductId()) ?>" readonly></span>
                                    <button class="quantity-plus qut-btn" onclick="up(<?php echo $value->getIdCart() ?>);"><i class="far fa-plus"></i></button>
                                </div>
                                <script>
                                    function up(id_cart) {
                                        var cartInfo = {
                                            id: id_cart,
                                            quantity: document.getElementById("showNumber" + id_cart).value
                                            // Thêm thông tin khác nếu cần thiết
                                        };
                                        var price = document.getElementById("showNumber" + id_cart).getAttribute("price");
                                        var quantity = document.getElementById("showNumber" + id_cart).value;
                                        console.log(price, quantity)
                                        if (quantity >= price) {
                                            alert("eror!");

                                        } else {
                                            var xml = new XMLHttpRequest();
                                            xml.open("POST", "api/cart/upCart.php", true);
                                            xml.setRequestHeader("Content-Type", "application/json");
                                            xml.onreadystatechange = function() {
                                                if (xml.readyState === 4) {
                                                    if (xml.status === 200) {
                                                        id = "Total" + id_cart;
                                                        document.getElementById("showNumber" + id_cart).value = xml.responseText;
                                                        // Đảm bảo có một phần tử HTML với id="Total" để thay đổi giá trị
                                                        document.getElementById(id).innerHTML = document.getElementById("price_one").innerHTML * xml.responseText;
                                                    } else {
                                                        // header("Location:index.php");
                                                        alert("You need to log in");
                                                        window.location.href = "index.php?controller=login";
                                                    }
                                                }
                                            };
                                            xml.send(JSON.stringify(cartInfo));
                                        }

                                    }

                                    function down(id_cart) {
                                        if (document.getElementById("showNumber" + id_cart).value <= 1) {
                                            document.getElementById("showNumber" + id_cart).value = 2
                                        }
                                        var cartInfo = {
                                            id: id_cart,
                                            quantity: document.getElementById("showNumber" + id_cart).value
                                            // Thêm thông tin khác nếu cần thiết
                                        };

                                        var xml = new XMLHttpRequest();
                                        xml.open("POST", "api/cart/downCart.php", true);
                                        xml.setRequestHeader("Content-Type", "application/json");
                                        xml.onreadystatechange = function() {
                                            if (xml.readyState === 4) {
                                                if (xml.status === 200) {
                                                    id = "Total" + id_cart;
                                                    document.getElementById("showNumber" + id_cart).value = xml.responseText;
                                                    // Đảm bảo có một phần tử HTML với id="Total" để thay đổi giá trị
                                                    document.getElementById(id).innerHTML = document.getElementById("price_one").innerHTML * xml.responseText;
                                                } else {
                                                    // header("Location:index.php");
                                                    alert("You need to log in ");
                                                    window.location.href = "index.php?controller=login";
                                                }
                                            }
                                        };
                                        xml.send(JSON.stringify(cartInfo));
                                    }
                                </script>
                            </td>

                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span><span id="Total<?php echo $value->getIdCart() ?>" class="error_"> <?php echo $value->getPrice() * $value->getQuantity()  ?></span></bdi></span>
                            </td>
                            <td data-title="Remove">
                                <a href="index.php?controller=deleteCart&id=<?php echo $value->getProductId() ?>" class="remove"><i class="fal fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    <?php

                        $total +=   $value->getPrice() * $value->getQuantity();
                    } ?>
                    <tr>
                        <td colspan="6" class="actions">
                            <div class="vs-cart-coupon">
                                <input type="text" class="form-control" placeholder="Coupon Code...">
                                <button type="submit" class="vs-btn rounded-1 shadow-none">Apply Coupon</button>
                            </div>
                            <button class="vs-btn style2 rounded-1 shadow-none" onclick="updateTotal(event)">Update cart</button>

                            <script>
                                function updateTotal(event) {
                                    event.preventDefault();
                                    total = 0;
                                    item = document.querySelectorAll('.error_')
                                    item.forEach(element => {
                                        total = total - -element.innerHTML
                                    });
                                    document.getElementById('total_').innerHTML = total;
                                    document.getElementById('order_total_').innerHTML = total;


                                }
                            </script>
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
                                <span class="amount"><bdi><span>$</span><span id="total_"><?php echo $total  ?></span></bdi></span>
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

                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>Order Total</td>
                            <td data-title="Total">
                                <strong><span class="amount"><bdi><span>$</span><span id="order_total_"><?php echo $total ?></span></bdi></span></strong>
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