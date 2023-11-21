<?php 
function insert_category($name_category){
    $sql="insert into category(name) value('$name_category')";
    pdo_execute($sql);
}
function delete_category($id_category){
    $sql="delete from category where id_category=".$id_category;
    pdo_execute($sql);
}
function loadall_category(){
    $sql="select * from category order by id_category desc ";
    $listcategory=pdo_query($sql);
    return $listcategory;


}
function loadone_category($id_category){
    $sql="select * from category where id_category=".$id_category;
    $dm=pdo_query_one($sql);
    return $dm;


}
function update_category($id_category,$name_category){
    $sql="update category set name='".$name_category."' where id_category=".$id_category;
    pdo_execute($sql);
}
?>