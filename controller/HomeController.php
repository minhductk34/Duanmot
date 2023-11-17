<?php
include 'DAO/ProductDAO.php';
include 'DAO/CommentDAO.php';
class HomeController
{

    public function index()
    {

        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                $ProductDAO = new ProductDAO();
                $count = $ProductDAO->statistics();
                include('view/home/homeAdmin.php');
            } else {
                if (isset($_POST['search']) && $_POST['search'] != "") {
                    $ProductDAO = new ProductDAO();
                    $products = $ProductDAO->SelectItem($_POST['search']);
                    $danhmucs = $ProductDAO->showCategory();
                    include('view/home/home.php');
                } else {
                    $ProductDAO = new ProductDAO();
                    $products = $ProductDAO->Select();
                    $danhmucs = $ProductDAO->showCategory();
                    include('view/home/home.php');
                }
            }
        } else {
            if (isset($_POST['search']) && $_POST['search'] != "") {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->SelectItem($_POST['search']);
                $danhmucs = $ProductDAO->showCategory();
                include('view/home/home.php');
            } else {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->Select();
                $danhmucs = $ProductDAO->showCategory();
                include('view/home/home.php');
            }
        }
    }
  
}
