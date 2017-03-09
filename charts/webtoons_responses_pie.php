<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
	include("../php/dbconnect_webtoons.php");
	include("chart_models.php");

	$get_webtoons = mysqli_query($connection,"SELECT * FROM wt_webtoon WHERE status = 1;");

	while($r = mysqli_fetch_array($get_webtoons)){
		$webtoonID = $r['webtoonID'];
		$title = $r['title'];
		$get_responses = mysqli_query($connection,"SELECT * FROM wt_responses WHERE webtoonID = '$webtoonID'");
		$count=0;

		while($ar = mysqli_fetch_array($get_responses)){
			$response = $ar['response'];
			if($response == $ar['response']){
				$count++;
			}
			
		}
		echo '<script type="text/javascript">';
			echo "google.charts.load('current', {'packages':['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([
								['Responses', 'Number of Counts'],
								['".$response.", parseInt('".$count."')]";
							echo "]);
							var options = {
								title: '".$title." Pie Chart'
								
							};
						var chart = new google.visualization.PieChart(document.getElementById('".$webtoonID."'));
						chart.draw(data, options);
						}
				</script>";
			
			echo '<div id="'.$webtoonID.'" class="chart-item" style="width: 300px; height: 200px;"></div>';
	}

?>