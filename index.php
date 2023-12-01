<?php
session_start();

// var_dump( $_SESSION['user']);

// require_once các tệp và khởi tạo các controller
require_once 'controller/HomeController.php';
require_once 'controller/ProductController.php';
require_once 'controller/LoginController.php';
require_once 'controller/UserController.php';
require_once 'controller/CategoryController.php';
require_once 'controller/CartController.php';
require_once 'controller/BillController.php';
$controller = $_GET['controller'] ?? 'home';

switch ($controller) {
        //home controller----------------------------------------------------------------
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
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
    case 'get_product_by_category':
        $ProductController = new ProductController();
        $ProductController->get_product_by_category();
        break;
    case 'product_search':
        $ProductController = new ProductController();
        $ProductController->product_Search();
        break;

        //User controller -------------------------------------------------------------------

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

    case 'edit_user':
        $LoginController = new LoginController();
        $LoginController->edit();
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
    case 'listCart':
        $CartController = new CartController();
        $CartController->show();

        break;

    case 'deleteCart':
        $CartController = new CartController();
        $CartController->delete();
        break;
    case 'addCart':
        $CartController = new CartController();
        $CartController->add();

        break;
    case 'wishlistCart':
        $CartController = new CartController();
        $CartController->wishlist();
        break;


        //Billing Controller ------------------------------------------------------------------
    case 'addToBill':
        $BillController = new BillController();
        $BillController->add();
        break;
    case 'billConfirm':
        $BillController = new BillController();
        $BillController->show();
        break;
    case 'StatusOfBill':
        $BillController = new BillController();
        $BillController->status();
        break;
    case 'showBill_details':
        $BillController = new BillController();
        $BillController->showBill_detail();
        break;
    case 'process':
        $BillController = new BillController();
        $BillController->process();
        break;
    case 'checkOut':
        $BillController = new BillController();
        $BillController->checkOut();
        break;

    case 'historyBill':
        $BillController = new BillController();
        $BillController->history();
        break;
    case 'contact':
        $homeController = new HomeController();
        $homeController->contact();
        break;
    case 'chatBox':
        $homeController = new HomeController();
        $homeController->chatBox();
        break;

    default:
        // Xử lý controller không hợp lệ
        break;
}
