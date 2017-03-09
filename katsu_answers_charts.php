<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_katsu.php");
	include("php/session_check.php");

	$isadmin = $_SESSION['is_admin'];

			if($isadmin == 1){
				$link = "admin-landing.php";
			}
			else{
				$link = "user-landing.php";
			}
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<nav>
			<div class="navbar">
			<ul>
				<a href="" class="brand"><li><img src="file_includes/images/dswdlogo.png" class="nav-logo"></li></a>
				<a href="<?php echo $link;?>"><li>Home</li></a>
				<a href="report-incident.php"><li>Record Incident</li></a>
				<a href="map.php"><li>Case Mapping</li></a>
				<a href="katsu_answers_charts.php" class="active"><li>Chatbot Charts</li></a>
				<a href="webtoons-summary.php"><li>Webtoons Summary</li></a>
				<a href="php/logout.php"><li>Logout</li></a>
			</ul>
			</div>
		</nav>
		<div class="landing-main">
			<div class="content-area">
			<h2>Response Charts</h2>
<?php
	
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
	<iframe class="solo-graph" src="charts/age_bar_graph.php"></iframe>

	<iframe class="solo-graph" src="charts/age_line_graph.php"></iframe>
	</div>
	<div class="info-panel">
		<h2>Chatbot data visualized</h2>
		<p>The charts found on the left are visualized data from the chatbot platform. These data are obtained from children that have interacted with katsu.</p>
		<p>Align the content area on the left to the charts you want to print by scrolling. Click on the print button to print this page as a report.</p>
		<p>*Portrait orientation recommended</p>
		<button class="primary-button" onclick="window.print()">Print</button>
	</div>
</div>