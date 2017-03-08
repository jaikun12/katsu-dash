<?php 
  include("../php/dbconnect_katsu.php");
  include("chart_models.php");
?>
	

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<?php 
    echo '<script type="text/javascript">';
    echo "google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Age', 'Count'],";
          for($i=5;$i<18;$i++){
            $total_age_result = sum_age("katsu_childs_table","child_age",$i);
            echo "['".$i."', parseInt('".$total_age_result."')],";
          }
    echo  "]);

        var options = {
          title: 'Created Child Profile Age Bar Graph',
          width: 700,
          legend: { position: 'none' },
          chart: { subtitle: 'this refers to the child profiles created by the social workers' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: '90%' }
        };

        var chart = new google.charts.Bar(document.getElementById('age_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>";
    echo '<div id="age_div" style="width: 600px; height: 400px;"></div>';

?>