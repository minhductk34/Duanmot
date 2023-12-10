<?php
session_start();
if (isset($_GET['message'])) {
    $errorMessage = "";
  
    if ($_GET['message'] === 'emptyCart') {
        $errorMessage = "Your cart is empty.";
    } elseif ($_GET['message'] === 'emptyProduct') {
        $errorMessage = "Your product is sold out.";
    }
    echo '<script>alert("' . $errorMessage . '");</script>';
    echo '<script>setTimeout(function(){ window.location.href = "index.php"; }, 100);</script>';
}

// var_dump( $_SESSION['user']);

// require_once các tệp và khởi tạo các controller
require_once 'controller/HomeController.php';
require_once 'controller/ProductController.php';
require_once 'controller/LoginController.php';
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
    case 'home_user':
        $LoginController = new LoginController();
        $LoginController->home_user();
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

    case 'edit_user':
        $LoginController = new LoginController();
        $LoginController->edit();
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
    case 'history_details':
        $BillController = new BillController();
        $BillController->details_history();
        break;
    case 'processReturn':
        $BillController = new BillController();
        $BillController->processReturn();
        break;
    case 'contact':
        $homeController = new HomeController();
        $homeController->contact();
        break;
    case 'chatBox':
        $homeController = new HomeController();
        $homeController->chatBox();
        break;
    case 'payment':
        $homeController = new HomeController();
        $homeController->chatBox();
        break;



    default:
        // Xử lý controller không hợp lệ
        break;
}
