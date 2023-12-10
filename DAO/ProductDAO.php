<?php
require_once 'modles/product.php';
require_once 'modles/Cartegory.php';
// require 'modles/Category.php';
class ProductDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/pdo.php');
        $this->PDO = $pdo;
    }

    // Các phương thức và mã khác trong MyClass

    // lấy toàn bộ
    function Select()
    {
        $sql = "SELECT * FROM products WHERE status = 0 AND quantity > 0 LIMIT 8";

        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        // //echo $sql;

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id_product'], $row['name_product'], $row['desc_product'], $row['image_product'], $row['price_product'], $row['status'], $row['quantity'], $row['id_cat'], $row['id_discount']);
            $products[] = $product;
        }
        // print_r($products);

        return $products;
    }

    //Search
    public function search($text)
    {
        $keyword = '%' . $text . '%';
        $sql = "SELECT * FROM `products` WHERE `name_product`  LIKE :keyword OR `desc_product` LIKE :keyword OR `price_product` LIKE :keyword AND status = 0 AND quantity > 0";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_cat'],
                $row['id_discount']
            );

            $products[] = $product;
        }

        return $products;
    }
    //select products from category
    public function getProductsByCategory($categoryName)
    {
        $sql = "SELECT p.*, c.name_category, c.desc_category
        FROM products p
        JOIN category c ON c.id_category = p.id_cat
        WHERE c.name_category = '$categoryName' AND p.status = 0 AND p.quantity > 0
        ORDER BY c.desc_category ASC, p.status
        LIMIT 2;
        ";
        // die( $sql );

        //Nếu k hiểu đọc cái dưới
        // $sql = "SELECT products.*, category.name_category AS name_category, category.desc_category AS desc_category
        // FROM products
        // JOIN category ON category.id_cat = products.id_cat
        // WHERE category.name_category = ''
        // ORDER BY category.desc_category
        // ASC, products.status";
        // die($sql);
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();
        $category = null;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($category === null) {
                $category = new Category(
                    $row['id_cat'],
                    $row['name_category'],
                    $row['desc_category'],
                    $row['status']
                );
            }

            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_cat'],
                $row['id_discount']
            );
            $products[] = $product;
        }

        return array(
            'products' => $products,
            'category' => $category
        );
    }

    public function getProductsByIdCategory($id)
    {
        $sql = "SELECT p.*
        FROM products p
        JOIN category c ON c.id_category = p.id_cat
        WHERE c.id_category = $id AND p.status = 0 AND p.quantity > 0
        ORDER BY c.desc_category ASC, p.status
        ;
        ";
        // die( $sql );

        //Nếu k hiểu đọc cái dưới
        // $sql = "SELECT products.*, category.name_category AS name_category, category.desc_category AS desc_category
        // FROM products
        // JOIN category ON category.id_cat = products.id_cat
        // WHERE category.name_category = ''
        // ORDER BY category.desc_category
        // ASC, products.status";
        // die($sql);
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();
        $category = null;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_cat'],
                $row['id_discount']
            );
            $products[] = $product;
        }

        return array(
            'products' => $products

        );
    }

    public function selectQuantity($id_product)
    {
        $sql = "SELECT quantity FROM `products` WHERE  id_product = :id_product  AND status = 0 AND quantity > 0 ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':id_product', $id_product);

        // Thực thi câu truy vấn
        $stmt->execute();
        return $stmt->fetchColumn();
    }







    // Select item with id product
    public function selectOneItem($id)
    {
        $sql = "SELECT products.*, category.name_category
            FROM products
            INNER JOIN category ON products.id_cat = category.id_category
            WHERE products.id_product = :id
                AND products.status = 0
                AND products.quantity > 0";

        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $product = null;
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['name_category'],
                $row['id_discount'] // thêm thông tin về tên category
            );
        }

        return $product;
    }
    function bestseller()
    {
        $sql = "SELECT * FROM products WHERE quantity > 0 ORDER BY quantity ASC LIMIT 2";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_cat'],
                $row['id_discount']
            );
            $products[] = $product;
        }

        return $products;
    }
    function newProduct()
    {
        $sql = "SELECT * FROM products WHERE quantity > 0 ORDER BY id_product ASC LIMIT 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id_product'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_cat'],
                $row['id_discount']
            );
            $products[] = $product;
        }

        return $products;
    }




    function SelectTop8()
    {
        $sql = "SELECT * FROM products WHERE status = 0 AND quantity > 0 ORDER BY price_product LIMIT 8";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product($row['id_product'], $row['name_product'], $row['desc_product'], $row['image_product'], $row['price_product'], $row['status'], $row['quantity'], $row['id_cat'], $row['id_discount']);
            $products[] = $product;
        }

        return $products;
    }
    function SelectFav()
    {
        $sql = "SELECT * FROM products WHERE status = 0 AND quantity > 0 ORDER BY price_product LIMIT 4";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product($row['id_product'], $row['name_product'], $row['desc_product'], $row['image_product'], $row['price_product'], $row['status'], $row['quantity'], $row['id_cat'], $row['id_discount']);
            $products[] = $product;
        }

        return $products;
    }

    public function Check_quantity_pro($productId, $quantity)
    {
        // Lấy giá trị hiện tại của quantity từ bảng products
        $query = "SELECT quantity FROM products WHERE id_product = $productId";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute();
        $current_quantity_pro = $stmt->fetchColumn();

        // Tính toán giá trị mới cho quantity
        $new_quantity_pro = $current_quantity_pro - $quantity;
        if ($new_quantity_pro < 0) {
            $new_quantity_pro = 0; // Đảm bảo số lượng không âm
        }

        // Cập nhật số lượng trong bảng products
        $updateQuery = "UPDATE products SET quantity = $new_quantity_pro WHERE id_product = $productId";
        $updateStmt = $this->PDO->prepare($updateQuery);
        $updateStmt->execute();
    }
    public function getAvailableQuantity($productId)
    {
        // Lấy giá trị hiện tại của quantity từ bảng products
        $query = "SELECT quantity FROM products WHERE id_product = :productId";
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
        $stmt->execute();

        // Fetch and return the quantity value
        return $stmt->fetchColumn();
    }
}
