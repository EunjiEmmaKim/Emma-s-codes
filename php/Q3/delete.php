
<?php

	$MyCon = mysql_connect("localhost", "root", "test1234");
	if(!$MyCon){
		die("Connection Failed: ".mysql_error());
	}
	mysql_select_db("tasman", $MyCon);

	$delete_query = "DELETE FROM book WHERE id =".$_GET['id'];
	mysql_query($delete_query);

	header("Location: index.php");	
	die();

?>