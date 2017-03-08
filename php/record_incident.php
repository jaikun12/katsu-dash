<html>
<head><title>Recording incident...</title>
</head>
<body>

<?php

	include("dbconnect.php");
	include("session_check.php");

	$child_firstname = $_POST['firstname'];
	$child_middlename = $_POST['middlename'];
	$child_lastname = $_POST['lastname'];

	$child_prefix = $_POST['prefix'];
	$child_age = $_POST['age'];
	$child_sex = $_POST['sex'];
	$child_religion = $_POST['religion'];

	$child_region = $_POST['region'];
	$child_province = $_POST['province'];
	$child_city_mun = $_POST['city'];
	$child_barangay = $_POST['barangay'];

	$child_place_of_origin = $_POST['place_of_origin'];
	$child_type_of_case = $_POST['type_of_case'];
	$child_modes_of_victimization = $_POST['case_scenario'];
	$child_perpetrators = $_POST['perpetrators'];
	$child_case_origin = $_POST['case_origin'];
	$child_intake = $_POST['date_of_admission'];
	$child_cooperating_agencies = $_POST['cooperating_agencies'];
	$child_interventions_provided = $_POST['interventions_provided'];
	$child_status_of_case = $_POST['status_of_case'];

	$check_incident = $connection->prepare("INSERT INTO reports_child_table (child_firstname, child_middlename, child_lastname, child_prefix, child_birthdate, child_age, child_sex, child_religion, child_region, child_province, child_city_mun, child_barangay, child_place_of_origin, child_type_of_case, child_modes_of_victimization, child_perpetrators, child_case_origin, child_intake, child_cooperating_agencies, child_interventions_provided, child_status_of_cases, user_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
	$check_incident->bind_param("sssssisssssssssssssssi",$child_firstname, $child_middlename, $child_lastname, $child_prefix, $child_birthdate, $child_age, $child_sex, $child_religion, $child_region, $child_province, $child_city_mun, $child_barangay, $child_place_of_origin, $child_type_of_case, $child_modes_of_victimization, $child_perpetrators, $child_case_origin, $child_intake, $child_cooperating_agencies, $child_interventions_provided, $child_status_of_cases, $user_id);

	$insert_user = $connection->prepare("SELECT * FROM reports_child_table WHERE child_firstname = ? AND child_middlename = ? AND child_lastname = ? AND child_perpetrators = ? AND child_;");

	if(mysqli_num_rows($check_db)==0){ // if username is not taken

		$insert_user = "INSERT INTO katsu_users_table (username, password, is_admin, firstname, middlename, lastname, contact_num, email, is_active) VALUES ('$username', '$encrypted', '$is_admin', '$firstname', '$middlename', '$lastname', '$contact_num', '$email', 1);";

		$sql = mysqli_query($connection, $insert_user);

			if(!$sql){
		    	echo "<br><br>Check code. <br>" . mysqli_error($connection);
		    }else{
		    	//debug here
		    	header("Location: ../admin-dashboard.php?success=1");
		    }

	}else{
		echo "The username: " . $username . " already exists.";
	}

    mysqli_close($connection);

?>

</body>
</html>