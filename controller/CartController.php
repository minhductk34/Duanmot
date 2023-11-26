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
        // var_dump($_SESSION['username']);
        $user=$_SESSION['username'];
        $id_user = $user['id_user'];
        
        $this->CartDAO->showCart($id_user);
        require_once('view/cart/user/list.php');
    }
    public function add()
    {
        if (isset($_GET['id']) && $_GET['id'] != '') {
            $user=$_SESSION['username'];
            $id_user = $user['id_user'];
            $userId = $id_user;
            $quantity = '';
            $typePayment = '';

            $this->CartDAO->addToCart($userId, $_GET['id'], $quantity);
            header('Location: index.php?controller=addCart');
            exit(); 
        } else {
            header('Location: index.php?controller=listCart');
            exit();
        }
       
    }
    public function edit()
    {
        // //echo 'edittCart';
        // if (isset($_SESSION["permissions"])) {
        //     //code
        if (isset($_POST['updateCart']) && $_POST['updateCart'] != '') {
            $userId = $_POST['userId'];
            $productId = $_POST['productId'];
            $quantity = $_POST['quantity'];
            $total = $_POST['total'];

            $this->CartDAO->updateCart($productId, $quantity, $total);
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
        // if (isset($_SESSION["permissions"])) {
        //code
        if (isset($_GET['id'])) {
            // echo 'deleteCart';
            $id = $_GET['id'];
            $user=$_SESSION['username'];
            $id_user = $user['id_user'];
            $this->CartDAO->deleteFromCart($id);
            $this->CartDAO->showCart($id_user);
            header('Location: index.php?controller=listCart');
        } else {
            // echo 'lol';
        }
        // header('Location: test.php');;

        // } else {
        //     require_once('404.php');
        // }
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
