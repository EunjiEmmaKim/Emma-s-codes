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
	<title>HOME</title>	

	<style>

		.container{
			margin : auto 0px center;
			width: 550px;
			text-align : center;
		}

		.panel{
			margin-left : 60px;
			margin-top : 20px;
			margin-bottom : 10px;
			width : 400px;
		}

		body{
			background-image: url("img/back.png");
			background-repeat: repeat;
			font-family : Century Gothic;
		}
		.btn{
			margin-bottom: 0px;
		}

	</style>

</head>
<body>
	<div class="container" style="text-align : center;">
		<h2><a href="index.php"><img src="img/home.png" width="50px;"/></a>
		<img src="img/title.png" width="400px;"/></h2>
		
		<img src="img/grocery.jpg" class="img-thumbnail" alt="Grocery Store" width="304" height="236"> 
			
		<div class="panel panel-primary">
			<div class="panel-heading"><h4>Log-in</h4></div>
			<div class="panel-body">
			<?php 
				login();
			?>
				<form method="POST" name="f1" action="index.php">
					<table class="table table-striped table-bordered" style="text-align:center;">
						<tr>
							<td><label for="id">ID</label></td>
							<td><input type="text" name="id" required title="Enter your ID"/></td>
							<td rowspan="2"><input type="submit" class="btn btn-info btn-md" name="signin" role="button" value="Sign In" style="margin-top:20px;"></td>
						</tr>
						<tr>
							<td><label for="pw">Password</label></td>
							<td><input type="password" name="pw" required title="Enter your Password"/></td>
						</tr>
					</table>	
				</form>	
			</div>		
			<div class="panel-footer">
				Join Our Awesome Grocery Store Online!  <a class="btn btn-success btn-md" role="button" href="user_signup.php" >Sign Up</a>
			</div>	
		</div>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>

