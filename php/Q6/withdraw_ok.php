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

?>

<!DOCTYPE html>
<html>
<head>
	<title>Q6 : WITHDRAW</title>

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
</head>
<body>
	<div class="container" style="text-align : center;">
	<h2>Emma Bank</h2>

<?php 	$user_name = $_SESSION['user_name'];
	echo "<h3 style='text-align : center;'>Hello!! <strong>$user_name</strong> Welcome :-)</h3>";

class Bank{
	public $name; 
	public $number;
	public $withdraw;
	public $balance;

  	function withdraw($wi){

  		echo "<div class='panel panel-primary'>
			  <div class='panel-heading'><h3>[ W I T H D R A W ]</h3></div>
			  	<div class='panel-body'>
			  		<table class='table table-striped table-bordered'>";

		if($_SESSION['user_name'] == ''){
			echo "<tr><td><h4 style='text-align : center;'>Create your account first</h4></td>
			</tr>
			</table>";
		}
		else{
			$this->balance = $_SESSION['user_balance'];
			if($wi > $this->balance ) {
				echo "<tr><td colspan=2><h4 style='text-align : center;'><strong>The Overdraft Facility is not available</strong></h4></td>
					  <tr><td>Your current balance </td> <td> $ ".$this->balance."</td></tr>
					  <tr><td>Amount requested to withdraw </td> <td> $ ".$wi."</td></tr>
			</tr>
			</table>";
			} else {
				echo "<tr><td>Your old balance </td><td> $".$this->balance."</td></tr>";
				$this->balance = $this->balance - $wi;
				$_SESSION['user_balance']=$this->balance;
				echo "<tr><td>We have withdrawed</td><td> $".$wi."</td></td> 
				      <tr><td>Your account number </td><td> ".$_SESSION['user_accnumber']."</td></tr>";
				echo "<tr><td><strong>Your new balance</strong></td><td>$".$this->balance."</td></tr></table>";
			}
		}
	}
}

if(isset($_POST["withdraw"])) {
	$emma_bank = new Bank();
	$emma_bank->withdraw($_POST["user_withdraw"]);
}

?>
		</div>
		<div class="panel-footer">
			<a href="index.php"><div class="btn">Go Back</div></a>
		</div>
	</div>

</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>



