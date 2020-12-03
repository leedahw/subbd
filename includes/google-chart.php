<?php
include("dbconfig.php");

$stmt = $pdo->prepare("SELECT COUNT(category) as tcount,`category` FROM `subscription` GROUP BY `category`");
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Count'],
          <?php foreach($row as $key=>$val){?>
          ['<?php echo $val['category']?>', <?php echo $val['tcount']?>],
          <?php }?>
        ]);

        var options = {
          title: 'Your Subb Breakdown',
          pieHole: 0.5,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>
<div id="donutchart" style="width: 900px; height: 500px;"></div>
</body>
</html>
