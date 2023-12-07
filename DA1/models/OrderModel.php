<?php
    function loadall_bill($kyw, $id_user=0){
        $sql = "select * from bill where 1";
        if ( $id_user > 0) $sql.=" AND id_user=".$id_user;
        if ( $kyw = "") $sql.=" AND id like '%".$kyw."%'"; 
        $sql.=" order by id_bill desc";
        $bills =  pdo_query($sql);
        return $bills; 
    }
    function loadone_bill($id_bill){
        $sql = "select * from bill where id_bill=".$id_bill;
        $bill =  pdo_query_one($sql);
        return $bill; 
    }
    function showdetail($id_bill){
        $sql = "select * from bill_details where id_bill=".$id_bill;
        $deatails = pdo_query($sql);
        return $deatails;
    }
    function update_bill($id_bill, $status){
        $sql = "update bill set status = '".$status."' where id_bill = '".$id_bill."'";
        pdo_execute($sql);
    }

    
    function load_status_bill($id_bill){
        $sql = "select status from bill_details where id_bill=".$id_bill;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status_bill($status, $id_bill){
        if ( $status == 0){
            $sql = "update bill_details set status = '1'";
        } else if ($status == 1){
            $sql = "update bill_details set status = '2'";
        }
        $sql.= " where id_bill=".$id_bill;
        // die($sql);
        pdo_execute($sql);
    }
    function refundConfirm($id_bill){
        $sql = "update bill_details set status = '3'";
        $sql.= " where id_bill=".$id_bill;
        // die($sql);
        pdo_execute($sql);
    }