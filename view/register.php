<div class="# ">
    <div class="boxtrai mr mb10">
        <div class="#">

            <div class="boxtitle">Register</div>
            <div class="boxconter row formtaikhoan">
            <form action="index.php?act=register" method="post">
                    <div class="#">
                        Email<br>
                        <input type="email" name="email">
                    </div>
                    <div class="#">
                        Tên đăng nhập
                        <input type="text" name="user">
                    </div>
                    <div class="#">
                        Mật khẩu
                        <input type="password" name="pass">
                    </div>
                    <div class="#">

                        <input type="submit" value="Đăng ký" name="register">
                    </div><div class="#">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php 
                    
                    if(isset($thongbao) && $thongbao!=""){
                        echo $thongbao;
                    }
                    
                ?>
                </h2>
            </div>              
        </div>
                
    </div>     
    <div class="#">
        <?php include "view/box.php" ?>
    </div>
</div>
