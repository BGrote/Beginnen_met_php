<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP opdracht - vertaler</title>
</head>
<body>

	<form method="post" action="">
	Naam: <input type="text" name="naam" placeholder="Uw naam" required /><br />
	Land:
	<select name="land">
		<option value="default">Maak een keuze</option>
		<option value="NL">Nederland</option>
		<option value="DE">Duitsland</option>
		<option value="EN">Engeland</option>
		<option value="ES">Español</option> 
		<option value="FR">français</option>  
		<option value="IT">Italiano</option>
	</select>
	<br />
	<input type="submit" name="submit" value="gegevens versturen" />
	</form>

	<?php 
	if(isset($_POST["submit"])){
		$naam = $_POST["naam"];
		$land = $_POST["land"];

		if($land=='default'){
			echo 'maak een keuze';
		}
		elseif($land=='NL'){
			echo 'Goedemorgen '.$naam;
		}
		elseif($land=='DE'){
			echo 'Guten Morgen '.$naam;
		}
		elseif($land=='EN'){
			echo 'Good morning '.$naam;
		}
		elseif($land=='ES'){
			echo 'Buen día '.$naam;
		}
		elseif($land=='FR'){
			echo 'Bonjour '.$naam;
		}
		elseif($land=='IT'){
			echo 'Buongiorno '.$naam;
		}

	}
	?>

</body>
</html>