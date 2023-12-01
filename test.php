<?php
require_once('DAO/BillDAO.php');

$userData = $_SESSION["user"];
print_r($userData);
// Gán giá trị cho các biến tương ứng
$id_user =  $userData['id_user'];
print_r($id_user);
$items = new BillDAO();
$item =  $items->history($id_user);

// var_dump($item);
// print_r($item);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Details</title>
</head>
<body>

<?php
// Sử dụng vòng lặp foreach để hiển thị thông tin từ mảng đối tượng
foreach ($item as $billDetail) {
    // Trích xuất thông tin từ đối tượng


    // Hiển thị thông tin trong HTML
    echo "<div>";
    echo "<p>Product Name: $productName</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Price: $price</p>";
    echo "<img src='path_to_your_images_directory/$image' alt='Product Image' width='100px' height='100px'>";
    echo "</div>";
}
?>

</body>
</html>
