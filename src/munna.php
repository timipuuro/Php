<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Muunnoksen tulos</title>
</head>
<body>

<h1>Muunnoksen tulos</h1>

<?php

// Tarkistetaan että lämpötila on annettu
if (!isset($_POST['lampotila']) || $_POST['lampotila'] === "") {
    die("<p>Virhe: lämpötila puuttuu.</p>");
}

// Tarkistetaan että muunnossuunta on valittu
if (!isset($_POST['suunta'])) {
    die("<p>Virhe: valitse muunnossuunta.</p>");
}

$lampotila = $_POST['lampotila'];
$suunta = $_POST['suunta'];

// Tarkistetaan että syöte on numero
if (!is_numeric($lampotila)) {
    die("<p>Virhe: lämpötilan täytyy olla numero.</p>");
}

// Muutetaan desimaaliluvuksi
$lampotila = floatval($lampotila);

// Celsius -> Fahrenheit
if ($suunta == "cf") {

    // Celsius-raja
    if ($lampotila < -40 || $lampotila > 40) {
        die("<p>Virhe: Celsius-lämpötilan täytyy olla välillä -40 – +40 °C.</p>");
    }

    $fahrenheit = ($lampotila * 9 / 5) + 32;

    echo "<p>$lampotila °C = " . round($fahrenheit, 2) . " °F</p>";
 
}

// Fahrenheit -> Celsius
elseif ($suunta == "fc") 

    $celsius = ($lampotila - 32) * 5 / 9;

    // Tarkistetaan muunnettu Celsius-arvo
    if ($celsius < -40 || $celsius > 40) {
        die("<p>Virhe: muunnettu Celsius-lämpötila ei ole välillä -40 – +40 °C.</p>");
    }

    

    if ($celsius < -20) {
        echo "<p style='color: blue;'><p>$lampotila °F = " . round($celsius, 2) . " °C</p>";
    } elseif ($celsius > 20) {
        echo "<p style='color: red;'><p>$lampotila °F = " . round($celsius, 2) . " °C</p>";
         if ($celsius >= -20) {
        echo "<p style='color: yellow;'><p>$lampotila °F = " . round($celsius, 2) . " °C</p>";
    } elseif ($celsius >= 20) {
        echo "<p style='color: green;'><p>$lampotila °F = " . round($celsius, 2) . " °C</p>";
    } else {
        echo "<p>$lampotila °F = " . round($celsius, 2) . " °C</p></p>";
    }
}

// Varmistus virhetilanteeseen
else {
    echo "<p>Virheellinen muunnossuunta.</p>";
}

?>

<br>
<a href="lampotila.html">Takaisin</a>

</body>
</html>