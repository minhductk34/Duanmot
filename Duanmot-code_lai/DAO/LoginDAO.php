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
    function Login($user, $pass)
    {
        $sql = "SELECT id_user, permissions FROM user WHERE email = :user AND pass = :pass";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindValue(':user', $user, PDO::PARAM_STR);
        $stmt->bindValue(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();

        $data = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Create an associative array with 'id_user' and 'permissions' keys
            $userData = array(
                'id_user' => $row['id_user'],
                'permissions' => $row['permissions']
            );

            // Add the user data to the data array
            $data[] = $userData;
        }

        return $data; // Return an array containing 'id_user' and 'permissions'
    }
    function show()
    {
        $sql = "SELECT *  FROM products ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    
        $logins = array();
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Create a Login object and add it to the array
            $login = new Login(
                $row['id_userser'],
                $row['username'],
                $row['password'],
                $row['email'],
                $row['number_phone'],
                $row['address'],
                $row['status'],
                $row['permissions'],
                $row['full_name']
            );
    
            $logins[] = $login;
        }
    
        return $logins; // Return an array of Login objects
    }
    function delete($id)
    {
        $sql = "DELETE FROM `user` WHERE id_userser = '$id'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
}
