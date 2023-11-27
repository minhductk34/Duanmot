<?php
require_once('view/home/user/page/header.php');
?>
<!--==============================
    Checkout Arae
    ==============================-->



<div class="vs-checkout-wrapper space-top space-md-bottom">
    <div class="container">
        <form action="index.php?controller=checkOut" method="post" id="myForm">
            <form class="woocommerce-checkout mt-40" id="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        require_once('DAO/BillDAO.php');
                     

                        $items = new BillDAO();
                        $item =  $items->showBill($id_user);
                        // var_dump($item);
                        ?>
                        <h2 class="h4">Billing Details</h2>
                        <div class="row gx-2">
                            <?php foreach ($item as $key => $vl) { ?>
                                <div class="col-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $vl->getFullName(); ?>">
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

                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <?php
            require_once('DAO/BillDAO.php');
            $cart = new CartDAO();
            $cart_ =  $cart->showCart($id_user);
            // var_dump($cart_);
            ?>
            <form class="woocommerce-cart-form" id="checkout-form">
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
                </table>
            </form>

            <div class="pt-10 pt-lg-5 mb-30">
                <div class="woocommerce-checkout-payment">
                    <div class="form-row place-order">
                        <button type="button" class="vs-btn" name="checkOut" onclick="submitForm()">Checkout</button>
                        <!-- <input type="submit" name="place_Order"onclick="submitForm()" > -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function submitForm() {
        // Get the form element
        var form = document.getElementById("myForm");
        // Submit the form
        form.submit();
    }
</script>

<?php
require_once('view/home/user/page/footer.php');
?>