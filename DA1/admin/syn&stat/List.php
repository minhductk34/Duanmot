<div class="row">
            <div class="row frmtitle mb">
                <h1>List</h1>
            </div>
            <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                        <table>
                            <tr>
                                <th>ID Category</th>
                                <th>Name Category</th>
                                <th>quantity</th>
                                <th>Highest Price</th>    
                                <th>Lowest Price</th>
                                <th>Average Price</th>
                            </tr>
                            <?php
                                foreach ( $list as $item){
                                    extract($item);
                                    echo '<tr>
                                    <td>'.$id_ctg.'</td>
                                    <td>'.$name_ctg.'</td>
                                    <td>'.$countpro.'</td>
                                    <td>'.$minprice.'</td>
                                    <td>'.$maxprice.'</td>
                                    <td>'.$avgprice.'</td>
                                    </tr>';
                                } 
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <a href="index.php?act=showchart"> <input type="button" value="Show Chart"></a>
                    </div>
                </form>
            </div>
</div>  