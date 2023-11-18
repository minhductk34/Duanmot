<?php
    function insert_product($name_product, $desc_product, $image_product, $price_product, $quantity, $id_category){
        $sql = "insert into product (name_product, desc_product, image_product, price_product, quantity, id_category) values('$name_product','$desc_product','$image_product', '$price_product', '$quantity', '$id_category')";
        pdo_execute($sql);
    }
    function loadall_product($kyw, $id_category){
        $sql = "select * from product where 1";
        if($kyw != ""){
            $sql.= " and name_product like '%".$kyw."%'";
        }
        if($id_category > 0){
            $sql.= " and id_category = '".$id_category."'";
        }
        $sql.= " order by id_product desc";
        $products = pdo_query($sql);
        return $products;
    }
    function loadone_product($id_product){
        $sql = "select * from product where id_product=".$id_product;
        $product =  pdo_query_one($sql);
        return $product; 
    }
    function update_product($id_product, $id_category, $name_product, $price_product, $desc_product, $image_product, $quantity, $status){
        if ( $image_product != ""){
            $sql = "update product set id_category = '".$id_category."',name_product ='".$name_product."',price_prodcut ='".$price_product."',desc_product = '".$desc_product."',image_product = '".$image_product."',quantity = '".$quantity."', status = '".$status."' where id_product=".$id_product;
        } else{
            $sql = "update product set id_category = '".$id_category."',name_product ='".$name_product."',price_product ='".$price_product."',desc_product = '".$desc_product."',quantity = '".$quantity."', status = '".$status."' where id_product=".$id_product;
        }
        pdo_execute($sql);
    }
    function delete_product($id_product){
        $sql = "delete from product where id_product =".$id_product;
        pdo_execute($sql);
    }
?>