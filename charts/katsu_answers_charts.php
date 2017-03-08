<?php
<<<<<<< HEAD:katsu_answers_charts.php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_katsu.php");
	include("php/session_check.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<nav>
			<div class="navbar">
			<ul>
				<a href="" class="brand"><li><img src="file_includes/images/dswdlogo.png" class="nav-logo"></li></a>
				<a href="admin-landing.php" class="active"><li>Home</li></a>
				<a href="map.php"><li>Case Mapping</li></a>
				<a href="katsu_answers_charts.php"><li>Chatbot Charts</li></a>
			</ul>
			</div>
		</nav>
		<div class="landing-main">
			<div class="content-area">
			<h2>Response Charts</h2>
<?php
	
=======
	include("../php/dbconnect_katsu.php");
	include("chart_models.php");
	// include("../php/session_check.php");

>>>>>>> 7fd8cc1eabd7f0f19829f4b1955b87491f34dc1d:charts/katsu_answers_charts.php
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
			
			echo '<div id="'.$qid.'" class="chart-item" style="width: 300px; height: 200px;"></div>';
		}else{

		}
		
	}

?>
	</div>
</div>