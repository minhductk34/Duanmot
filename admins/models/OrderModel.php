<?php
    function loadall_bill($kyw, $id_user=0){
        $sql = "select * from bill where 1";
        if ( $id_user > 0) $sql.=" AND id_user=".$id_user;
        if ( $kyw = "") $sql.=" AND id like '%".$kyw."%'"; 
        $sql.=" order by id_bill desc";
        $bills =  pdo_query($sql);
        return $bills; 
    }
    function showdetail($id_bill){
        $sql = "select * from bill_details where id_bill=".$id_bill;
        $deatails = pdo_query($sql);
        return $deatails;
    }