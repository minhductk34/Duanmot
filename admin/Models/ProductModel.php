<?php

class ProductModel extends BaseModel
{
    const TABLE = 'product';

    /**
     * Lấy tất cả các bản ghi từ bảng product.
     *
     * @param array $select Các cột cần lấy (mặc định là tất cả).
     * @param array $orderBy Cột sắp xếp và thứ tự (mặc định là không sắp xếp).
     * @param int $limit Số lượng bản ghi trả về (mặc định là 10).
     * @return array Mảng chứa các bản ghi.
     */
    public function getAll($select = ['*'], $orderBy = [], $limit = 10)
    {
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    /**
     * Tìm kiếm sản phẩm dựa trên ID.
     *
     * @param int $id ID của sản phẩm.
     * @return array|null Mảng chứa thông tin sản phẩm hoặc null nếu không tìm thấy.
     */
    public function find_by_id($id)
    {
        return $this->find(self::TABLE, $id);
    }

    /**
     * Tạo mới một sản phẩm.
     *
     * @param array $data Dữ liệu của sản phẩm cần tạo mới.
     * @return void
     */
    public function _create($data)
    {
        $this->create(self::TABLE, $data);
    }

    /**
     * Cập nhật thông tin sản phẩm.
     *
     * @param int $id ID của sản phẩm cần cập nhật.
     * @param array $data Dữ liệu cần cập nhật.
     * @return void
     */
    public function _update($id, $data)
    {
        $this->update(self::TABLE, $id, $data);
    }

    /**
     * Xóa sản phẩm.
     *
     * @param int $id ID của sản phẩm cần xóa.
     * @return void
     */
    public function _delete($id)
    {
        $this->delete(self::TABLE, $id);
    }
}

?>