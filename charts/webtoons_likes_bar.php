<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
	include("../php/dbconnect_webtoons.php");
	include("chart_models.php");
	// include("../php/session_check.php");
	$get_webtoon = mysqli_query($connection,"SELECT * FROM wt_webtoon WHERE status = 1;");

	echo '<script type="text/javascript">';
    echo "google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Webtoon Titles', 'Count'],";
        while($r=mysqli_fetch_array($get_webtoon)){
        	$webtoon_id = $r['webtoonID'];
        	$webtoon_title = $r['title'];
        	$total_likes = count_likes($webtoon_id);
        	echo "['".$webtoon_title."', parseInt('".$total_likes."')],";
        }
    echo  "]);

        var options = {
          title: 'Webtoons User Likes Bar Graph',
          width: 900,
          legend: { position: 'none' },
          chart: { subtitle: 'this refers to the total likes of the users in the webtoons platform' },
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