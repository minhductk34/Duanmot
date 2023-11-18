<?php
    function loadall(){
        $sql = "select category.id_category as id_ctg, category.name_category as name_ctg, count(product.id_product) as countpro, min(product.price_product) as minprice, max(product.price_product) as maxprice, avg(product.price_product) as avgprice";
        $sql.=" from product left join category on category.id_category = product.id_category";
        $sql.=" group by category.id_category order by category.id_category desc";
        $list=  pdo_query($sql);
        return $list; 
    }