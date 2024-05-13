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
	<select name="land" required>
	    <option value="" disabled selected>Select your option</option>
		<option value="NL"<?php if(isset($_POST["land"]) && $_POST["land"] == "NL") echo "selected"; ?>>Nederland</option>
		<option value="DE"<?php if(isset($_POST["land"]) && $_POST["land"] == "DE") echo "selected"; ?>>Duitsland</option>
		<option value="EN"<?php if(isset($_POST["land"]) && $_POST["land"] == "EN") echo "selected"; ?>>Engeland</option>
		<option value="ES"<?php if(isset($_POST["land"]) && $_POST["land"] == "ES") echo "selected"; ?>>Español</option> 
		<option value="FR"<?php if(isset($_POST["land"]) && $_POST["land"] == "FR") echo "selected"; ?>>français</option>  
		<option value="IT"<?php if(isset($_POST["land"]) && $_POST["land"] == "IT") echo "selected"; ?>>Italiano</option>
	</select>
	<br>
	</label>
	
	<br>
	<input type="submit" name="submit" value="gegevens versturen" />
	</form>

	<?php 
	if(isset($_POST["submit"])){
		$naam = $_POST["naam"];
		$land = $_POST["land"];

	
		if($land=='NL'){
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