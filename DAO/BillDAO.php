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

    public function addBill_details($id_bill, $id_product, $name_product, $quantity, $price, $id_user)
    {
       
       $query = "INSERT INTO `bill_details`(`id_bill`,`id_product` ,`name_product`, `quantity`, `price_product`, `id_user`)
             VALUES ('$id_bill','$id_product','$name_product',' $quantity','$price','$id_user')";
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
        p.image_product AS product_image, 
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
        // die($query);
        $allDetails = []; // Mảng chứa tất cả thông tin chi tiết hóa đơn

        foreach ($id_bill as $bill_id) {
            $details = $this->showBill_details($bill_id);
            $allDetails[] = $details;
        }

        return $allDetails;
    }

    public function showBillDetails($id_user)
    {
        $query = "SELECT id_bill, quantity, name_product, price_product, id_product, status, returned FROM bill_details WHERE id_user = $id_user";
        $stmt = $this->PDO->prepare($query);
        // die($query);

        $stmt->execute();

        // Fetch all rows grouped by id_bill
        $result = $stmt->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);

        // Optionally, you can iterate through the grouped result
        // and perform any additional processing
        // print_r($result);
        return $result;
    }



    public function getIdBill($id_bill_detail)
    {
        $query = "SELECT id_bill FROM bill_details WHERE id_bill_detail = :id_bill_detail";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id_bill_detail', $id_bill_detail, PDO::PARAM_INT);
        $stmt->execute();

        // Sử dụng fetchAll để lấy tất cả các giá trị cột id_bill
        $id_bills = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Tạo một mảng để lưu trữ các ID sản phẩm
        $productIds = array();

        // Lặp qua từng giá trị id_bill để thực hiện các thao tác khác
        foreach ($id_bills as $id_bill) {
            // Thực hiện truy vấn để lấy ID sản phẩm từ bảng bill_details
            $query = "SELECT id_product FROM bill_details WHERE id_bill = :id_bill";
            $stmt = $this->PDO->prepare($query);
            $stmt->bindParam(':id_bill', $id_bill, PDO::PARAM_INT);
            $stmt->execute();

            // Lấy tất cả các ID sản phẩm của ID_bill đó
            $productIds[] = $stmt->fetchAll(PDO::FETCH_COLUMN);
        }

        // $productIds là mảng chứa các ID sản phẩm cần thiết để thực hiện các thao tác nghiệp vụ khác
        // Bạn có thể thực hiện các thao tác nghiệp vụ khác, chẳng hạn như cập nhật số lượng hàng trong bảng sản phẩm.

        // Trả về một phản hồi cho biết thành công hoặc thông tin liên quan khác
        return $productIds;
    }




    // Kiểm tra xem sản phẩm có trong đơn hàng không
    public function isOrderValid($id_bill)
    {
        $query = "SELECT * FROM bill WHERE id_bill = :id_bill";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id_bill', $id_bill, PDO::PARAM_INT);
        $stmt->execute();
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        return $order ? true : false;
    }

    // Lấy thông tin chi tiết đơn hàng
    public function getOrderDetails($id_bill)
    {
        $query = "SELECT * FROM bill_details WHERE id_bill = :id_bill";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id_bill', $id_bill, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Cập nhật số lượng hàng trong kho hoặc bảng sản phẩm
    public function updateProductQuantity($id_product, $quantity, $id_bill)
    {
        // Thực hiện truy vấn để cập nhật số lượng hàng
        $query = "UPDATE products 
                  SET quantity = quantity + :quantity 
                  WHERE id_product = :id_product AND id_product IN 
                      (SELECT id_product FROM bill_details WHERE id_bill = :id_bill)";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
        $stmt->bindParam(':id_bill', $id_bill, PDO::PARAM_INT);
        $stmt->execute();

        // Thực hiện truy vấn để đánh dấu chi tiết hóa đơn là đã trả về
        $updateQuery = "UPDATE bill_details SET returned = 1 WHERE id_product = :id_product AND id_bill = :id_bill";
        $updateStmt = $this->PDO->prepare($updateQuery);
        $updateStmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
        $updateStmt->bindParam(':id_bill', $id_bill, PDO::PARAM_INT);
        $updateStmt->execute();
    }


    public function checkIdBill($id_user)
    {
        $query = "SELECT `id_bill` FROM `bill` WHERE `id_user` = :id_user ORDER BY `create_at` DESC LIMIT 1";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_STR); // Nếu id_user là chuỗi
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem có kết quả hay không trước khi sử dụng giá trị
        $lastBillId = $result ? $result['id_bill'] : null;

        return $lastBillId;
    }
}
