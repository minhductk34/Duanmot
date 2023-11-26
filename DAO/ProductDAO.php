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
        $sql = "SELECT * FROM products LIMIT 8";
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
        $sql = "SELECT * FROM `products` WHERE `name_product` LIKE :keyword OR `desc_product` LIKE :keyword";
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
        WHERE c.name_category = '$categoryName'
        ORDER BY c.desc_category ASC, p.status
        LIMIT 2;";

        //Nếu k hiểu đọc cái dưới
        // $sql = "SELECT products.*, category.name_category AS name_category, category.desc_category AS desc_category
        // FROM products
        // JOIN category ON category.id_cat = products.id_cat
        // WHERE category.name_category = ''
        // ORDER BY category.desc_category
        // ASC, products.status";

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

    //  product count
    public function countProduct()
    {
        $sql = "SELECT COUNT(*) as total FROM `products`";

        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result['total'];
        } else {
            return 0; // Trả về 0 nếu không có sản phẩm
        }
    }
    // show roduct perPage
    public function showProducts($page, $perPage)
    {
        $start = ($page - 1) * $perPage;
        $sql = "SELECT products.id_pro, products.name_sp, products.price, products.img, products.mota, products.luotxem, category.name
            FROM products
            JOIN category ON category.id_d = products.iddm
            LIMIT $start, $perPage";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {



            $id = $row['id_product'];
            $name_product = $row['name_product'];
            $image_product = $row['image_product'];
            $price_product = $row['price_product'];
            $desc_product = $row['desc_product'];
            $status = $row['status'];
            $quantity = $row['quantity'];
            $id_cat = $row['id_cat'];
            $id_discount = $row['id_discount'];

            $product = new Product($id, $name_product, $image_product, $price_product, $desc_product, $status, $quantity, $id_cat, $id_discount);
            $products[] = $product;
        }

        return $products;
    }

    // thêm
    public function addPRO($name_product, $desc_product, $image_product, $price_product, $status, $quantity, $id_cat, $id_discount)
    {
        // Lưu file
        $fileName = $image_product['name'];
        $tmp = $image_product['tmp_name'];
        $mov = 'assets/imgs/item/' . $fileName;
        move_uploaded_file($tmp, $mov);

        // Thêm vào cơ sở dữ liệu
        $sql = "INSERT INTO `products`(`name_product`, `desc_product`, `image_product`, `price_product`, `status`, `quantity`, `id_cat`, `id_discount`) VALUES ('$name_product', '$desc_product', '$fileName', '$price_product', '$status', '$quantity', '$id_cat', '$id_discount')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // Delete product with id
    public function deletePRO($id)
    {
        $sql = "DELETE FROM `products` WHERE id_pro=$id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // xoá tt cả
    public function deleteallPRO($id_a)
    {
        // Chuyển mảng ID thành một chuỗi dạng (id1, id2, id3, ...)
        $id_string = implode(', ', $id_a);
        $sql = "DELETE FROM `products` WHERE id_pro IN ($id_string)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // sửa tất
    public function updateProduct($id, $name_product, $desc_product, $image_product, $price_product, $status, $quantity, $id_cat, $id_discount)
    {
        $fileName = '';
        if ($image_product['name'] !== '') {
            $fileName = $image_product['name'];
            move_uploaded_file($image_product['tmp_name'], 'assets/imgs/item/' . $fileName);
        }

        $sql = "UPDATE `products` SET `name_product` = ?, `price_product` = ?, `desc_product` = ?, `status` = ?, `quantity` = ?, `id_cat` = ?, `id_discount` = ?, `image_product` = ? WHERE `id` = ?";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute([$name_product, $price_product, $desc_product, $status, $quantity, $id_cat, $id_discount, $fileName, $id]);
    }
    // Select item with id product
    public function selectOneItem($id)
    {
        $sql = "SELECT * FROM `products` WHERE  id_product = :id";
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
                $row['id_cat'],
                $row['id_discount']
            );
        }

        return $product;
    }
    // lấy ra danh sách các sản phẩm thuộc một loại (category) cụ thể
    public function lq($categories)
    {
        $sql = "SELECT products.* FROM `products`
                JOIN category ON category.id_d = products.id_cat
                WHERE category.id_d = :categories";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':categories', $categories, PDO::PARAM_INT);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
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
    // dem sp
    public function statistics()
    {
        $sql = "SELECT category.name_category, COUNT(products.id_cat) AS so_luong
            FROM products
            JOIN category ON category.id = products.id_cat
            GROUP BY products.id_cat";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        // Lấy kết quả dưới dạng mảng kết hợp
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function SelectTop8()
    {
        $sql = "SELECT * FROM products ORDER BY price_product LIMIT 8";
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
        $sql = "SELECT * FROM products ORDER BY price_product LIMIT 4";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product($row['id_product'], $row['name_product'], $row['desc_product'], $row['image_product'], $row['price_product'], $row['status'], $row['quantity'], $row['id_cat'], $row['id_discount']);
            $products[] = $product;
        }

        return $products;
    }
    

}
