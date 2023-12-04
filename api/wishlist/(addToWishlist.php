<?php
header('Content-Type: application/json');
session_start();

$response = array();

if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Kiểm tra xem sản phẩm đã có trong Wishlist chưa
    if (!in_array($productId, $_SESSION['wishlist'])) {
        $_SESSION['wishlist'][] = $productId;
        $response['success'] = true;
        $response['message'] = "Product added to Wishlist successfully.";
    } else {
        $response['success'] = false;
        $response['message'] = "Product is already in the Wishlist.";
    }
} else {
    $response['success'] = false;
    $response['message'] = "Error: Product ID not provided.";
}

echo json_encode($response);
?>
