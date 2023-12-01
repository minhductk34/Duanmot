<?php
require_once 'DAO/LoginDAO.php';
class LoginController
{

    private $user;
    public function login()
    {
        if ($this->isUserLoggedIn()) {
            // Người dùng đã đăng nhập, thực hiện đăng xuất
            unset($_SESSION['user']);
            header('Location: index.php?controller=login');
        } else {
            // Người dùng chưa đăng nhập
            if ($this->isLoginFormSubmitted()) {
                // Form đăng nhập đã được gửi
                $username = $_POST['username'];
                $password = $_POST['password'];
                $this->user = new LoginDAO();
                $checkUser = $this->user->checkUser($username, $password);

                if ($checkUser) {
                    // Người dùng đăng nhập thành công
                    $this->handleSuccessfulLogin($checkUser);

                    // Chuyển hướng đến trang khác sau khi đăng nhập thành công (nếu cần)
                    header('Location: index.php?controller=home');
                } else {
                    // Thông tin đăng nhập không đúng, hiển thị thông báo lỗi
                    $loginError = "Thông tin đăng nhập không đúng. Vui lòng thử lại.";
                    include 'view/login/login.php';
                }
            } else {
                // Hiển thị trang đăng nhập
                include 'view/login/login.php';
            }
        }
    }


    private function isUserLoggedIn()
    {
        return isset($_SESSION['user']);
    }

    private function isLoginFormSubmitted()
    {
        return isset($_POST['login']) && ($_POST['login']);
    }

    public function logout()
    {

        // Điều hướng hoặc thông báo đăng xuất thành công
        header("Location: index.php?controller=home");
    }

    private function handleSuccessfulLogin($user)
    {
        $_SESSION['user'] = $user;
        $permissions = $user['permissions'];

        if ($permissions == 0) {
            header('Location: index.php');
        } elseif ($permissions == 1) {
            header('Location: admin_/index.php');
        }
    }

    public function signup()
    {
        if (isset($_POST['register']) && ($_POST['register'])) {
            // Lấy dữ liệu từ form
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $username = isset($_POST['username']) ? $_POST['username'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
            $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : null;

            // Kiểm tra tính hợp lệ của dữ liệu
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('Invalid email address.');</script>";
            } elseif (empty($username)) {
                echo "<script>alert('Please enter a username.');</script>";
            } elseif ($username = htmlspecialchars($username, ENT_QUOTES)) {
                echo "<script>alert('error.');</script>";
            } elseif (empty($password)) {
                echo "<script>alert('Please enter a password.');</script>";
                // } elseif (!preg_match('/^[0-9]{10}$/', $phone)) {
                //     echo "<script>alert('Số điện thoại không hợp lệ.');</script>";
                // } elseif (empty($full_name)) {
                //     echo "<script>alert('Vui lòng nhập tên đầy đủ.');</script>";
            } else {
                // Kiểm tra xem tài khoản đã tồn tại hay chưa
                $user = new LoginDAO();
                if ($user->check_user_exists($username)) {
                    // Tài khoản đã tồn tại, hiển thị thông báo hoặc thực hiện các hành động khác
                    echo "<script>alert('Account already exists. Please choose a different username.');</script>";
                } else {
                    // Tài khoản chưa tồn tại, thêm vào cơ sở dữ liệu
                    $user->insert_user($email, $username, $password);
                    header('Location:index.php?controller=login');
                }
            }
        }
        include 'view/login/sigin.php';
    }

    function is_valid_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function is_valid_username($username)
    {
        return $username = htmlspecialchars($username, ENT_QUOTES);
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
            $_SESSION['user'] = $this->user->checkuser($username, $password);
            header('location: index.php?controller=edit_user');
        }
        include "./view/login/edit.php";
    }
}
