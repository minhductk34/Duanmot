<?php
    session_start();
    include "models/pdo.php";
    include "models/user.php";
    // include "view/user.php";
    include "global.php";



    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
                
            //     break;
            case 'register':
                if (isset($_POST['register'])&&($_POST['register'])) {
                    $email=$_POST['email'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    // $number_phone=$_POST['number_phone'];
                    // $full_name=$_POST['full_name'];
                    insert_user($email,$username,$password);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";    
                    header('location: index.php?act=login');    
                }
                include 'view/user/register.php';
                break;
            case 'login':

                if (isset($_POST['login'])&&($_POST['login'])) {
                    $username=$_POST['username'];
                    $password=$_POST['password']; 
                    $checkuser=checkuser($username,$password);
               
                    if(is_array($checkuser)){
                        $_SESSION['username']=$checkuser;
                        // var_dump(  $_SESSION['username']);
                        extract($_SESSION['username']);
                        $permission = $permissions;
                        // var_dump( $permission);
                            if(isset($permission)&&$permission==1){
                               
                                    // header('Location:login1/view/user/register.php');
                                    echo"admin";
                            }elseif (isset($permission)&&$permission==2) {
                                echo"staff";
                            }else{
                                echo"user";
                            }
                        // $thongbao="Bạn đã đăng nhập thành công!"; 
                        // header('Location:index.php?act=home');       
                }else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
                    include 'view/user/login.php';
                    break;

            case 'update':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];
                    $number_phone = $_POST['number_phone'];
                    $id_user = $_POST['id_user'];
                    $full_name = $_POST['full_name'];
                
                    update_user($id_user, $username, $password, $email, $address, $number_phone, $full_name);
                    $_SESSION['user'] = checkuser($username, $password);
                   
                    header('location: index.php?act=home');
            }
                include "view/user/update.php";
                break;
            
                case 'logout':
                    session_unset();
                    header('location: index.php');
                    break;
                case 'forgot':
                    if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                        $email=$_POST['email']; 
    
                        $checkemail=check_email($email);
    
                        if(is_array($checkemail)){
                            $thongbao='<div>Pass là: ' . $checkemail['password'] . '</div>';
                        }else {
                            $thongbao='<div>email không tồn tại</div>';
                        
                        }
                    }
                    
                    include 'view/user/forgot.php';
                    break;
                    case 'home':
                        include "view/home.php";
                        break;
            default :
                include "view/home.php";
                break;
            }
           }else{
            include "view/home.php";
        }
    
    // include "view/footer.php";

    

?>