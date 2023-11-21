<div class="row mb ">
    <div class="boxtrai mr mb10">
        <div class="row mb">

            <div class="boxtitle">Quên Mật Khẩu</div>
            <div class="boxconter formtaikhoan row">
                <form action="index.php?act=forgot" method="post">
                <div class="row mb10">
                    EMAIL:
                    <input style="width: 100%;border: 1px #CCC solid;padding: 5px  10px;border-radius: 5px;" type="email" name="email" >
                </div>
                
                <div class="mb10">
                    <input type="submit" value="Gửi" name="guiemail">
                    <input style="border-radius: 5px;padding: 5px 10px ;background-color: rgb(3, 255, 104);border: 1px solid #9000ff;" type="reset" value="nhập lại">
                </div>
                </form>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
            </div>              
        </div>   
    </div>     
    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>