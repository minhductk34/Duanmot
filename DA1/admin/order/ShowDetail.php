<div class="">
            <div class="">
                <h1>List Order Detail</h1>
            </div>
            <div class="">
                    <div class="">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID Product</th>
                                <th>Image</th>
                                <th>Name Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>    
                                <th></th>
                            </tr>
                            <?php
                                foreach ( $details as $detail){
                                    extract($detail);
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_product.'</td>
                                    <td>'.$img_product.'</td>
                                    <td>'.$name_product.'</td>
                                    <td>'.$price_product.'</td>
                                    <td>'.$quantity.'</td>
                                    <td>'.$total.'  VNĐ</td>
                                    <td></td>
                                    </tr>';
                                } 
                            ?>
                        </table>
                    </div>
                    <div class="row mb10">
                        <a href="index.php?act=list_order"><input type="button" value="Back"></a>
                    </div>
                </form>
            </div>
</div>  