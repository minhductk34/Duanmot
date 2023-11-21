<?php
    if(is_array($dm)){
        extract($dm);
    
    }

?>


<div class="row">
            <div class="row formtile">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb20">
                        MÃ LOẠI<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        TÊN LOẠI<br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="cập nhật">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="danh sách"></a>
                       
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>

                </form>
            </div>

        </div>