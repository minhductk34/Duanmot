<!-- <form action="index.php?controller=product_search" method="post" class="header-search">

    <input type="text" placeholder="Search your product" class="form-control">
    <button type="submit" class="vs-btn">Search</button>
</form>

<div class="widget widget_search">
    <h3 class="widget_title">Product Name</h3>
    <form class="search-form" action="index.php?controller=product_search" method="post">
        <input type="text" placeholder="Search" name="search">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>
</div> -->
<!--  -->

<?php
// Gọi hàm selectOneItem và truyền vào tham số id
require_once('DAO/ProductDAO.php');
$items = new ProductDAO();
$id =$_GET['idpro'];
$item = $items->selectOneItem($id); 
// Kiểm tra nếu $item không null
if ($item !== null) {
  // Xuất dữ liệu ra màn hình
  echo  $item->getId() . "<br>";
  echo "Tên sản phẩm: " . $item->getName() . "<br>";
  echo "Mô tả: " . $item->getDescription() . "<br>";
  echo "Hình ảnh: " . $item->getImage() . "<br>";
  echo "Giá: " . $item->getPrice() . "<br>";
  // echo "Trạng thái: " . $item->getStatus() . "<br>";
  // echo "Số lượng: " . $item->getQuantity() . "<br>";
  // echo "ID danh mục: " . $item->getCategoryId() . "<br>";
  // echo "ID giảm giá: " . $item->getDiscountId() . "<br>";
} else {
  echo "Không tìm thấy sản phẩm.";
}
?>