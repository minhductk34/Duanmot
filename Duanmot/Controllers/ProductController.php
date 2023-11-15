<?php
class ProductController extends BaseController
{

    private $productModel;

    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel();
    }
    public function index()
    {
        $product = $this->productModel->getAll(
            ['id_product', 'name_product'],
            ['column' => 'id_product', 'orderBy' => 'asc']

        );

        // $products = $this->productModel->getAll();
        return $this->view('frontend/products.index', ['pageTitle' => "Trang sản phẩm", 'product' => $product]);
    }

    public function create()
    {

        $data = [
            'name_product' => 'Đậu phộng dừa',
            'desc_product' => 'Thơm ngon',
            'image_product' => null,
            'price_product' => '100000'
        ]; 
        $this-> productModel->_create($data);
        // echo __METHOD__;
    }
    public function update()
    {
        $id = $_GET['id'];
        $data = [
            'name_product' => 'Đậu phộng dừa promax',
            'desc_product' => 'Thơm ngon',
            'image_product' => null,
            'price_product' => '200000'
        ]; 
        $this-> productModel->_update($id,$data);
        // echo __METHOD__;
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this-> productModel->_delete($id);
        
    }
}
