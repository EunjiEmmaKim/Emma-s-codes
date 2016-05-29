<?php

	$name = $_POST['name'];
	$email = $_POST['email'];	
	$message = $_POST['message'];
	$subject = $_POST['subject'];	

	$from = 'From: EUNJIKIM portfolio';
	$to = 'eunjieunji007@gmail.com';

	$body = "From: $name\n E-Mail:$email\n Message:$message\n";

	if($_POST['submit']){
		if(mail($to, $subject, $body, $from)){
			echo "<script>  alert('Thank you!'); </script>";
			//'<p style="background-color:#00e094; font-size:40px; text-align:center;">Thank you!</p>';
		} else{
			echo '<p style="background-color:#00e094; font-size:40px; text-align:center;">Error - Try again!</p>';
		}
	}
?>
