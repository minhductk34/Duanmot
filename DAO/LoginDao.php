<?php
$dbHost = 'localhost';
$dbName = 'duanmot';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


// class LoginDao {
//     private $db;

//     public function __construct() {
//         $this->db = DBConnection::connect(); // Khởi tạo đối tượng kết nối đến cơ sở dữ liệu
//     }

//     public function checkLogin($email, $password) {
//         // Xác thực thông tin đăng nhập từ cơ sở dữ liệu
//         $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
//         $stmt = $this->db->prepare($sql);
//         $stmt->bind_param("ss", $email, $password);
//         $stmt->execute();
//         $result = $stmt->get_result();
        
//         if ($result->num_rows > 0) {
//             return true; // Đăng nhập thành công
//         } else {
//             return false; // Đăng nhập thất bại
//         }
//     }

//     // Các phương thức khác để thao tác với cơ sở dữ liệu, kiểm tra email tồn tại, v.v.
// }

// // Sử dụng LoginDao
// $loginDao = new LoginDao();
 ?>
