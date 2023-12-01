<?php
function loadall_statistical()
{
    $sql = "SELECT category.name AS name_category,category.id AS id_category, COUNT(products.id) AS countsp, MIN(products.price) AS minprice, MAX(products.price) AS maxprice, AVG(products.price) AS avgprice";
    $sql .= " FROM products LEFT JOIN category ON category.id = products.id_category";
    $sql .= " GROUP BY category.id ORDER BY category.id DESC";
    $liststatistical = pdo_query($sql);
    return $liststatistical;
}
