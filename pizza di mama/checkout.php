<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    // Retrieve prices from the form
    $margheritaprijs = isset($_POST['margheritaprijs']) ? (float)$_POST['margheritaprijs'] : 0;
    $fungiprijs = isset($_POST['fungiprijs']) ? (float)$_POST['fungiprijs'] : 0;
    $marianaprijs = isset($_POST['marianaprijs']) ? (float)$_POST['marianaprijs'] : 0;
    $hawaiprijs = isset($_POST['hawaiprijs']) ? (float)$_POST['hawaiprijs'] : 0;
    $quattroprijs = isset($_POST['quattroprijs']) ? (float)$_POST['quattroprijs'] : 0;

    // Retrieve quantities from the form
    $aantalmargarita = isset($_POST['aantalmargarita']) ? (int)$_POST['aantalmargarita'] : 0;
    $aantalfunghi = isset($_POST['aantalfunghi']) ? (int)$_POST['aantalfunghi'] : 0;
    $aantalmariana = isset($_POST['aantalmariana']) ? (int)$_POST['aantalmariana'] : 0;
    $aantalhawai = isset($_POST['aantalhawai']) ? (int)$_POST['aantalhawai'] : 0;
    $aantalquattro = isset($_POST['aantalquattro']) ? (int)$_POST['aantalquattro'] : 0;

    // Calculate total price
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