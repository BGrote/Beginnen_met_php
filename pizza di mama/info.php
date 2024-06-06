<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $date = date('d-m-y');
    ?>
<form method="post" action="checkout.php">
<label for="info">Naam:</label>
        <input class="info" name="naam" placeholder="Naam." required>
        <br><br>
        <label for="info">Adress:</label>
        <input class="info" name="adress" placeholder="Adress" required>
        <br><br>
        <label for="info">Postcode:</label>
        <input class="info" name="postcode" placeholder="Postcode" required>
        <br><br>
        <label for="info">Plaats:</label>
        <input class="info" name="plaats" placeholder="Plaats" required>
        <br><br>
        <label for="besteldatum">Besteldatum:</label>
        <input type="date" id="besteldatum" name="Besteldatum" required>
          <?php
          
          echo "Vandaag: $date";
          ?>
        <br>
        <br>
        <input type="submit" class="bestelButton" value="Bestel">
</form>

</body>
</html>