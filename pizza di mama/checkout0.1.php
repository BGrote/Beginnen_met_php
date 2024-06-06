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
    $date = date('d-m-y');
    ?>
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
        <?php
    $date = date('d-m-y');
    ?>

    <?php
    // Retrieve prices and quantities from the form
    $margheritaprijs = isset($_POST['margheritaprijs']) ? (float)$_POST['margheritaprijs'] : 0;
    $fungiprijs = isset($_POST['fungiprijs']) ? (float)$_POST['fungiprijs'] : 0;
    $marianaprijs = isset($_POST['marianaprijs']) ? (float)$_POST['marianaprijs'] : 0;
    $hawaiprijs = isset($_POST['hawaiprijs']) ? (float)$_POST['hawaiprijs'] : 0;
    $quattroprijs = isset($_POST['quattroprijs']) ? (float)$_POST['quattroprijs'] : 0;

    $margheritaprijs = $aantalmargarita * 12.50;
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
            <li>Pizza Margherita: <?php echo $margheritaprijs; ?></li>
            <li>Pizza Funghi: <?php echo $aantalfunghi; ?></li>
            <li>Pizza Mariana: <?php echo $aantalmariana; ?></li>
            <li>Pizza Hawai: <?php echo $aantalhawai; ?></li>
            <li>Pizza Quattro Formaggi: <?php echo $aantalquattro; ?></li>
            <li>Totaal Prijs: €<?php echo number_format($totaalprijs, 2); ?></li>
        </ul>
    </div>
</body>
</html>