<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php

	session_start();
	error_reporting(0);
	extract($_POST);

	$user_name = $_SESSION['user_name'];
	$user_address = $_SESSION['user_address'];
	$user_phone = $_SESSION['user_phone'];
	$user_email = $_SESSION['user_email'];
	$user_accnumber = $_SESSION['user_accnumber'];
	$user_acctype = $_SESSION['user_acctype'];
	$user_balance = $_SESSION['user_balance'];

?>

<html>
<head><title>Q6 : CREATE </title>
<style>
	body{
		background-image: url("img/back6.png");
		background-repeat: repeat;
		font-family : Century Gothic;
		}

	.container{
		margin : auto 0px center;
		width: 600px;
		text-align : center;
		}

	.table{
			margin-top: 30px;
		}

</style>

</head>
<body>
	<div class="container" style="text-align : center;">
	<h2>Emma Bank</h2>
		<div class="panel panel-primary">
		<div class="panel-heading"><h3>Create an account</h3></div>

			<form method="POST" role="form" name ="signup" action="create_ok.php">
				
				<table class="table table-striped table-bordered"  style="text-align:center;">
					<tr>
						<td><label>Name</label></td>
						<td><input type="text" class="form-control" required title="Enter your ID" name="user_name" /></td>
					</tr>

					<tr>
						<td><label>Address</label></td>
						<td><input type="text" class="form-control" required title="Enter your password" name="user_address" /></td>
					</tr>

					<tr>
						<td><label>Phone</label></td>
						<td><input type="text" class="form-control" required title="Enter your name" name="user_phone" /></td>			
					</tr>		

					<tr>
						<td><label>Email</label></td>
						<td><input type="email" class="form-control" required title="Enter your email" name="user_email" /></td>
					</tr>			
			
					<tr>
						<td><label>Account Number</label></td>
						<td><input type="text" class="form-control" required title="6 numbers only" pattern="[0-9]{6}" name="user_accnumber" /></td>
					</tr>

					<tr>
						<td><label>Account Type</label></td>
						<td><input type="text" class="form-control" required title="Enter your address" name="user_acctype" /></td>
					</tr>	

					<tr>
						<td><label>Balance ($)</label></td>
						<td><input type="text" class="form-control" required title="Enter your address" name="user_balance" /></td>
					</tr>					
				</table>		
				
		<div class="center-block text-center">
			<a href="index.php"><div class="btn" />Go Back</div></a>
			<input type="submit" class="btn btn-success" name="create" value="Submit" />
		</div>

			</form>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>