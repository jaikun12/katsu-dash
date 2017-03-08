<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_katsu.php");
	include("php/session_check.php");

	$get_questions = mysqli_query($connection,"SELECT * FROM katsu_questions_table;");

	while($r = mysqli_fetch_array($get_questions)){
		$qid = $r['question_id'];
		$question_content = $r['question_content'];
		$get_answers = mysqli_query($connection,"SELECT * FROM katsu_answers_table WHERE question_id = '$qid'");
		$total_yes = 0;
		$total_no = 0;
		$others = 0;
		while($ar = mysqli_fetch_array($get_answers)){
			$answer = $ar['answer_content'];
			if($answer == "yes"){
				$total_yes++;
			}elseif($answer == "no"){
				$total_no++;
			}else{
				$others++;
			}
		}
		if($r['is_active'] == 0){
		}elseif($total_yes!=0&&$total_no!=0){
			echo '<script type="text/javascript">';
			echo "google.charts.load('current', {'packages':['corechart']});
					google.charts.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([
								['Answers', 'Number of Counts'],
								['Yes', parseInt('".$total_yes."')],
								['No', parseInt('".$total_no."')]
								]);
							var options = {
								title: '".$question_content."'
							};
						var chart = new google.visualization.PieChart(document.getElementById('".$qid."'));
						chart.draw(data, options);
						}
				</script>";
			
			echo '<div id="'.$qid.'" style="width: 600px; height: 400px;"></div>';
		}else{

		}
		
	}

?>