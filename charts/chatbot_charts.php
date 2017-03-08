<?php

	$get_children = mysqli_query($connection,"SELECT child_gender FROM katsu_childs_table");
	$male_count = 0;
	$female_count = 0;

	while($r = mysqli_fetch_array($get_children)){
		if($r['child_gender'] == "male"){
			$male_count++;
		}elseif($r['child_gender'] == "female"){
			$female_count++;
		}else{
		}
	}

?>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
				['Gender', 'Number of Counts'],
				['Male', parseInt('<?php echo $male_count; ?>')],
				['Female', parseInt('<?php echo $female_count; ?>')]
				]);
			var options = {
				title: 'Gender'
			};
		var chart = new google.visualization.PieChart(document.getElementById('katsu_gender'));
		chart.draw(data, options);
		}
</script>
<div id="katsu_gender" style="width: 900px; height: 500px;"></div>


?>