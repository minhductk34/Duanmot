<?php
include "config/pdo.php";
include "models/CategoryModel.php";
include "models/ProductModel.php";
include "models/AccountModel.php";
include "view/globle/headadmin.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        // Categoty Controller
        case "add_category":
            if (isset($_POST['add_category']) && $_POST['add_category']){
                $name_category = $_POST['name_category'];
                $desc_category = $_POST['desc_category'];
                insert_category($name_category, $desc_category);
                $noti = "Success";
            }
            include "admin/category/AddCategory.php";
            break;
        case "list_category":
            $Categories = loadall_category();
            include "admin/category/ListCategory.php";
            break;
        // Xóa hẳn ( nên thì cách khác )
        // case "deleteCat":
        //     if ( isset($_GET['id_category']) && ($_GET['id_category'] > 0)){
        //         delete_category($_GET['id_category']);
        //     }
        //     $Categories = loadall_category();
        //     include "admin/category/ListCategory.php";
        //     break;
        case "editCat":
            if ( isset($_GET['id_category']) && ($_GET['id_category'] > 0)){
                $category = loadone_category($_GET['id_category']);
            }
            include "admin/category/UpdateCategory.php";
            break;
        case "update_category":
            if (isset($_POST['update']) && $_POST['update']){
                $name_category = $_POST['name_category'];
                $desc_category = $_POST['desc_category'];
                $status = $_POST['status'];
                $id_category = $_POST['id_category'];
                update_category($id_category, $name_category, $desc_category, $status);
                $thongbao = "Success";
            }
            $category = loadone_category($_GET['id_category']);
            include "admin/category/ListCategory.php";
            break;

        // Product Controller
        case "add_product":
            if (isset($_POST['add_product']) && $_POST['add_product']){
                $id_category = $_POST['id_category'];
                $name_product = $_POST['name_product'];
                $price_product = $_POST['price_product'];
                $quantity = $_POST['quantity'];
                $desc_product = $_POST['desc_product'];
                $image_product = $_FILES['image_product']['name'];
                $target_dir = "uploads/products/";
                $target_file = $target_dir .basename($image_product);
                move_uploaded_file($_FILES["image_product"]["tmp_name"], $target_file);
                insert_product($name_product, $desc_product, $image_product, $price_product, $quantity, $id_category);
                $noti="Success";
             }  
            $Categories = loadall_category();
            include "admin/product/AddProduct.php";
            break;
        case "list_product":
            if (isset($_POST['ok']) && ($_POST['ok'])){
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
            if ( isset($_GET['id_product']) && ($_GET['id_product'] > 0)){
                $product = loadone_product($_GET['id_product']);
            }
            $Categories = loadall_category();
            include "admin/product/UpdateProduct.php";
            break;
        case "update_product":
            if (isset($_POST['update']) && $_POST['update']){
                $id_product = $_POST['id_product'];
                $id_category = $_POST['id_category'];
                $name_product = $_POST['name_product'];
                $price_product = $_POST['price_product'];
                $desc_product = $_POST['desc_product'];
                $quantity = $_POST['quantity'];
                $image_product = $_FILES['image_product']['name'];
                $target_dir = "uploads/products/";
                $target_file = $target_dir .basename($image_product);
                move_uploaded_file($_FILES["image_product"]["tmp_name"], $target_file);
                update_product($id_product, $id_category, $name_product, $price_product, $desc_product, $image_product, $quantity, $status);
                $noti = "Success";
            }
            $products = loadall_product('', 0);
            $Categories = loadall_category();
            include "admin/product/ListProduct.php";
            break;
        // // Xóa hẳn ( nên thì cách khác )
        // case "deletePro":
        //     if ( isset($_GET['id_product']) && ($_GET['id_product'] > 0)){
        //         delete_product($_GET['id_product']);
        //     }
        //     $products = loadall_product('',0);
        //     include "admin/product/ListProduct.php";
        //     break;

        
        // Account Controller
        case "add_account":
            if (isset($_POST['add_account']) && $_POST['add_account']){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $permission = $_POST['permission'];
                $full_name = $_POST['username'];
                $image = $_FILES['image']['name'];
                $target_dir = "uploads/accounts/";
                $target_file = $target_dir.basename($image);
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                insert_account($username, $password, $email, $permission, $full_name, $image);
                $noti="Success";
             }
            include "admin/account/AddAccount.php";
            break;
        case "list_account":
            if (isset($_POST['ok']) && ($_POST['ok'])){
                $kyw = $_POST['kyw'];
                $role = $_POST['role'];
            } else {
                $kyw = '';
                $role = 0;
            }
            $users = loadall_account($kyw, $role);
            include "admin/account/ListAccount.php";
            break;
        case "editUser":
            if ( isset($_GET['id_user']) && ($_GET['id_user'] > 0)){
                $user = loadone_account($_GET['id_user']);
            }
            
            include "admin/account/UpdateAccount.php";
            break;
        default:
            include "view/home/homeadmin.php";
            break;
    }
} else {
    include "view/home/homeadmin.php";
}
   
    include "view/globle/footer.php";
?>