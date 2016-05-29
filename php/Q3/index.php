<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<!DOCTYPE html>
<html>
<head>
	<title>Q3 Address Book</title>

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

		.btn{
			margin : 10px;
		}


	</style>

</head>
<body>
	<h2 style="text-align : center;">Address Book</h2>
	<div class="container">
<?php

	$MyCon = mysql_connect("localhost", "root", "");
	if(!$MyCon){
		die("Connection Failed: ".mysql_error());
	}
	mysql_select_db("tasman", $MyCon);

	$select_query = "SELECT * FROM book";
	$select = mysql_query($select_query);
	

	if ($select) {
		if (mysql_num_rows($select) > 0) {
?>
	<a href='new.php'><button type='button' class='btn btn-success pull-right'>Add</button></a>
	<br><br>

	<table class="table table-striped table-bordered" style="text-align:center;">
		<thead>
			<tr>
				<td>Name</td>
				<td>Address</td>
				<td>Phone</td>
				<td>Email</td>
				<td>Edit</td>
				<td>Remove</td>
			</tr>
		</thead>
		<tbody>
	<?php
		while($row = mysql_fetch_array($select)) {
				print "
			<tr>
				<td>".$row['name']."</td>
				<td>".$row['address']."</td>
				<td>".$row['phone']."</td>
				<td>".$row['email']."</td>
				<td><a href=\"edit.php?id=$row[id]\" class=\"btn btn-default\" name=\"edit\">Edit</a></td>
				<td><a href=\"delete.php?id=$row[id]\" class=\"btn btn-danger\" name=\"remove\">Remove</a></td>
			</tr>";
		}
	} else {
	echo "<h4 style='text-align : center;'>There's no data
	<a href='new.php'><button type='button' class='btn btn-success'>Add New</button></a></h4>";
	}
} 

?>

	</tbody>
	</table>	

	</div>

</body>
</html>
