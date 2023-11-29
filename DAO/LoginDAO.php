<?php
require_once 'modles/Login.php';
class LoginDAO
{
    private $PDO;
    public function __construct()
    {
        require_once('config/PDO.php');
        $this->PDO = $pdo;
    }
    function checkuser($username, $password)
    {
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password"; // Use parameterized query to prevent SQL injection
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch a single row (assuming unique username)

        return $user; // Return the user data if found, or null if not found
    }
    
    function delete($id)
    {
        $sql = "DELETE FROM `user` WHERE id_userser = '$id'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }



    function insert_user($email, $username, $password)
    {
        $sql = "insert into user(email,username,password) value('$email','$username','$password')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }

    function check_email($email)
    {
        $sql = "SELECT * FROM user WHERE email = :email"; // Use parameterized query to prevent SQL injection
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch a single row (assuming unique email)

        return $user; // Return the user data if found, or null if not found
    }

    function update_user($id_user, $username, $password, $email, $address, $phone)
    {
        $sql = "update user set username='" . $username . "', password='" . $password . "', email='" . $email . "',  address='" . $address . "', number_phone='" . $phone . "' where id_user=" . $id_user;
        var_dump($sql);
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }

    public function check_user_exists($username)
    {
        $sql = "SELECT COUNT(*) as count FROM `user` WHERE `username` = :username";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Nếu count > 0, tài khoản tồn tại
        return $result['count'] > 0;
    }
}
