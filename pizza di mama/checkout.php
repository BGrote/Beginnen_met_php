<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $aantalHawai = $_POST["aantalhawai"];
    $aantalFunghi = $_POST["aantalFunghi"];
    $aantalmagarita = $_POST["aantalmagarita"];
    $aantalmariana = $_POST["aantalmariana"];
    $aantalquattro = $_POST["aantalquattro"];
    $bezorgen = $_POST["bezorgen"];
    $besteldatum = $_POST["besteldatum"];


    // Checkt of het maandag is
    $dayofweek = date('w', strtotime($besteldatum));

    // Maandag korting 
    if ($dayofweek === '1'){
    
        $totaalprijs = $aantalHawai * 7.50;
        $totaalprijs += $aantalFunghi * 7.50;
        $totaalprijs += $aantalmagarita * 7.50;
        $totaalprijs += $aantalquattro * 7.50;
        $totaalprijs += $aantalmariana * 7.50;

        $korting = $aantalHawai * 2.50;
        $korting += $aantalFunghi * 5;
        $korting += $aantalmagarita * 2.50;
        $korting += $aantalquattro * 7.50;
        $korting += $aantalmariana * 5.45;




        echo "Aantal Hawai: $aantalHawai - Prijs: €" . $aantalHawai * 7.50 . "<br>";
        echo "Aantal Funghi: $aantalFunghi - Prijs: €" . $aantalFunghi * 7.50 . "<br>";
        echo "Aantal magarita: $aantalmagarita - Prijs: €" . $aantalmagarita * 7.50 . "<br>";
        echo "Aantal mariana: $aantalmariana - Prijs: €" . $aantalmariana * 7.50 . "<br>";
        echo "Aantal Quattro Formaggi: $aantalquattro - Prijs: €" . $aantalquattro * 7.50 . "<br>";
        echo "uw korting €$korting";
    } 

    // Vrijdag korting
    if($dayofweek === '5'){
         
    
        $totaalprijs = $aantalHawai * 11.50;
        $totaalprijs += $aantalFunghi * 12.50;
        $totaalprijs += $aantalmagarita * 12.50 ;
        $totaalprijs += $aantalquattro * 15;
        $totaalprijs += $aantalmariana * 13.95;

        $korting = $totaalprijs * 0.15;
        $totaalprijs = $totaalprijs - $korting; 
        $totaalprijs = round($totaalprijs, 2);
        $korting = round($korting, 2);




        echo "Aantal Hawai: $aantalHawai - Prijs: €" . $aantalHawai * 7.50 . "<br>";
        echo "Aantal Funghi: $aantalFunghi - Prijs: €" . $aantalFunghi * 7.50 . "<br>";
        echo "Aantal magarita: $aantalmagarita - Prijs: €" . $aantalmagarita * 7.50 . "<br>";
        echo "Aantal mariana: $aantalmariana - Prijs: €" . $aantalmariana * 7.50 . "<br>";
        echo "Aantal Quattro Formaggi: $aantalquattro - Prijs: €" . $aantalquattro * 7.50 . "<br><br>";
        echo "uw korting €$korting";
    }


    else {
        $totaalprijs = $aantalHawai * 10;
        $totaalprijs += $aantalFunghi * 12.50;
        $totaalprijs += $aantalmagarita * 10;
        $totaalprijs += $aantalquattro * 15;
        $totaalprijs += $aantalmariana * 13.95;




        echo "Aantal Hawai: $aantalHawai - Prijs: €" . $aantalHawai * 10 . "<br>";
        echo "Aantal Funghi: $aantalFunghi - Prijs: €" . $aantalFunghi * 12.50 . "<br>";
        echo "Aantal magarita: $aantalmagarita - Prijs: €" . $aantalmagarita * 10 . "<br>";
        echo "Aantal mariana: $aantalmariana - Prijs: €" . $aantalmariana * 13.95 . "<br>";
        echo "Aantal Quattro Formaggi: $aantalquattro - Prijs: €" . $aantalquattro * 15 . "<br>";
    }
    ?>
    <br>
    <?php
    if ($bezorgen === "ja") {
        $bezorgkosten = 5;
        $totaalprijs += $bezorgkosten;
        echo "Bezorgkosten: €$bezorgkosten";
    }
    ?>
    <br><br>
    <?php

    echo "Totaalprijs: €$totaalprijs";

    ?>
</body>

</html>