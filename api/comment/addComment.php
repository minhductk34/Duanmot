<?php
session_start();

require_once('../../config/pdo.php');
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $user_id = $user['id_user'];
    $data = json_decode(file_get_contents("php://input"));
    $create_at =date('Y-m-d');
    // $rate = '';

    $sql = "INSERT INTO comment( id_user, id_product, content, create_at, rate) 
VALUES ('$user_id','$data->id','$data->text','$create_at','$data->rate')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} else {
    header("Location:index.php");
}
