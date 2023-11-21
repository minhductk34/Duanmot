<div class="row">
    <div class="row formtile mb10">
        <h1>DANH SÁCH THỐNG KÊ</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 fordslh">
            <table>
                <tr>
                    <th>MÃ DANH MỤC</th>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
                <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                            <td>' . $iddm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $minprice . '</td>
                            <td>' . $maxprice . '</td>
                            <td>' . $avgprice . '</td>
                           </tr>';
                }
                ?>
            </table>

        </div>
        <div class="row mb10">
            <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ thống kê"></a>
        </div>
    </div>

</div>