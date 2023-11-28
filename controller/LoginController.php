<?php
require_once 'DAO/LoginDAO.php';
class LoginController
{

    private $user;
    public function login()
    {
        if (isset($_POST['login']) && ($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->user = new LoginDAO();
            $checkuser =  $this->user->checkuser($username, $password);
            $_SESSION['username'] = $checkuser;
            $permisions = $checkuser['permissions'];
            if ($permisions == 0) {
                $_SESSION['permisions'] = $permisions;
                // $thongbao = "Bạn đã đăng nhập thành công!";
                header('Location: index.php');
            } elseif ($permisions == 1) {
                header('Location: admins/index.php');
            }
        }
        include 'view/login/login.php';
    }
    public function signup()
    {
        if (isset($_POST['register']) && ($_POST['register'])) {
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $username = isset($_POST['username']) ? $_POST['username'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
            $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : null;

            $this->user = new LoginDAO();
            $this->user->insert_user($email, $username, $password);
            header('Location:index.php?controller=login');
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
            $checkemail = $this->user->check_email($email);

            if (is_array($checkemail)) {
                $thongbao = '<div>Pass là: ' . $checkemail['password'] . '</div>';
            } else {
                $thongbao = '<div>email không tồn tại</div>';
            }
        }

        include 'view/login/forGotPass.php';
    }

    public function edit()
    {
        if (isset($_POST['update']) && ($_POST['update'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $id_user = $_POST['id_user'];
            $this->user = new LoginDAO();
            $this->user->update_user($id_user, $username, $password, $email, $address, $phone);
            $_SESSION['username'] = $this->user->checkuser($username, $password);
            header('location: index.php?controller=edit_user');
        }
        include "./view/login/edit.php";
    }
}
