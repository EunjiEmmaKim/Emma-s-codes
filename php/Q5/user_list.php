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
	<title>
		USER PAGE
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
	<form action="user_list.php" method="POST">
		<div class="container" style="text-align : center;">
		<h2><a href="index.php"><img src="img/home.png" width="50px;"/></a>
		<img src="img/title.png" width="400px;"/></h2>

		<img src="img/grocery.jpg" class="img-thumbnail" alt="Grocery Store" width="304" height="236" /> 
		<br><br>
		<div class="panel panel-primary">
			<div class="panel-heading"><h4>User Page : Select Item</h4></div>
			<div class="panel-body">
		<table class="table table-striped table-bordered">
		<tbody>
			<tr>
				<td colspan=2><center><strong>Select what you want to see.</strong></center></td>
			</tr>
			<tr>
				<td>Brand Name</td>
				<td>
		<ul>
			<?php
				userget_brand();	
			?>
		</ul>		
		</td>
			</tr>
			</tbody>
		</table>

		<table class="table table-striped table-bordered">			
			<?php
				get_product();
			?>
		</table>
		</div>
			<div class="panel-footer">			
				<div class="center-block text-center">	
				<a href="user_page.php" class="btn btn-warning" name="pre">Back to User Page</a>	
			</div>	
			</div>
		</div>
		</div>
		</form>
</body>
	<footer class="center-block text-center">
		<h6>copyright © EUNJI KIM (EMMA), 2016</h6>
	</footer>
</html>