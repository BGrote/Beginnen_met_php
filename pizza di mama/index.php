<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pizza di mama</title>
</head>
<body>
    <h1>Welkom bij Pizza di mama</h1>

    <form method="post" action="index.php">
        <table>
            <tr>
                <td>
                    <span class="pizzanaam">Pizza Margherita</span><br><br>
                    <img src="margherita.jpg" height="150px"><br>
                    € 12,50<br>
                    aantal: <input class="aantalmargarita" type="number" min="0" name="aantalmargarita" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Funghi</span><br><br>
                    <img src="funghi.jpg" height="150px"><br>
                    € 12,50<br>
                    aantal: <input class="aantalfunghi" type="number" min="0" name="aantalfunghi" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Mariana</span><br><br>
                    <img src="mariana.jpg" height="150px">
                    € 13,95<br>
                    aantal: <input class="aantalmariana" type="number" min="0" name="aantalmariana" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Hawai</span><br><br>
                    <img src="hawai.jpg" height="150px">
                    € 11,50<br>
                    aantal: <input class="aantalhawai" type="number" min="0" name="aantalhawai" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Quattro Formaggi</span><br><br>
                    <img src="quattro.jpg" height="150px">
                    € 15,00<br>
                    aantal: <input class="aantalquattro" type="number" min="0" name="aantalquattro" value="0" max="20">
                </td>
            </tr>        
        </table>

        <input type="submit" value="Bestellen" class="bestelButton">
    </form>
    <?php


// Prijzen
$margheritaprijs = 12.50;
$fungiprijs = 12.50;
$marianaprijs = 13.95;
$hawaiprijs = 11.50;
$quattroprijs = 15.00;



// aantallen
$aantalmargarita = isset($_POST["aantalmargarita"]) ? (int)$_POST["aantalmargarita"] : 0 + $meer;
$aantalfunghi = isset($_POST["aantalfunghi"]) ? (int)$_POST["aantalfunghi"] : 0 + $meer;
$aantalmariana = isset($_POST["aantalmariana"]) ? (int)$_POST["aantalmariana"] : 0 + $meer;
$aantalhawai = isset($_POST["aantalhawai"]) ? (int)$_POST["aantalhawai"] : 0 + $meer;
$aantalquattro = isset($_POST["aantalquattro"]) ? (int)$_POST["aantalquattro"] : 0 + $meer;

$meer = ($aantalmargarita + $aantalmargarita);
        ($aantalfunghi + $aantalfunghi);
        ($aantalmariana + $aantalmariana);
        ($aantalhawai + $aantalhawai);
        ($aantalquattro + $aantalquattro);

// Totaal prijs berekenen
$totaalprijs = ($aantalmargarita * $margheritaprijs) +
               ($aantalfunghi * $fungiprijs) +
               ($aantalmariana * $marianaprijs) +
               ($aantalhawai * $hawaiprijs) +
               ($aantalquattro * $quattroprijs);


         
?>


    <div class="order-details">
        <h2>Your Order</h2>
        <ul>
            <li>Pizza Margherita: <?php echo $aantalmargarita; ?></li>
            <li>Pizza Funghi: <?php echo $aantalfunghi; ?></li>
            <li>Pizza Mariana: <?php echo $aantalmariana; ?></li>
            <li>Pizza Hawai: <?php echo $aantalhawai; ?></li>
            <li>Pizza Quattro Formaggi: <?php echo $aantalquattro; ?></li>
            <li>Total Price: €<?php echo number_format($totaalprijs, 2); ?></li>
        </ul>
    </div>
</body>
</html>
