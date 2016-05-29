<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Add New</title>

	<style>

		body{
			background-image: url("img/back.png");
			background-repeat: repeat;
			font-family : Century Gothic;

		}

		.container{
			background-color : white;
			border-radius: 20px;
			width : 800px;
			margin-bottom : 100px;
		}

		.table{
			margin-top: 30px;
		}


	</style>

</head>
<body>
	<h2 style="text-align : center;">Add New User</h2>
	<div class="container">
		<?php
		
		$MyCon = mysql_connect("localhost", "root", "");
		if(!$MyCon){
			die("Connection Failed: ".mysql_error());
		}
		mysql_select_db("tasman", $MyCon);

		// Check for form submission
		if (isset($_POST['add'])) {
			$insert_query = "INSERT INTO book (name, address, phone, email) VALUES ('".$_POST["new_name"]."','".$_POST["new_address"]."','".$_POST["new_phone"]."','".$_POST["new_email"]."')";
			$insert = mysql_query($insert_query);

			echo "<h5 class='alert alert-success' role='alert' style='text-align : center; text-color: #31B404;'>Data has been added successfully!</h4>";
		}

	?>
			<form method="POST" role="form">
				
				<table class="table table-striped table-bordered"  style="text-align:center;">
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" class="form-control" required title="Enter your name" name="new_name" /></td>			
					</tr>
				
					<tr>
						<td><label>Address</label></td>
						<td><input type="text" class="form-control" required title="Enter your address" name="new_address" /></td>
					</tr>
			
					<tr>
						<td><label>Phone</label></td>
						<td><input type="text" class="form-control" required title="10~11 numbers only" pattern="[0-9]{10,11}" name="new_phone" /></td>
					</tr>
			
					<tr>
						<td><label>Email</label></td>
						<td><input type="email" class="form-control" required title="Enter your email" name="new_email" /></td>
					</tr>
				</table>
		
				
				<div class="center-block text-center">
					<input type="submit" class="btn btn-default" name="add" value="Add" />
					<a href="index.php" class="btn btn-info" name="back" value="List">List</a>				
				</div>

			</form>
		</div>


</body>
</html>