<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
				['Gender', 'Number of Counts'],
				['Male',     11],
				['Female',      2]
				]);
			var options = {
				title: 'My Daily Activities'
			};
		var chart = new google.visualization.PieChart(document.getElementById('chatbot_gender_chart'));
		chart.draw(data, options);
		}
</script>
<div id="chatbot_gender_chart" style="width: 900px; height: 500px;"></div>