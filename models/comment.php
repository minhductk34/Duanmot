<?php
    function insert_comment($content,$id_user,$id_product,$create_at){
        $sql="insert into comment(content,id_user,id_product,create_at) values('$content','$id_user','$id_product','$create_at')";
        pdo_execute($sql);
    }
    function loadall_comment($id_product){
        $sql="SELECT * FROM comment WHERE 1";
        if($id_product>0) $sql.=" AND id_product='".$id_product."'";
        $sql.=" order by id desc";
        $listcomment=pdo_query($sql);
        return $listcomment;
    }
    function delete_comment($id)
{
    $sql = "delete from comment where id=" . $id_comment;
    pdo_execute($sql);
}

?>