<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen</title>
</head>
<body>

<?php
// Prijzen
$margheritaprijs = 12.50;
$fungiprijs = 12.50;
$marianaprijs = 13.95;
$hawaiprijs = 11.50;
$quattroprijs = 15.00;

// aantallen
$aantalmargarita = isset($_POST["aantalmargarita"]) ? (int)$_POST["aantalmargarita"] : 0;
$aantalfunghi = isset($_POST["aantalfunghi"]) ? (int)$_POST["aantalfunghi"] : 0;
$aantalmariana = isset($_POST["aantalmariana"]) ? (int)$_POST["aantalmariana"] : 0;
$aantalhawai = isset($_POST["aantalhawai"]) ? (int)$_POST["aantalhawai"] : 0;
$aantalquattro = isset($_POST["aantalquattro"]) ? (int)$_POST["aantalquattro"] : 0;

// Totaal prijs berekenen
$totaalprijs = ($aantalmargarita * $margheritaprijs) +
               ($aantalfunghi * $fungiprijs) +
               ($aantalmariana * $marianaprijs) +
               ($aantalhawai * $hawaiprijs) +
               ($aantalquattro * $quattroprijs);

            
            
?>

</body>
</html>
