<div class="row mb ">
    <div class="boxtrai mr mb10">
        <div class="row mb">

            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="boxconter row formtaikhoan">
                <form action="index.php?act=register" method="post">
                    <div class="row mb10">
                        Email<br>
                        <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="username">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="password">
                    </div>
                    <div class="row mb10">
                        Phone
                        <input type="phone" name="phone">
                    </div>
                    <!-- <div class="row mb10">
                        Full name
                        <input type="full_name" name="full_name">
                    </div> -->
                    
                    <div class="row mb10">

                        <input type="submit" value="Đăng ký" name="register">
                    </div><div class="row mb10">
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
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>
