<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html>
<head>
	<title>
		USER LIST
	</title>

	<style>
		.container{
			margin : auto 0px center;
			width: 900px;
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
			<div class="panel-heading"><h4> User List </h4></div>
<?php

	$MyCon = mysql_connect("localhost", "root", "");
	if(!$MyCon){
		die("Connection Failed: ".mysql_error());
	}
	mysql_select_db("tasman", $MyCon);

	$select_query = "SELECT * FROM grocery_user";
	$select = mysql_query($select_query);	

	if ($select) {
		if (mysql_num_rows($select) > 0) {

?>

	<table class="table table-striped table-bordered" style="text-align:center;">
		<thead>
			<tr>
				<th>Id</th>
				<th>Password</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Edit</th>
				<th>Remove</th>
			</tr>
		</thead>
		<tbody>
	<?php
		while($row = mysql_fetch_array($select)) {
				print "
			<tr>
				<td>".$row['user_id']."</td>
				<td>".$row['user_pw']."</td>
				<td>".$row['user_name']."</td>
				<td>".$row['user_email']."</td>
				<td>".$row['user_phone']."</td>
				<td>".$row['user_address']."</td>
				<td><a href='user_edit.php?user_id=$row[user_id]'><button type='button' class='btn btn-default btn-default' name='edit'>Edit</button></a></td>
				<td>
				<a href='user_delete.php?user_id=$row[user_id]'><input type='submit' class='btn btn-danger' name='remove' value='Remove' /></a></td>
				
			</tr>";
		}
	} else {
	echo "<table><h4 style='text-align : center;'>There's no user";
	}
} 

?>

	</tbody>
	</table>	
		<div class="panel-footer">
			<div class="center-block text-center">
				<a href="admin_page.php" class="btn btn-success" name="pre">Back to Admin Page</a>	
			</div>	
		</div>		
		</div>
	</div>


</body>
<footer class="center-block text-center">
	<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
</footer>
</html>


