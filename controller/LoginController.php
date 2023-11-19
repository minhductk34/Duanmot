<?php
require_once 'DAO/LoginDAO.php';
class LoginController
{
    public function index()
    {
        if (isset($_COOKIE["rank"])) {
            require_once('view/home/home.php');
        } else {
            require_once('view/login/login.php');
        }
    }
    public function login()
    {

        $username = $_POST['email'];
        $password = $_POST['pass'];

        $loginDAO = new LoginDAO();
        $userInfo = $loginDAO->login($username, $password);

        if ($userInfo) {
            // Lấy vai trò (permissions) từ dữ liệu người dùng
            print_r($userInfo);
            $permissions = $userInfo[0]['permissions'];
            $id_user = $userInfo[0]['id_user'];
            //print_r($permissions);

            // // Thiết lập cookie cho vai trò (permissions)
            setcookie("permissions", $permissions, time() + 3600, "/");
            $_SESSION['permissions'] = $permissions;
            $_SESSION['acc'] = $id_user;

            // Chuyển hướng sau khi đăng nhập thành công
            header("Location: index.php?controller=home");
            exit();
        } else {
            // Đăng nhập thất bại, xử lý lỗi ở đây (ví dụ: thông báo lỗi)
            //echo "Đăng nhập thất bại.";
        }
    }
    public function signup()
    {
        
    }
    public function logout()
    {
        session_unset();
        header("Location: index.php?controller=home");
    }
}
