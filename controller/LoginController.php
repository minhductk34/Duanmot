<?php
require_once 'DAO/LoginDAO.php';
class LoginController
{

    private $user;
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
        if (isset($_POST['login']) && ($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->user = new LoginDAO();

            $checkuser =  $this->user->checkuser($username, $password);

            if (is_array($checkuser)) {
                $_SESSION['username'] = $checkuser;
                // $thongbao="Bạn đã đăng nhập thành công!"; 
                header('Location:index.php');
            } else {
                $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
            }
        }
        include 'view/login/login.php';
    }
    public function signup()
    {
        if (isset($_POST['register']) && ($_POST['register'])) {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            // $phone=$_POST['phone'];
            // $full_name=$_POST['full_name'];

            $this->user = new LoginDAO();

            $this->user->insert_user($email, $username, $password);
            $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";
        }
        include 'view/login/sigin.php';
    }
    public function logout()
    {
        session_unset();
        header("Location: index.php?controller=home");
    }

    public function forgot()
    {
        if (isset($_POST['sendEmail']) && ($_POST['sendEmail'])) {
            $email = $_POST['email'];
            $this->user = new LoginDAO();
            $checkemail =$this->user->check_email($email);

            if (is_array($checkemail)) {
                $thongbao = '<div>Pass là: ' . $checkemail['password'] . '</div>';
            } else {
                $thongbao = '<div>email không tồn tại</div>';
            }
        }

        include 'view/login/forGotPass.php';
    }
}
