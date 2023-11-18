<?php
class CartDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addToCart($userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId)
    {
        $query = "INSERT INTO cart (id_user, id_product, img_product, name_product, price_product, quantity, total, id_bill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId, $productId, $imgProduct, $nameProduct, $priceProduct, $quantity, $total, $billId]);
    }

    public function updateCart($cartId, $quantity, $total)
    {
        $query = "UPDATE cart SET quantity = ?, total = ? WHERE id_cart = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$quantity, $total, $cartId]);
    }

    public function deleteFromCart($cartId)
    {
        $query = "DELETE FROM cart WHERE id_cart = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$cartId]);
    }

    public function getCartHistory($userId)
    {
        $query = "SELECT * FROM cart WHERE id_user = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$userId]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
