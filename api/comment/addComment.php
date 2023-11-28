<?php
session_start();

require_once('../../config/pdo.php');
$user = $_SESSION['username'];
$user_id = $user['id_user'];
$data = json_decode(file_get_contents("php://input"));
$create_at = "2023/11/30";
$rate ='';

$sql = "INSERT INTO comment( id_user, id_product, content, create_at, rate) 
VALUES ('$user_id','$data->id','$data->text','$create_at','$rate')";
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>