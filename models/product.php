<?php 
function insert_product($tensp,$giasp,$mota,$hinh,$iddm){
    $sql="insert into product(ten,price,img,mota,iddm) value('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}

function delete_product($id){
    $sql="delete from product where id=".$id;
    pdo_execute($sql);
}
function loadall_product_home($kwy="",$iddm=0){
    $sql="select * from product where 1 order by id desc limit 0,9";
    
    $listproduct=pdo_query($sql);
    return $listproduct;


}
// function loadall_product_top10($kwy="",$iddm=0){
//     $sql="select * from product where 1 order by luotxem desc limit 0,10";
    
//     $listproduct=pdo_query($sql);
//     return $listproduct;


// }
function load_name_category($iddm){
    if($iddm>0){
    $sql="select * from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
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
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc ";
    $listproduct=pdo_query($sql);
    return $listproduct;


}
function loadone_product($id){
    $sql="select * from product where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
    // return $sp;


}
function load_product_cungloai($id,$iddm){
    $sql="select * from product where iddm=".$iddm." AND id_product <>".$id_category;
    $listproduct=pdo_query($sql);
    return $listproduct;


}
function update_product($id_product, $id_category, $name_product, $price_product, $desc_product, $image_product) {
    if ($hinh != "") {
        $sql = "update product set iddm='" . $iddm . "', ten='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "', img='" . $hinh . "' where id=" . $id;
    } else {
        $sql = "update product set iddm='" . $iddm . "', ten='" . $tensp . "', price='" . $giasp . "', mota='" . $mota . "' where id=" . $id;
    }
    pdo_execute($sql);
}

?>