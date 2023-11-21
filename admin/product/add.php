<div class="row">
            <div class="row formtile mb10 b">
                <h1>THÊM MỚI sản phẩm</h1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10 b">
                        Danh mục<br>
                        <select name="iddm" id="">
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            
                            }                  
                            ?>                         
                        </select>
                    </div>
                    <div class="row mb10 b">
                        TÊN sản phẩm<br>
                        <input type="text" name="tensp" >
                    </div>
                    <div class="row mb10 b">
                        Giá<br>
                        <input type="text" name="giasp" >
                    </div>
                    <div class="row mb10 b">
                        Hình<br>
                        <input type="file"  name="hinh" id="">
                    </div>
                    <div class="row mb10 b">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="row mb10">
                        <input class="mr" type="submit" name="themmoi" value="thêm mới">
                        <input class="mr" type="reset" value="nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
                       
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>

                </form>
            </div>

        </div>