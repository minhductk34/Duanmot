<?php

class BillModel
{
    private $id;
    private $userId;
    private $productId;
    private $phoneNumber;
    private $address;
    private $email;
    private $fullName;
    private $paymentType;
    private $createdAt;

    public function __construct($id, $userId, $productId, $phoneNumber, $address, $email, $fullName, $paymentType, $createdAt)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->productId = $productId;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->email = $email;
        $this->fullName = $fullName;
        $this->paymentType = $paymentType;
        $this->createdAt = $createdAt;
    }

    // Getter methods
    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function getPaymentType()
    {
        return $this->paymentType;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
}
