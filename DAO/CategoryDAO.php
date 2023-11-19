<?php
require_once ('modles/Cartegory.php');
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
        $sql = "SELECT * FROM category";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        // //echo $sql;

        $categorys = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categorys = new Category($row['id'], $row['name_category'], $row['desc_category'], $row['status']);
            $categories[] = $categorys;
        }
        // print_r($categories);
        return $categories;
        
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


}
