<?php
	include("dbconnect.php");
	include("session_init.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!$username || !$password){
		header("Location: ../index.php?error=1");
	}else{

		$checkdb = $connection->prepare("SELECT user_id, username, is_admin, firstname, lastname, is_active  FROM reports_users_table WHERE username = ? AND password = ?;");
		$checkdb->bind_param("ss",$username,$init_pass);

		$log = $connection->prepare("INSERT INTO reports_login_logs (user_id) VALUES (?);");
		$log->bind_param("i",$user_id);

		$init_pass = crypt($password, "!@#$%pornpatrol^&*()");

		$checkdb->execute();
		$checkdb->store_result();
		$row_count = $checkdb->num_rows;


		if($row_count==0){
			header("Location: ../index.php?error=2");
		}else{
			session_start();

			$checkdb->execute();
			$checkdb->bind_result($user_id, $username, $is_admin, $firstname, $lastname, $is_active);

			while($r = $checkdb->fetch()){

				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;
				$_SESSION['firstname'] = $firstname;
				$_SESSION['lastname'] = $lastname;
				$_SESSION['is_admin'] = $is_admin;


				if($r['is_active']==1){ //checks if is active

					$log->execute();

					if($_SESSION['is_admin'] == 1){ // checks admin priv
						echo mysqli_error($connection);
						header("Location: ../admin-landing.php");
					}
					else{
						header("Location: ../user-landing.php");
					}

				}else{ // if inactive
					header("Location: ../index.php?error=3");
				}
			}
		}

		echo mysqli_error($connection);
		
	}


	?>