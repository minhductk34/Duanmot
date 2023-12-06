<?php
session_start();

require_once('../../config/pdo.php');

if (isset($_SESSION['user'])) {

    $user = $_SESSION['user'];
    $user_id = $user['id_user'];
    $data = json_decode(file_get_contents("php://input"));

    $sql = "SELECT c.`id_comment`, c.`content`, c.`create_at`, c.`rate`, c.`status`, u.`username`,u.`image` FROM `comment` c INNER JOIN `user` u ON c.`id_user` = u.`id_user` 
    WHERE c.`id_user` = :user_id AND c.`id_product` = :id_product";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->bindParam(':id_product', $data->id, PDO::PARAM_INT);
    $stmt->execute();

    $output = "";
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $output .= "
                <div class='vs-post-comment'>
                    <div class='author-img'>
                        <img src='assets/imgs/user/" . $row['image'] . "' alt='Comment Author'>
                    </div>
                    <div class='comment-content'>
                     <span class='commented-on'>" . $row['create_at'] . "</span><br>
                        <span class='commented-on'>" . $row['username'] . "</span><br>
                       
                         <p class='text'>" . $row['content'] . "</p>
                    </div>
                </div>
            ";
        }
    } else {
        $output .= "";
    }

    echo $output;
} else {
    header("Location:index.php");
}
