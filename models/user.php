<?php 
    function insert_user($email,$username,$password){
        $sql="insert into user(email,username,password) value('$email','$username','$password')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql="select * from user where username='".$username."' AND password='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
        // return $sp;
    
    
    }
    function update_user($id_user, $username, $password, $email, $address, $number_phone, $full_name) {    
        $sql = "UPDATE user SET username='" . $username . "',password='" . $password . "',
        email='" . $email . "',number_phone='" . $number_phone . "',address ='" . $address . "',full_name='" .$full_name. "' where id_user=" . $id_user;
        // var_dump($sql);
        pdo_execute($sql);
    }
    function check_email($email){
    $sql = "select * from user where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_user(){
    $sql = "select * from user order by id_user desc";
    $listusername = pdo_query($sql);
    return $listusername;
}
function delete_user($id_user){
    $sql = "delete from user where id_user=" . $id_user;
    pdo_execute($sql);
}

?>