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
        require_once('view/product/admin/iteam.php');
    }
    public function showProduct()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION["permissions"] == 1) {
                require_once('view/home/homeAdmin.php');
            } elseif ($_SESSION["permissions"] == 2) {

                $products = $this->ProductDAO->getProductsByCategory($_GET['product']);
                $categorys = $this->CategoryDAO->showCategory();
                require_once 'view/product/cli/listitem.php';
            } elseif ($_SESSION["permissions"] == 0) {
                require_once('view/home/homeUser.php');
            }
        } else {

            $products = $this->ProductDAO->getProductsByCategory($_GET['product']);
            $categorys = $this->CategoryDAO->showCategory();
            require_once 'view/product/cli/listitem.php';
        }
    }


    public function addProduct()
    {

        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                if (isset($_POST['add']) && $_POST['add'] != '') {
                    $name_product = $_POST['name_product'];
                    $desc_product = $_POST['desc_product'];
                    $image_product = $_FILES['image_product'];
                    $price_product = $_POST['price_product'];
                    $status = $_POST['status'];
                    $quantity = $_POST['quantity'];
                    $id_category = $_POST['id_category'];
                    $id_discount = $_POST['id_discount'];

                    $this->ProductDAO->addPRO($name_product, $desc_product, $image_product, $price_product, $status, $quantity, $id_category, $id_discount);
                }
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function deleteProduct()
    {

        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                if (isset($_POST['id_x']) && $_POST['id_x'] != '') {
                    $this->ProductDAO->deletePRO($_POST['id_x']);
                }
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function updateProduct()
    {

        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                if (isset($_POST['fix']) && $_POST['fix'] != '') {
                    $id = $_POST['id'];
                    $name_product = $_POST['name_product'];
                    $desc_product = $_POST['desc_product'];
                    $image_product = $_FILES['image_product'];
                    $price_product = $_POST['price_product'];
                    $status = $_POST['status'];
                    $quantity = $_POST['quantity'];
                    $id_category = $_POST['id_category'];
                    $id_discount = $_POST['id_discount'];

                    $this->ProductDAO->updateProduct($id, $name_product, $desc_product, $image_product, $price_product, $status, $quantity, $id_category, $id_discount);
                }
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function deleteAllProducts()
    {


        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
                    $this->ProductDAO->deleteallPRO($_POST['xoa']);
                }
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }


    public function item()
    {
        $_GET['id'];

        $timestamp = $this->CommentDAO->get_time_present();
        $product = $this->ProductDAO->SelectOneItem($_GET['id']);
        $products = $this->ProductDAO->lq($_GET['iddm']);
        $comments =  $this->CommentDAO->show($_GET['id']);
        $categorys = $this->CategoryDAO->showCategory();

        require_once('view/product/client/listItem.php');
    }
}
