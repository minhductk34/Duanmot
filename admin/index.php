<?php
    include "header.php";
    include "../models/pdo.php";
    include "../models/user.php";
    // include "../models/comment.php";
    // include "../model/thongke.php";



    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){
            default:
                include "home.php";
                break;
            
        }
    }else {
        include "home.php";
    
    }
    include "footer.php";
?>