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
?>