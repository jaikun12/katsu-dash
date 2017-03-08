<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_r.php");
	include("php/session_check.php");
?>

<div class="container">
	<form action="php/record_incident.php" method="POST" role="form">
		<legend>Record Incident</legend>
	
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
			<label for="">Age</label>
			<input type="text" class="form-control" id="" name="age" placeholder="Input Child's Child Age (at the commision of crime)">
			<label for="">Sex</label>
			<select class="form-control" name="child_sex">
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
			<label for="">Religion</label>
			<input type="text" class="form-control" id="" name="religion" placeholder="Input Child's Religion">
		</div>
		<br>
		<div class="form-group">
		<h4>Location (where the crime happened/where the child was rescued)</h4>
			<label for="">Province</label>
			<select class="form-control" id="province" name="child_province">
				<option disabled selected>Choose province</option>
				<option value="abra">Abra</option>
				<option value="agusan-del-norte">Agusan Del Norte</option>
				<option value="agusan-del-sur">Agusan Del Sur</option>
				<option value="aklan">Aklan</option>
				<option value="albay">Albay</option>
				<option value="antique">Antique</option>
				<option value="apayao">Apayao</option>
				<option value="aurora">Aurora</option>
				<option value="basilan">Basilan</option>
				<option value="bataan">Bataan</option>
				<option value="batanes">Batanes</option>
				<option value="batangas">Batangas</option>
				<option value="benguet">Benguet</option>
				<option value="biliran">Biliran</option>
				<option value="bohol">Bohol</option>
				<option value="bukidnon">Bukidnon</option>
				<option value="bulacan">Bulacan</option>
				<option value="cagayan">Cagayan</option>
				<option value="camarines-norte">Camarines Norte</option>
				<option value="camarines-sur">Camarines Sur</option>
				<option value="camiguin">Camiguin</option>
				<option value="capiz">Capiz</option>
				<option value="catanduanes">Catanduanes</option>
				<option value="cavite">Cavite</option>
				<option value="cebu">Cebu</option>
				<option value="compostela-valley">Compostela Valley</option>
				<option value="cotobato">Cotobato</option>
				<option value="davao-del-norte">Davao Del Norte</option>
				<option value="davao-del-sur">Davao Del Sur</option>
				<option value="davao-oriental">Davao Oriental</option>
				<option value="dinagat-islands">Dinagat Islands</option>
				<option value="eastern-samar">Eastern Samar</option>
				<option value="guimaras">Guimaras</option>
				<option value="ifugao">Ifugao</option>
				<option value="ilocos-norte">Ilocos Norte</option>
				<option value="ilocos-sur">Ilocos Sur</option>
				<option value="iloilo">Iloilo</option>
				<option value="isabela">Isabela</option>
				<option value="kalinga">Kalinga</option>
				<option value="la-union">La Union</option>
				<option value="laguna">Laguna</option>
				<option value="lanao-del-norte">Lanao Del Norte</option>
				<option value="lanao-del-sur">Lanao Del Sur</option>
				<option value="leyte">Leyte</option>
				<option value="maguindanao">Maguindanao</option>
				<option value="marinduque">Marinduque</option>
				<option value="masbate">Masbate</option>
				<option value="metro-manila">Metro Manila</option>
				<option value="mindoro-occidental">Mindoro Occidental</option>
				<option value="mindoro-oriental">Mindoro Oriental</option>
				<option value="misamis-occidental">Misamis Occidental</option>
				<option value="misamis-oriental">Misamis Oriental</option>
				<option value="mountain-province">Mountain Province</option>
				<option value="negros-occidental">Negros Occidental</option>
				<option value="negros-oriental">Negros Oriental</option>
				<option value="northern-samar">Northern Samar</option>
				<option value="nueva-ecija">Nueva Ecija</option>
				<option value="nueva-viscaya">Nueva Vizcaya</option>
				<option value="palawan">Palawan</option>
				<option value="pampanga">Pampanga</option>
				<option value="pangasinan">Pangasinan</option>
				<option value="quezon">Quezon</option>
				<option value="quirino">Quirino</option>
				<option value="rizal">Rizal</option>
				<option value="romblon">Romblon</option>
				<option value="samar">Samar</option>
				<option value="sarangani">Sarangani</option>
				<option value="siquijor">Siquijor</option>
				<option value="sorosgon">Sorsogon</option>
				<option value="south-cotobato">South Cotobato</option>
				<option value="southern-leyte">Southern Leyte</option>
				<option value="sultan-kudarat">Sultan Kudarat</option>
				<option value="sulu">Sulu</option>
				<option value="surdelsur">Surigao Del Sur</option>
				<option value="surigao-del-norte">Surigao Del Norte</option>
				<option value="tarlac">Tarlac</option>
				<option value="tawitawi">Tawi-tawi</option>
				<option value="zambales">Zambales</option>
				<option value="zamboanga-del-norte">Zamboanga Del Norte</option>
				<option value="zamboanga-del-sur">Zamboanga Del Sur</option>
				<option value="zamboanga-sibugay">Zamboanga Sibugay</option>


			</select>
			<label for="">Place of Origin/Child's Home Address</label>
			<textarea type="text" class="form-control" id="" name="child_address" placeholder="Input Child's Home Address (Where the child resides before the victimization"></textarea>
		</div>
		<br>
		<div class="form-group">
			<h4>Case Information</h4>
			<label for="">*Type of Case</label>
			<input type="text" class="form-control" id="" name="type_of_case" placeholder="Input Child's Type of Case">
			<label for="">Case Scenario or Modes of Victimization</label>
			<input type="text" class="form-control" id="" name="case_scenario" placeholder="Input Child's Case Scenario or Modes of Victimization (e.g. Webcam/online live sex shows,  grooming)">
			<label for="">Perpetrators</label>
			<input type="text" class="form-control" id="" name="perpetrators" placeholder="Input Child's Perpetrators (e.g. Parents/relatives, paedophile, syndicated)">
			<label for="">Case Origin</label>
			<input type="text" class="form-control" id="" name="case_origin" placeholder="Input Child's Case Origin (PNP, DSWD, NBI, etc.)">
			<br>
			<label for="">Cooperating Agencies/ Organziations</label>
			<input type="text" class="form-control" id="" name="cooperating_agencies" placeholder="Input Child's Cooperating Agencies/ Organziations">
			<label for="">Interventions Provided</label>
			<input type="text" class="form-control" id="" name="intervention" placeholder="Input Child's Interventions Provided (e.g. Medical, psychosocial support, counselling, temporary shelter, livelihood, etc.)">
			<label for="">Status of the Case </label>
			<select class="form-control" name="case_status">
				<option disabled selected>Choose case status</option>
				<option value="ongoing-case">Ongoing Court Case</option>
				<option value="dismissed">Dismissed</option>
				<option value="ongoing-rehabilitation">Ongoing Rehabilitation</option>
				<option value="reintegrated">Reintegrated</option>
				<option value="resolved">Resolved</option>
			</select>
			
		</div>
		<br>
		<button type="submit" class="btn btn-primary">REPORT</button>
	</form>
</div>

<?php
	include("partial_view/essentials-footer.html");
?>