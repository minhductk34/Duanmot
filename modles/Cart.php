<?php
class Cart
{
    private $userId;
    private $productId;
    private $imgProduct;
    private $nameProduct;
    private $priceProduct;
    private $quantity;
    private $total;
    private $billId;

    public function __construct($userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId)
    {
        $this->userId = $userId;
        $this->productId = $productId;
        $this->imgProduct = $imgProduct;
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->quantity = $quantity;
        $this->total = $total;
        $this->billId = $billId;
    }
}