 <?php
    require_once('view/home/user/page/header.php');
    ?>
 <!--==============================
    Checkout Arae
    ==============================-->

 <?php
    $data = $_SESSION["username"];
?>

 <div class="vs-checkout-wrapper space-top space-md-bottom">
     <div class="container">
         <div class="woocommerce-form-login-toggle">
             <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-4">
                 <form action="#" class="woocommerce-form-login">
                     <div class="form-group">
                         <label>Your Username *</label>
                         <input type="text" class="form-control" value="<?= isset($data['username']) ? $data['username'] : 'null' ?>">
                     </div>
                     <div class="form-group">
                         <label>Your Address</label>
                         <input type="text" class="form-control" value="<?= isset($data['address']) ? $data['address'] : 'null' ?>">
                     </div>
                     <div class="form-group">
                         <label>Your Phone *</label>
                         <input type="text" class="form-control" value="<?= isset($data['phone']) ? $data['phone'] : 'null' ?>">
                     </div>

                 </form>
             </div>
         </div>
         <div class="woocommerce-form-coupon-toggle">
             <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your
                     code</a> </div>
         </div>
         <div class="row">
             <div class="col-lg-4">
                 <form action="index.php?controller=addToBill" class="woocommerce-form-coupon">
                     <div class="form-group">
                         <label>Coupon code</label>
                         <input type="text" class="form-control" placeholder="Write your coupon code">
                     </div>
                     <div class="form-group">
                         <button type="submit" class="vs-btn shadow-none">Apply coupon</button>
                     </div>
                 </form>
             </div>
         </div>


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
                             <div class="col-md-6 form-group">
                                 <label>First Name *</label>
                                 <input type="text" class="form-control" name="first_name" placeholder="First Name">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label>Last Name *</label>
                                 <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                             </div>
                             <!-- <div class="col-12 form-group">
                                 <label>Company Name</label>
                                 <input type="text" class="form-control" name="company_name" placeholder="Your Company Name">
                             </div> -->
                             <div class="col-12 form-group">
                                 <label>Address *</label>
                                 <input type="text" class="form-control" name="street_address" placeholder="Street Address">
                                 <input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                             </div>
                             <div class="col-12 form-group">
                                 <label>Town / City *</label>
                                 <input type="text" class="form-control" name="city" placeholder="Town / City">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label>Country *</label>
                                 <input type="text" class="form-control" name="country" placeholder="Country">
                             </div>
                             <div class="col-md-6 form-group">
                                 <label>Postcode / Zip *</label>
                                 <input type="text" class="form-control" name="postcode" placeholder="Postcode / Zip">
                             </div>
                             <div class="col-12 form-group">
                                 <label>Contact Info *</label>
                                 <input type="text" class="form-control" placeholder="Email Address" name="email">
                                 <input type="text" class="form-control" placeholder="Phone number" name="phone">
                             </div>

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
                         <?php foreach ($item as $key => $vl) { ?>
                             <tr class="cart_item">
                                 <td data-title="Image">
                                     <a class="cart-productimage" href="#"><img width="91" height="91" src="assets/img/cart/cat-img-1.png" alt="Image"></a>
                                 </td>
                                 <td data-title="Name">
                                     <a class="cart-productname" href="#"><?php echo $vl->getNameProduct(); ?></a>
                                 </td>
                                 <td data-title="Price">
                                     <span class="amount"><bdi><span>$</span><?php echo $vl->getPrice(); ?></bdi></span>
                                 </td>
                                 <td data-title="Quantity">
                                     <strong class="product-quantity"><?php echo $vl->getQuantity(); ?></strong>
                                 </td>
                                 <td data-title="Total">
                                     <span class="amount"><bdi><span>$</span><?php echo $vl->getPrice() * $vl->getQuantity(); ?></bdi></span>
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
                                 <tr class="cart-subtotal">
                                     <th>Cart Subtotal</th>
                                     <td>
                                         <span class="amount"><bdi><span>$</span><?php echo $vl->getPrice() * $vl->getQuantity() ?></bdi></span>
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
                                     <td><strong><span class="amount"><bdi><span>$</span><?php echo $vl->getPrice() * $vl->getQuantity() ?></bdi></span></strong></td>
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