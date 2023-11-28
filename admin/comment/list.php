<div class="row">
    <div class="row formtile mb10">
        <h1>LIST COMMENT</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 fordslh">
            <table>
                <tr>
                    <th></th>
                    <th>ID comment</th>
                    <th>Content</th>
                    <th>Iduser</th>
                    <th>Idproduct</th>
                    <th>Create at</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listcomment as $comment) {
                    extract($comment);
                    $editcomment = "index.php?act=editcomment&id=" . $id_comment;
                    $deletecomment = "index.php?act=deletecomment&id=" . $id_comment;
                    echo '<tr>
                            <td><input type="checkbox"></td>
                            <td>' . $id_comment . '</td>
                            <td>' . $id_product . '</td>
                            <td>' . $id_user . '</td>
                            <td>' . $content . '</td>
                            <td>' . $create_at . '</td>
                            <td> <a href="' . $suabl . '"><input type="button" value="sửa"></a>
                                 <a href="' . $xoabl . '"><input type="button" value="xóa"></a></td>
                        </tr>';
                }
                ?>
            </table>

        </div>
        
    </div>

</div>