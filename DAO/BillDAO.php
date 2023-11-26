<?php
include 'modles/Bill.php';
class BillDAO
{
    private $pdo;

    private $PDO;
    public function __construct()
    {
        require('config/pdo.php');
        $this->PDO = $pdo;
    }


    public function createBill($userId, $number_phone, $address, $email, $full_name,  $type_payment)
    {

        $bill = new BillDAO();
        $loadBill = $bill->showBill($userId);
        
        $query = "INSERT INTO `bill`( `id_user`, `number_phone`, `address`, `email`, `full_name`, `type_payment`) 
                                VALUES ('$userId','$number_phone','$address','$email','$full_name',' $type_payment')";
        // var_dump($query);
        // die($query);
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        return $this->PDO->lastInsertId();
    }

    public function createBillDetail($userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId)
    {
        $query = "INSERT INTO bill_details (id_bill, id_user, bill_name, bill_address, bill_tel, quantity, total, type_payment, img_product, name_product, id_product) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();
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

    public function showBill($id_user)
    {
        $query = "SELECT b.id_bill, b.id_user, c.id_product, b.number_phone, b.address, b.email, b.full_name, b.type_payment, c.quantity 
        AS cart_quantity,  b.total, b.status, b.create_at, c.id_cart FROM bill b JOIN cart c ON b.id_bill = c.bill_id WHERE b.id_user = 1;";



        die($query);
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        $lists = []; // Khởi tạo danh sách rỗng

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng Bill từ dữ liệu và thêm vào danh sách
           
            $bill = new BillModel(
                $row['id_bill'],
                $row['id_user'],
                $row['id_product'],
                $row['number_phone'],
                $row['address'],
                $row['email'],
                $row['full_name'],
                $row['type_payment'],
                $row['bill_quantity'], 
                $row['total'],
                $row['status'],
                $row['create_at']
            );

            $lists[] = $bill;
        }

        return $lists;
    }
}
