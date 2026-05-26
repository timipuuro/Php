<?php
if ($_POST) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = filter_var($_POST['number1'], FILTER_VALIDATE_INT);
    $kertyma = 1;
for ($i = 1; $i <= 20; $i++)
    {
        
$kertyma = $number1 * $i ;
echo "$i * $number1 = $kertyma <br>";
    }
 
    }
    }

?>