<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<?php 

	include("functions.php");

	session_start();
	error_reporting(0);
	extract($_POST);

	$user_id = $_SESSION['user_id'];
	$user_pw = $_SESSION['user_pw'];
	$user_name = $_SESSION['user_name'];
	$user_email = $_SESSION['user_email'];
	$user_phone = $_SESSION['user_phone'];
	$user_address = $_SESSION['user_address'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		ADMIN PAGE
	</title>

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
		<h2 style='margin-top : 30px; margin-bottom : 30px;'>
		<a href="index.php"><img src="img/home.png" width="50px;"/></a>
		<img src="img/title.png" width="400px;"/></h2>

		<div class="panel panel-primary">
			<div class="panel-heading"><h4> Admin Page </h4></div>
			<?php echo "Hello".$_SESSION['user_id']; ?>
				<a href="admin_brand.php"><img src="img/brand2.jpg" width="500px;" /></a>
				<a href="admin_product.php"><img src="img/product.jpg" width="500px;" /></a>
				<a href="admin_list.php"><img src="img/list.jpg" width="500px;" /></a>
				<a href="admin_userlist.php"><img src="img/userlist.jpg" width="500px;" /></a>
			<div class="panel-footer">
				<a href="index.php"><div class="btn">Go Back</div></a>	
			</div>		
		</div>
	</div>
</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>