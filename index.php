<?php
    session_start();
    include "controller/LoginController.php";
    include "controller/UserController.php";
    include "view/header.php";
    

    // if(!isset($_SESSION['mycart'])) && $_SESSION['mycart']=[];

    $spnew=loadall_product_home($kwy="",$id_category=0);
    $dsdm=loadall_category();

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'product':
                if (isset($_POST['kyw'])&&($_POST['kyw']!="")){ 
                    $kyw=$_POST['kyw'];
                }else {
                    $kyw="";
                }
                if (isset($_GET['id_category'])&&($_GET['id_category']>0)) {
                    $id_category=$_GET['id_category'];

                }else {
                    $id_category=0;
                }              
                    $dssp=loadall_product($kyw,$id_category);
                    $tendm=load_name_category($id_category);
                    
                    include 'view/product.php';
                    
                    break;
            // case 'productct':
            //     if (isset($_GET['idsp'])&&($_GET['idsp']>0)) {
            //         $id=$_GET['idsp'];
            //         $onesp=loadone_product($id_product);
            //         extract($onesp);
            //         $sp_cung_loai=load_product_cungloai($id_product ,$id_category);
                    
            //         include 'view/productct.php';

            //     }else{
            //         include "view/home.php";
            //     }
                
                
            //     break;
            case 'register':
                if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                    $email=$_POST['email'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    insert_user($email,$username,$password);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";        
                }
                include 'view/register.php';
                break;
            case 'login':
                if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                    $username=$_POST['usernamename'];
                    $password=$_POST['password'];
                    $checkusername=checkusername($usernamename,$password);
                    if(is_array($checkusername)){
                        $_SESSION['username']=$checkusername;
                        // $thongbao="Bạn đã đăng nhập thành công!"; 
                        header('Location: index.php');       
                }else{
                    $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
                }
            }
                    include 'view/home.php';
                    break;

            case 'update_user':
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $usernamename = $_POST['username'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $id_user = $_POST['id_user'];

                    update_taikhoan($id, $username, $password, $email, $address, $phone);
                    $_SESSION['username'] = checkusername($username, $password);
                    header('location: index.php?act=edit_taikhoan');
            }
                include "view/edit_user.php";
                break;
            case 'logout':
                session_unset();
                header('location: index.php');
                break;
            case 'forgot_password':
                if (isset($_POST['guiemail'])&&($_POST['guiemail'])) {
                    $email=$_POST['email']; 

                    $checkemail=check_email($email);

                    if(is_array($checkemail)){
                        $thongbao='<div>Password là: ' . $checkemail['passwordword'] . '</div>';
                    }else {
                        $thongbao='<div>email không tồn tại</div>';
                    
                    }
                }
                
                include 'view/forgot_password.php';
                break;
            // case 'addtocart':
            //     //add thông tin sp từ cái form add to cart đến session
            //     if (isset($_POST['addtocart'])&&($_POST['addtocart'])){
            //         $id_cart=$_POST['id_cart'];
            //         $id_username=$_POST['id_username'];
            //         $id_product=$_POST['id_product'];
            //         $name_product=$_POST['name_product'];
            //         $img_product=$_POST['img_product'];
            //         $price_product=$_POST['price_product'];
            //         $id_bill=$_POST['id_bill']
            //         $quantity=1;
            //         $total=$quantity * $price_product;
            //         $spadd=[$id_product,$name_product,$img_product,$price_product,$quantity,$total];
            //         array_push($_SESSION['mycart'],$spadd);
                    
            //     }
            //     include "view/cart/viewcart.php";
            //     break;
            
            case 'shop':
                include 'view/shop.php';
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