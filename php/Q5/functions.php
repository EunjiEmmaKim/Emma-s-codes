
<?php

	function admin_brand(){

	include 'db.php';

	if (isset($_POST['add'])) {

		$brand_check = mysql_query("SELECT * FROM grocery_brand where brand_id='".$_POST['new_id']."' or brand_name='".$_POST['new_brand']."'");

		if (mysql_num_rows($brand_check) > 0){
					echo "<h5 class='alert alert-danger' role='alert' style='text-align : center;'>This brand id or name has already existed.</h5>";	
				} 
					else {
					$brand_query= mysql_query("INSERT INTO grocery_brand (brand_id, brand_name) VALUES ('".$_POST["new_id"]."','".$_POST["new_brand"]."')");
					echo "<h5 class='alert alert-success' role='alert' style='text-align : center;'>New Brand Id and Name have added successfully!</h5>";
				}
		}
	}

	function admin_list(){

	include 'db.php';

	$select = mysql_query("SELECT * FROM grocery_product");	

	if ($select) {
		if (mysql_num_rows($select) > 0) {
 		echo "

		<div class='panel panel-primary'>
			<div class='panel-heading'><h4>Products List</h4></div>
			<div class='panel-body'>
			<table class='table table-striped table-bordered' style='text-align:center;'>

				<tr>
					<th>Brand Name</th>
					<th>Product Name</th>
					<th>Product Description</th>
					<th>Product Price</th>
				</tr>";

				$select = mysql_query("SELECT brand_name, product_name, product_desc, product_price FROM grocery_brand, grocery_product where grocery_product.brand_id=grocery_brand.brand_id ");

				while($row = mysql_fetch_array($select)) {
						print "
					
					<tr>
						<td>".$row['brand_name']."</td>		
						<td>".$row['product_name']."</td>
						<td>".$row['product_desc']."</td>
						<td>$".$row['product_price']."</td>
					</tr>";
				}
			} else {
			echo "<h4 style='text-align : center;'>There's no data</h4>";
			}
		} 
	}


	function admin_product(){
		if (isset($_POST['add'])) {

		$product_check = mysql_query("SELECT * FROM grocery_product where product_id='".$_POST['product_id']."'");

		if (mysql_num_rows($product_check) > 0){
				echo "<h5 class='alert alert-danger' role='alert' style='text-align : center;'>This product id has already existed.</h5>";	
			} 
			elseif(!(mysql_num_rows($product_check) > 0)){	

			$product_query= "INSERT INTO grocery_product (brand_id, product_id, product_name, product_desc, product_price) VALUES ('".$_POST["brand"]."','".$_POST["product_id"]."','".$_POST["product_name"]."','".$_POST["product_desc"]."','".$_POST["product_price"]."')";
			$insert_product = mysql_query($product_query);	

			echo "<h5 class='alert alert-success' role='alert' style='text-align : center; text-color: #31B404;'>Data has been added successfully!</h4>";
			} else {
				print "Wrong!";
			}
		}
	}

	function get_product(){

	if(isset($_GET['brand'])){

		$brand_id = $_GET['brand'];		

		$select_info = mysql_query("SELECT * FROM grocery_product where brand_id='$brand_id'");



		if(mysql_num_rows($select_info) < 1){			
			echo "<h3 style='padding:20px;'>There is no product in this brand</h3>";	
		} else {

		echo "<tr><td colspan=2><center><strong>Product Information</strong></center></td></tr>";

		while($row_pro = mysql_fetch_array($select_info))
		
			echo " <tr>
					<td>Product Name</td>
					<td>".$row_pro['product_name']."</td>
				   </tr>
				   <tr>
					<td>Product Description</td>
					<td>".$row_pro['product_desc']."</td>
				   </tr>
				   <tr>
				    <td>Product Price</td>
					<td>$".$row_pro['product_price']."</td>
				   </tr>";		
			}
		}
	}

	function userget_brand(){

		include 'db.php';

		$select_brand = mysql_query("SELECT * FROM grocery_brand");

		if (mysql_num_rows($select_brand) < 1) {
						echo "No brand";
			} else {
				while($row = mysql_fetch_array($select_brand)) 	

				echo "<li><a href='user_list.php?brand=".$row['brand_id']."'>".$row['brand_name']."</a></li>";						
			}	
	}

	function user_signup(){

		include 'db.php';

		if (isset($_POST['user_submit'])) {

			$user_check = mysql_query("SELECT * FROM grocery_user where user_id='".$_POST['user_id']."'");
			if(mysql_num_rows($user_check) > 0){
				echo "<h5 class='alert alert-danger' role='alert' style='text-align : center;'>This user ID has already existed.</h5>";	
			} else {

			$insert_query = "INSERT INTO grocery_user (user_id, user_pw, user_name, user_email, user_phone, user_address) VALUES ('".$_POST["user_id"]."','".$_POST["user_pw"]."','".$_POST["user_name"]."','".$_POST["user_email"]."','".$_POST["user_phone"]."','".$_POST["user_address"]."')";
			$insert = mysql_query($insert_query);

			echo "<h5 class='alert alert-success' role='alert' style='text-align : center; text-color: #31B404;'>Your acount has signed up successfully!</h4>";
		}
	}
	}

	function login(){

		include 'db.php';
		
			if(isset($_POST['signin'])){		

				$admin = mysql_query("SELECT * FROM grocery_admin where admin_id='".$_POST['id']."' and admin_pw='".$_POST['pw']."'") or
				die(mysql_error());

				$user = mysql_query("SELECT * FROM grocery_user where user_id='".$_POST['id']."' and user_pw='".$_POST['pw']."'") or
				die(mysql_error());

				if (mysql_num_rows($admin) < 1){
					echo "<div class='alert alert-danger'>
						  <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
						  <strong>Invalid User Name or Password</strong></div>";
				} 
					else {
						header("Location: admin_page.php");	
						die();
					}
					
				if (mysql_num_rows($user) < 1){
					echo "";
				} else {
						header("Location: user_page.php");	
						die();
					}

			} 
	}
?>