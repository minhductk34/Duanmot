<?php
session_start();
// require_once các tệp và khởi tạo các controller
require_once 'controller/HomeController.php';
require_once 'controller/ProductController.php';
require_once 'controller/LoginController.php';
require_once 'controller/UserController.php';
require_once 'controller/CategoryController.php';
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

        //User controller -------------------------------------------------------------------
    case 'user':
        $UserController = new UserController();
        $UserController->index();
        break;

    case 'login':
        $LoginController = new LoginController();
        $LoginController->login();
        break;
    case 'signup':
        $LoginController = new LoginController();
        $LoginController->index();
        break;
    case 'logout':
        $LoginController = new LoginController();
        $LoginController->logout();
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
        $CartController->add();
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
        $CartController->show();
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

    default:
        // Xử lý controller không hợp lệ
        break;

}
