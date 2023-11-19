<?php
require_once 'modles/comment.php';
class CommentDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    function get_time_present()
    {
        // Đặt múi giờ thành múi giờ của Việt Nam
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Lấy thời gian hiện tại
        $currentTime = time();
        // Định dạng ngày tháng năm
        $currentDate = date('Y/m/d', $currentTime);
        return $currentDate;
    }

    //    $timestamp = get_time_present(); // lấy dãy số thời gian hiện tại về
    //    $currentDateTime = date("Y-m-d H:i:s", $timestamp);// chuyển đổi dãy số về dạng năm-tháng-ngày giờ-phút-giây
    //    //echo $currentDateTime; // có thể test ngay tại đây
    public function show($id_pro)
    {
        $sql = "SELECT user,noidung,ngaycomment FROM `comment` JOIN taikhoan ON comment.iduser=taikhoan.id_user JOIN product ON product.id_pro=comment.idpro WHERE idpro = '$id_pro'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $comments = []; // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comment = new commentshow($row['user'], $row['noidung'], $row['ngaycomment']);
            $comments[] =  $comment;    
        }

        return $comments;
    }
    public function add($id_pro, $text, $id_user, $day)
    {
        $sql = "INSERT INTO `comment`(`noidung`, `iduser`, `idpro`, `ngaycomment`) VALUES ('$text','$id_user','$id_pro','$day')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function count()
    {
        $sql = "SELECT category.name, COUNT(iddm) AS so_luong
        FROM comment
        JOIN product ON product.id_pro = comment.idpro
        JOIN category ON category.id_d = product.iddm
        GROUP BY category.id_d, category.name;";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        // Lấy kết quả dưới dạng mảng kết hợp
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
