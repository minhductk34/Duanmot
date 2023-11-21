<?php
    include "header.php";
    include "../models/pdo.php";
    // include "../models/product.php";
    // include "../models/category.php";
    include "../models/user.php";
    // include "../models/comment.php";
    // include "../model/thongke.php";

    controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            // case 'adddm':
            //     //kiểm tra người dùng có kích nút add không
            //     if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            //         $tenloai=$_POST['tenloai'];
            //         insert_danhmuc($tenloai);
            //         $thongbao="THêm thành công";
            //     }
            //     include "danhmuc/add.php";
            //     break;
            // case 'listdm':
            //     $listdanhmuc=loadall_danhmuc();
            //     include "danhmuc/list.php";
            //     break;
            
            // case 'xoadm':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_danhmuc($_GET['id']);
            //     }
            //     $listdanhmuc=loadall_danhmuc();
            //     include "danhmuc/list.php";
            //     break;
            // case 'suadm':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         $dm=loadone_danhmuc($_GET['id']);
            //     }
                
            //     include "danhmuc/update.php";
            //     break;
            // case 'updatedm':
            //     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            //         $tenloai=$_POST['tenloai'];
            //         $id=$_POST['id'];
            //         update_danhmuc($id,$tenloai);
            //         $thongbao="cập nhật thành công";
            //     }
            //     $listdanhmuc=loadall_danhmuc();
            //     include "danhmuc/list.php";
            //     break;
            // /* sản phẩm */
            // case 'addsp':
            //     //kiểm tra người dùng có kích nút add không
            //     if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            //         $iddm=$_POST['iddm'];
            //         $tensp=$_POST['tensp'];
            //         $giasp=$_POST['giasp'];
            //         $mota=$_POST['mota'];
            //         $hinh=$_FILES['hinh']['name'];
            //         $target_dir = "../upload/";
            //         $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            //         if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            //             // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            //           } else {
            //             // echo "Sorry, there was an error uploading your file.";
            //           }



            //         insert_sanpham($tensp,$giasp,$mota,$hinh,$iddm);
            //         $thongbao="THêm thành công";
            //     }
            //     $listdanhmuc=loadall_danhmuc();
            //     include "sanpham/add.php";
            //     break;
            // case 'listsp':
            //     if(isset($_POST['listok'])&&($_POST['listok'])){
            //         $kwy=$_POST['kwy'];
            //         $iddm=$_POST['iddm'];
            //     }else{
            //         $kwy='';
            //         $iddm=0;
            //     }
            //     $listdanhmuc=loadall_danhmuc();
            //     $listsanpham=loadall_sanpham($kwy,$iddm);
            //     include "sanpham/list.php";
            //     break;
            
            // case 'xoasp':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_sanpham($_GET['id']);
            //     }
            //     $listsanpham=loadall_sanpham("",0);
            //     include "sanpham/list.php";
            //     break;
            // case 'suasp':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         $sanpham=loadone_sanpham($_GET['id']);
            //     }
            //     $listdanhmuc=loadall_danhmuc();
            //     include "sanpham/update.php";
            //     break;
            // case 'updatesp':
            //     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            //         $id=$_POST['id'];
            //         $iddm=$_POST['iddm'];
            //         $tensp=$_POST['tensp'];
            //         $giasp=$_POST['giasp'];
            //         $mota=$_POST['mota'];
            //         $hinh=$_FILES['hinh']['name'];
            //         $target_dir = "../upload/";
            //         $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            //         if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
            //             // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            //           } else {
            //             // echo "Sorry, there was an error uploading your file.";
            //           }

            //         update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
            //         $thongbao="cập nhật thành công";
            //     }
            //     $listsanpham=loadall_sanpham("",0);
            //     $listdanhmuc=loadall_danhmuc();
            //     include "sanpham/list.php";
            //     break;
                // case 'dskh':
                //     $listuser = loadall_user();
                //     include "user/list.php";
                //     break;
                // case 'dsbl':
                //     $listcomment = loadall_comment(0);
                //     include "comment/list.php";
                //     break;
                // case 'xoabl':
                //     if (isset($_GET['id'])&&($_GET['id']>0)) {
                //         delete_comment($_GET['id']);
                //     }
                //         $listcomment = loadall_comment(0);
                //         include "comment/list.php";
                // case 'xoatk':
                //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //         delete_user($_GET['id']);
                //     }
                //     $listuser = loadall_user();
                //      include "comment/list.php";
                //      break;
                //  case 'thongke':
                //      $listthongke = loadall_thongke();
                //     include "thongke/list.php";
                //     break;
                //  case 'bieudo':
                //     $listthongke = loadall_thongke();
                //     include "thongke/bieudo.php";
                //      break;

            default:
                include "home.php";
                break;
            
        }
    }else {
        include "home.php";
    
    }
    include "footer.php";
?>