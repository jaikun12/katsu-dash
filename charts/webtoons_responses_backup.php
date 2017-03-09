<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<table id="users-table" class="table table-hover">
	<thead>
		<tr>
			<th>Webtoon Title</th>
			<th>Response</th>
			<th>Count</th>
		</tr>
	</thead>
	<tbody>
		

<?php
	include("charts/chart_models.php");

	$get_webtoons = mysqli_query($connection,"SELECT * FROM wt_webtoon WHERE status = 1;");

	while($r = mysqli_fetch_array($get_webtoons)){
		$webtoonID = $r['webtoonID'];
		$title = $r['title'];
		$caption = $r['caption'];
		$choices = $r['choices'];

		$ch = explode(", ", $choices);
		foreach($ch as $a){
			$get_responses = mysqli_query($connection,"SELECT * FROM wt_responses WHERE response = '$a'");
			$num_of_resp = mysqli_num_rows($get_responses);
			echo "<tr>
					<td>".$title."</td>
					<td>".$a."</td>
					<td>".$num_of_resp."</td>";
			echo "</tr>";
			
		}
		echo "<br>";
	}



?>
	</tbody>
</table>