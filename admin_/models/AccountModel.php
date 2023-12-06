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
        if($role != ""){
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
     function update_account($id_user, $full_name, $email, $number_phone, $address, $status, $permission){
        $sql = "update user set full_name = '".$full_name."', email = '".$email."', number_phone = '".$number_phone."', address = '".$address."', status = '".$status."', permissions = '".$permission."' where id_user = '".$id_user."'";
        pdo_execute($sql);
    }
    function delete_account($id_user){
        $sql = "delete from user where id_user =".$id_user;
        pdo_execute($sql);
    }

    function load_status_account($id_user){
        $sql = "select status from user where id_user=".$id_user;
        $status =  pdo_query_value($sql);
        return $status;
    }
    function change_status_account($status, $id_user){
        if ( $status == 0){
            $sql = "update user set status = '1'";
        } else {
            $sql = "update user set status = '0'";
        }
        $sql.= " where id_user=".$id_user;
        // die($sql);
        pdo_execute($sql);
    }
?>