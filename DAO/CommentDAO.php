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
        $sql = "SELECT 
            p.id_product,
            p.name_product,
            c.content,
            c.create_at,
            c.rate,
            u.username
        FROM 
            comment c
        INNER JOIN 
            user u ON c.id_user = u.id_user
        INNER JOIN 
            products p ON c.id_product = p.id_product;";

        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $comments = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comment = new CommentShow($row['username'], $row['content'], $row['create_at']);
            $comments[] = $comment;
        }

        return $comments;
    }


    public function add($id_user, $id_product, $content, $create_at, $rate)
    {
        $sql = "INSERT INTO comment( id_user, id_product, content, create_at, rate) 
        VALUES ('$id_user','$id_product','$content','$create_at','$rate')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }



    // public function count()
    // {
    //     $sql = "SELECT category.name, COUNT(iddm) AS so_luong
    //     FROM comment
    //     JOIN product ON product.id_pro = comment.idpro
    //     JOIN category ON category.id_d = product.iddm
    //     GROUP BY category.id_d, category.name;";
    //     $stmt = $this->PDO->prepare($sql);
    //     $stmt->execute();
    //     // Lấy kết quả dưới dạng mảng kết hợp
    //     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $result;
    // }
    // }
}
