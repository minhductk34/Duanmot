<?php
    function insert_category($name_category, $desc_category){
        $sql = "INSERT INTO category(name_category,desc_category) VALUES('$name_category','$desc_category')";
        pdo_execute($sql);
    }
    function loadall_category(){
        $sql = "select * from category order by id_category desc";
        $Categories = pdo_query($sql);
        return $Categories;
    }
    function loadone_category($id_category){
        $sql = "select * from category where id_category=".$id_category;
        $category =  pdo_query_one($sql);
        return $category; 
    }
    function update_category($id_category, $name_category, $desc_category, $status){
        $sql = "update category set name_category = '".$name_category."', desc_category = '".$desc_category."', status = '".$status."' where id_category = '".$id_category."'";
        pdo_execute($sql);
    }
    function delete_category($id_category){
        $sql = "delete from category where id_category =".$id_category;
        pdo_execute($sql);
    }
    function load_status_category($id_category){
        $sql = "select status from category where id_category=".$id_category;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status_category($status, $id_category){
        if ( $status == 0){
            $sql = "update category set status = '1'";
        } else {
            $sql = "update category set status = '0'";
        }
        $sql.= " where id_category=".$id_category;
        // die($sql);
        pdo_execute($sql);
    }
    
?>