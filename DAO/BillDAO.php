<?php

class BillDAO
{
    private $pdo;

    private $PDO;
    public function __construct()
    {
        require('config/pdo.php');
        $this->PDO = $pdo;
    }


    public function createBill($userId, $typePayment, $quantity, $total)
    {
        $query = "INSERT INTO bill (id_user, type_payment, quantity, total, status) VALUES ('$userId', null,'$quantity' , '$total')";
        var_dump($query);
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        return $this->PDO->lastInsertId();
    }

    public function createBillDetail($billId, $userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId)
    {
        $query = "INSERT INTO bill_details (id_bill, id_user, bill_name, bill_address, bill_tel, quantity, total, type_payment, img_product, name_product, id_product) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$billId, $userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId]);
    }

    public function getBillById($billId)
    {
        $query = "SELECT * FROM bill WHERE id_bill = ?";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$billId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateBillStatus($billId, $status)
    {
        $query = "UPDATE bill SET status = ? WHERE id_bill = ?";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$status, $billId]);
    }

    public function deleteBill($billId)
    {
        $query = "DELETE FROM bill WHERE id_bill = ?";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$billId]);
    }
}
