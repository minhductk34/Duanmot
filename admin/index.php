<?php
    include "header.php";
    include "../models/pdo.php";
    include "../models/user.php";
    include "../models/comment.php";
    // include "../model/thongke.php";



    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            case 'deletecomment':
                if (isset($_GET['id_comment'])&&($_GET['id_comment']>0)) {
                    delete_comment($_GET['id_comment']);
                }
                    $listcomment = loadall_comment(0);
                    include "comment/list.php";

            default:
                include "home.php";
                break;
            
        }
    }else {
        include "home.php";
    
    }
    include "footer.php";
?>