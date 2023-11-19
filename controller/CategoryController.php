<?php
class CategoryController
{
    private $ProductDAO;
    private $CategoryDAO;

    public function __construct()
    {
        $this->ProductDAO = new ProductDAO();
        $this->CategoryDAO = new CategoryDAO();
        // require_once('view/product/admin/classitemadmin.php');
    }

    public function index()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION["permissions"] == 1) {
                require_once('view/home/homeAdmin.php');
            } elseif ($_SESSION["permissions"] == 2) {
                require_once('view/home/homeStaff.php');
            } elseif ($_SESSION["permissions"] == 0) {
                require_once('view/home/homeUser.php');
            }
        } else {
            $products = $this->ProductDAO->getProductsByCategory($_GET['product']);
            $categorys = $this->CategoryDAO->showCategory();
            require_once('view/product/cli/listitem.php');
        }
    }

    public function addCategory()
    {
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code 

                if (isset($_POST['name_category']) && $_POST['name_category'] != '') {
                    $name = $_POST['name_category'];
                    $description = ''; // Thêm thông tin mô tả ở đây, nếu cần
                    $status = 1; // Giá trị mặc định cho trạng thái, nếu cần

                    $this->CategoryDAO->addCategory($name, $description, $status);
                }
                require_once('view/category/admin/Add.php');
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function deleteCategory()
    {
        //echo 'deleteCategory';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                //code
                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $id = $_POST['id'];
                    $this->CategoryDAO->deleteCategory($id);
                }
                require_once('view/category/admin/Delete.php');
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function updateCategory()
    {
        //echo 'updateCategory';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                if (isset($_POST['tenmoi']) && $_POST['tenmoi'] != '') {
                    $id_l = $_POST['id_l'];
                    $tenmoi = $_POST['tenmoi'];
                    $this->CategoryDAO->updateCategory($id_l, $tenmoi);
                }
                require_once('view/category/admin/Update.php');
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }

    public function showCategory()
    {
        //echo 'showCategory';
        if (isset($_SESSION["permissions"])) {
            if ($_SESSION['permissions'] == 1) {
                $CategoryDAO = new CategoryDAO();
                $categorys = $CategoryDAO->showCategory();
                // //echo "categoryshow";
                require_once('view/category/admin/List.php');
            } elseif ($_SESSION['permissions'] == 2) {
                $CategoryDAO = new CategoryDAO();
                $categorys = $CategoryDAO->showCategory();
                // //echo "categoryshow";
                require_once('view/category/staff/List.php');
            } else {
                require_once('404.php');
            }
        } else {
            require_once('404.php');
        }
    }


    public function showProduct_test()
    {
        //echo 'showProduct_test';
        //echo '</br>';
        $ProductController = new ProductController();
        $ProductController->showProduct();
        // //echo "categoryshow";
        require_once('view/category/admin/List.php');
    }
}
