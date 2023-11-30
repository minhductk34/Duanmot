<?php
include 'modles/Bill.php';
include 'modles/BillDeteils.php';
class BillDAO
{
    private $pdo;

    private $PDO;
    public function __construct()
    {
        require('config/pdo.php');
        $this->PDO = $pdo;
    }


    public function createBill($userId, $number_phone, $address, $email, $full_name,  $type_payment, $create_at)
    {


        $query = "INSERT INTO `bill`( `id_user`, `number_phone`, `address`, `email`, `full_name`, `type_payment`,`create_at`) 
            VALUES ('$userId','$number_phone','$address','$email','$full_name',' $type_payment','$create_at')";
        //    die($query);

        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        return $this->PDO->lastInsertId();
    }

    // public function createBillDetail($userId, $billName, $billAddress, $billTel, $quantity, $total, $typePayment, $imgProduct, $nameProduct, $productId)
    // {
    //     $query = "INSERT INTO bill_details (id_bill, id_user, bill_name, bill_address, bill_tel, quantity, total, type_payment, img_product, name_product, id_product) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    //     $stmt = $this->PDO->prepare($query);
    //     $stmt->execute();
    // }

    // public function getBillById($billId)
    // {
    //     $query = "SELECT * FROM bill WHERE id_bill = ?";
    //     $stmt = $this->PDO->prepare($query);
    //     $stmt->execute([$billId]);

    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    // public function updateBillStatus($billId, $status)
    // {
    //     $query = "UPDATE bill SET status = ? WHERE id_bill = ?";
    //     $stmt = $this->PDO->prepare($query);
    //     $stmt->execute([$status, $billId]);
    // }

    // public function deleteBill($billId)
    // {
    //     $query = "DELETE FROM bill WHERE id_bill = ?";
    //     $stmt = $this->PDO->prepare($query);
    //     $stmt->execute([$billId]);
    // }
    public function selectId($id_user)
    {
        $query = "SELECT id_bill FROM bill WHERE id_user = $id_user ORDER BY id_bill DESC LIMIT 1";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        // Fetch the value and return it
        return $stmt->fetchColumn();
    }


    public function showBill($id_user)
    {

        $query = "SELECT id_bill FROM bill WHERE id_user =$id_user order by id_bill desc limit 1 ";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();
        // die($query);
        $id_bill = $stmt->fetchColumn();

        $query = "SELECT id_bill, id_user, id_product, number_phone, address, email, full_name, type_payment, create_at
        FROM bill WHERE id_bill =$id_bill";

        // die($query);
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
                $row['create_at']
            );
            $lists[] = $bill;
        }

        return $lists;
    }

    // public function checkOut($id_bill,$id_user){



    //     $query= "INSERT INTO bill_details(`$id_bill`, `quantity`, `name_product`, `price_product`, `id_cart`)
    //      VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
    // }

    public function addBill_details($id_bill, $id_product, $name_product, $quantity, $price)
    {
        $query = "INSERT INTO `bill_details`(`id_bill`, `id_product`, `name_product`, `quantity`, `price_product`)
             VALUES ('$id_bill','$id_product','$name_product',' $quantity','$price')";
        $stmt = $this->PDO->prepare($query);
        // die($query);
        $stmt->execute();
    }

    public function showBill_details($id_bill)
    {
        $query =  "SELECT
        bd.id_bill,
        bd.id_product,
        bd.name_product,
        bd.quantity AS bill_detail_quantity,
        bd.price_product AS bill_detail_price,
        p.image_product AS product_image, -- Thêm trường ảnh từ bảng product (đặt tên cụ thể tùy thuộc vào cấu trúc bảng product)
        MAX(b.number_phone) AS number_phone,
        MAX(b.address) AS address,
        MAX(b.email) AS email,
        MAX(b.full_name) AS full_name,
        b.type_payment,
        b.create_at
    FROM
        bill_details bd
    JOIN
        bill b ON bd.id_bill = b.id_bill
    JOIN
        products p ON bd.id_product = p.id_product -- Thêm JOIN với bảng product
    WHERE
        bd.id_bill = $id_bill
    GROUP BY
        bd.id_bill,
        bd.id_product,
        bd.name_product,
        bd.quantity,
        bd.price_product,
        p.id_product, -- Thêm trường ảnh từ bảng product
        b.type_payment,
        b.create_at;
    ";
        $stmt = $this->PDO->prepare($query);
        // die($query);
        $stmt->execute();
        $lists = []; // Khởi tạo danh sách rỗng
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $data = new Bill_Details(
                $row['id_bill'],
                $row['id_product'],
                $row['name_product'],
                $row['bill_detail_quantity'],
                $row['bill_detail_price'],
                $row['number_phone'],
                $row['address'],
                $row['email'],
                $row['full_name'],
                $row['type_payment'],
                $row['create_at'],
                $row['product_image'] // Thay đổi tên trường này thành 'product_image'
            );




            $lists[] = $data;
        }
        return $lists;
    }

    public function history($id_user)
    {
        $query =  "SELECT `id_bill` FROM `bill` WHERE `id_user` = $id_user ORDER BY `bill`.`id_bill` ASC";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();
        $id_bill = $stmt->fetchAll(PDO::FETCH_COLUMN);

        $allDetails = []; // Mảng chứa tất cả thông tin chi tiết hóa đơn

        foreach ($id_bill as $bill_id) {
            $details = $this->showBill_details($bill_id);
            $allDetails[] = $details;
        }

        return $allDetails;
    }
}
