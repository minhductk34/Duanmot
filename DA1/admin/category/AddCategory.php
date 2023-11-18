<div>
    <div>
        <h1>Add Category</h1>
    </div>
    <div>
        <form action="index.php?act=add_category" method="post">
            <div>
                <p>ID Category</p><br>
                <input type="text" name="id_category" disabled>
            </div>
            <div>
                <p>Name Category</p><br>
                <input type="text" name="name_category">
            </div>
            <div>
                <p>Description Category</p><br>
                <input type="text" name="desc_category">
            </div>
            <div>
                <input type="submit" value="Add new" name="add_category">
                <input type="reset" value="Reset">
                <a href="index.php?act=list_category"><input type="button" value="List Category"></a>
            </div>
            <?php
                if (isset($noti) && ($noti != "")) echo $noti 
            ?>
        </form>
    </div>
</div>