<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_webtoons.php");
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
				<a href="katsu_answers_charts.php"><li>Chatbot Charts</li></a>
				<a href="webtoons-summary.php" class="active"><li>Webtoons Summary</li></a>
				<a href="php/logout.php"><li>Logout</li></a>
			</ul>
			</div>
		</nav>
		<div class="landing-main">
			<div class="content-area">
			<h2 style="margin-bottom: -100px;">Response Charts</h2>
			<?php include("charts/webtoons_responses_backup.php"); ?>

</div>