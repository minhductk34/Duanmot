<?php
    function insert_account($username, $password, $email, $permission, $full_name, $image){
        $sql = "insert into user (username, password, email, permissions, full_name, image) values('$username','$password','$email', '$permission', '$full_name', '$image')";
        pdo_execute($sql);
    }
    function loadall_account($kyw, $role){
        $sql = "select * from user where 1";
        if($kyw != ""){
            $sql.= " and username like '%".$kyw."%'";
        } 
        if($role > 0){
            $sql.= " and permissions = '".$role."'";
        }
        $sql.= " order by id_user desc";
        $users = pdo_query($sql);
        return $users;
    }
    function loadone_account($id_user){
        $sql = "select * from user where id_user=".$id_user;
        $user =  pdo_query_one($sql);
        return $user; 
    }
?>