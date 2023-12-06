<?php
session_start();

require_once('../../config/pdo.php');

$data = json_decode(file_get_contents("php://input"));
$quantity = $data->quantity + 1;
$sql = "UPDATE `cart` SET `quantity`='$quantity'WHERE `id_cart`='$data->id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();



$sql = "SELECT  `quantity`  FROM cart WHERE `id_cart` =$data->id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo $stmt->fetchColumn();