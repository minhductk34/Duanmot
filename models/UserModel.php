<?php
require_once('DAO/DBConnection.php'); // Import file chứa kết nối đến cơ sở dữ liệu

class UserModel{
    private $db;

    public function __construct() {
        $this->db = DBConnection::connect(); // Khởi tạo đối tượng kết nối đến cơ sở dữ liệu
    }

    public function createUser($username, $password, $email, $number_phone, $address) {
        // Xử lý tạo người dùng mới trong cơ sở dữ liệu
        $sql = "INSERT INTO user (username, password, email, number_phone, address) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssss", $username, $password, $email, $number_phone, $address);
        
        if ($stmt->execute()) {
            return true; // Tạo người dùng thành công
        } else {
            return false; // Lỗi khi tạo người dùng
        }
    }

    public function getUserByEmail($email) {
        // Lấy thông tin người dùng từ cơ sở dữ liệu bằng email
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        return $user; 
    }

}

$userModel = new UserModel();
?>
