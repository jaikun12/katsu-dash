<?php
	include("partial_view/essentials-upper.html");
?>
	<nav>
			<div class="navbar">
			<ul>
				<a href="" class="brand"><li><img src="file_includes/images/dswdlogo.png" class="nav-logo"></li></a>
				<a href="user-landing.php"  class="active"><li>Home</li></a>
				<a href="report-incident.php"><li>Record Incident</li></a>
				<a href="map.php"><li>Case Mapping</li></a>
				<a href="katsu_answers_charts.php"><li>Chatbot Charts</li></a>
				<a href="php/logout.php"><li>Logout</li></a>
			</ul>

			</div>
		</nav>
	<div class="main-container">
		<h1>Welcome to the anti child porn report generating platform.</h1>
		<h4>The system allows you to view data about the current state of child porn in the Philippines. Feel free to explore</h4>
		<h4>The system is also used to record incidences of child pornography.</h4>
		
	</div>

<?php
	include("partial_view/essentials-footer.html"); 
?>