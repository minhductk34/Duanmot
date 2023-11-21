<?php

class CategoryDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }

    //Show category

    public function showCategory()
    {
        
        $sql = "select * from category order by id_category desc";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        var_dump($sql);
        // $categorys = array();

        // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //     $categorys = new Category($row['id'], $row['name_category'], $row['desc_category'], $row['status']);
        //     $categories[] = $categorys;
        // }

        // return $categories;
        // var_dump($categories);
    }
    //ADD category
    public function addCategory($name_category, $description)
    {
        $sql = "INSERT INTO category(name_category,desc_category) VALUES('$name_category','$desc_category')";
        pdo_execute($sql);
        print_r($sql);
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
