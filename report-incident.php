<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_r.php");
	include("php/session_check.php");
?>

<div class="container">
	<form action="php/record_incident.php" method="POST" role="form">
		<legend>Report an Incident</legend>
	
		<div class="form-group">
			<h4>Name of Child</h4>
			<label for="">Firstname</label>
			<input type="text" class="form-control" id="" name="firstname" placeholder="Input Child's Firstname">
			<label for="">Middlename</label>
			<input type="text" class="form-control" id="" name="middlename" placeholder="Input Child's Middlename">
			<label for="">Lastname</label>
			<input type="text" class="form-control" id="" name="lastname" placeholder="Input Child's Lastname">
		</div>
		<br>
		<div class="form-group">
			<label for="">Prefix</label>
			<input type="text" class="form-control" id="" name="prefix" placeholder="Input Child's Prefix">
			<label for="">Birthdate</label>
			<input type="text" class="form-control" id="" name="birthdate" placeholder="Input Child's Birthdate (03/01/2017 MM/DD/YYYY)">
			<label for="">Age</label>
			<input type="text" class="form-control" id="" name="age" placeholder="Input Child's Child Age (at the commision of crime)">
			<label for="">Sex</label>
			<input type="text" class="form-control" id="" name="sex" placeholder="Input Child's Sex">
			<label for="">Religion</label>
			<input type="text" class="form-control" id="" name="religion" placeholder="Input Child's Religion">
		</div>
		<br>
		<div class="form-group">
		<h4>Location (where the crime happened/where the child was rescued)</h4>
			<label for="">Region</label>
			<input type="text" class="form-control" id="" name="region" placeholder="Input Child's Region">
			<label for="">Province</label>
			<input type="text" class="form-control" id="" name="province" placeholder="Input Child's Province">
			<label for="">City/Municipality</label>
			<input type="text" class="form-control" id="" name="city" placeholder="Input Child's City/Municipality">
			<label for="">Barangay</label>
			<input type="text" class="form-control" id="" name="barangay" placeholder="Input Child's Barangay">
		</div>
		<br>
		<div class="form-group">
			<label for="">Place of Origin/Child's Home Address</label>
			<input type="text" class="form-control" id="" name="place_of_origin" placeholder="Input Child's Home Address (Where the child resides before the victimization">
			<label for="">*Type of Case</label>
			<input type="text" class="form-control" id="" name="type_of_case" placeholder="Input Child's Type of Case">
			<label for="">Case Scenario or Modes of Victimization</label>
			<input type="text" class="form-control" id="" name="case_scenario" placeholder="Input Child's Case Scenario or Modes of Victimization (e.g. Webcam/online live sex shows,  grooming)">
			<label for="">Perpetrators</label>
			<input type="text" class="form-control" id="" name="perpetrators" placeholder="Input Child's Perpetrators (e.g. Parents/relatives, paedophile, syndicated)">
			<label for="">Case Origin</label>
			<input type="text" class="form-control" id="" name="case_origin" placeholder="Input Child's Case Origin (PNP, DSWD, NBI, etc.)">
			<br>
			<label for="">Date of Admission/Referral/Intake</label>
			<input type="text" class="form-control" id="" name="date_of_admission" placeholder="Input Child's Date of Admission/Referral/Intake">
			<label for="">Cooperating Agencies/ Organziations</label>
			<input type="text" class="form-control" id="" name="cooperating_agencies" placeholder="Input Child's Cooperating Agencies/ Organziations">
			<label for="">Interventions Provided</label>
			<input type="text" class="form-control" id="" name="interventions_provided" placeholder="Input Child's Interventions Provided (e.g. Medical, psychosocial support, counselling, temporary shelter, livelihood, etc.)">
			<label for="">Status of the Case</label>
			<input type="text" class="form-control" id="" name="status_of_case" placeholder="Input Child's Status of the Case (e.g. on-going court case, dismissed, on-going rehabilitation, reintegrated, etc.)">
		</div>
		<br>
		<button type="submit" class="btn btn-primary">REPORT</button>
	</form>
</div>

<?php
	include("partial_view/essentials-footer.html");
?>