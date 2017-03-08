<?php
	function sum_age($table,$attribute,$searched_attrib){
		global $connection;
		$query = mysqli_query($connection, "SELECT $attribute FROM $table WHERE $attribute = '$searched_attrib'");
		$total = 0;
		while($results = mysqli_fetch_array($query)){
			$total++;
		}
		return($total);
	}


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

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
?>