<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pizza di mama</title>
</head>

<body>
    <form method="post" action="checkout.php">
        <h1>Welkom bij Pizza di mama</h1>

        <?php
        // Initialize default prices
        
        $margheritaprijs = 12.50;
        $fungiprijs = 12.50;
        $marianaprijs = 13.95;
        $hawaiprijs = 11.50;
        $quattroprijs = 15.00;
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the selected date
            $besteldatum = isset($_POST['Besteldatum']) ? $_POST['Besteldatum'] : '';

            // Check if the selected date is a Monday
            if ($besteldatum && date('N', strtotime($besteldatum)) == 1) {
                // Set all pizza prices to 7.50 if it's Monday
                $margheritaprijs = 7.50;
                $fungiprijs = 7.50;
                $marianaprijs = 7.50;
                $hawaiprijs = 7.50;
                $quattroprijs = 7.50;
            }

            // Get the quantities
            $aantalmargarita = isset($_POST['aantalmargarita']) ? (int) $_POST['aantalmargarita'] : 0;
            $aantalfunghi = isset($_POST['aantalfunghi']) ? (int) $_POST['aantalfunghi'] : 0;
            $aantalmariana = isset($_POST['aantalmariana']) ? (int) $_POST['aantalmariana'] : 0;
            $aantalhawai = isset($_POST['aantalhawai']) ? (int) $_POST['aantalhawai'] : 0;
            $aantalquattro = isset($_POST['aantalquattro']) ? (int) $_POST['aantalquattro'] : 0;

            // Calculate total price
            $totaalprijs = ($aantalmargarita * $margheritaprijs) +
                ($aantalfunghi * $fungiprijs) +
                ($aantalmariana * $marianaprijs) +
                ($aantalhawai * $hawaiprijs) +
                ($aantalquattro * $quattroprijs);

            $date = date('d-m-y');

        }
        ?>

        <br><br>
        <table>
            <tr>
                <td>
                    <span class="pizzanaam">Pizza Margherita</span><br><br>
                    <img src="margherita.jpg" height="150px"><br>
                    € <?= $margheritaprijs ?><br>
                    aantal: <input type="number" min="0" name="aantalmargherita" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Funghi</span><br><br>
                    <img src="funghi.jpg" height="150px"><br>
                    € <?= $fungiprijs ?><br>
                    aantal: <input type="number" min="0" name="aantalfunghi" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Mariana</span><br><br>
                    <img src="mariana.jpg" height="150px"><br>
                    € <?= $marianaprijs ?><br>
                    aantal: <input type="number" min="0" name="aantalmariana" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Hawai</span><br><br>
                    <img src="hawai.jpg" height="150px"><br>
                    € <?= $hawaiprijs ?><br>
                    aantal: <input type="number" min="0" name="aantalhawai" value="0" max="20">
                </td>
                <td>
                    <span class="pizzanaam">Pizza Quattro Formaggi</span><br><br>
                    <img src="quattro.jpg" height="150px"><br>
                    € <?= $quattroprijs ?><br>
                    aantal: <input type="number" min="0" name="aantalquattro" value="0" max="20">
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" class="bestelButton" value="Bestel">
    </form>
    <?php
    echo "<p>Totaalprijs: €" . number_format($totaalprijs, 2) . "</p>";
    ?>
</body>

</html>