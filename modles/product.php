<?php
class Product
{
    private $id;
    private $name_product;
    private $desc_product;
    private $image_product;
    private $price_product;
    private $status;
    private $quantity;
    private $name_category;
    private $id_discount;

    public function __construct($id, $name_product, $desc_product, $image_product, $price_product, $status, $quantity, $name_category, $id_discount)
    {
        $this->id = $id;
        $this->name_product = $name_product;
        $this->desc_product = $desc_product;
        $this->image_product = $image_product;
        $this->price_product = $price_product;
        $this->status = $status;
        $this->quantity = $quantity;
        $this->name_category = $name_category;
        $this->id_discount = $id_discount;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getImage()
    {
        return $this->image_product;
    }

    public function getName()
    {
        return $this->name_product;
    }

    public function getPrice()
    {
        return $this->price_product;
    }
    public function getDescription()
    {
        return $this->desc_product;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getNameCategory()
    {
        return $this->name_category;
    }
}
