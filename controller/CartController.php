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
        if (isset($_SESSION['username']) && $_SESSION['username']) {

            $user = $_SESSION['username'];
            $id_user = $user['id_user'];

            $this->CartDAO->showCart($id_user);
            require_once('view/cart/user/list.php');
        } else {
            header('Location: index.php?controller=login');
        }
    }
    public function add()
    {
        if (isset($_SESSION['username']) && $_SESSION['username']) {
            if (isset($_GET['id']) && $_GET['id'] != '') {
                $user = $_SESSION['username'];
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
        } else {
            header('Location: index.php?controller=login');
        }
    }
    public function delete()
    {

        if (isset($_GET['id'])) {
            // die($_GET['id']);
            // echo 'deleteCart';
            $id = $_GET['id'];
            $user = $_SESSION['username'];
            $id_user = $user['id_user'];
            $this->CartDAO->deleteFromCart($_GET['id']);

            $this->CartDAO->showCart($id_user);
            header('Location: index.php?controller=listCart');
        } else {
            // echo 'lol';
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

        require_once('view/cart/user/wishlist.php');
    }
}
