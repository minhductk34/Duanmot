<?php

class Category
{
    public $id_category ;
    public $name;
    public $description;
    public $status;

    public function __construct($id, $name, $description, $status)
    {
        $this->id_category  = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }

    public function getName()
    {
        return $this->name;
    }

    public function status()
    {
        return $this->status;
    }

    public function getId()
    {
        return $this->id_category ;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

// Sử dụng lớp Category
$row = [
    'id_category ' => '',
    'name_category' => '',
    'desc_category' => '',
    'status' => ''
];

$category = new Category($row['id_category '], $row['name_category'], $row['desc_category'], $row['status']);

// Truy cập vào các thuộc tính của đối tượng Category
//echo $category->id; // Output: 1
//echo $category->name; // Output: Category 1
//echo $category->description; // Output: Description 1
//echo $category->status; // Output: Active