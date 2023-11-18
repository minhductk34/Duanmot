<?php
    function insert_comment($noidung,$id_user,$id_product,$date){
        $sql="insert into comment(noidung,id_user,id_product,date) values('$noidung','$id_user','$id_product','$date')";
        pdo_execute($sql);
    }
    function loadall_comment($id_product){
        $sql="SELECT * FROM comment WHERE 1";
        if($id_product>0) $sql.=" AND id_product='".$id_product."'";
        $sql.=" order by id desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    function delete_comment($id)
{
    $sql = "delete from comment where id=" . $id;
    pdo_execute($sql);
}

?>