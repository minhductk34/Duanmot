<?php
session_start();
// require_once các tệp và khởi tạo các controller
require_once 'controller/HomeController.php';
require_once 'controller/ProductController.php';
require_once 'controller/LoginController.php';
require_once 'controller/UserController.php';
require_once 'controller/CategoryController.php';
require_once 'controller/CartController.php';
$controller = $_GET['controller'] ?? 'home';

switch ($controller) {
        //home controller----------------------------------------------------------------
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;

        //CRUD category ----------------------------------------------------------------
    case 'category_show':
        $CategoryController = new CategoryController();
        $CategoryController->showCategory();
        break;

    case 'category_add':
        $CategoryController = new CategoryController();
        $CategoryController->addCategory();
        break;

    case 'category_delete':
        $CategoryController = new CategoryController();
        $CategoryController->deleteCategory();
        break;

    case 'category_update':
        $CategoryController = new CategoryController();
        $CategoryController->updateCategory();
        break;

        //CRDU product ------------------------------------------------------------------
    case 'product_show':
        $ProductController = new ProductController();
        $ProductController->showProduct();
        break;

    case 'product_details':
        $ProductController = new ProductController();
        $ProductController->productDetails();
        break;
        // case 'product_favorite':
        //     $ProductController = new ProductController();
        //     $ProductController->productFav();
        //     break;

    case 'product_add':
        $ProductController = new ProductController();
        $ProductController->addProduct();
        break;

    case 'product_delete':
        $ProductController = new ProductController();
        $ProductController->deleteProduct();
        break;

    case 'product_update':
        $ProductController = new ProductController();
        $ProductController->updateProduct();
        break;
    case 'product_search':
        $ProductController = new ProductController();
        $ProductController->product_Search();
        break;

        //User controller -------------------------------------------------------------------
    case 'user':
        $UserController = new UserController();
        $UserController->index();
        break;

    case 'login':
        $LoginController = new LoginController();
        $LoginController->login();
        break;
    case 'register':
        $LoginController = new LoginController();
        $LoginController->signup();
        break;
    case 'logout':
        $LoginController = new LoginController();
        $LoginController->logout();
        break;
    case 'forgot_password':
        $LoginController = new LoginController();
        $LoginController->forgot();
        break;




        //comment
    case 'comment':
        $CommentController = new CommentController();
        $CommentController->index();
        break;
    case 'commentStatus':
        $CommentController = new CommentController();
        $CommentController->status();
        break;
    case 'addComment':
        $CommentController = new CommentController();
        $CommentController->add();
        break;

        //Cart Controller ----------------------------------------------------------------
    case 'addCart':
        $CartController = new CartController();
        $CartController->show();
        break;
    case 'updateCart':
        $CartController = new CartController();
        $CartController->edit();
        break;
    case 'deleteCart':
        $CartController = new CartController();
        $CartController->delete();
        break;
    case 'listCart':
        $CartController = new CartController();
        $CartController->add();
        // $CartController->show();
        break;
    case 'wishlistCart':
        $CartController = new CartController();
        $CartController->wishlist();
        break;
    case 'historyCart':
        $CartController = new CartController();
        $CartController->history();
        break;

        //Billing Controller ------------------------------------------------------------------
    case 'addToBill':
        $BillController = new BillController();
        $BillController->add();
        break;
    case 'listBill':
        $BillController = new BillController();
        $BillController->show();
        break;
    case 'StatusOfBill':
        $BillController = new BillController();
        $BillController->status();
        break;
    case 'editBill':
        $BillController = new BillController();
        $BillController->edit();
        break;
    case 'checkOut':
        $BillController = new BillController();
        $BillController->checkout();
        break;
    case 'contact':
        $homeController = new HomeController();
        $homeController->contact();
        break;
    case 'chatBox':
        $homeController = new HomeController();
        $homeController->chatBox();
        break;
    case 'test':
        header('Location: test.php');

        break;

    default:
        // Xử lý controller không hợp lệ
        break;
}
