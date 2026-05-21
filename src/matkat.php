<?php
$matka = $_POST['numero1'];
$yksikko = $_POST['yksikko'];

if ($yksikko == "maili") {
    $tulos = $matka * 1.60934;
    echo "Matka on $tulos kilometriä.";
} else {
    $tulos = $matka * 0.621371;
    echo "Matka on $tulos mailia.";
}
?>   
<html>
<head>
    <title>Matkan muunnin</title>
</head>
<body>
    <br>
    <a href="etaisyys.html">takaisin</a>
</body>
</html>