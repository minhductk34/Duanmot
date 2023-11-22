<?php
     function loadall_comment($date){
        $sql = "select * from comment where 1";
        if($date == "latest"){
            $sql.= " order by create_at desc";
        } 
        else if ($date == "oldest" ){
            $sql.= " order by create_at asc";
        } else{
            $sql.= " order by id_comment desc";
        }
        $comments = pdo_query($sql);
        return $comments;
    }
    function load_status($id_comment){
        $sql = "select status from comment where id_comment=".$id_comment;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status($status, $id_comment){
        if ( $status == 0){
            $sql = "update comment set status = '1'";
        } else {
            $sql = "update comment set status = '0'";
        }
        $sql.= " where id_comment=".$id_comment;
        // die($sql);
        pdo_execute($sql);
    }
    