<?php
class Categorycontroller extends BaseController
{
    private $categoryModel;

    /**
     * Khởi tạo Categorycontroller và tải CategoryModel vào controller.
     */
    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->categoryModel = new CategoryModel;
    }

    /**
     * Hiển thị trang danh mục.
     *
     * @return void
     */
    public function index()
    {
        // Lấy danh sách các danh mục từ model.
        $categories = $this->categoryModel->getAll(
            ['id_category', 'name_category'],
            ['column' => 'id_category', 'orderBy' => 'asc'],
            2
        );

        // Truyền dữ liệu cho view và hiển thị trang danh mục.
        return $this->view('frontend.categories.index', [
            'pageTitle' => "Trang danh mục",
            'categories' => $categories,
        ]);
    }

    /**
     * Tìm kiếm danh mục dựa trên ID.
     *
     * @return void
     */
    public function findByID()
    {
        // Lấy ID danh mục từ tham số GET.
        $id = $_GET['id'];

        // Lấy thông tin danh mục từ model dựa trên ID và hiển thị kết quả.
        $category = $this->categoryModel->get_by_id($id);
        print_r($category);
    }

    /**
     * Tạo mới danh mục.
     *
     * @return void
     */
    public function create()
    {
        // TODO: Xử lý tạo mới danh mục.
        $data = [''];
        echo __METHOD__;
    }

    /**
     * Cập nhật danh mục.
     *
     * @return void
     */
    public function update()
    {
        // Lấy ID danh mục từ tham số GET.
        $id = $_GET['id'];

        // Dữ liệu cần cập nhật cho danh mục.
        $data = [
            'name_category' => 'Đậu phộng dừa promax',
            'desc_category' => 'Thơm ngon',
            'status' => 0
        ];

        // Gọi phương thức _update của CategoryModel để cập nhật danh mục.
        $this->categoryModel->_update($id, $data);
    }

    /**
     * Xóa danh mục.
     *
     * @return void
     */
    public function delete()
    {
        // Lấy ID danh mục từ tham số GET.
        $id = $_GET['id'];

        // Gọi phương thức _delete của CategoryModel để xóa danh mục.
        $this->categoryModel->_delete($id);
    }
}