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
    function loadone_name_product($id_product){
        $sql = "select name_product from products where id_product=".$id_product;
        $name =  pdo_query_value($sql);
        return $name; 
    }
    function loadall_size(){
        $sql = "select * from size order by id_size desc";
        $sizes = pdo_query($sql);
        return $sizes;
    }
    function loadall_box(){
        $sql = "select * from type_box order by id_box desc";
        $boxs = pdo_query($sql);
        return $boxs;
    }
    function insert_variant($id_product, $id_size, $id_box, $name_variant , $quantity){
        $sql = "insert into variant_product (id_product, id_size, id_box, name_variant, quantity) values('$id_product','$id_size','$id_box', '$name_variant', '$quantity')";
        pdo_execute($sql);
    }
    function load_box($id_box){
        $sql = "select type_box from type_box where id_box=".$id_box;
        $box =  pdo_query_value($sql);
        return $box;
    }
    function load_size($id_size){
        $sql = "select type from size where id_size=".$id_size;
        $size =  pdo_query_value($sql);
        return $size;
    }
    function loadall_variant(){
        $sql = "SELECT size.type AS Size, type_box.type_box AS Box, name_variant AS variant_product, variant_product.quantity AS Quantity, variant_product.status AS Sts,  id_variant, products.name_product AS NameProduct FROM variant_product";
        $sql.=" INNER JOIN size ON size.id_size = variant_product.id_size";
        $sql.=" INNER JOIN type_box ON type_box.id_box = variant_product.id_box";
        $sql.=" INNER JOIN products ON products.id_product = variant_product.id_product";
        $variants = pdo_query($sql);
        return $variants;
    }
    function load_status_product($id_product){
        $sql = "select status from products where id_product=".$id_product;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status_product($status, $id_product){
        if ( $status == 0){
            $sql = "update products set status = '1'";
        } else {
            $sql = "update products set status = '0'";
        }
        $sql.= " where id_product=".$id_product;
        // die($sql);
        pdo_execute($sql);
    }
    function load_status_variant($id_variant){
        $sql = "select status from variant_product where id_variant=".$id_variant;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status_variant($status, $id_variant){
        if ( $status == 0){
            $sql = "update variant_product set status = '1'";
        } else {
            $sql = "update variant_product set status = '0'";
        }
        $sql.= " where id_variant=".$id_variant;
        // die($sql);
        pdo_execute($sql);
    }

    function load_status_img($id_product){
        $sql = "select image_product from products where id_product=".$id_product;
        $image_product =  pdo_query_value($sql);
        return $image_product;
    }