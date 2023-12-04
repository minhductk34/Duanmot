<?php
session_start();

if (!isset($_SESSION['user']) || ($_SESSION['user']['permissions'] != 1 && $_SESSION['user']['permissions'] != 2)) {
    header('Location: ../index.php');
    exit();
}
include "config/pdo.php";
include "models/CategoryModel.php";
include "models/ProductModel.php";
include "models/AccountModel.php";
include "models/CommentModel.php";
include "models/DiscountModel.php";
include "models/OrderModel.php";
include "models/Syn&StaModel.php";
include "models/Validate.php";
if ($_SESSION['user']['permissions'] == 1) {
    include "view/headerAdmin.php";
} else if ($_SESSION["user"]["permissions"] == 2) {
    include "view/headerStaff.php";
}

$nameErr = $emailErr = $descErr = $priceErr = $imgErr = $quanErr = $emailErr = $passErr = $userErr =  "";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

            // Categoty Controller
        case "add_category":
            if (isset($_POST['add']) && $_POST['add']) {
                $name_category = $_POST['name_category'];
                $desc_category = $_POST['desc_category'];
                $nameCategory = test_input($name_category);
                $descCategory = test_input($desc_category);
                // Validate
                if (!preg_match("/^[a-zA-Z ]*$/", $nameCategory)) {
                    $nameErr = "Only letters and white space allowed";
                    $noti = "Failed";
                } else if (strlen($descCategory) > 200) {
                    $descErr = "Description is too long. Only 200 characters";
                    $noti = "Failed";
                } else {
                    insert_category($name_category, $desc_category);
                    $noti = "Success";
                }
            }
            include "admin/category/AddCategory.php";
            break;
        case "list_category":
            $Categories = loadall_category();
            include "admin/category/ListCategory.php";
            break;
        case "changeStsCat":
            if (isset($_GET['id_category']) && ($_GET['id_category'] != "")) {
                $id_category = $_GET['id_category'];
                $status =  load_status_category($id_category);
                change_status_category($status, $id_category);
            }
            $Categories = loadall_category();
            include "admin/category/ListCategory.php";
            break;
        case "editCat":
            if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
                $category = loadone_category($_GET['id_category']);
            }
            include "admin/category/UpdateCategory.php";
            break;
        case "update_category":
            if (isset($_POST['update']) && $_POST['update']) {
                $name_category = $_POST['name_category'];
                $desc_category = $_POST['desc_category'];
                $status = $_POST['status'];
                $id_category = $_POST['id_category'];
                // Validate
                $nameCategory = test_input($name_category);
                $descCategory = test_input($desc_category);
                if (!preg_match("/^[a-zA-Z ]*$/", $nameCategory)) {
                    $nameErr = "Only letters and white space allowed";
                } else if (strlen($descCategory) > 200) {
                    $descErr = "Description is too long. Only 200 characters";
                } else {
                    update_category($id_category, $name_category, $desc_category, $status);
                }
            }
            $Categories = loadall_category();
            include "admin/category/ListCategory.php";
            break;

            // Product Controller
        case "add_product":
            if (isset($_POST['add']) && $_POST['add']) {
                $id_cat = $_POST['id_category'];
                $name_product = $_POST['name_product'];
                $namePro = test_input($name_product);
                $price_product = $_POST['price_product'];
                $price = test_input($price_product);
                $quantity = $_POST['quantity'];
                $SL = test_input($price);
                $desc_product = $_POST['desc_product'];
                $descripton = test_input($desc_product);
                $image_product = $_FILES['image_product']['name'];
                $target_dir = "uploads/products/";
                $target_file = $target_dir . basename($image_product);
                move_uploaded_file($_FILES["image_product"]["tmp_name"], $target_file);
                if (!isset($namePro) || $namePro = "") {
                    $nameErr = "Only letters and white space allowed";
                    $noti = "Failed";
                } else if (strlen($price) > 10) {
                    $priceErr = "Unreasonable price. Only 9 numeric characters";
                    $noti = "Failed";
                } else if (strlen($descripton) > 500) {
                    $descErr = "Description is too long. Only 200 characters";
                    $noti = "Failed";
                } else if (strlen($SL) > 9) {
                    $quanErr = "Quantity is too much. Check again";
                    $noti = "Failed";
                } else if ($_FILES['image_product']['size'] > (1024 * 1024 * 15)) {
                    $imgErr = "Image size must not exceed 15 MB";
                    $noti = "Failed";
                } else {
                    insert_product($name_product, $desc_product, $image_product, $price_product, $quantity, $id_cat);
                    $noti = "Success";
                }
            }
            $Categories = loadall_category();
            include "admin/product/AddProduct.php";
            break;
        case "list_product":
            if (isset($_POST['ok']) && ($_POST['ok'])) {
                $kyw = $_POST['kyw'];
                $id_category = $_POST['id_category'];
            } else {
                $kyw = '';
                $id_category = 0;
            }
            $products = loadall_product($kyw, $id_category);
            $Categories = loadall_category();
            include "admin/product/ListProduct.php";
            break;
        case "editPro":
            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $product = loadone_product($_GET['id_product']);
            }
            $Categories = loadall_category();
            include "admin/product/UpdateProduct.php";
            break;
        case "update_product":
            if (isset($_POST['update']) && $_POST['update']) {
                $id_product = $_POST['id_product'];
                $id_category = $_POST['id_category'];
                $name_product = $_POST['name_product'];
                $namePro = test_input($name_product);
                $price_product = $_POST['price_product'];
                $price = test_input($price_product);
                $desc_product = $_POST['desc_product'];
                $descripton = test_input($desc_product);
                $quantity = $_POST['quantity'];
                $SL = test_input($quantity);
                $status = $_POST['status'];
                $image_product = $_FILES['image_product']['name'];
                $target_dir = "uploads/products/";
                $target_file = $target_dir . basename($image_product);
                move_uploaded_file($_FILES["image_product"]["tmp_name"], $target_file);
                if (!isset($namePro) || $namePro = "") {
                    $nameErr = "Only letters and white space allowed";
                    $noti = "Failed";
                } else if (strlen($price) > 10) {
                    $priceErr = "Unreasonable price. Only 9 numeric characters";
                    $noti = "Failed";
                } else if (strlen($descripton) > 500) {
                    $descErr = "Description is too long. Only 200 characters";
                    $noti = "Failed";
                } else if (strlen($SL) > 9) {
                    $quanErr = "Quantity is too much. Check again";
                    $noti = "Failed";
                } else if ($_FILES['image_product']['size'] > (1024 * 1024 * 15)) {
                    $imgErr = "Image size must not exceed 15 MB";
                    $noti = "Failed";
                } else {
                    update_product($id_product, $id_category, $name_product, $price_product, $desc_product, $image_product, $quantity, $status);
                    $noti = "Success";
                }
                $noti = "Success";
            }
            $products = loadall_product('', 0);
            $Categories = loadall_category();
            include "admin/product/ListProduct.php";
            break;
        case "changeStsPro":
            if (isset($_GET['id_product']) && ($_GET['id_product'] != "")) {
                $id_product = $_GET['id_product'];
                $status =  load_status_product($id_product);
                change_status_product($status, $id_product);
            }
            $products = loadall_product('', 0);
            $Categories = loadall_category();
            include "admin/product/ListProduct.php";
            break;

            // Variant Porduct  
        case "addVariant":

            if (isset($_GET['id_product']) && ($_GET['id_product'] > 0)) {
                $product = loadone_product($_GET['id_product']);
                $boxs = loadall_box();
                $sizes = loadall_size();
                include "admin/product/variant/AddVariant.php";
            }
            if (isset($_POST['add'])) {
                $id_product = $_POST['id_product'];
                $name_product = loadone_name_product($id_product);
                $id_box = $_POST['id_box'];
                $box = load_box($id_box);
                $id_size = $_POST['id_size'];
                $size = load_size($id_size);
                $quantity = $_POST['quantity'];
                $SL = test_input($quantity);
                $name_variant = $name_product . ' size ' .  $size . ' in ' . $box;
                if (strlen($SL) > 9) {
                    $quanErr = "Quantity is too much. Check again";
                    $noti = "Failed";
                } else {
                    insert_variant($id_product, $id_size, $id_box, $name_variant, $quantity);
                    $noti = "Success";
                }
                $products = loadall_product('', 0);
                include './admin/product/ListProduct.php';
            }
            break;
        case "listVariant":
            $boxs = loadall_box();
            $sizes = loadall_size();
            $variants = loadall_variant();
            include "admin/product/variant/ListVariant.php";
            break;
        case "changeStsVar":
            if (isset($_GET['id_variant']) && ($_GET['id_variant'] != "")) {
                $id_variant = $_GET['id_variant'];
                $status =  load_status_variant($id_variant);
                change_status_variant($status, $id_variant);
            }
            $variants = loadall_variant();
            include "admin/product/variant/ListVariant.php";
            break;

            // Account Controller
        case "add_account":
            if (isset($_POST['add_account']) && $_POST['add_account']) {
                $username = $_POST['username'];
                $user = test_input($username);
                $password = $_POST['password'];
                $pass = test_input($password);
                $email = $_POST['email'];
                $mail = test_input($email);
                $permission = $_POST['permission'];
                $per = test_input($permission);
                $full_name = $_POST['username'];
                $image = $_FILES['image']['name'];
                $target_dir = "uploads/accounts/";
                $target_file = $target_dir . basename($image);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                if (!preg_match('/^[a-zA-Z0-9\s]+$/', $user)) {
                    $nameErr = "Only letters and numbers without special characters or spaces";
                    $noti = "Failed";
                } else if (isValidPassword($password) == false) {
                    $passErr = "Password must be at least 8 characters, contain at least one upper and lower case letter, one number and one special character";
                    $noti = "Failed";
                } else if (!preg_match("/^[a-zA-Z][\\w-]+@([\\w]+\\.[\\w]+|[\\w]+\\.[\\w]{2,}\\.[\\w]{2,})$/", $mail)) {
                    $descErr = "Invalid email format";
                    $noti = "Failed";
                } else if ($_FILES['image']['size'] > (1024 * 1024 * 15)) {
                    $imgErr = "Image size must not exceed 15 MB";
                    $noti = "Failed";
                } else {
                    insert_account($username, $password, $email, $permission, $full_name, $image);
                    $noti = "Success";
                }
            }
            include "admin/account/AddAccount.php";
            break;
        case "list_account":
            if (isset($_POST['ok']) && ($_POST['ok'])) {
                $kyw = $_POST['kyw'];
                $role = $_POST['role'];
            } else {
                $kyw = '';
                $role = '';
            }
            $users = loadall_account($kyw, $role);
            include "admin/account/ListAccount.php";
            break;
        case "editUser":
            if (isset($_GET['id_user']) && ($_GET['id_user'] > 0)) {
                $user = loadone_account($_GET['id_user']);
            }
            include "admin/account/UpdateAccount.php";
            break;
        case "update_account":
            if (isset($_POST['update']) && $_POST['update']) {
                $full_name = $_POST['full_name'];
                $id_user = $_POST['id_user'];
                $email = $_POST['email'];
                $number_phone = $_POST['number_phone'];
                $address = $_POST['address'];
                $status = $_POST['status'];
                $permission = $_POST['permission'];
                update_account($id_user, $full_name, $email, $number_phone, $address, $status, $permission);
                $noti = "Success";
            }
            $users = loadall_account('', '');
            include "admin/account/ListAccount.php";
            break;
        case "changeStsAcc":
            if (isset($_GET['id_user']) && ($_GET['id_user'] != "")) {
                $id_user = $_GET['id_user'];
                $status =  load_status_account($id_user);
                change_status_account($status, $id_user);
            }
            $users = loadall_account('', '');
            include "admin/account/ListAccount.php";
            break;

            // Comment Controller
        case "list_comment":
            if (isset($_POST['ok']) && ($_POST['ok'])) {
                $date = $_POST['date'];
            } else {
                $date = '';
            }
            $comments = loadall_comment($date);
            include "admin/comment/ListComment.php";
            break;
        case "change":
            if (isset($_GET['id_comment']) && ($_GET['id_comment'] != "")) {
                $id_comment = $_GET['id_comment'];
                $status =  load_status($id_comment);
                change_status($status, $id_comment);
            }
            $comments = loadall_comment('');
            include "admin/comment/ListComment.php";
            break;

            // Discount Controller
        case "add_discount":
            if (isset($_POST['add_discount']) && $_POST['add_discount']) {
                $name_discount = $_POST['name_discount'];
                $percent_discount = $_POST['percent_discount'];
                $active = $_POST['active'];
                $date = date("Y-m-d", time());
                insert_discount($name_discount, $percent_discount, $active, $date);
                $noti = "Success";
            }
            include "admin/discount/AddDiscount.php";
            break;
        case "list_discount":
            $discounts = loadall_discount();
            include "admin/discount/ListDiscount.php";
            break;
        case "editDis":
            if (isset($_GET['id_discount']) && ($_GET['id_discount'] > 0)) {
                $discount = loadone_discount($_GET['id_discount']);
            }
            include "admin/discount/UpdateDiscount.php";
            break;
        case "update_discount":
            if (isset($_POST['update']) && $_POST['update']) {
                $name_discount = $_POST['name_discount'];
                $percent_discount = $_POST['percent_discount'];
                $active = $_POST['active'];
                $id_discount = $_POST['id_discount'];
                update_discount($id_discount, $name_discount, $percent_discount, $active);
                $thongbao = "Success";
            }
            $discounts = loadall_discount();
            include "admin/discount/ListDiscount.php";
            break;
            // case "deleteDis":
            //     if ( isset($_GET['id_discount']) && ($_GET['id_discount'] > 0)){
            //         delete_discount($_GET['id_discount']);
            //     }
            //     $discounts = loadall_discount();
            //     include "admin/discount/ListDiscount.php";
            //     break;

            // Order Controller
        case "list_order":
            if (isset($_POST['ok']) && ($_POST['ok'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $bills = loadall_bill($kyw, 0);
            include "admin/order/ListOrder.php";
            break;
        case "showDetail":
            if (isset($_GET['id_bill']) && ($_GET['id_bill'] > 0)) {
                $id_bill = $_GET['id_bill'];
                $details = showdetail($id_bill);
            }
            include "admin/order/ShowDetail.php";
            break;
            // case "editBill":
            //     if (isset($_GET['id_bill']) && ($_GET['id_bill'] > 0)) {
            //         $bill = loadone_bill($_GET['id_bill']);
            //     }
            //     include "admin/order/UpdateOrder.php";
            //     break;
            // case "update_order":
            //     if (isset($_POST['update']) && $_POST['update']) {
            //         $status = $_POST['status'];
            //         $id_bill = $_POST['id_bill'];
            //         update_bill($id_bill, $status);
            //         $thongbao = "Success";
            //     }
            //     $bills = loadall_bill("", 0);
            //     include "admin/order/ListOrder.php";
            //     break;
        case "changeStsBill":
            if (isset($_GET['id_bill']) && ($_GET['id_bill'] != "")) {
                $id_bill = $_GET['id_bill'];
                $status =  load_status_bill($id_bill);
                change_status_bill($status, $id_bill);
                $details = showdetail($id_bill);
            }
            include "admin/order/ShowDetail.php";
            break;
        case "refundConfirm":
            if (isset($_GET['id_bill']) && ($_GET['id_bill'] != "")) {
                $id_bill = $_GET['id_bill'];
                $status =  load_status_bill($id_bill);
                refundConfirm($status, $id_bill);
                $details = showdetail($id_bill);
            }
            include "admin/order/ShowDetail.php";
            break;

            //Synthetic & Statistical
        case 'StatCat':
            $list = loadall();
            include "admin/syn&stat/ListCat.php";
            break;
        case 'showchart':
            $list = loadall();
            include "admin/syn&stat/Chart.php";
            break;
        case 'StatPro':
            $totalPro = TotalPro();
            $inStock = inStock();
            $outOfStock = outOfStock();
            $mostComOfPro = mostComOfPro();
            $nameProCom = loadone_name_product($mostComOfPro[0][0]);
            $mostComOfOrder = mostComOfOrder();
            $nameProOrder = loadone_name_product($mostComOfPro[0][0]);
            include "admin/syn&stat/StatPro.php";
            break;
        case 'StatAcc':
            $TotalAcc = TotalAcc();
            $quantity_admin = quantity_admin();
            $quantity_staff = quantity_staff();
            $quantity_client = quantity_client();
            $is_Active = is_Active();
            $is_Disable = is_Disable();
            include "admin/syn&stat/StatAcc.php";
            break;
        case 'StatCom':
            $TotalCom = TotalCom();
            $comment_show = comment_show();
            $comment_hidden = comment_hidden();
            include "admin/syn&stat/StatCom.php";
            break;
            // $int = (int)$num;
            // $float = (float)$num;
        case 'StatOrder':
            $TotalOrder = TotalOrder();
            $toltalQuantity = (int)toltalQuantity();
            $toltalPrice = (int)toltalPrice();
            $total = $toltalQuantity * $toltalPrice;
            $orderNew = orderNew();
            $orderPrepare = orderPrepare();
            $orderDelivered = orderDelivered();
            $orderSuccess = orderSuccess();
            $OrderCanceled = OrderCanceled();
            include "admin/syn&stat/StatOrder.php";
            break;
        default:
            include("view/home.php");
            break;
    }
} else {
    include("view/home.php");
}
include "view/footer.php";
