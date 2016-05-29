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

<style>

		.container{
			margin : auto 0px center;
			width: 550px;
			text-align : center;
		}

		.panel{
			margin : auto 0px center;
			width : 100%;
		}

		body{
			background-image: url("img/back6.png");
			background-repeat: repeat;
			font-family : Century Gothic;
		}
		.btn{
			margin-bottom: 0px;
		}

</style>

<!DOCTYPE html>
<html>
<head>
	<title>Q6 : MENU</title>
</head>
<body>
	<div class="container" style="text-align : center;">
	<h2>Emma Bank</h2>
	<form method="post" action="index.php">

<?php 	
	echo "<h3 style='text-align : center;'>Hello!! <strong>$user_name</strong> Welcome :-)</h3>";
?>
   
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>[ M E N U ]</h3></div>
		<div class="panel-body">
			<table class="table table-striped table-bordered">
				<tr>	
					<td>1. Create an account</td>					
				</tr>
				<tr>	
					<td>2. Deposit money</td>					
				</tr>
				<tr>	
					<td>3. Withdraw money</td>					
				</tr>
				<tr>	
					<td>4. Display balance</td>					
				</tr>
				<tr>	
					<td>5. Display customer's details</td>					
				</tr>
				<tr>	
					<td>6. Exit</td>					
				</tr>
			</table>
		</div>
		<div class="panel-footer">
			<input type="text" name="menu" /><input type="submit" name="submit" value="submit" />
		</div>
	</div>
	</form>
	</div>

</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>

<?php


	
if(isset($_POST['submit'])) {
	if($_POST['menu'] == "1"){
		echo "<meta http-equiv='refresh' content='0;url=create.php'>";
	}

	if($_POST['menu'] == "2"){
		echo "<meta http-equiv='refresh' content='0;url=deposit.php'>";
	}

	if($_POST['menu'] == "3"){
		echo "<meta http-equiv='refresh' content='0;url=withdraw.php'>";
	}

	if($_POST['menu'] == "4"){
		echo "<meta http-equiv='refresh' content='0;url=balance.php'>";
	}

	if($_POST['menu'] == "5"){
		echo "<meta http-equiv='refresh' content='0;url=details.php'>";
	}

	if($_POST['menu'] == "6"){
		echo "<meta http-equiv='refresh' content='0;url=logout.php'>";
	}
}
?>



