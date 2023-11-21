<!-- <?php
function loadall_thongke()
{
    $sql = "SELECT category.name_category AS name_category,category.id_category AS iddm, COUNT(product.id_product) AS countsp, MIN(product.price_product) AS minprice_product, MAX(product.price_product) AS maxprice_product, AVG(product.price_product) AS avgprice_product";
    $sql .= " FROM product LEFT JOIN category ON category.id = product.iddm";
    $sql .= " GROUP BY category.id ORDER BY category.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
} -->
