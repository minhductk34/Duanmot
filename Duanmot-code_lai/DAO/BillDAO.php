<?php

class BillDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createBill($userId, $typePayment, $quantity, $total, $status)
    {
        $query = "INSERT INTO bill (id_user, type_payment, quantity, total, status) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId, $typePayment, $quantity, $total, $status]);

        return $this->db->lastInsertId();
    }

    public function createBillDetail($billId, $userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId)
    {
        $query = "INSERT INTO bill_details (id_bill, id_user, bill_name, bill_address, bill_tel, quantity, total, type_payment, img_product, name_product, id_product) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$billId, $userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId]);
    }

    public function getBillById($billId)
    {
        $query = "SELECT * FROM bill WHERE id_bill = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$billId]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateBillStatus($billId, $status)
    {
        $query = "UPDATE bill SET status = ? WHERE id_bill = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$status, $billId]);
    }

    public function deleteBill($billId)
    {
        $query = "DELETE FROM bill WHERE id_bill = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$billId]);
    }
}
