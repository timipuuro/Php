<!DOCTYPE html>
<html>
    <head>
        <title>Laskin</title>
    </head>
    <body>
        <h1>Laskin</h1>
        <?php
       $numero1 = $_POST["numero1"]; 

       $vastaus = (4 * pi() * pow($numero1, 3))/3;
       echo"Pallon tilavuus: " . $vastaus . " cm³";

        ?>
    </body>