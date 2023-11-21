        <div class="row mb">
            <div class="boxtitle">USER</div>
                <div class="boxconter formtaikhoan">
                    <?php 
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        

                    ?>
                        <div class="row mb10">
                            Xin chào<br>
                            <?=$username?>
                        </div>
                        <div class="row mb10">
                            <li>
                                <a href="index.php?act=forgot">Quên mật khẩu</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_user">Cập nhật tài khoản</a>
                            </li>
                            <?php if($permissions==0){ ?>
                            <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="index.php?act=logout">Logout</a>
                            </li>

                        </div>
                        <?php
                            }else {
                         ?>


                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                            Tên đăng nhập : <br>
                            <input type="text" name="username">
                        </div>
                        <div class="row mb10">
                            Mật khẩu : <br>
                            <input type="password" name="password">
                        </div>
                        
                        <div class="row mb10">
                            <input type="checkbox" name="" > Ghi nhớ tài khoản? <br>
                        </div>
                        <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div>
                    </form>
                    <li>
                        <a href="#">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=register">Đăng kí thành viên</a>
                    </li>
                    <?php }?>
        </div>
        <div class="row mb">
            <div class="boxtitle">Category</div>
            <div class="boxconter2 menudoc">
                <ul>
            <!-- <?php
                foreach ($dsdm as $dm) {
                    extract($dm);
                    $linkdm="index.php?act=product&iddm=".$id_category;
                    echo '<li><a href="'.$linkdm.'">'.$name_category.'</a></li>';
                    
                }                   
            ?>    -->
                </ul>
            </div>
            <div class="boxfooter searedbox">
                <form action="index.php?act=product" method="post">
                    <input type="text" name="kyw" id="" placeholder="tìm kiếm sản phẩm">
                    <input type="submit" name="timkiem" value="Tìm Kiếm">
                </form>

            </div>
                    
        </div>
                    
                </div>       

            </div>