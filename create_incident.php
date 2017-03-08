<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect.php");
	include("php/session_check.php");
?>

<div class="container">
	<form action="" method="POST" role="form">
		<legend>Report an Incident</legend>
	
		<div class="form-group">
			<label for="">Firstname</label>
			<input type="text" class="form-control" id="" name="firstname" placeholder="Input child's Firstname">
			<label for="">Middlename</label>
			<input type="text" class="form-control" id="" name="middlename" placeholder="Input child's Middlename">
			<label for="">Lastname</label>
			<input type="text" class="form-control" id="" name="lastname" placeholder="Input child's Lastname">
			<label for="">Prefix</label>
			<input type="text" class="form-control" id="" name="prefix" placeholder="Input child's Prefix">
			<label for="">Birthdate</label>
			<input type="text" class="form-control" id="" name="birthdate" placeholder="Input child's Birthdate (03/01/2017 MM/DD/YYYY)">
			<label for="">Child Age</label>
			<input type="text" class="form-control" id="" name="age" placeholder="Input child's Child Age">
			<label for="">Firstname</label>
			<input type="text" class="form-control" id="" name="firstname" placeholder="Input child's Firstname">
			<label for="">Middlename</label>
			<input type="text" class="form-control" id="" name="firstname" placeholder="Input child's Middlename">
		</div>

	
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php
	include("partial_view/essentials-footer.html");
?>