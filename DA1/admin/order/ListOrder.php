<div class="">
            <div class="">
                <h1>List Order</h1>
            </div>
            <div class="">
                    <div class="">
                        <table>
                            <tr>
                                <th></th>
                                <th>ID Commnet</th>
                                <th>ID User</th>
                                <th>ID Product</th>
                                <th>Content</th>    
                                <th>Date Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ( $comments as $comment){
                                    extract($comment);
                                    $changeSts = "index.php?act=changeSts&id_comment=".$id_comment;
                                    if ( $status == 0){
                                        $check = "Hiển thị";
                                    } else {
                                        $check = "Ản";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id_comment.'</td>
                                    <td>'.$id_user.'</td>
                                    <td>'.$id_product.'</td>
                                    <td>'.$content.'</td>
                                    <td>'.$create_at.'</td>
                                    <td>'.$rate.'</td>
                                    <td>'.$check.'</td>
                                    <td><a href = "'.$changeSts.'"><input type="button" value="Change Status"></a>
                                    </td>
                                    </tr>';
                                } 
                            ?>
                            <a href="'.$chageSts.'"></a>
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Choose All">
                        <input type="button" value="Deselect all">
                    </div>
                </form>
            </div>
</div>  