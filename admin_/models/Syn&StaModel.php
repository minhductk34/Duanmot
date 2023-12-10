<?php
function loadall()
{
    $sql = "select category.id_category as id_ctg, category.name_category as name_ctg, count(products.id_product) as countpro, min(products.price_product) as minprice, max(products.price_product) as maxprice, avg(products.price_product) as avgprice";
    $sql .= " from products left join category on category.id_category = products.id_cat";
    $sql .= " group by category.id_category order by category.id_category desc";
    $list =  pdo_query($sql);
    return $list;
}
// Stat Product
function TotalPro()
{
    $sql = "select count(id_product) as TotalPro from products";
    $totalPro =  pdo_query_value($sql);
    return $totalPro;
}
function inStock()
{
    $sql = "select count(id_product) as TotalPro from products where status = 0";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function outOfStock()
{
    $sql = "select count(id_product) as TotalPro from products where status = 1";
    $outOfStock =  pdo_query_value($sql);
    return $outOfStock;
}
function mostComOfPro()
{
    $sql = "SELECT id_product, COUNT(*) AS comment_count FROM comment GROUP BY id_product ORDER BY comment_count DESC LIMIT 1;";
    $mostComOfPro =  pdo_query($sql);
    return $mostComOfPro;
}
function mostComOfOrder()
{
    $sql = "SELECT id_product, COUNT(*) AS bill_count FROM bill_details GROUP BY id_product ORDER BY bill_count DESC LIMIT 1;";
    $mostComOfOrder =  pdo_query($sql);
    return $mostComOfOrder;
}

// Stat Account
function TotalAcc()
{
    $sql = "select count(id_user) from user";
    $totalPro =  pdo_query_value($sql);
    return $totalPro;
}
function quantity_admin()
{
    $sql = "select count(id_user) from user where permissions = 1";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function quantity_staff()
{
    $sql = "select count(id_user) from user where permissions = 2";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function quantity_client()
{
    $sql = "select count(id_user) from user where permissions = 0";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function is_Active()
{
    $sql = "select count(id_user) from user where status = 0";
    $is_Active =  pdo_query_value($sql);
    return $is_Active;
}
function is_Disable()
{
    $sql = "select count(id_user) from user where status = 1";
    $is_Active =  pdo_query_value($sql);
    return $is_Active;
}
// Stat Comment
function TotalCom()
{
    $sql = "select count(id_comment) from comment";
    $totalPro =  pdo_query_value($sql);
    return $totalPro;
}
function comment_show()
{
    $sql = "select count(id_comment) from comment where status = 0";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function comment_hidden()
{
    $sql = "select count(id_comment) from comment where status = 1";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
// Stat Order
function TotalOrder()
{
    $sql = "select count(id_bill) from bill_details";
    $totalPro =  pdo_query_value($sql);
    return $totalPro;
}

function toltal()
{
    $sql = "select sum(price_product*quantity) AS Total from bill_details where status = 2";
    $totalPro =  pdo_query_value($sql);
    return $totalPro;
}
function orderProcessing()
{
    $sql = "select count(id_bill) from bill_details where status = 0";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function orderShipped()
{
    $sql = "select count(id_bill) from bill_details where status = 1";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function orderCompleted()
{
    $sql = "select count(id_bill) from bill_details where status = 2";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
function orderCancelled()
{
    $sql = "select count(id_bill) from bill_details where status = 3";
    $inStock =  pdo_query_value($sql);
    return $inStock;
}
