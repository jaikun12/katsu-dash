	
	sum_age("katsu_childs_table","child_age",5);
	sum_age("katsu_childs_table","child_age",6);
	sum_age("katsu_childs_table","child_age",7);
	sum_age("katsu_childs_table","child_age",8);
	sum_age("katsu_childs_table","child_age",9);
	sum_age("katsu_childs_table","child_age",10);
	sum_age("katsu_childs_table","child_age",11);
	sum_age("katsu_childs_table","child_age",12);
	sum_age("katsu_childs_table","child_age",13);
	sum_age("katsu_childs_table","child_age",14);
	sum_age("katsu_childs_table","child_age",15);
	sum_age("katsu_childs_table","child_age",16);
	sum_age("katsu_childs_table","child_age",17);

	<?php echo "
<script type='text/javascript'>
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Age', 'Count'],";

    for($i=5;$i<18;$i++){
		$agesum = sum_age("katsu_childs_table","child_age",$i);
		echo "['" . $i ."', '".$agesum."'],";
	}
	echo "
        ]);

        var options = {
          title: 'Children Ages',
          width: 900,
          legend: { position: 'none' },
          chart: { subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: '90%' }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>";
?>