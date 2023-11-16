<?php
class ProductController extends BaseController
{
    private $productModel;

    /**
     * Khởi tạo ProductController và tải ProductModel vào controller.
     */
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel();
    }

    /**
     * Hiển thị trang sản phẩm.
     *
     * @return void
     */
    public function index()
    {
        // Lấy danh sách các sản phẩm từ model.
        $products = $this->productModel->getAll(
            ['id_product', 'name_product'],
            ['column' => 'id_product', 'orderBy' => 'asc']
        );

        // Truyền dữ liệu cho view và hiển thị trang sản phẩm.
        return $this->view('frontend/products.index', [
            'pageTitle' => "Trang sản phẩm",
            'products' => $products
        ]);
    }

    /**
     * Tạo mới một sản phẩm.
     *
     * @return void
     */
    public function create()
    {
        // Dữ liệu cần tạo mới cho sản phẩm.
        $data = [
            'name_product' => 'Đậu phộng dừa',
            'desc_product' => 'Thơm ngon',
            'image_product' => null,
            'price_product' => '100000'
        ];

        // Gọi phương thức _create của ProductModel để tạo mới sản phẩm.
        $this->productModel->_create($data);
    }

    /**
     * Cập nhật thông tin sản phẩm.
     *
     * @return void
     */
    public function update()
    {
        // Lấy ID sản phẩm từ tham số GET.
        $id = $_GET['id'];

        // Dữ liệu cần cập nhật cho sản phẩm.
        $data = [
            'name_product' => 'Đậu phộng dừa promax',
            'desc_product' => 'Thơm ngon',
            'image_product' => null,
            'price_product' => '200000'
        ];

        // Gọi phương thức _update của ProductModel để cập nhật sản phẩm.
        $this->productModel->_update($id, $data);
    }

    /**
     * Xóa sản phẩm.
     *
     * @return void
     */
    public function delete()
    {
        // Lấy ID sản phẩm từ tham số GET.
        $id = $_GET['id'];

        // Gọi phương thức _delete của ProductModel để xóa sản phẩm.
        $this->productModel->_delete($id);
    }
}
