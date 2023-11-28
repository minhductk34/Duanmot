<?php
session_start();

require_once('../../config/pdo.php');
$user = $_SESSION['username'];
$user_id = $user['id_user'];
$data = json_decode(file_get_contents("php://input"));
$create_at = "2023/11/30";
$rate ='';

$sql = "SELECT `id_comment`,  `content`, `create_at`, `rate`, `status` FROM `comment` WHERE id_user = $user_id and  id_product = $data->id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$output = "";
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $output .= "
        <div class='vs-post-comment'>
                                <div class='author-img'>
                                    <img src='./src/assets/img/blog/comment-author-1.jpg' alt='Comment Author'>
                                </div>
                                <div class='comment-content'>
                                    <div class='star-rating' permissions='img' aria-label='Rated 5.00 out of 5'>
                                        <span style='width:100%'>Rated <strong class='rating'>5.00</strong> out of 5
                                            based on <span class='rating'>1</span> customer rating</span>
                                    </div>




                                    <span class='commented-on'>22 April, 2022</span>
                                    <!-- <textarea name='comment' id='' cols='60' rows='5'></textarea>
                                    <input type='submit'> -->

                                     <p class='text'>".$row['content']."
                                    </p>
                                </div>
                            </div>
        ";
    }
} else {
    $output .= "";
}


echo $output;
?>