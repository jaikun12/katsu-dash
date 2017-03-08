<html>
<head><title>Recording incident...</title>
</head>
<body>

<?php

	include("dbconnect.php");
	include("session_check.php");

	$child_firstname = strtolower($_POST['firstname']);
	$child_middlename = strtolower($_POST['middlename']);
	$child_lastname = strtolower($_POST['lastname']);

	$child_prefix = strtolower($_POST['prefix']);
	$child_age = $_POST['age'];
	$child_sex = $_POST['child_sex'];
	$child_religion = strtolower($_POST['religion']);

	$child_province = $_POST['child_province'];

	$child_place_of_origin = strtolower($_POST['child_address']);
	$child_type_of_case = strtolower($_POST['type_of_case']);
	$child_modes_of_victimization = strtolower($_POST['case_scenario']);
	$child_perpetrators = strtolower($_POST['perpetrators']);
	$child_case_origin = strtolower($_POST['case_origin']);
	$child_cooperating_agencies = strtolower($_POST['cooperating_agencies']);
	$child_interventions_provided = strtolower($_POST['intervention']);
	$child_status_of_case = $_POST['case_status'];

	// echo "
	// $child_firstname $child_middlename $child_lastname <br>
	// age: $child_age<br>
	// sex: $child_sex<br>
	// religion: $child_religion<br>
	// province: $child_province<br>
	// origin: $child_place_of_origin<br>
	// type of case: $child_type_of_case<br>
	// modes of victimization: $child_modes_of_victimization<br>
	// perpetrators: $child_perpetrators<br>
	// case origin: $child_case_origin<br>
	// cooperating agencies: $child_cooperating_agencies<br>
	// interventions provided: $child_interventions_provided<br>
	// case status: $child_status_of_case<br>
	// userid: $user_id";

	$insert_incident = $connection->prepare("INSERT INTO reports_incidents_table (child_firstname, child_middlename, child_lastname, child_prefix, child_age, child_sex, child_religion, child_province, child_place_of_origin, child_type_of_case, child_modes_of_victimization, child_perpetrators, child_case_origin, child_cooperating_agencies, child_interventions_provided, child_status_of_cases, user_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	$insert_incident->bind_param("ssssisssssssssssi",$child_firstname, $child_middlename, $child_lastname, $child_prefix, $child_age, $child_sex, $child_religion, $child_province, $child_place_of_origin, $child_type_of_case, $child_modes_of_victimization, $child_perpetrators, $child_case_origin, $child_cooperating_agencies, $child_interventions_provided, $child_status_of_case, $user_id);

	$check_dup_query = "SELECT * FROM reports_incidents_table WHERE child_firstname = '$child_firstname' AND child_middlename = '$child_middlename' AND child_lastname = '$child_lastname' AND child_age = '$child_age' AND child_sex = '$child_sex' AND child_status_of_cases = '$child_status_of_case';";

	$check_dup = mysqli_query($connection,$check_dup_query);

	$dup_count = mysqli_num_rows($check_dup);
	if($dup_count == 0){ // if username is not taken
		$insert_incident -> execute();
		header("Location: ../admin-landing.php?success=1");
	}
	else{
		echo "The case already exists.";
	}

    mysqli_close($connection);

?>

</body>
</html>