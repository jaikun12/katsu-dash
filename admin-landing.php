<?php
	include("partial_view/essentials-upper.html");
	include("php/dbconnect_r.php");
	include("php/session_check.php");
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="main-container">
	<img src="file_includes/images/dswdlogo.png" class="main-logo">
	<h1>Admin Dashboard</h1>
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
	<div class="container" id="users-table">
		<h3>User List</h3>
		<table class="table table-hover" style="max-width: 90% !important;">
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
		<button class="btn-primary" data-toggle="modal" data-target="#user-modal">Add User</button>
	</div>
	<div class="container">
		<?php include("php/chatbot_charts.php"); ?>
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