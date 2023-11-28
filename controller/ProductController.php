<?php
class ProductController

{
    private $ProductDAO;
    private $CategoryDAO;
    private $CommentDAO;

    public function __construct()
    {
        $this->ProductDAO = new ProductDAO();
        $this->CategoryDAO = new CategoryDAO();
        $this->CommentDAO = new CommentDAO();
        // require_once('view/product/admin/iteam.php');
    }
    public function showProduct()

    {
        // $statusPro = $this->ProductDAO->getStatus();
        // // die( $statusPro);
        // $statusCate = $this->CategoryDAO->getStatus();
        //  die( $statusPro);
        // if ($statusPro == 0) {
        $products = $this->ProductDAO->Select();
        // }
        // if ($statusCate == 0) {
        $categorys = $this->CategoryDAO->showCategory();
        // }


        require_once('view/product/client/show.php');
    }




    // public function updateProduct()
    // {

    //     if (isset($_SESSION["permissions"])) {
    //         if ($_SESSION['permissions'] == 1) {
    //             //code 

    //             if (isset($_POST['fix']) && $_POST['fix'] != '') {
    //                 $id = $_POST['id'];
    //                 $name_product = $_POST['name_product'];
    //                 $desc_product = $_POST['desc_product'];
    //                 $image_product = $_FILES['image_product'];
    //                 $price_product = $_POST['price_product'];
    //                 $status = $_POST['status'];
    //                 $quantity = $_POST['quantity'];
    //                 $id_category = $_POST['id_category'];
    //                 $id_discount = $_POST['id_discount'];

    //                 $this->ProductDAO->updateProduct($id, $name_product, $desc_product, $image_product, $price_product, $status, $quantity, $id_category, $id_discount);
    //             }
    //         } else {
    //             require_once('404.php');
    //         }
    //     } else {
    //         require_once('404.php');
    //     }
    // }

    // public function deleteAllProducts()
    // {


    //     if (isset($_SESSION["permissions"])) {
    //         if ($_SESSION['permissions'] == 1) {
    //             //code 

    //             if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
    //                 $this->ProductDAO->deleteallPRO($_POST['xoa']);
    //             }
    //         } else {
    //             require_once('404.php');
    //         }
    //     } else {
    //         require_once('404.php');
    //     }
    // }


    public function productDetails()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : '';

        // $timestamp = $this->CommentDAO->get_time_present();
        $product = $this->ProductDAO->selectOneItem($id);
        // $comments = $this->CommentDAO->show($_GET['id']);
        // $categorys = $this->CategoryDAO->showCategory();
        require_once('view/product/client/shopDetails.php');
        // require_once('test.php');

    }

    public function product_Search()
    {
        if (isset($_POST['search'])) {
            $text = isset($_POST['search']) ? $_POST['search'] : '';
            $products = $this->ProductDAO->search($text);
            // var_dump($products);
            if (empty($products)) {
                $mesess = "Can't find product";
                header('Location:index.php?controller=product_show');
            }

            require_once('view/product/client/shopFav.php');
        } else {
            // Handle the case when the search form is not submitted
            $mesess = "Can't find product";

            header('Location:index.php?controller=product_show');
        }
    }
    public function get_product_by_category(){

        // die($_REQUEST);
        $categories =  $this->CategoryDAO->showCategory();
        foreach ($categories as $cate_name){
            $cate_name->getName();
        }
        $this->ProductDAO->getProductsByCategory($cate_name);
        

    }
}
