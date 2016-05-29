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
			<div class="panel-heading"><h4> User Page </h4></div>
				
				<a href="user_list.php"><img src="img/seeproduct.jpg" width="500px;" /></a>
				<a href="user_edit.php"><img src="img/editaccount.jpg" width="500px;" /></a>
			
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