<div class="form-row" >
      <script src="https://www.gstatic.com/charts/loader.js"></script>

      <body>
      <div
      id="myChart" style="width:100%; max-width:600px; height:500px;">
      </div>

      <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

      // Set Data
      const data = google.visualization.arrayToDataTable([
        ['Category', "Quantity Products"],
        <?php
        $categories= count($list);
        $i = 1;
          foreach ($list as $item) {
            extract($item);
            if ( $i == $categories)$char = ""; else $char = ",";
            echo" ['".$item['name_ctg']."', ".$item['countpro']."]".$char;
          }
        ?>
      ]);

      // Set Options
      const options = {
        title:'Product statistics by Category'
      };

      // Draw
      const chart = new google.visualization.PieChart(document.getElementById('myChart'));
      chart.draw(data, options);

      }
      </script>
</div>  