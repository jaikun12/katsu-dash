<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_r.php");
	include("php/session_check.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<nav>
			<div class="navbar">
			<ul>
				<a href="" class="brand"><li><img src="file_includes/images/dswdlogo.png" class="nav-logo"></li></a>
				<a href="admin-landing.php" class="active"><li>Home</li></a>
				<a href="report-incident.php"><li>Record Incident</li></a>
				<a href="map.php"><li>Case Mapping</li></a>
				<a href="katsu_answers_charts.php"><li>Chatbot Charts</li></a>
				<a href="webtoons-summary"><li>Webtoons Summary</li></a>
				<a href="php/logout.php"><li>Logout</li></a>
			</ul>
			</div>
		</nav>
<div class="landing-main">
	<div class="content-area">
	<div class="modal fade" id="user-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="container-fluid">
						<!-- <div class="container" id="add-user-content"> -->
						<form action="php/create_account.php" method="POST" role="form">
							<legend>Add a user or an admin</legend>
							
							<div class="form-group">
								<label for="">Username</label>
								<input name="username" type="text" class="form-control" id="" placeholder="Input username" required>
								<label for="">Password</label>
								<input name="password" type="password" class="form-control" id="" placeholder="Input password" required>
								<div class="radio">
									<label>
										<input type="radio" name="isadmin" id="" value="1" checked>
										Admin
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="isadmin" id="" value="0">
										User
									</label>
								</div>
								
								<label for="">First Name</label>
								<input name="firstname" type="text" class="form-control" id="" placeholder="Input username" required>
								<label for="">Middle Name</label>
								<input name="middlename" type="text" class="form-control" id="" placeholder="Input username">
								<label for="">Last Name</label>
								<input name="lastname" type="text" class="form-control" id="" placeholder="Input username" required>
								<label for="">Contact Number</label>
								<input name="contact_num" type="text" class="form-control" id="" placeholder="Input username" required>
								<label for="">E-mail</label>
								<input name="email" type="text" class="form-control" id="" placeholder="Input username" required>
							</div>
							
							<button type="submit" class="btn btn-primary">Add User</button>
						</form>
						<!-- </div> -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- </div> -->
		<h3>User List</h3>
		<table id="users-table" class="table table-hover">
			<thead>
				<tr>
					<th>Username</th>
					<th>Type</th>
					<th>Name</th>
					<th>Contact #</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM reports_users_table;");
					while($r = mysqli_fetch_array($query)){
						if($r['is_active']==0){
						}else{
							$username = $r['username'];
							$output_admin = $r['is_admin'];
							if($output_admin==0){
								$is_admin = "Employee";
							}elseif($output_admin==1){
								$is_admin = "Administrator";
							}else{
							}
							$firstname = $r['firstname'];
							$middlename = $r['middlename'];
							$lastname = $r['lastname'];
							$name = $lastname . ", " . $firstname . " ". $middlename;
							$contact_num = $r['contact_num'];
							$email = $r['email'];
							echo "
							<tr>
									<td>" . $username . "</td>
									<td>" . $is_admin . "</td>
									<td>" . $name . "</td>
									<td>" . $contact_num . "</td>
									<td>" . $email . "</td>
							</tr>
							";
						}
					}
				?>
			</tbody>
		</table>


		<button class="primary-button" data-toggle="modal" data-target="#user-modal">Add User</button>

		<button class="primary-button" data-toggle="modal" data-target="#disableuser-modal">Disable User</button>

		<div class="modal fade" id="disableuser-modal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="container-fluid">

							<form action="php/disable_user.php" method="POST" role="form">
								<legend>Disable a user or an admin</legend>

								<?php include("partial_view/disabled_users_option.php"); ?> <br><br>

								<button type="submit" class="btn btn-primary">Disable User</button>

							</form>

						</div>
					</div>
					
				</div>
			</div>
		</div>

		<br><br>

		<h3>Short incidents summary</h3>

		<table id="users-table" class="table table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Sex</th>
					<th>province</th>
					<th>Mode of victimization</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($connection, "SELECT * FROM reports_incidents_table;");
					while($r = mysqli_fetch_array($query)){
						
							$name = $r['child_firstname']." ".$r['child_middlename']." ".$r['child_lastname'];
							$age = $r['child_age'];
							$sex = $r['child_sex'];
							$province = $r['child_province'];
							$mode = $r['child_modes_of_victimization'];
							echo "
							<tr>
									<td>" . $name . "</td>
									<td>" . $age . "</td>
									<td>" . $sex . "</td>
									<td>" . $province . "</td>
									<td>" . $mode . "</td>
							</tr>
							";
						}
				?>
			</tbody>
		</table>

		</div>



		<div class="info-panel">
			<h3>Hello admin!</h3>
			<p>Welcome to the anti child porn PH report generating platform.</p>
			<p>The user list shown on the left shows the current active accounts that could access the system.</p>
			<p>Proceed to the case mapping page to view a heatmap of child pornography cases in the Philippines.</p>

			<h4 style="margin-top: 50px;color:red !important;">
			<?php include("php/status.php"); ?>
			</h4>
		</div>
</div>
<script>
	$(document).ready(function(){
		$("#hide").click(function(){
			$("p").hide(1000);
		});
		$("#show").click(function(){
			$("p").show(500);
		});
	});
</script>
<?php
	include("partial_view/essentials-footer.html");
?>