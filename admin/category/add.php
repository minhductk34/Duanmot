<div class="row">
            <div class="row formtile mb10">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        MÃ LOẠI<br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        TÊN LOẠI<br>
                        <input type="text" name="tenloai" require>
                    </div>
                    <div class="row mb10">
                        <input class="mr" type="submit" name="themmoi" value="thêm mới">
                        <input class="mr" type="reset" value="nhập lại">
                        <a href="index.php?act=listdm"><input  type="button" value="danh sách"></a>
                       
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>

                </form>
            </div>

        </div>