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

	$_SESSION['user_name'] = $user_name;
	$_SESSION['user_address'] = $user_address;
	$_SESSION['user_phone'] = $user_phone;
	$_SESSION['user_email'] = $user_email;
	$_SESSION['user_accnumber'] = $user_accnumber;
	$_SESSION['user_acctype'] = $user_acctype;
	$_SESSION['user_balance'] = $user_balance;

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

class Bank{
	public $name; 
	public $address;
	public $phone;
	public $email;
	public $number;
	public $type;
	public $balance;

   	function create($na, $ad, $ph, $em, $nu, $ty, $ba){
		echo "
        <h3 style='text-align : center;'>Hello!! <strong>".$_SESSION['user_name']."</strong> Welcome :-)</h3>
		<div class='panel panel-primary'>
		<div class='panel-heading'><h3>[ D E T A I L S ]</h3></div>
		<div class='panel-body'>
			<table class='table table-striped table-bordered'>
				<tr>	
					<td>User Name</td>		
					<td>".$this->name = $na."</td>			
				</tr>
				<tr>	
					<td>Address</td>		
					<td>".$this->address = $ad."</td>			
				</tr>
				<tr>	
					<td>Phone</td>
					<td>".$this->phone = $ph."</td>					
				</tr>
				<tr>	
					<td>Email</td>	
					<td>".$this->email = $em."</td>				
				</tr>
				<tr>	
					<td>Account Number</td>	
					<td>".$this->number = $nu."</td>				
				</tr>
				<tr>	
					<td>Account Type</td>	
					<td>".$this->type = $ty."</td>				
				</tr>
				<tr>	
					<td>Balance</td>	
					<td> $ ".$this->balance = $ba."</td>				
				</tr>
			</table>
		</div>
		<div class='panel-footer'>
			<a href='index.php'><div class='btn'>Go Back</div></a>
		</div>
	</div>";

	}
}

if(isset($_POST["create"])) {
	$emma_bank = new Bank();
	$emma_bank->create($_POST["user_name"], $_POST["user_address"], $_POST["user_phone"], $_POST["user_email"], $_POST["user_accnumber"],$_POST["user_acctype"],$_POST["user_balance"]);
}

?>



