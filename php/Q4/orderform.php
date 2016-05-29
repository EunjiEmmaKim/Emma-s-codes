<html>
	<head>
	<title>Q4 Order Form</title>
	</head>
	
	<body>	
		<h2>Order Results</h2>
		Order processed at <?php echo date("h:i") ?>. <?php echo date("d")?>th <?php echo date("F Y") ?><br><br>
		Your order is as follows:<br><br>

	<?php 
		$MyCon = mysql_connect("localhost", "root", "");
		if(!$MyCon){
			die("Connection Failed: ".mysql_error());
		}
		mysql_select_db("tasman", $MyCon);

		$ordered = $_GET['tires'] + $_GET['oil'] + $_GET['spark'];
		$subtotal = $_GET['tires'] * 50 + $_GET['oil'] * 100 + $_GET['spark'] * 11;
		$total = $subtotal + $subtotal * 0.1;

		$MyQuery = mysql_query
		("INSERT INTO first VALUES('$_GET[tires]', '$_GET[oil]', '$_GET[spark]', '$ordered', '$_GET[address]', '$subtotal', '$total')");

		if(!$MyQuery){
			die("Error: ".mysql_error());
		}
			else if($_GET['tires'] == ""){
					echo 
				    $_GET['oil']." bottles of oil<br>"
					.$_GET['spark']." spark plugs<br>
					Items ordered : ".$ordered
					."<br>Subtotal : $".$subtotal
					."<br>Total including tax: $".$total
					."<br><br>Address to ship to is ".$_GET['address']
					."<br><br>Order written.";
			}
			else if($_GET['oil'] == ""){
					echo
					$_GET['tires']." tires<br>"				
					.$_GET['spark']." spark plugs<br>
					Items ordered : ".$ordered
					."<br>Subtotal : $".$subtotal
					."<br>Total including tax: $".$total
					."<br><br>Address to ship to is ".$_GET['address']
					."<br><br>Order written.";
			}
			else if($_GET['spark'] == ""){
					echo 
					$_GET['tires']." tires<br>"
					.$_GET['oil']." bottles of oil<br>
					Items ordered : ".$ordered
					."<br>Subtotal : $".$subtotal
					."<br>Total including tax: $".$total
					."<br><br>Address to ship to is ".$_GET['address']
					."<br><br>Order written.";

			} 
			else{
					echo 
					$_GET['tires']." tires<br>"
					.$_GET['oil']." bottles of oil<br>"
					.$_GET['spark']." spark plugs<br>
					Items ordered : ".$ordered
					."<br>Subtotal : $".$subtotal
					."<br>Total including tax: $".$total
					."<br><br>Address to ship to is ".$_GET['address']
					."<br><br>Order written.";
			}

			mysql_close($MyCon);
			
	?>
	</body>
	
</html>