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
                        $billDAO = new BillDAO();
                        $user = $_SESSION['username'];
                        $id_user = $user['id_user'];
                        $id_bill_ =  $billDAO->selectId($id_user);
                        $data = $billDAO->showBill_details($id_bill_);
                    //   var_dump($data);


                        ?>
                        <h2 class="h4">Billing Details</h2>
                        <div class="row gx-2">
                            <?php foreach ($data as $key => $value) { ?>
                                <div class="col-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $value->get_full_name(); ?>">
                                    <a href=""><?php echo $value->get_full_name(); ?></a>
                                </div>

                                <div class="col-12 form-group">
                                    <label>Address *</label>
                                    <input type="text" class="form-control" name="saddress" value="<?php echo $value->get_address(); ?>">
                                </div>

                                <div class="col-12 form-group">
                                    <label>Contact Info *</label>
                                    <input type="text" class="form-control" value="<?php echo $value->get_email(); ?>">
                                    <input type="text" class="form-control" value="<?php echo $value->get_number_phone(); ?>">
                                </div>


                        </div>
                    </div>

                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
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

                        <tr class="cart_item">
                            <td data-title="Image">
                                <a class="cart-productimage" href="#"><img width="91" height="91" src="assets/img/cart/cat-img-1.png" alt="Image"></a>
                            </td>
                            <td data-title="Name">
                                <a class="cart-productname" href="#"><?php echo $value->get_name_product(); ?></a>
                            </td>
                            <td data-title="Price">
                                <span class="amount"><bdi><span>$</span></bdi><?php echo $value->get_bill_detail_price(); ?></span>
                            </td>
                            <td data-title="Quantity">
                                <strong class="product-quantity"><?php echo $value->get_bill_detail_quantity(); ?></strong>
                            </td>
                            <td data-title="Total">
                                <span class="amount"><bdi><span>$</span></bdi><?php echo $value->get_bill_detail_price() * $value->get_bill_detail_quantity(); ?></span>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </form>

            <!--  -->
        </form>
    </div>
</div>


<?php
require_once('view/home/user/page/footer.php');
?>