<?php
    function loadall(){
        $sql = "select category.id_category as id_ctg, category.name_category as name_ctg, count(products.id_product) as countpro, min(products.price_product) as minprice, max(products.price_product) as maxprice, avg(products.price_product) as avgprice";
        $sql.=" from products left join category on category.id_category = products.id_cat";
        $sql.=" group by category.id_category order by category.id_category desc";
        $list=  pdo_query($sql);
        return $list; 
    }