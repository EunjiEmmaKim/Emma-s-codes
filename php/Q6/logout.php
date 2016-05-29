<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
	session_start();
	session_unset();
?>

<style>

	body{
		background-image: url("img/back6.png");
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

<!DOCTYPE html>
<html>
<head>
	<title>Q6 : LOG OUT</title>
</head>
<body>
	<div class="container" style="text-align : center;">
	<h2>Emma Bank</h2>
	<h3>Good Bye!</h3>
	<h5 class='alert alert-danger' role='alert' style='text-align : center;'>Logged out successfully!</h5>

	<div class="panel panel-primary">

		<div class="panel-heading"><h3>Bank Service</h3></div>

		<div class="panel-body">
			<a href="index.php"><div class="btn">Go Back to MENU</div></a>
		</div>

	</div>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>


</html>