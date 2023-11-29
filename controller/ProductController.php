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
        $products = $this->ProductDAO->Select();

        $categorys = $this->CategoryDAO->showCategory();
        require_once('view/product/client/show.php');
    }





    public function productDetails()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $product = $this->ProductDAO->selectOneItem($id);
        require_once('view/product/client/shopDetails.php');
    }

    public function product_Search()
    {
        if (isset($_POST['search'])) {
            $text = isset($_POST['search']) ? $_POST['search'] : '';
            $products = $this->ProductDAO->search($text);

            if (empty($products)) {
                // Chuyển hướng với thông điệp
                header('Location: index.php?controller=product_show&message=notfound');
               
            }

            require_once('view/product/client/shopFav.php');
        } else {
            // Handle the case when the search form is not submitted
            $mesess = "Can't find product";

            header('Location: index.php?controller=product_show');
        }
    }


    public function get_product_by_category()
    {

        // die($_REQUEST);
        $categories =  $this->CategoryDAO->showCategory();
        foreach ($categories as $cate_name) {
            $cate_name->getName();
        }
        $this->ProductDAO->getProductsByCategory($cate_name);
    }
}
