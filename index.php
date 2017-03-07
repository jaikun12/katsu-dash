<?php
	include("partial_view/essentials-upper.html");
?>

	<div class="main-container">
		<img src="file_includes/images/dswdlogo.png" class="main-logo">
		<h1>Anti-ChildPorn Dashboard</h1>

		<div class="form-wrap">
			<form action="php/user_authentication.php" method="POST">
				<input type="text" name="username" placeholder="Username">
				<input type="password" name="password" placeholder="Password">
				<button type="submit" class="icon-btn"><span class="glyphicon glyphicon-arrow-right"></span></button>
			</form>
		</div>
	</div>

<?php
	include("partial_view/essentials-footer.html"); 
?>