<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="active" href="bestellen.html">Pizza bestellen</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li style="float:right"><a href="about.html">About</a></li>
    </ul>
</nav>
<main>
    <h1>Bestel hier de pizza</h1>
    Maak uw keuze uit een lekkere pizza
    <br><br>
<form method="post" action="checkout.php">
    <table>
        <tr>
            <td>
                <span class="pizzaName">Pizza Hawai</span><br><br>
                <img src="images/pizzahawai.jpg" height="150px"><br>
                € 10,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalHawai" value="0">
            </td>
            <td>
                <h2>Pizza Funghi</h2><br>
                <img src="images/pizzafungi.jpg" height="150px"><br>
                € 12,50<br>
                aantal <input class="aantal" type="number" min="0" name="aantalFunghi" value="0">
            
            </td>
            <td>
                <h2> Pizza magarita</h2>
                <img src="images/pizza maga.jpg" height="150px">
                € 10,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalmagarita" value="0">
            </td>
            <td>
                <h2> Pizza tuno</h2>
                <img src="images/pizzatuno.jpg" height="150px">
                € 15,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantaltuno" value="0">
            </td>
            </tr>
  
            <tr>
            <td>
                <h2> Pizza veggie</h2>
                <img src="images/pizzaveggie.jpg" height="150px">
                € 15,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalveggie" value="0">
            </td>
            <td>
                <h2> PIZZA MARGARITHA ROYALE</h2>
                <img src="images/PIZZA MARGARITHA ROYALE.jpg" height="150px">
                € 20,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalmagaritaROYALE" value="0">
            </td>
            <td>
                <h2> pizza shourma</h2>
                <img src="images/shoarma.jpg" height="150px">
                € 55,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalshourma" value="0">
            </td>
            <td>
                <h2> pizza american</h2>
                <img src="images/amarican.avif" height="150px">
                € 2645,00<br>
                aantal <input class="aantal" type="number" min="0" name="aantalamerican" value="0">
            </td>
        </tr>        
    </table>
    Bezorgen?
    <input type="radio" id="ja" name="bezorgen" value="ja">
  <label for="ja">Ja</label>
  <input type="radio" id="nee" name="bezorgen" value="nee">
  <label for="nee">Nee</label>
  <br><br>

    

    <input type="submit" value="Bestellen" class="bestelknop">
</main>
</from>


</body>
</html>