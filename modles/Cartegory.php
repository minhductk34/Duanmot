<?php

class Category
{
    public $id;
    public $name;
    public $description;
    public $status;

    public function __construct($id, $name, $description, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->status = $status;
    }
}

// Sử dụng lớp Category
$row = [
    'id' => 1,
    'name_category' => 'Category 1',
    'desc_category' => 'Description 1',
    'status' => 'Active'
];

$category = new Category($row['id'], $row['name_category'], $row['desc_category'], $row['status']);

// Truy cập vào các thuộc tính của đối tượng Category
//echo $category->id; // Output: 1
//echo $category->name; // Output: Category 1
//echo $category->description; // Output: Description 1
//echo $category->status; // Output: Active