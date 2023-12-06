<?php
class Cart
{
    private $id_cart;
    private $userId;
    private $productId;
    private $imgProduct;
    private $nameProduct;
    private $priceProduct;
    private $quantity;
 

    public function __construct($id_cart,$userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity)
    {
        $this->id_cart = $id_cart;
        $this->userId = $userId;
        $this->productId = $productId;
        $this->imgProduct = $imgProduct;
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->quantity = $quantity;
      
    }

    public function getIdCart()
    {
        return $this->id_cart;
    }
    public function getId()
    {
        return $this->userId;
    }
    public function getProductId()
    {
        return $this->productId;
    }

    public function getImage()
    {
        return $this->imgProduct;
    }
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    public function getPrice()
    {
        return $this->priceProduct;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
   
}
