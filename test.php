<?php
require_once('view/home/user/page/header.php');


?>


<form action="#" class="woocommerce-checkout mt-40">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="h4">Billing Details</h2>
            <div class="row gx-2">
                <div class="col-12 form-group">
                    <label>Country *</label>
                    <select class="form-select">
                        <option>Viet Nam</option>
                        <option>Singapore </option>
                        <option>China</option>
                        <option>Japan</option>
                        <option>Korea</option>
                    </select>
                </div>
                <?php
                require_once('DAO/BillDAO.php');
                $items = new BillDAO();
                $item =  $items->showBill($id_user);
                // print_r($item);
                ?>

                <?php foreach ($item as $key => $vl) { ?>
                    <div class="col-12 form-group">
                        <label>Name *</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $vl->getFullName(); ?>" >
                        <a href=""><?php echo $vl->getFullName(); ?></a>
                    </div>

                    <div class="col-12 form-group">
                        <label>Address *</label>
                        <input type="text" class="form-control" name="saddress" value="<?php echo $vl->getAddress(); ?>">
                    </div>

                    <div class="col-12 form-group">
                        <label>Contact Info *</label>
                        <input type="text" class="form-control" value="<?php echo $vl->getEmail(); ?>">
                        <input type="text" class="form-control" value="<?php echo $vl->getPhoneNumber(); ?>">
                    </div>

                <?php } ?>

            </div>
        </div>
        <div class="col-lg-6">
            <p id="ship-to-different-address">
                <input id="ship-to-different-address-checkbox" type="checkbox" name="ship_to_different_address" value="1">
                <label for="ship-to-different-address-checkbox">
                    Ship to a different address?
                    <span class="checkmark"></span>
                </label>
            </p>

            <div class="col-12 form-group">
                <label>Other Note</label>
                <textarea cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
            </div>
        </div>
    </div>
</form>


<form action="#" class="woocommerce-cart-form">
    <table class="cart_table mb-20">
        <thead>
            <tr>
                <th class="cart-col-image">Image</th>
                <th class="cart-col-productname">Product Name</th>
                <th class="cart-col-price">Price</th>
                <th class="cart-col-quantity">Quantity</th>
                <th class="cart-col-total">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('DAO/BillDAO.php');
            $cart = new CartDAO();
            $cart_ =  $cart->showCart($id_user);
            var_dump($cart_);
            ?>
            <?php foreach ($cart_ as $key => $value) { ?>
                <tr class="cart_item">
                    <td data-title="Image">
                        <a class="cart-productimage" href="#"><img width="91" height="91" src="assets/img/cart/cat-img-1.png" alt="Image"><?php echo $value->getImage(); ?></a>
                    </td>
                    <td data-title="Name">
                        <a class="cart-productname" href="#"><?php echo $value->getNameProduct(); ?></a>
                    </td>
                    <td data-title="Price">
                        <span class="amount"><bdi><span>$</span></bdi><?php echo $value->getPrice(); ?></span>
                    </td>
                    <td data-title="Quantity">
                        <strong class="product-quantity"><?php echo $value->getQuantity(); ?></strong>
                    </td>
                    <td data-title="Total">
                        <span class="amount"><bdi><span>$</span></bdi><?php echo $value->getPrice() * $value->getQuantity(); ?></span>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

        <div class="border ps-2 py-2 border-light">
            <div class="row  justify-content-lg-end">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <table class="checkout-ordertable mb-0">
                        <tbody>
                            <tr class="cart-subtotal">
                                <th>Cart Subtotal</th>
                                <td>
                                    <span class="amount"><bdi><span>$</span></bdi></span>
                                </td>
                            </tr>
                            <tr class="woocommerce-shipping-totals shipping">
                                <th>Shipping and Handling</th>
                                <td data-title="Shipping">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li>
                                            <input type="checkbox" name="shipping_method" class="shipping_method" checked="checked">
                                            <label>Flat rate</label>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Order Total</th>
                                <td><strong><span class="amount"><bdi><span>$</span></bdi></span></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!--  -->
        <?php
        require_once('view/home/user/page/footer.php');
        ?>