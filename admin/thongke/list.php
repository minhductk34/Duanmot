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
                    ['', 'The number of products'],
                    <?php
                    $totalcategory = count($liststatistical);
                    $i = 1;
                    foreach ($liststatistical as $statistical) {
                        extract($statistical);
                        if ($i == $totalcategory) $dauphay = "";
                        else $dauphay = ",";
                        echo "['" . $statistical['name_category'] . "'," . $statistical['countsp'] . "]" . $dauphay;
                        $i += 1;
                    }
                    ?>
                ]);

                // Set Options
                const options = {
                    title: 'STATISTICAL CHART OF PRODUCT LIST',
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