<?php
	
	function weather($w){

		for($i = 0; $i < (count($w)); $i++){
			echo "<input type=checkbox name=we[] value=$w[$i] />".ucwords($w[$i])."<br>";
		}
	}

	function season($s){

		for($i = 0; $i < (count($s)); $i++){
			echo "<input type=checkbox name=se[] value=$s[$i] />".ucwords($s[$i])."<br>";
		}
	}

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Q2</title>
	</head>

	<body>
		<h2>Your Favourite Seasons and Weather are:-</h2>

		<form name="f1" method="post" action="index.php">

			<?php
				if(isset($_POST['submit'])){
					echo "You favourite weather in ".$_POST['city']." is: ";
					$we = $_POST['we'];
					for($i = 0; $i < count($we); $i++){
						echo "<ul><li>".ucwords($we[$i])."</li></ul>";
					}

					echo "You favourite seasons are: ";
					$se = $_POST['se'];
					for($i = 0; $i < count($se); $i++){
						echo "<ul><li>".ucwords($se[$i])."</li></ul>";
				}
			} else {
			?>

			Please enter the city of your choice :<br><br>
			
			City : <input type="text" placeholder="Enter the city" name="city"><br><br>

			Please choose the kinds of seasons and weather you like from the list below.<br>
			Choose all that apply.

			<h4>Weather</h4>

			<?php
				$w = array("sunshine", "clouds", "rain", "hail", "sleet", "snow", "wind", "cold", "heat");
				echo weather($w);		
			?>
			
			<h4>Season</h4>
			
			<?php
				$s = array("spring", "summer", "autumn", "winter");
				echo season($s);
			?>
			
			<br><input type="submit" name="submit" value="Go"><br><br>
		
		</form>
<?php 
}
?>
		

	</body>
</html>