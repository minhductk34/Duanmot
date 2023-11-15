<?php
class Categorycontroller extends BaseController
{
    private $categoryModel;
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }
    public function index()

    {
        $categories = $this->categoryModel->getAll(
            ['id_category', 'name_category'],
            ['column' => 'id_category', 'orderBy' => 'asc'],2
        );

        return $this->view('frontend.categories.index', ['pageTitle' => "Trang danh mục", 'categories' => $categories,]);
    }
    public function findByID(){
        $id = $_GET['id'];
        $category = $this->categoryModel->get_by_id($id);
        print_r($category);
    }
    public function create(){
        
        $data = [''];
        echo __METHOD__ ;
    }
    public function update()
    {
        $id = $_GET['id'];
        $data = [
            'name_category' => 'Đậu phộng dừa promax',
            'desc_category' => 'Thơm ngon',
            'status' => 0
            
        ]; 
        $this-> categoryModel->_update($id,$data);
       
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this-> categoryModel->_delete($id);
        
    }
}
