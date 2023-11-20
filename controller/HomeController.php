<?php
require_once 'DAO/ProductDAO.php';
require_once 'DAO/CommentDAO.php';
require_once 'DAO/CategoryDAO.php';

class HomeController
{
    private $products;
    private $comments;
    private $categorys;

    public function __construct()
    {
        $this->products = new ProductDAO();
        $this->comments = new CommentDAO();
        $this->categorys = new CategoryDAO();
    }

    public function index()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                $count = $this->products->statistics();
                require_once('view/home/admin/home.php');
            } elseif ($_SESSION['permissions'] == 2) {
                $categorys = $this->categorys->showCategory();
                require_once('view/home/staff/home.php');
            } else {
                if (isset($_POST['search']) && $_POST['search'] != "") {
                    $products = $this->products->Search($_POST['search']);
                    $categorys = $this->categorys->showCategory();
                    require_once('view/home/user/home.php');
                } else {
                    $products = $this->products->Select();
                    $categorys = $this->categorys->showCategory();
                    require_once('view/home/user/home.php');
                }
            }
        } else {
            if (isset($_POST['search']) && $_POST['search'] != "") {
                $products = $this->products->Search($_POST['search']);
                $categorys = $this->categorys->showCategory();
                require_once('view/home/user/home.php');
            } else {
                $products = $this->products->Select();
                $categorys = $this->categorys->showCategory();
                require_once('view/home/user/home.php');
            }
        }
    }
    public function contact()
    {
        require_once('view/home/user/contact.php');
    }
    public function chatBox()
    {
        header('Location: ./view/chatbox/index.php');
        exit;
    }
}
