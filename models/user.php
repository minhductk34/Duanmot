<?php 
    function insert_user($email,$username,$password,$phone){
        $sql="insert into user(email,username,password,phone) value('$email','$username','$password','$phone')";
        pdo_execute($sql);
    }
    function checkuser($username,$password){
        $sql="select * from user where username='".$username."' AND password='".$password."'";
        $sp=pdo_query_one($sql);
        return $sp;
        // return $sp;
    
    
    }
    function update_user($id_user, $username, $password, $email, $address, $phone) {    
        $sql = "update user set username='" . $username . "', password='" . $password . "', email='" . $email . "',  address='" . $address . "', phone='" . $phone . "' where id_user=" . $id_user;
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