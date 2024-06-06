<?php
$aantalHawai = $_POST["aantalHawai"];
$aantalFunghi = $_POST["aantalFunghi"];
$aantalmagarita = $_POST["aantalmagarita"];
$aantaltuno = $_POST["aantaltuno"];
$aantalveggie = $_POST["aantalveggie"];
$aantalmagaritaROYALE = $_POST["aantalmagaritaROYALE"];
$aantalshourma = $_POST["aantalshourma"];
$aantalamerican = $_POST["aantalamerican"];
$bezorgen = $_POST["bezorgen"];

$totaalprijs = $aantalHawai * 10;
$totaalprijs += $aantalFunghi * 12.50;
$totaalprijs += $aantalamerican * 2645;
$totaalprijs += $aantalmagarita * 10;
$totaalprijs += $aantaltuno * 15;
$totaalprijs += $aantalmagaritaROYALE * 20;
$totaalprijs += $aantalveggie * 15;


echo "Aantal Hawai: $aantalHawai - Prijs: " . $aantalHawai * 10 . "<br>";
echo "Aantal American: $aantalamerican - Prijs: " . $aantalamerican * 2645 . "<br>";	
echo "Aantal Funghi: $aantalFunghi - Prijs: " . $aantalFunghi * 12.50 . "<br>";
echo "Aantal magarita - $aantalmagarita - Prijs: " . $aantalmagarita * 10 . "<br>";
echo "Aantal tuno - $aantaltuno - Prijs: " . $aantaltuno * 15 . "<br>";

if($bezorgen === "ja"){
$bezorgkosten = 5;
$totaalprijs += $bezorgkosten;
}
if($bezorgen === "nee"){
    
}
/*$totaalprijs = $aantalamerican * 2645;
$totaalprijs = $aantalFunghi * 12.50;
$totaalprijs = $aantalmagarita * 10;
$totaalprijs = $aantalmagaritaROYALE * 20;
$totaalprijs = $aantalshourma * 55;
$totaalprijs = $aantaltuno * 15;
$totaalprijs = $aantalveggie * 15;
*/
echo "Totaalprijs: $totaalprijs";


?>