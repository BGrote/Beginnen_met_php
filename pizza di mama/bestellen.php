<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $bezorgen = $_POST["bezorgen"];
    ?>

    <h1>Bestel hier de  Lekkerste pizza</h1>
    Maak uw keuze uit onze vele pizza's
    <br><br>



    <!--De tabel die gebruikt wordt om het aantal pizza te krijgen die de klant wil-->
    <form method="post" action="checkout.php">
    <input type="hidden" name="bezorgen" value="<?php echo htmlspecialchars($bezorgen); ?>">
    <table>
        <tr>
            <td>
                <h2>Pizza Margherita</h2><br>
                <img src="margherita.jpg" height="150px"><br>
                € 12,50<br>
                aantal <input class="aantal" type="number" min="0" name="aantalmagarita" value="0">
            </td>
            <td>
                <h2>Pizza Funghi</h2><br>
                <img src="fungi.jpg" height="150px"><br>
                € 12,50<br>
                aantal <input class="aantal" type="number" min="0" name="aantalFunghi" value="0">
            
            </td>
            <td>
                <h2> Pizza Mariana</h2><br>
                <img src="mariana.jpg" height="150px"><br>
                € 13,95<br>
                aantal <input class="aantal" type="number" min="0" name="aantalmariana" value="0">
            </td>
            <td>
                <h2> Pizza Hawai</h2><br>
                <img src="hawai.jpg" height="150px"><br>
                € 11,50<br>
                aantal <input class="aantal" type="number" min="0" name="aantalhawai" value="0">
            </td>
            <td>
                <h2> Pizza Quattro Formaggi</h2><br>
                <img src="quattro.jpg" height="150px"><br>
                € 15,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalquattro" value="0">
            </td>
        </tr>        
    </table>

        <br><br>

        <label for="info">Naam:</label>
        <input class="info" name="naam" placeholder="Naam." required>
        <br><br>
        
        <?php if($bezorgen == "ja"):?>

        <label for="info">Adress:</label>
        <input class="info" name="adress" placeholder="Adress" required>
        <br><br>
        <label for="info">Postcode:</label>
        <input class="info" name="postcode" placeholder="Postcode" required>
        <br><br>
        <label for="info">Plaats:</label>
        <input class="info" name="plaats" placeholder="Plaats" required>
        <br><br>
        
        <?php endif; ?>
        
        <label for="besteldatum">Besteldatum:</label>
        <input type="date" id="besteldatum" name="besteldatum" required>
        <br>
        <br>
        <input type="submit" value="Bestellen" class="bestelknop">

    </form>

    

    




</body>
</html>