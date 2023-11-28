<?php
   function insert_discount($name_discount, $percent_discount, $active, $date){
    $sql = "INSERT INTO discount (name_discount ,percent_discount, active, create_at ) VALUES('$name_discount','$percent_discount','$active','$date')";
    pdo_execute($sql);
}
function loadall_discount(){
    $sql = "select * from discount order by id_discount desc";
    $discounts = pdo_query($sql);
    return $discounts;
}   
function loadone_discount($id_discount){
    $sql = "select * from discount where id_discount=".$id_discount;
    $discount =  pdo_query_one($sql);
    return $discount; 
}
function update_discount($id_discount, $name_discount, $percent_discount, $active){
    $sql = "update discount set name_discount = '".$name_discount."', percent_discount = '".$percent_discount."', active = '".$active."' where id_discount = '".$id_discount."'";
    pdo_execute($sql);
}
function delete_discount($id_discount){
    $sql = "delete from discount where id_discount =".$id_discount;
    pdo_execute($sql);
}