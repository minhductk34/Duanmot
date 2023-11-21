<?php
    if(is_array($sanpham)){
        extract($sanpham);
    
    }
    $hinhpath="../upload/".$img;
    if (is_file($hinhpath)) {
         $hinh = "<img src='" . $hinhpath . "' height='80'>";
    } else {
        $hinh = "không hình ảnh";
    }

?>

<div class="row">
            <div class="row formtile">
                <h1>cập nhật sản phẩm</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" id="">
                            <option value="0" selected>tất cả</option>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if ($iddm==$id) $s="selected" ; else $s="";
                               
                                echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                            }                  
                            ?>                         
                        </select>
                    </div>

                    <div class="row mb10">
                        TÊN sản phẩm<br>
                        <input type="text" name="tensp" value="<?=$ten?>">
                    </div>
                    <div class="row mb10">
                        Giá<br>
                        <input type="text" name="giasp" value="<?=$price?>" >
                    </div>
                    <div class="row mb10">
                        Hình<br>
                        <input type="file" name="hinh" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="cập nhật">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
                       
                    </div>
                    <?php 
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>

                </form>
            </div>

        </div>