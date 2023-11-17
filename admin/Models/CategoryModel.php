<?php 
// Lớp CategoryModel kế thừa từ BaseModel
class CategoryModel extends BaseModel
{
    const TABLE = 'category';

    /**
     * Lấy tất cả các bản ghi từ bảng category.
     *
     * @param array $select Các cột cần lấy (mặc định là tất cả).
     * @param array $orderBy Cột sắp xếp và thứ tự (mặc định là không sắp xếp).
     * @param int $limit Số lượng bản ghi trả về (mặc định là 10).
     * @return array Mảng chứa các bản ghi.
     */
    // public function getAll($select = ['*'], $orderBy = [], $limit = 10)
    // {
    //     return $this->all(self::TABLE, $select, $orderBy, $limit);
    // }

    /**
     * Lấy thông tin danh mục dựa trên ID.
     *
     * @param int $id ID của danh mục.
     * @return array|null Mảng chứa thông tin danh mục hoặc null nếu không tìm thấy.
     */
    // public function get_by_id($id)
    // {
    //     return $this->find(self::TABLE, $id);
    // }

    /**
     * Cập nhật thông tin danh mục.
     *
     * @param int $id ID của danh mục cần cập nhật.
     * @param array $data Dữ liệu cần cập nhật.
     * @return void
     */
    public function _update($id, $data)
    {
        $this->update(self::TABLE, $id, $data);
    }

    /**
     * Xóa danh mục.
     *
     * @param int $id ID của danh mục cần xóa.
     * @return void
     */
    public function _delete($id)
    {
        $this->delete(self::TABLE, $id);
    }
}

?>