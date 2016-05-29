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
	<title>Q6 : DETAILS</title>
</head>
<body>
	<div class="container" style="text-align : center;">
	<h2>Emma Bank</h2>
<?php 
	echo "<h3 style='text-align : center;'>Hello!! <strong>".$_SESSION['user_name']."</strong> Welcome :-)</h3>";
  ?>
   	<form method="post" action="index.php">
	<div class="panel panel-primary">

		<div class="panel-heading"><h3>[ D E T A I L S ]</h3></div>

		<div class="panel-body">
			<table class="table table-striped table-bordered">
<?php		if($_SESSION['user_name'] == ''){
				echo "<tr><td><h4 style='text-align : center;'>Create your account first</h4></td>
				</tr>
				</table>";
			} else {
?>
				<tr>	
					<td>User Name</td>		
					<td><?php echo "$user_name"; ?></td>			
				</tr>
				<tr>	
					<td>Address</td>		
					<td><?php echo "$user_address"; ?></td>			
				</tr>
				<tr>	
					<td>Phone</td>
					<td><?php echo "$user_phone"; ?></td>					
				</tr>
				<tr>	
					<td>Email</td>	
					<td><?php echo "$user_email"; ?></td>				
				</tr>
				<tr>	
					<td>Account Number</td>	
					<td><?php echo "$user_accnumber"; ?></td>				
				</tr>
				<tr>	
					<td>Account Type</td>	
					<td><?php echo "$user_acctype"; ?></td>				
				</tr>
				<tr>	
					<td>Balance</td>	
					<td>$ <?php echo "$user_balance"; ?></td>				
				</tr>
			</table>
<?php
	} 
?>
		</div>

		<div class="panel-footer">
			<a href="index.php"><div class="btn">Go Back</div></a>
		</div>

	</div>
	</form>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>