<!-- <h1>History bill</h1> -->

<?php
require_once('view/home/user/page/header.php');
?>

<?php
require_once('DAO/BillDAO.php');
$billDAO = new BillDAO();
$user = $_SESSION['user'];
$id_user = $user['id_user'];
//  var_dump($id_user);
$data  =  $billDAO->showBillDetails($id_user);

?>
<style>
    /* CSS cho nút Detail */
    .detail-button {
        background-color: #4CAF50;
        /* Màu xanh lá cây */
        color: #fff;
        /* Màu chữ trắng */
        border: none;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        transition: background-color 0.3s ease;
        /* Hiệu ứng hover */
    }

    .detail-button:hover {
        background-color: #45a049;
        /* Màu xanh lá cây nhạt khi hover */
    }

    /* CSS cho nút Cancel */
    .cancel-button {
        background-color: #ff3333;
        /* Màu đỏ */
        color: #fff;
        /* Màu chữ trắng */
        border: none;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        transition: background-color 0.3s ease;
        /* Hiệu ứng hover */
    }

    .cancelled-button-disabled {
        background-color: #ff3333;
        /* Màu đỏ */
        color: #fff;
        /* Màu chữ trắng */
        border: none;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        transition: background-color 0.3s ease;
        /* Hiệu ứng hover */
    }

    .cancel-button:hover {
        background-color: #cc0000;

        /* Màu đỏ nhạt khi hover */
    }

    .cancel-button-disabled {
        display: none;
        /* Ẩn nút khi có class cancel-button-disabled */
    }
</style>
<div class="vs-checkout-wrapper space-top space-md-bottom">
    <div class="container">
        <form action="#" method="post" id="myForm">
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <form class="woocommerce-cart-form" id="checkout-form">

                <table class="cart_table mb-20">
                    <thead>
                        <tr>
                            <th class="cart-col-actions">Actions</th>
                            <th class="cart-col-image">ID</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-total">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $idDisplayed = [];
                        ?>
                        <?php foreach ($data as $id_bill => $products) : ?>
                            <?php foreach ($products as $index => $product) : ?>
                                <tr class="cart_item">
                                    <?php if (!isset($idDisplayed[$id_bill])) : ?>

                                        <td data-title="Actions" rowspan="<?php echo count($products); ?>">
                                            <a href="index.php?controller=history_details&id_bill=<?php echo $id_bill; ?>" class="detail-button">Detail</a>

                                            <?php
                                            // Check the "returned" status and status for cancellation
                                            $isCancelled = ($product['status'] == 0 && $product['returned'] != 0);

                                            // Additional condition: Only show Cancelled message when status is 0 and returned is not 0
                                            if ($isCancelled) {
                                                $cancelButtonText = "Cancelled";
                                                $cancelButtonHref = "#";
                                                $cancelButtonClass = "cancelled-button-disabled";
                                            } else {
                                                $canCancel = ($product['status'] == 0 && $product['returned'] == 0);

                                                // Based on the status, update the Cancel button accordingly
                                                $cancelButtonText = "Cancel";
                                                $cancelButtonHref = $canCancel
                                                    ? "index.php?controller=processReturn&id_bill=$id_bill"
                                                    : "#";

                                                $cancelButtonClass = $canCancel
                                                    ? "cancel-button"
                                                    : "cancel-button-disabled";
                                            }
                                            ?>
                                            <a href="<?php echo $cancelButtonHref; ?>" class="<?php echo $cancelButtonClass; ?>"><?php echo $cancelButtonText; ?></a>



                                            <?php $idDisplayed[$id_bill] = true; ?>

                                        <?php endif; ?>
                                        <td data-title="Name">
                                            <a class="cart-productname" href="#">MD<?php echo $id_bill; ?></a>
                                        </td>
                                        <td data-title="Name">
                                            <a class="cart-productname" href="#"><?php echo $product['name_product']; ?></a>
                                        </td>
                                        <td data-title="Price">
                                            <span class="amount"><bdi><span>$<?php echo $product['price_product']; ?></span></bdi></span>
                                        </td>
                                        <td data-title="Quantity">
                                            <strong class="product-quantity"><?php echo $product['quantity']; ?></strong>
                                        </td>
                                        <td data-title="Total">
                                            <span class="amount"><bdi><span>$<?php echo $product['price_product'] * $product['quantity']; ?></span></bdi></span>
                                        </td>

                                        <td data-title="Status">
                                            <?php
                                            $statusLabels = [
                                                0 => 'Processing',
                                                1 => 'Shipped',
                                                2 => 'Completed',
                                                3 => 'Cancelled',
                                                4 => 'Refunded'
                                            ];

                                            $statusValue = $product['status'];

                                            if (isset($statusLabels[$statusValue])) {
                                                echo $statusLabels[$statusValue];
                                            } else {
                                                echo "Unknown Status";
                                            }
                                            ?>
                                        </td>
                                </tr>

                            <?php endforeach; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </form>
    </div>
</div>
<!-- Thêm mã JavaScript vào file view/bill/user/history.php -->
<script>
    $(document).ready(function() {
        // Bắt sự kiện submit form
        $('#returnForm').submit(function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của form

            // Sử dụng jQuery Ajax để gửi yêu cầu
            $.ajax({
                type: 'POST',
                url: 'processReturn.php',
                data: $(this).serialize(),
                success: function(response) {
                    // Xử lý kết quả trả về từ server
                    if (response.success) {
                        alert("Đã trả hàng thành công. Vui lòng đợi xác nhận từ cửa hàng.");
                        // Cập nhật nội dung trang hoặc thực hiện các hành động khác tùy ý
                    } else {
                        alert("Đã xảy ra lỗi trong quá trình xử lý trả hàng.");
                    }
                },
                error: function() {
                    // Xử lý lỗi khi kết nối tới server
                    alert("Đã xảy ra lỗi khi kết nối tới server.");
                }
            });
        });
    });
</script>

<?php
require_once('view/home/user/page/footer.php');
?>