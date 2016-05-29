<html>
	<head>
	<title>Q1</title>
	</head>

<body>
	<h2>Q1</h2>
	<?php

	$file = fopen("data.txt", "w") or exit ("Unable to open file!");
	fwrite($file, "Last Name : ".  $_POST["lastname"]."\r\n");
	fwrite($file, "First Name : ". $_POST["firstname"]."\r\n");
	fwrite($file, "Address : ". $_POST["address"]."\r\n"); 
	fwrite($file, "City : ". $_POST["city"]."\r\n");
	fwrite($file, "Zip/Postal Code : ". $_POST["zip"]."\r\n");
	fwrite($file, "Country : ". $_POST["country"]."\r\n");
	fwrite($file, "Phone(country code, area code, number) : (+ ". $_POST["phone1"]." ) ". $_POST["phone2"]." - ". $_POST["phone3"]."\r\n"); 
	fwrite($file, "E-mail : ". $_POST["email"]."\r\n");
	fwrite($file, "Birth Date : ". $_POST["birth1"]." / ". $_POST["birth2"]." / ". $_POST["birth3"]."\r\n");
	fwrite($file, "Gender : ". $_POST["gender"]."\r\n");
	fwrite($file, "Starting Session : ". $_POST["session"]."\r\n");
	fwrite($file, "Comments Questions : ". $_POST["comments"]."\r\n"); 
	fclose($file);

	echo "<h3> Data has been added and read successfully! </h3>";

	$file2 = fopen("data.txt", "r") or die("Unable to open file!");
	while(!feof($file2))
	{
		echo fgets($file2)."<br>";
	}
	fclose($file2);
	
	?>
	
</body>

</html>