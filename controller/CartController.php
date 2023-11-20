<?php
require_once('DAO/CartDAO.php');
class CartController
{
    private $CartDAO;

    public function __construct()
    {
        $this->CartDAO = new CartDAO();
    }
    public function show()
    {
        //echo 'listCart';
        // if (isset($_SESSION["permissions"])) {
        //     //code
        require_once('view/cart/user/list.php');
        // } else {
        //     require_once('404.php');
        // }
    }
    public function add()
    {
        //echo 'addCart';
        //code

        // if (isset($_SESSION["permissions"])) {
        //     //code

        if (isset($_POST['add']) && $_POST['add'] != '') {
            $userId = $_POST['userId'];
            $productId = $_POST['productId'];
            $imgProduct = $_POST['imgProduct'];
            $nameProduct = $_POST['nameProduct'];
            $priceProduct = $_POST['priceProduct'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];
            $billId = $_POST['billId'];

            // Gọi phương thức addToCart() với các tham số tương ứng
            $this->CartDAO->addToCart($userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId);
            // require_once('view/cart/user/add.php');

            require_once('Location: test/billtest.php');
            exit();
        }
        header('Location: test/billtest.php');
        // } else {
        //     require_once('404.php');
        // }
    }
    public function edit()
    {
        // //echo 'edittCart';
        // if (isset($_SESSION["permissions"])) {
        //     //code
        if (isset($_POST['update']) && $_POST['update'] != '') {
            $userId = $_POST['userId'];
            $productId = $_POST['productId'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];

            $this->CartDAO->updateCart($userId, $productId, $quantity, $total);
            require_once('view/cart/user/update.php');
        }

        require_once('view/cart/user/update.php');
        // } else {
        //     require_once('404.php');
        // }
    }
    public function delete()
    {
        //echo 'deleteCart';
        if (isset($_SESSION["permissions"])) {
            //code
            $cartId = $_POST['cartId'];
            $this->CartDAO->deleteFromCart($cartId);
            require_once('view/cart/user/delete.php');
        } else {
            require_once('404.php');
        }
    }
    public function history()
    {
        //echo 'historyCart';
        if (isset($_SESSION["permissions"])) {
            //code
            $userId = $_POST['userId'];
            $this->CartDAO->getCartHistory($userId);
            require_once('view/cart/user/history.php');
        } else {
            require_once('404.php');
        }
    }

    public function wishlist()
    {
        //echo 'historyCart';
        // if (isset($_SESSION["permissions"])) {
        //     //code 

        require_once('view/cart/user/wishlist.php');
        // } else {
        //     require_once('404.php');
        // }
    }
}
