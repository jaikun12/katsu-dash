<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="file_includes/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="file_includes/css/index.css">
		<link rel="stylesheet" type="text/css" href="file_includes/css/buttons.css">

	</head>
	<body>
		<div class="main-container">
			<img src="file_includes/images/dswdlogo.png" class="main-logo">
			<h1>Anti-ChildPorn Dashboard</h1>
			<div class="form-wrap">
				<form action="controllers/user_authentication.php" method="POST">
					<input type="text" name="user_name" placeholder="Username">
					<input type="password" name="user_pw" placeholder="Password">
					<button type="submit" class="icon-btn"><span class="glyphicon glyphicon-arrow-right"></span></button>
				</form>
			</div>
		</div>
	</body>
</html>