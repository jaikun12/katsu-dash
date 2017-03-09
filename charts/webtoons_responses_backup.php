<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<?php
	include("../php/dbconnect_webtoons.php");
	include("chart_models.php");

	$get_webtoons = mysqli_query($connection,"SELECT * FROM wt_webtoon WHERE status = 1;");

	while($r = mysqli_fetch_array($get_webtoons)){
		$webtoonID = $r['webtoonID'];
		$title = $r['title'];
		$caption = $r['caption'];
		$choices = $r['choices'];
		echo $title ."<Br>";
		$ch = explode(", ", $choices);
		foreach($ch as $a){
			echo $a;
			$get_responses = mysqli_query($connection,"SELECT * FROM wt_responses WHERE response = '$a'");
			echo mysqli_num_rows($get_responses);
		}
		echo "<br>";
	}

?>