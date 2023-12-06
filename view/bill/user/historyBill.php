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
                        $userData = $_SESSION["user"];
                        // Assign values to corresponding variables
                        $id_user =  $userData['id_user'];
      
                        $items = new BillDAO();
                        $data =  $items->history($id_user);
                        // print_r($data);
                        $list = [];
                        $image = [];

                        ?>



                        <h2 class="h4">This is your order information: </h2>
                        <div class="row gx-2">
                            <?php
                            foreach ($data as $key => $value) {
                                foreach ($value as $key_ => $value_) {
                                    $found = false;

                                    foreach ($list as &$vl2) {
                                        if ($vl2['id'] == $value_->get_id_bill()) {
                                            $image[] = $value_->getImage(); // Thêm ảnh vào mảng 'image'
                                            $vl2['product'] .="<br>"."<br>" . $value_->get_name_product();
                                            $vl2['total'] += $value_->get_bill_detail_price() * $value_->get_bill_detail_quantity();
                                            $vl2['price'] .= "<br>"."<br>" . "$" . $value_->get_bill_detail_price();
                                            $vl2['quantity'] .= "<br>"."<br>" . $value_->get_bill_detail_quantity();
                                            $found = true;
                                            break;
                                        }
                                    }

                                    if (!$found) {
                                        $image[] = $value_->getImage(); // Thêm ảnh vào mảng 'image'
                                        $id = $value_->get_id_bill();
                                        $name = $value_->get_full_name();
                                        $create_at =  $value_->get_create_at();
                                        $address =  $value_->get_address();
                                        $product =  $value_->get_name_product();
                                        $email = $value_->get_email();
                                        $phone = $value_->get_number_phone();
                                        $price_product = $value_->get_bill_detail_price();
                                        $quantity = $value_->get_bill_detail_quantity();
                                        $total = $value_->get_bill_detail_price() * $value_->get_bill_detail_quantity();

                                        $list[] = [
                                            'id' => $id,
                                            'image' => $image,
                                            'name' =>  $name,
                                            'create_at' => $create_at,
                                            'address' => $address,
                                            'product' => $product,
                                            'email' => $email,
                                            'phone' => $phone,
                                            'price' => $price_product,
                                            'quantity' => $quantity,
                                            'total' => $total
                                        ];
                                    }
                                }
                            }
           

                            ?>




                            <?php foreach ($list as $key => $value) : ?>

                                <div class="col-12 form-group">
                                    <label>Name *</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $value['name']; ?>">
                                    <!-- Assuming getFullName() is a method in your Bill_Details class -->
                                </div>

                                <div class="col-12 form-group">
                                    <label>Address *</label>
                                    <input type="text" class="form-control" name="saddress" value="<?php echo $value['address']; ?>">
                                </div>

                                <div class="col-12 form-group">
                                    <label>Contact Info *</label>
                                    <input type="text" class="form-control" value="<?php echo $value['phone']; ?>">
                                    <input type="text" class="form-control" value="<?php echo $value['email']; ?>">
                                </div>


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

                                    <tr class="cart_item">
                                        <td data-title="Image">
                                            <?php
                                            foreach ($image as $img) {

                                            ?>

                                                <a class="cart-productimage" href="#"><img width="91" height="91" src="admin_/uploads/products/<?php echo $img; ?>" alt="Image"></a>
                                            <?php
                                            } ?>

                                        </td>
                                        <td data-title="Name">
                                            <a class="cart-productname" href="#"><?php echo $value['product']; ?></a>
                                        </td>
                                        <td data-title="Price">
                                            <span class="amount"><bdi><span>$</span></bdi><?php echo $value['price']; ?></span>
                                        </td>
                                        <td data-title="Quantity">
                                            <strong class="product-quantity"><?php echo $value['quantity']; ?></strong>
                                        </td>
                                        <td data-title="Total">
                                            <span class="amount"><bdi><span>$</span></bdi><?php echo $value['total']; ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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