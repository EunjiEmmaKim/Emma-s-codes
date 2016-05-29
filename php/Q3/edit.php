<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>

<head>
	<title>Edit</title>
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
	
	<h2 style="text-align : center;">Edit Page</h2>
	<div class="container">
<?php
	$MyCon = mysql_connect("localhost", "root", "");
	if(!$MyCon){
		die("Connection Failed: ".mysql_error());
	}
	mysql_select_db("tasman", $MyCon);

	// Check for form submission
	if (isset($_POST['edit'])) {
		$update_query = "UPDATE book SET name = '".$_POST['name']."', address = '".$_POST['address']."', phone = '".$_POST['phone']."', email = '".$_POST['email']."' WHERE id = ".$_GET['id'];
		$update = mysql_query($update_query);

		echo "<h5 class='alert alert-info' role='alert' style='text-align : center; text-color: #31B404;'>Data has been edited successfully!</h4>";

		// header("Location: http://localhost:8080/KimEunji(Emma)MP605/Q3/index.php");
		// die();
	}

	$select_query = "SELECT * FROM book WHERE id = ".$_GET['id'];
	$select = mysql_query($select_query);	

	if ($select) {
		$data = mysql_fetch_array($select);
	?>

		<form method="POST">
			<table class="table table-striped table-bordered" style="text-align:center;">
			<div class="row" class="form-group">
				<tr>
					<td><label>Name</label></td>
					<td><input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>" /></td>
				</tr>
			</div>

			<div class="row" class="form-group">
				<tr>
					<td><label>Address</label></td>
					<td><input type="text" name="address" class="form-control" value="<?php echo $data['address'];?>" /></td>
				</tr>
			</div>

			<div class="row" class="form-group">
				<tr>
					<td><label>Phone</label></td>
					<td><input type="text" name="phone" required title="10~11 numbers only" pattern="[0-9]{10,11}" class="form-control" value="<?php echo $data['phone'];?>" /></td>
				</tr>
			</div>

			<div class="row" class="form-group">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" class="form-control" value="<?php echo $data['email'];?>" /></td>
				</tr>
			</div>
			</table>
			<div class="center-block text-center">
				<input type="submit" name="edit" value="Edit" class='btn btn-default'/>
				<a href="index.php" class="btn btn-info" name="back" value="List">List</a>	
			</div>

		</form>		
	</div>
</body>
</html>				

<?php
} else {
	echo 'error';
}

?>