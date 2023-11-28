<?php
// require_once('DAO/CartDAO.php');
// require_once('DAO/ProductDAO.php');
require_once('DAO/CommentDAO.php');
class CommentController
{
    private $CommentDAO;

    public function __construct()
    {
        $this->CommentDAO = new CommentDAO();
        // $this->ProductDAO = new ProductDAO();
        // $this->BillDAO = new BillDAO();
    }
    // public function index()
    // {

    //     if (isset($_SESSION["permissions"])) {
    //         if ($_SESSION["permissions"] == 1) {
    //             $commentDAO = new CommentDAO();
    //             $count = $commentDAO->count();
    //             require_once('view/comment/admin/list.php');
    //         } elseif ($_SESSION["permissions"] == 2) {
    //             $commentDAO = new CommentDAO();
    //             $count = $commentDAO->count();
    //             require_once('view/comment/staff/list.php');
    //         } else {
    //             //code
    //             $ProductDAO = new ProductDAO();
    //             $CommentDAO = new CommentDAO();
    //             $CategoryDAO = new CategoryDAO();

    //             $timestamp = $CommentDAO->get_time_present();
    //             $CommentDAO->add($_POST['id_pro'], $_POST['bl'], $_SESSION['acc'], $_POST['time']);
    //             $product = $ProductDAO->SelectOneItem($_POST['id_pro']);
    //             $products = $ProductDAO->lq($_POST['iddm']);
    //             $comments =  $CommentDAO->show($_POST['id_pro']);
    //             $categorys = $CategoryDAO->showCategory();
    //             require_once('view/comment/user/list.php');
    //         }
    //     } else {
    //         require_once('view/login/login.php');
    //     }
    // }
    public function add()
    {
        $id_user = $_SESSION['username'];
        $id_product=$_GET['id_product'];
        $content=$_POST['content'];
        $create_at = date("Y-m-d H:i:s", strtotime("now"));
        $rate ='';
        $this->CommentDAO->add($id_user, $id_product, $content, $create_at,$rate);
    }

    public function show(){
        $id_pro= $_POST['id_pro'];
        $this->CommentDAO->show($id_pro);
    }
    public function status()
    {
        if (isset($_SESSION["permissions"])) {
            //code

        } else {
            require_once('view/login/login.php');
        }
    }
    
}
