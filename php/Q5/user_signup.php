<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php
	include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>USER SIGN UP</title>

	<style>

		body{
			background-image: url("img/back.png");
			background-repeat: repeat;
			font-family : Century Gothic;

		}

		.container{
			margin : auto 0px center;
			width: 550px;
			text-align : center;
		}

		.table{
			margin-top: 30px;
		}


	</style>

</head>
<body>
	<div class="container" style="text-align : center;">
		<h2><a href="index.php"><img src="img/home.png" width="50px;"/></a>
		<img src="img/title.png" width="400px;"/></h2>
		<div class="panel panel-primary">
		<div class="panel-heading">Sign Up</div>

			<form method="POST" role="form" name ="signup">
				
				<table class="table table-striped table-bordered"  style="text-align:center;">
					<tr>
						<td><label>ID</label></td>
						<td><input type="text" class="form-control" required title="Enter your ID" name="user_id" /></td>
					</tr>

					<tr>
						<td><label>Password</label></td>
						<td><input type="password" class="form-control" required title="Enter your password" name="user_pw" /></td>
					</tr>

					<tr>
						<td><label>Name</label></td>
						<td><input type="text" class="form-control" required title="Enter your name" name="user_name" /></td>			
					</tr>		

					<tr>
						<td><label>Email</label></td>
						<td><input type="email" class="form-control" required title="Enter your email" name="user_email" /></td>
					</tr>			
			
					<tr>
						<td><label>Phone</label></td>
						<td><input type="text" class="form-control" required title="10~11 numbers only" pattern="[0-9]{10,11}" name="user_phone" /></td>
					</tr>

					<tr>
						<td><label>Address</label></td>
						<td><input type="text" class="form-control" required title="Enter your address" name="user_address" /></td>
					</tr>			
					
				</table>		
		<?php
		user_signup();
		?>
				
				<div class="center-block text-center">
					<a href="index.php"><div class="btn">Go Back</div></a>	
					<input type="submit" class="btn btn-success" name="user_submit" value="Submit" />
				</div>

			</form>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>