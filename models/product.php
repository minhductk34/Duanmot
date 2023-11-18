<?php 
function insert_product($name_product, $price_product, $desc_product, $image_product,$id_category){
    $sql="insert into product(name_product, price_product, desc_product, image_product,id_category) value('$name_product', '$price_product', '$desc_product', '$image_product','$id_category')";
    pdo_execute($sql);
}

function delete_product($id_product){
    $sql="delete from product where id=".$id;
    pdo_execute($sql);
}
function loadall_product_home($kwy="",$iddm=0){
    $sql="select * from product where 1 order by id desc limit 0,9";
    
    $listproduct=pdo_query($sql);
    return $listproduct;


}
function load_name_category($iddm){
    if($iddm>0){
    $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($category);
    return $name_category;
    // return $sp;
    }else{
        return "";
    }

}
function loadall_product($kwy="",$iddm=0){
    $sql="select * from product where 1";
    if ($kwy !="") {
        $sql.=" and ten like '%".$kwy."%'";
    }
    if ($iddm>0) {
        $sql.=" and idcategory ='".$id_category."'";
    }
    $sql.=" order by id desc ";
    $listproduct=pdo_query($sql);
    return $listproduct;


}
function loadone_product($id_product){
    $sql="select * from product where id=".$id_product;
    $category=pdo_query_one($sql);
    return $category;
    // return $sp;


}

function update_product($id_product, $id_category, $name_product, $price_product, $desc_product, $image_product) {
    if ($hinh != "") {
        $sql = "update product set iddm='" . $id_category . "', ten='" . $name_product . "', price='" . $price_product . "', mota='" . $desc_product . "', img='" . $image_product . "' where id=" . $id;
    } else {
        $sql = "update product set iddm='" . $id_category . "', ten='" . $name_product . "', price='" . $price_product . "', mota='" . $desc_product . "' where id=" . $id_product;
    }
    pdo_execute($sql);
}

?>