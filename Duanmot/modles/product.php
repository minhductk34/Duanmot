<?php
class Product
{
    public $id;
    public $name_product;
    public $desc_product;
    public $image_product;
    public $price_product;
    public $status;
    public $quantity;
    public $categoryID;
    public $discountID;

    public function __construct($id, $name_product, $desc_product, $image_product, $price_product, $status, $quantity, $categoryID, $discountID)
    {
        $this->id = $id;
        $this->name_product = $name_product;
        $this->desc_product = $desc_product;
        $this->image_product = $image_product;
        $this->price_product = $price_product;
        $this->status = $status;
        $this->quantity = $quantity;
        $this->categoryID = $categoryID;
        $this->discountID = $discountID;
    }
}