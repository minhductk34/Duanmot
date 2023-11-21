<!DOCTYPE html>
<html>
<script src="https://www.gstatic.com/charts/loader.js"></script>

<body>
    <div class="boxcenter">



        <div id="myChart" style="width:100%;padding-top: 230px; max-width:600px; height:500px;">
        </div>

        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                // Set Data
                var data = google.visualization.arrayToDataTable([
                    ['danh mục', 'số lượng sản phẩm'],
                    <?php
                    $tongdm = count($listthongke);
                    $i = 1;
                    foreach ($listthongke as $thongke) {
                        extract($thongke);
                        if ($i == $tongdm) $dauphay = "";
                        else $dauphay = ",";
                        echo "['" . $thongke['tendm'] . "'," . $thongke['countsp'] . "]" . $dauphay;
                        $i += 1;
                    }
                    ?>
                ]);

                // Set Options
                const options = {
                    title: 'BIỂU ĐỒ THỐNG KÊ DANH MỤC SẢN PHẨM',
                    is3d: true
                };

                // Draw
                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);

            }
        </script>
    </div>

</body>

</html>