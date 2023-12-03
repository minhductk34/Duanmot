 <?php
    require_once('view/home/user/page/header.php');
    ?>
 <!--==============================
    Checkout Arae
    ==============================-->

 <?php
    $data = $_SESSION["user"];

    ?>

 <div class="vs-checkout-wrapper space-top space-md-bottom">
     <div class="container">
         <div class="woocommerce-form-login-toggle">
             <div class="woocommerce-info">Your information
             </div>
         </div>
         <!-- <div class="row">
             <div class="col-lg-4">
                 <form action="#" class="woocommerce-form-login">
                     <div class="form-group">
                         <label>Your Username *</label>
                         <input type="text" class="form-control" value="<?= isset($data['username']) ? $data['username'] : '' ?>" readonly>
                     </div>
                     <div class="form-group">
                         <label>Your Address</label>
                         <input type="text" class="form-control" value="<?= isset($data['address']) ? $data['address'] : '' ?>" readonly>
                     </div>
                     <div class="form-group">
                         <label>Your Phone *</label>
                         <input type="text" class="form-control" value="<?= isset($data['phone']) ? $data['phone'] : '' ?>" readonly>
                     </div>

                 </form>
             </div>
         </div> -->
       


         <form action="index.php?controller=addToBill" method="post" id="myForm">
             <form class="woocommerce-checkout mt-40" id="checkout-form">
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
                             <form>
                                 <div class="col-12 form-group">
                                     <label>First Name *</label>
                                     <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                 </div>
                                 <div class="col-12 form-group">
                                     <label>Last Name *</label>
                                     <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                 </div>
                                 <div class="col-12 form-group">
                                     <label>Address *</label>
                                     <input type="text" class="form-control" name="street_address" placeholder="Street Address" required>
                                     <input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                                 </div>
                                 <div class="col-12 form-group">
                                     <label>Town / City *</label>
                                     <input type="text" class="form-control" name="city" placeholder="Town / City" required>
                                 </div>
                                 <div class="col-12 form-group">
                                     <label>Contact Info *</label>
                                     <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                     <input type="tel" class="form-control" placeholder="Phone number" name="phone" required>
                                 </div>
                      
                             </form>

                         </div>
                     </div>

                 </div>
             </form>
             <h4 class="mt-4 pt-lg-2">Your Order</h4>
             <?php
                require_once('DAO/CartDAO.php');
                $items = new CartDAO();
                $id_user = $data['id_user'];
                $item = $items->showCart($id_user);

                // Kiểm tra nếu $item rỗng
                if (empty($item)) {
                    // Chuyển hướng về trang trước đó (nếu có thể)
                    header('Location: ' . $_SERVER['HTTP_REFERER']);

                    exit; // Đảm bảo dừng việc thực thi mã nguồn
                }

                // Tiếp tục hiển thị nội dung trang nếu có dữ liệu
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

                         <?php
                            $total = 0;
                            foreach ($item as $key => $value) {
                                $total +=  $value->getPrice() * $value->getQuantity()
                            ?>
                             <tr class="cart_item">
                                 <td data-title="Image">
                                     <a class="cart-productimage" href="#"><img width="91" height="91" src="admin_/uploads/products/<?php echo $value->getImage() ?>"></a>
                                 </td>
                                 <td data-title="Name">
                                     <a class="cart-productname" href="#"><?php echo $value->getNameProduct(); ?></a>
                                 </td>
                                 <td data-title="Price">
                                     <span class="amount"><bdi><span>$</span><?php echo $value->getPrice(); ?></bdi></span>
                                 </td>
                                 <td data-title="Quantity">
                                     <strong class="product-quantity"><?php echo $value->getQuantity(); ?></strong>
                                 </td>
                                 <td data-title="Total">
                                     <span class="amount"><bdi><span>$</span><?php echo $value->getPrice() * $value->getQuantity(); ?></bdi></span>
                                 </td>
                             </tr>
                         <?php } ?>
                     </tbody>
                 </table>
             </form>
             <div class="border ps-2 py-2 border-light">
                 <div class="row  justify-content-lg-end">
                     <div class="col-md-8 col-lg-6 col-xl-4">
                         <table class="checkout-ordertable mb-0">
                             <tbody>
                                 <!-- <tr class="cart-subtotal">
                                     <th>Cart Subtotal</th>
                                     <td>
                                         <span class="amount"><bdi><span>$</span><?php echo $total ?></bdi></span>
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
                                 </tr> -->
                                 <tr class="order-total">
                                     <th>Order Total</th>
                                     <th></th>
                                     <th></th>
                                     <th></th>
                                     <td><strong><span class="amount"><bdi><span>$</span><?php echo $total ?></bdi></span></strong></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
             <div class="pt-10 pt-lg-5 mb-30">
                 <div class="woocommerce-checkout-payment">
                     <div class="form-row place-order">
                         <button type="button" class="vs-btn" name="placeOrder" onclick="submitForm()">Place order</button>
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