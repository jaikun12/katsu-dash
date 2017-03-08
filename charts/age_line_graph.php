<?php 
  include("../php/dbconnect_katsu.php");
  include("chart_models.php");
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <?php
    echo '<script type="text/javascript">';
    echo "google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Age');
      data.addColumn('number', 'Child Count');

      data.addRows([";
      for($i=5;$i<18;$i++){
        $total_age_result = sum_age("katsu_childs_table","child_age",$i);
        echo "[".$i.", ".$total_age_result."],";
      }
      echo "
      ]);

      var options = {
        chart: {
          title: 'Created Child Profile Age Line Graph',
          subtitle: 'this refers to the child profiles created by the social workers'
        },
        width: 900,
        height: 500,

      };

      var chart = new google.charts.Line(document.getElementById('age_div'));

      chart.draw(data, options);
    }
    </script>";
    ?>
<!--   add this for inverted row label
          axes: {
          x: {
            0: {side: 'top'}
          }
        } -->
  <div id="age_div"></div>