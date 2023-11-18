<?php
function addcategory($name_category)();{
    $conn=connectdb();
    $sql = "INSERT INTO category (name_category) VALUES ('".$name_category."')";
    //user exec() because no results are returned
    $conn->exec($sql);
}
function delcategory($id_category){
    $conn=connectdb();
    $sql = "DELETE FROM category WHERE id_category=".$id_category;
    //user exec() because no results are returned
    $conn->exec($sql);
}
function updatecategory($id_category,$name_category,$desc_category){
    $conn=connectdb();
    $sql = "UPDATE category SET name_category='".$name_category' WHERE id_category='".$id_category."' AND desc_category='".$desc_category.";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    //execute the query 
    $stmt->exec($sql);
}
function getonecategory($id_category,$name_category,$desc_category){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM category WHERE id_category='".$id_category.);
    $stmt->exec($sql);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getallcategory($id_category,$name_category,$desc_category){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM category");
    $stmt->exec($sql);
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>