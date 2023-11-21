<?php
    session_start();
    include "models/pdo.php";
    // include "models/product.php";
    // include "models/category.php";
    include "models/user.php";
    include "view/header.php";
    include "global.php";

    // if(!isset($_SESSION['mycart'])) && $_SESSION['mycart']=[];

    // $spnew=loadall_product_home($kwy="",$iddm=0);
    // $dsdm=loadall_category();
    // $dstop10=loadall_product_top10($kwy="",$iddm=0);

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            // case 'product':
            //     if (isset($_POST['kyw'])&&($_POST['kyw']!="")){ 
            //         $kyw=$_POST['kyw'];
            //     }else {
            //         $kyw="";
            //     }
            //     if (isset($_GET['iddm'])&&($_GET['iddm']>0)) {
            //         $iddm=$_GET['iddm'];

            //     }else {
            //         $iddm=0;
            //     }              
            //         $dssp=loadall_product($kyw,$iddm);
            //         $tendm=load_ten_dm($iddm);
                    
            //         include 'view/product.php';
                    
            //         break;
            // case 'productct':
            //     if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
            //         $id=$_GET['idsp'];
            //         $onesp=loadone_product($id);
            //         extract($onesp);
            //         $sp_cung_loai=load_product_cungloai($id ,$iddm);
                    
            //         include 'view/productct.php';

            //     }else{
            //         include "view/home.php";
            //     }
                
                
            //     break;
            case 'register':
                if (isset($_POST['register'])&&($_POST['register'])) {
                    $email=$_POST['email'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $phone=$_POST['phone'];
                    // $full_name=$_POST['full_name'];
                    insert_user($email,$username,$password,$phone);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";        
                }
                include 'view/user/register.php';
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $checkuser=checkuser($username,$password);
                    
                    if(is_array($checkuser)){
                        $_SESSION['username']=$checkuser;
                        // $thongbao="Bạn đã đăng nhập thành công!"; 
                        header('Location:index.php?act=gioithieu');       
                }else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
                    include 'view/home.php';
                    break;

            case 'edit_user':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $id_user = $_POST['id_user'];
                
                    update_user($id_user, $username, $password, $email, $address, $phone);
                    $_SESSION['user'] = checkuser($username, $password);
                    header('location: index.php?act=edit_user');
            }
                include "view/user/edit_user.php";
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
            // case 'addtocart':
            //     //add thông tin sp từ cái form add to cart đến session
            //     if (isset($_POST['addtocart'])&&($_POST['addtocart'])){
            //         $id=$_POST['id'];
            //         $name=$_POST['name'];
            //         $img=$_POST['img'];
            //         $price=$_POST['price'];
            //         $soluong=1;
            //         $ttien=$soluong * $price;
            //         $spadd=[$id,$name,$img,$price,$soluong,$ttien];
            //         array_push($_SESSION['mycart'],$spadd);
                    
            //     }
            //     include "view/cart/viewcart.php";
            //     break;
            
            case 'gioithieu':
                include 'view/gioithieu.php';
                break;
            case 'lienhe':
                include 'view/lienhe.php';
                break;
            default :
                include "view/home.php";
                break;
            }
           }else{
            include "view/home.php";
        }
    
    include "view/footer.php";

    

?>