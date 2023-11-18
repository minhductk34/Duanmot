<div class="">
            <div class="">
                <h1>Add Discount</h1>
            </div>
            <div class="">
                <form action="index.php?act=add_discount" method="post">
                    <div class="">
                        <p>Name Discount</p><br>
                        <input type="text" name="name_discount" >
                    </div>
                    <div class="">
                        <p>Percent Discount</p><br>
                        <input type="number" name="percent_discount" >
                    </div>
                    <div class="">
                        <p>Active</p><br>
                        <span>Hiệu lực</span><input type="radio" name="active" value = "0" checked>
                        <span>Hết hiệu lực</span><input type="radio" name="active" value = "1">
                    </div>
                    <div class="">
                        <input type="submit" value="Add new" name="add_discount">
                        <input type="reset" value="Reset">
                        <a href="index.php?act=list_discount"><input type="button" value="List"></a>
                    </div>
                    <?php
                        if (isset($noti)&&($noti !="")) echo $noti
                    ?>
                </form>
            </div>
        </div>   