<div class="row mb">
            <div class="boxtitle">TÀI KHOẢN</div>
                <div class="boxconter formtaikhoan">
                    <?php 
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        

                    ?>
                        <div class="row mb10">
                            Xin chào<br>
                            <?=$user?>
                        </div>
                        <div class="row mb10">
                            <li>
                                <a href="index.php?act=quenmk">Forgot Your Password ?</a>
                            </li>
                            <li>
                                <a href="index.php?act=edit_taikhoan">Update password</a>
                            </li>
                            <?php if($role==1){ ?>
                            <li>
                                <a href="admin/index.php">Login Admin</a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="index.php?act=thoat">Log out</a>
                            </li>

                        </div>
                        <?php
                            }else {
                         ?>


                    <form action="index.php?act=login" method="post">
                        <div class="row mb10">
                            Tên đăng nhập : <br>
                            <input type="text" name="username">
                        </div>
                        <div class="row mb10">
                            Email : <br>
                            <input type="email" name="email">
                        </div>
                        <div class="row mb10">
                            Mật khẩu : <br>
                            <input type="password" name="password">
                        </div>
                        <div class="row mb10">
                            <input type="checkbox" name="" > Remember me ? <br>
                        </div>
                        <div class="row mb10">
                            <input type="submit" value="Đăng nhập" name="login">
                        </div>
                    </form>
                    <li>
                        <a href="#">Forgot Your Password</a>
                    </li>
                    <li>
                        <a href="index.php?act=register">Register</a>
                    </li>
                    <?php }?>
        </div>
        <div class="row mb">
            <div class="boxtitle">Category</div>
            <div class="boxconter2 menudoc">
                <ul>
            <?php
                foreach ($dsdm as $category) {
                    extract($dm);
                    $linkdm="index.php?act=product&iddm=".$id_category;
                    echo '<li><a href="'.$linkdm.'">'.$name_category.'</a></li>';
                    
                }                   
            ?>   
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