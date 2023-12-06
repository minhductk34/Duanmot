<?php 

class OrderManagement {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Hàm xử lý việc trả hàng cho một đơn hàng với nhiều sản phẩm
    public function processReturn($order_id, $returnedItems) {
        // Kiểm tra xem đơn hàng có tồn tại không
        if ($this->isOrderValid($order_id)) {
            foreach ($returnedItems as $item) {
                // Kiểm tra xem sản phẩm có trong đơn hàng không
                if ($this->isProductInOrder($order_id, $item['product_id'])) {
                    // Cập nhật số lượng hàng trong kho hoặc bảng sản phẩm
                    $this->updateProductQuantity($item['product_id'], $item['quantity']);

                    // Đánh dấu sản phẩm trả về trong đơn hàng
                    $this->markProductReturned($order_id, $item['product_id'], $item['quantity']);
                } else {
                    // Xử lý nếu sản phẩm không tồn tại trong đơn hàng
                    // Có thể log hoặc thông báo lỗi
                }
            }

            // Thực hiện các thao tác khác, chẳng hạn như cập nhật trạng thái đơn hàng

            return true; // Trả về true nếu quy trình trả hàng thành công
        }

        return false; // Trả về false nếu có lỗi
    }

    // Kiểm tra xem đơn hàng có tồn tại không
    private function isOrderValid($order_id) {
        $query = "SELECT * FROM orders WHERE order_id = :order_id AND status = 'completed'";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
        $stmt->execute();
        $order = $stmt->fetch(PDO::FETCH_ASSOC);

        return $order ? true : false;
    }

    // Kiểm tra xem sản phẩm có trong đơn hàng không
    private function isProductInOrder($order_id, $product_id) {
        $query = "SELECT * FROM order_items WHERE order_id = :order_id AND product_id = :product_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        $orderItem = $stmt->fetch(PDO::FETCH_ASSOC);

        return $orderItem ? true : false;
    }

    // Cập nhật số lượng hàng trong kho hoặc bảng sản phẩm
    private function updateProductQuantity($product_id, $quantity) {
        // Thực hiện truy vấn để cập nhật số lượng hàng
        // Điều này phụ thuộc vào cách bạn tổ chức dữ liệu của mình
        // Có thể cập nhật trực tiếp trong bảng sản phẩm hoặc bảng kho hàng
    }

    // Đánh dấu sản phẩm trả về trong đơn hàng
    private function markProductReturned($order_id, $product_id, $quantity) {
        // Thực hiện truy vấn để đánh dấu sản phẩm trả về trong đơn hàng
        $query = "UPDATE order_items SET returned_quantity = :quantity WHERE order_id = :order_id AND product_id = :product_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':order_id', $order_id, PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
    }
}


?>