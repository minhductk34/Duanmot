<?php
class ProductController
{
    public function index()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION["permissions"] == 1) {
                include('view/home/homeAdmin.php');
            } elseif ($_SESSION["permissions"] == 2) {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->sharelist($_GET['product']);
                $categorys = $ProductDAO->showCategory();
                include 'view/product/cli/listitem.php';
            } elseif ($_SESSION["permissions"] == 0) {
                include('view/home/homeUser.php');
            }
        } else {
            $ProductDAO = new ProductDAO();
            $products = $ProductDAO->sharelist($_GET['product']);
            $categorys = $ProductDAO->showCategory();
            include 'view/product/cli/listitem.php';
        }
    }

    public function category()
    {
        $ProductDAO = new ProductDAO();

        if (isset($_POST['name_category']) && $_POST['name_category'] != '') {
            $name = $_POST['name_category'];
            $description = ''; // Thêm thông tin mô tả ở đây, nếu cần
            $status = 1; // Giá trị mặc định cho trạng thái, nếu cần

            $ProductDAO->addCategory($name, $description, $status);
        }

        if (isset($_POST['id']) && $_POST['id'] != '') {
            $id = $_POST['id'];
            $ProductDAO->deleteCategory($id);
        }

        if (isset($_POST['tenmoi']) && $_POST['tenmoi'] != '') {
            $id_l = $_POST['id_l'];
            $tenmoi = $_POST['tenmoi'];
            $ProductDAO->updateCategory($id_l, $tenmoi);
        }

        $categorys = $ProductDAO->showCategory();
        include('view/product/admin/classitemadmin.php');
    }
    public function product()
    {
        $ProductDAO = new ProductDAO();
        if (isset($_POST['add']) && $_POST['add'] != '') {
            $ProductDAO->addPRO($_POST['tensanpam'], $_POST['gia'], $_FILES['img'], $_POST['mota'], $_POST['iddm']);
        }
        if (isset($_POST['id_x']) && $_POST['id_x'] != '') {
            $ProductDAO->deletePRO($_POST['id_x']);
        }
        if (isset($_POST['fix']) && $_POST['fix'] != '') {
            $ProductDAO->updateProduct(
                $_POST['idsp'],
                $_POST['tensanpam'],
                $_POST['gia'],
                $_FILES['img'],
                $_POST['mota'],
                $_POST['status'],
                $_POST['quantity'],
                $_POST['iddm'],
                $_POST['iddiscount']
            );
        }
        if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
            $ProductDAO->deleteallPRO($_POST['xoa']);
        }
        $categorys = $ProductDAO->showCategory();
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        // $counts = $ProductDAO->countProducts();
        // $products = $ProductDAO->showPRO($page, 5);
        include('view/product/admin/iteam.php');
    }
    public function comment()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION["permissions"] == 1) {
                $commentDAO = new CommentDAO();
                $count = $commentDAO->count();
                include('view/comment/comment.php');
            } else {
                $ProductDAO = new ProductDAO();
                $commentDAO = new CommentDAO();
                $timestamp = $commentDAO->get_time_present();
                $commentDAO->add($_POST['id_pro'], $_POST['bl'], $_SESSION['acc'], $_POST['time']);
                $product = $ProductDAO->SelectOneItem($_POST['id_pro']);
                $products = $ProductDAO->lq($_POST['iddm']);
                $comments =  $commentDAO->show($_POST['id_pro']);
                $categorys = $ProductDAO->showCategory();
                include('view/product/cli/item.php');
            }
        } else {
            include('view/login/login.php');
        }
    }
    public function item()
    {
        $_GET['id'];
        $ProductDAO = new ProductDAO();
        $commentDAO = new CommentDAO();
        $timestamp = $commentDAO->get_time_present();
        $product = $ProductDAO->SelectOneItem($_GET['id']);
        $products = $ProductDAO->lq($_GET['iddm']);
        $comments =  $commentDAO->show($_GET['id']);
        $categorys = $ProductDAO->showCategory();

        include('view/product/cli/item.php');
    }
}
