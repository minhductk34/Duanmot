<?php
require_once('./models/UserModel.php'); 

class UserController{
    private $user;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function registerUser($id_user, $username, $password, $email, $number_phone, $address) {
        $newUser = user::register($id_user, $username, $password, $email, $number_phone, $address);
        return $newUser;
    }

    public function loginUser($email, $password) {
        if ($this->user->authenticate($password)) {
            return true; 
        } else {
            return false;
        }
    }

    public function logoutUser() {
        unset($_SESSION['user_email']);
    }
}

$userController = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $number_phone = $_POST['number_phone'];
        $address = $_POST['address'];

        $userController->registerUser($id_user, $username, $password, $email, $number_phone, $address);
    } elseif (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($userController->loginUser($email, $password)) {
            return true;
    
        } else {
            return false;

        }
    } elseif (isset($_POST['logout'])) {
        $userController->logoutUser();
        
    }
}
?>