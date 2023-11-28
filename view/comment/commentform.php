<?php 

    session_start();
    include "../../model/pdo.php";
    include "../../model/comment.php";
    $id_product=$_REQUEST['id_product'];
    $dsbl=loadall_comment($id_product);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            margin: 0;
        }
        *{
            font-size: 1.5vw;
        }

        .comment table {
            width: 90%;
            margin-left: 5%;
        }

        .comment table td:nth-child(1) {
            width: 50%;
        }

        .comment table td:nth-child(2) {
            width: 20%;
        }

        .comment table td:nth-child(3) {
            width: 30%;
        }

    </style>       
</head>
<body>

<div class="row mb">
    <div class="boxtitle">COMMENT</div>
    <div class="boxcontent2 comment">
        <table>
        <tr>
                <tr>
                    <td>CONTENT</td>
                    <td>ID USER</td>
                    <td>CREATE AT</td>
                </tr>
                </tr>
            <?php
            foreach($dsbl as $bl) {
                extract($bl);
                echo '<tr><td>'.$content.'</td>';
                echo '<td>'.$id_user.'</td>';
                echo '<td>'.$create_at.'</td></tr>';

            }

        ?>
        </table>
    </div>
    <div class="boxfooter commentform">

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input type="hidden" name="id_product" value="<?= $id_product?>">

    <input type="text" name="content">
    <input type="submit" name="guicomment" value="Send comment">

</form>
    </div>

    <?php

    if (isset($_POST['guicomment'])&&( $_POST['guicomment'])) {
        $content=$_POST['content'];
        $id_product=$_POST['id_product'];
        $id_user=$_SESSION['user']['id_comment'];
        $create_at=date('h:i:sa d/m/y');
        insert_comment($content,$id_user,$id_product,$create_at);
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

    ?>

</div>
    
</body>
</html>