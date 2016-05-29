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
		ADD PRODUCT
	</title>

	<style>
		body{
			background-image: url("img/back.png");
			background-repeat: repeat;
			font-family : Century Gothic;
		}

		.container{
			margin : auto 0px center;
			width: 700px;
			text-align : center;
		}

		.panel{
			margin : auto 0px center;
			width : 100%;
		}

		textarea{
			width:200px;
			height:100px;
			resize : none;
		}


	</style>

</head>
<body>

	<form method="POST" name="f1" action="admin_product.php">
	<div class="container" style="text-align : center;">
		<h2><a href="index.php"><img src="img/home.png" width="50px;"/></a>
		<img src="img/title.png" width="400px;"/></h2>

		<img src="img/grocery.jpg" class="img-thumbnail" alt="Grocery Store" width="304" height="236" />
		<br><br>
		
		<div class="panel panel-primary">
			<div class="panel-heading"><h4>Add Product</h4></div>
			<div class="panel-body">
		<table class="table table-striped table-bordered">
		<tbody>
			<tr>
				<td>Brand</td>
				<td><select name = "brand">	
<?php
			
		include 'db.php';

		$select_query = mysql_query("SELECT * FROM grocery_brand");

		if (mysql_num_rows($select_query) < 1) {
						echo "<option>No brand</option>";
			} else {
				while($row = mysql_fetch_array($select_query)) 					
				print "<option value=".$row['brand_id'].">".$row['brand_name']."</option>";						
			}
		
	?>			
			</select></td>
			</tr>
			<tr>
				<td>Product id</td>
				<td><input type="text" name="product_id" required title="Enter the product ID" /></td>
			</tr>
			<tr>
				<td>Product name</td>
				<td> <input type="text" name="product_name" required title="Enter the product Name" /></td>
			</tr>
			<tr>
				<td>Product description</td>
				<td> <textarea name="product_desc" required title="Enter the product Description" /></textarea></td>
			</tr>
			<tr>
				<td>Product price</td>
				<td>$<input type="text" name="product_price" required title="Enter the product Price" /></td>
			</tr>
		</tbody>
	</table>			

<?php
		admin_product();
?>	
	</div>

	<div class="panel-footer">
			<div class="center-block text-center">	
				<a href="admin_page.php" class="btn btn-success" name="pre">Back to Admin Page</a>	
				<input type="submit" class= "btn btn-primary" name="add" value="Add" />			
			</div>			
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
