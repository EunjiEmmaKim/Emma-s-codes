	<?php 
		$MyCon = mysql_connect("localhost", "root", "");
		if(!$MyCon){
			die("Connection Failed: ".mysql_error());
		}
		mysql_select_db("tasman", $MyCon);

?>