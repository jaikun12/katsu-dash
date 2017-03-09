<?php 
  include("../php/dbconnect_webtoons.php");
  include("chart_models.php");
?>
	

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<?php 
    $getwebtoons = mysqli_query($connection, "SELECT * FROM wt_webtoon");
    echo mysqli_error($connection);
    while($r = mysqli_fetch_array($getwebtoons)){
      $webtoon_title = $r['title'];
      $webtoonID = $r['webtoonID'];
      $getresponses = mysqli_query($connection, "SELECT * FROM wt_responses WHERE webtoonID = $webtoonID");
      echo '<script type="text/javascript">';
      echo "google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
          var data = new google.visualization.arrayToDataTable([
            ['Responses', 'Count'],";
            while($result = mysqli_fetch_array($getresponses)){
              $response_result = $result['response'];
              $total = sum_resp("wt_responses","response",$response_result);
              echo "['".$result['response']."', parseInt('".$total."')],";
            }
      echo  "]);

          var options = {
            title: '".$webtoon_title."',
            width: 700,
            legend: { position: 'none' },
            chart: { subtitle: 'This is to refer the bar graph of the responses of webtoons' },
            axes: {
              x: {
                0: { side: 'top', label: 'Responses'} // Top x-axis.
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
      echo mysqli_error($connection);
    }
    

?>