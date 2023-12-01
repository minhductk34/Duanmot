<?php
require_once('DAO/CartDAO.php');
require_once('DAO/ProductDAO.php');
require_once('DAO/BillDAO.php');
class CartController
{
    private $CartDAO;
    private $ProductDAO;
    private $BillDAO;

    public function __construct()
    {
        $this->CartDAO = new CartDAO();
        $this->ProductDAO = new ProductDAO();
        $this->BillDAO = new BillDAO();
    }
    public function show()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']) {
            $user = $_SESSION['user'];
            $id_user = $user['id_user'];

            $cartItems = $this->CartDAO->showCart($id_user);

            // Kiểm tra xem giỏ hàng có trống không
            if (empty($cartItems)) {
                // Giỏ hàng trống, hiển thị một cảnh báo JavaScript
                echo '<script>alert("Giỏ hàng của bạn đang trống.");</script>';
                // Chuyển hướng người dùng về trang chủ
                header('Location: index.php');
                exit(); // Đảm bảo rằng kịch bản dừng thực thi sau khi chuyển hướng
            }

            require_once('view/cart/user/list.php');
        } else {
            // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header('Location: index.php?controller=login');
        }
    }

    public function add()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']) {
            if (isset($_GET['id']) && $_GET['id'] != '') {
                $user = $_SESSION['user'];
                $id_user = $user['id_user'];
                $userId = $id_user;
                $quantity = $_GET['quantity'];
                $typePayment = '';

                $this->CartDAO->addToCart($userId, $_GET['id'], $quantity);
                header('Location: index.php?controller=addCart');
                exit();
            } else {
                header('Location: index.php?controller=listCart');
                exit();
            }
        } else {
            // Không đăng nhập, hiển thị thông báo bằng JavaScript
            echo "<script>alert('Vui lòng đăng nhập để thêm sản phẩm vào giỏ hàng.')</script>";
            header('Location: index.php?controller=login');
            exit();
        }
    }

    public function delete()
    {
       
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user = $_SESSION['user'];
            $id_user = $user['id_user'];
            $this->CartDAO->deleteFromCart($_GET['id']);
            $this->CartDAO->showCart($id_user);
            header('Location: index.php?controller=listCart');
        } else {
        
        }
    }
    public function history()
    {
        //echo 'historyCart';
      
    }

    public function wishlist()
    {

        require_once('view/cart/user/wishlist.php');
    }
}
