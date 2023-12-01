<?php
require_once('modles/Cartegory.php');
class CategoryDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }

    //Show category (checked)

    public function showCategory()
    {
        $sql = "SELECT * FROM category WHERE status = 0";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $categories = []; // Initialize an empty array

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if (isset($row['name_category'], $row['desc_category'], $row['status'])) {
                $category = new Category($row['id_category'], $row['name_category'], $row['desc_category'], $row['status']);
                $categories[] = $category;
            } else {
                // Xử lý khi thiếu thông tin cần thiết cho Category
            }
        }

        return $categories;
    }
    public function showOneCategory($id)
    {
        $sql = "SELECT * FROM category WHERE id_category = $id AND status = 0";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        // Lấy dữ liệu từ kết quả truy vấn
        $category = $stmt->fetch(PDO::FETCH_ASSOC);

        return $category;
    }


    //ADD category
    public function addCategory($name, $description, $status)
    {
        $sql = "INSERT INTO `category` (`name_category`, `desc_category`, `status`) VALUES (:name, :description, :status)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':status', $status, PDO::PARAM_INT);
        $stmt->execute();
    }
    //Delete Category with id
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM `category` WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    // Update Category
    public function updateCategory($id, $name)
    {
        $sql = "UPDATE `category` SET `name_category` = :name WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // public function getStatus()
    // {
    //     $sql = "SELECT `status` FROM `category` WHERE 1";

    //     try {
    //         $stmt = $this->PDO->prepare($sql);
    //         $stmt->execute();


    //         $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //         if ($result !== false && isset($result['status'])) {
    //             return $result['status'];
    //         } else {

    //             return null;
    //         }
    //     } catch (PDOException $e) {

    //         echo "Error: " . $e->getMessage();
    //         return null;
    //     }
    // }
}
