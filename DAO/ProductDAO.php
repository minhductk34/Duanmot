<?php
include 'modles/product.php';
include 'modles/category.php';
class ProductDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    // lấy toàn bộ
    function Select()
    {
        $sql = "SELECT * FROM `products`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id'], $row['name_product'], $row['desc_product'], $row['image_product'], $row['price_product'], $row['status'], $row['quantity'], $row['id_category'], $row['id_discount']);
            $products[] = $product;
        }

        return $products;
    }

    //tìm kiếm
    function selectItem($text)
    {
        $keyword = '%' . $text . '%';
        $sql = "SELECT * FROM `products` WHERE `name_product` LIKE :keyword";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_category'],
                $row['id_discount']
            );

            $products[] = $product;
        }

        return $products;
    }

    public function sharelist($loai)
    {
        $sql = "SELECT products.* FROM `products` 
        JOIN categories ON categories.id=products.id_category 
        WHERE categories.name = :loai";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':loai', $loai, PDO::PARAM_STR);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_category'],
                $row['id_discount'],

            );
            $products[] = $product;
        }

        return $products;
    }
    // lấy tất cả các loại
    public function showCategory()
    {
        $sql = "SELECT * FROM `category`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $categories = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $category = new Category($row['id'], $row['name_category'], $row['desc_category'], $row['status']);
            $categories[] = $category;
        }

        return $categories;
    }

    public function addCategory($name, $description, $status)
    {
        $sql = "INSERT INTO `category` (`name_category`, `desc_category`, `status`) VALUES (:name, :description, :status)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM `category` WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    // sửa
    public function updateCategory($id, $name)
    {
        $sql = "UPDATE `category` SET `name_category` = :name WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    //  product
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
    // show roduct
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
            $id = $row['id_pro'];
            $name_product = $row['name_sp'];
            $image_product = $row['img'];
            $price_product = $row['price'];
            $desc_product = $row['mota'];
            $status = $row['status'];
            $quantity = $row['quantity'];
            $id_category = $row['iddm'];
            $id_discount = $row['id_discount'];

            $product = new Product($id, $name_product, $image_product, $price_product, $desc_product, $status, $quantity, $id_category, $id_discount);
            $products[] = $product;
        }

        return $products;
    }

    // thêm
    public function addPRO($name, $price, $img, $mota, $iddm)
    {
        // lưu file
        $fileName = $img['name'];
        $tmp = $img['tmp_name'];
        $mov = 'assets/imgs/item/' . $fileName;
        move_uploaded_file($tmp, $mov);
        //add server
        $sql = "INSERT INTO `products`(`name_sp`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES ('$name','$price','$fileName','$mota','0','$iddm')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // xoá
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
    public function updateProduct($id, $name, $price, $img, $desc, $status, $quantity, $categoryID, $discountID)
    {
        $fileName = '';
        if ($img['name'] !== '') {
            $fileName = $img['name'];
            move_uploaded_file($img['tmp_name'], 'assets/imgs/item/' . $fileName);
        }

        $sql = "UPDATE `products` SET `name_product` = :name, `price_product` = :price, `desc_product` = :desc, `status` = :status, `quantity` = :quantity, `id_category` = :categoryID, `id_discount` = :discountID, `image_product` = :fileName WHERE `id` = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':desc', $desc);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':categoryID', $categoryID);
        $stmt->bindParam(':discountID', $discountID);
        $stmt->bindParam(':fileName', $fileName);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    // tìm kiếm 1 sp
    public function selectOneItem($id)
    {
        $sql = "SELECT * FROM `products` WHERE id = :id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $product = null;

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Product(
                $row['id'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_category'],
                $row['id_discount']
            );
        }

        return $product;
    }
    // lấy ra danh sách các sản phẩm thuộc một loại (category) cụ thể
    public function lq($loai)
    {
        $sql = "SELECT products.* FROM `products`
                JOIN category ON category.id_d = products.id_category
                WHERE category.id_d = :loai";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':loai', $loai, PDO::PARAM_INT);
        $stmt->execute();

        $products = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product(
                $row['id'],
                $row['name_product'],
                $row['desc_product'],
                $row['image_product'],
                $row['price_product'],
                $row['status'],
                $row['quantity'],
                $row['id_category'],
                $row['id_discount']
            );
            $products[] = $product;
        }

        return $products;
    }
    // dem sp
    public function statistics()
{
    $sql = "SELECT category.name_category, COUNT(products.id_category) AS so_luong
            FROM products
            JOIN category ON category.id = products.id_category
            GROUP BY products.id_category";
    $stmt = $this->PDO->prepare($sql);
    $stmt->execute();
    // Lấy kết quả dưới dạng mảng kết hợp
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
}
