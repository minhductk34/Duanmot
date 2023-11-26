<?php
require_once 'modles/Cart.php';
class CartDAO
{
    private $PDO;

    public function __construct()
    {
        require('config/pdo.php');
        $this->PDO = $pdo;
    }

    // public function addToCart($userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId)
    // {
    //     $query = "INSERT INTO cart (id_user, id_product, img_product, name_product, price_product, quantity, total, id_bill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    //     $stmt = $this->PDO->prepare($query);
    //     $stmt->execute([1, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId]);
    //     die($query);
    //     // print_r($query);
    // }
    public function addToCart($userId, $productId, $quantity)
    {
        // Lấy thông tin sản phẩm từ bảng "product" dựa trên $productId

        $productDAO = new ProductDAO();
        $product = $productDAO->selectOneItem($productId);
        $query = " SELECT quantity FROM cart WHERE id_user = $userId AND id_product= $productId";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        $quantity = $stmt->fetchColumn();
        if ($quantity > 0) {
            $query = "UPDATE cart SET quantity = $quantity+1 WHERE id_user =1 AND id_product= $productId";
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();
        } else {

            $query = "INSERT INTO cart (id_user, id_product, quantity) VALUES ($userId, $productId, 1)";
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();
        }
    }

    public function updateCart($productId, $quantity, $total)
    {
        $query = "UPDATE cart SET quantity = '$quantity', total = $total WHERE id_cart = $productId";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$quantity, $total, $productId]);
    }

    public function deleteFromCart($id)
    {
        $query = "DELETE FROM cart WHERE id_product = $id";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();
    }

    public function getCartHistory($userId)
    {
        $query = "SELECT * FROM cart WHERE id_user = ?";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$userId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function showCart($id_user)
    {

        $query = "SELECT cart.id_cart, cart.id_user, cart.id_product, products.name_product,
        products.image_product, products.price_product, cart.quantity
        FROM cart JOIN products 
        ON products.id_product = cart.id_product 
        WHERE cart.id_user = $id_user";
        // die($query);
        
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();

        $lists = []; // Khởi tạo danh sách rỗng

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Cart($row['id_cart'], $row['id_user'], $row['id_product'], $row['image_product'], $row['name_product'], $row['price_product'], $row['quantity']);

            $lists[] = $product;
        }

        return $lists;
    }
}
