<?php
require_once('view/home/user/page/header.php');
?>
<!--==============================
    Checkout Arae
    ==============================-->


<div class="vs-checkout-wrapper space-top space-md-bottom">
    <div class="container">
        <form action="#" method="post" id="myForm">
            <form class="woocommerce-checkout mt-40" id="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        require_once('DAO/BillDAO.php');

                        $items = new BillDAO();
                        $data =  $items->showBill_details($_GET['id_bill']);

                        ?>
                               <h4 class="mt-4 pt-lg-2">Your Information</h4>
                        <div class="col-12 form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $data[0]->get_full_name(); ?>" readonly>

                        </div>

                        <div class="col-12 form-group">
                            <label>Address *</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $data[0]->get_address(); ?>"readonly>
                        </div>

                        <div class="col-12 form-group">
                            <label>Contact Info *</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $data[0]->get_number_phone(); ?>"readonly>
                            <input type="text" class="form-control" name="email" value="<?php echo $data[0]->get_email(); ?>"readonly>
                        </div>

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
                                    <?php foreach ($data as $key => $value) : ?>
                                        <?php $total = $value->get_bill_detail_price() * $value->get_bill_detail_quantity(); ?>
                                        <tr class="cart_item">
                                            <td data-title="Image">
                                                <a class="cart-productimage" href="#"><img width="91" height="91" src="admin_/uploads/products/<?php echo $value->getImage(); ?>" alt="Image"></a>
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
                                                <span class="amount"><bdi><span>$</span><?php echo $total ?></bdi></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </form>
            </form>
    </div>
</div>


<?php
require_once('view/home/user/page/footer.php');
?>