<?php
    function insert_product($name_product, $desc_product, $image_product, $price_product, $quantity, $id_cat){
        $sql = "insert into products (name_product, desc_product, image_product, price_product, quantity, id_cat) values('$name_product','$desc_product','$image_product', '$price_product', '$quantity', '$id_cat')";
        pdo_execute($sql);
    }
    function loadall_product($kyw, $id_cat){
        $sql = "select * from products where 1";
        if($kyw != ""){
            $sql.= " and name_product like '%".$kyw."%'";
        }
        if($id_cat > 0){
            $sql.= " and id_cat = '".$id_cat."'";
        }
        $sql.= " order by id_product desc";
        $products = pdo_query($sql);
        return $products;
    }
    function loadone_product($id_product){
        $sql = "select * from products where id_product=".$id_product;
        $product =  pdo_query_one($sql);
        return $product; 
    }
    function update_product($id_product, $id_cat, $name_product, $price_product, $desc_product, $image_product, $quantity, $status){
        if ( $image_product != ""){
            $sql = "update products set id_cat = '".$id_cat."',name_product ='".$name_product."',price_product ='".$price_product."',desc_product = '".$desc_product."',image_product = '".$image_product."',quantity = '".$quantity."', status = '".$status."' where id_product=".$id_product;
        } else{
            $sql = "update products set id_cat = '".$id_cat."',name_product ='".$name_product."',price_product ='".$price_product."',desc_product = '".$desc_product."',quantity = '".$quantity."', status = '".$status."' where id_product=".$id_product;
        }
        pdo_execute($sql);
        
    }
    function delete_product($id_product){
        $sql = "delete from product where id =".$id_product;
        pdo_execute($sql);
    }
?>