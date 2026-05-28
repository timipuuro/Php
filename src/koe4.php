<!DOCTYPE html>
<html>
<head>
    <title>Lomake ja tiedon käsittely</title>
</head>
<body>
 
    <form action="koe4.php" method="post">

        <label for="nimi">nimi: </label>
        <input type="text" name="nimi" id="nimi" required>

        <br>
         <label for="ika">ika: </label>
        <input type="number" name="ika" value="ika" id="ika" required>
      
<br>
<label for="vari">Lempi väri: </label>
        <input type="text" name="vari" id="vari" required>
       

        <br>

        <input type="submit" value="Muunna">

    </form>
<?php
if ($_POST) {
    $nimi = $_POST['nimi'];
    $ika = $_POST['ika'];
    $vari = $_POST['vari'];

    echo "<h2>Tiedot:</h2>";
    echo "<p>Hei " . $nimi . "</p>";

    echo "<p>Olet " . $ika . " vuotta vanha</p>";
    if ($ika < 18)
         {
        echo "<p>Olet alaikäinen</p>";
    }
  else
    {     
         echo "<p>Olet täysi-ikäinen</p>";
  }
    echo "<p>Lempi väri: " . $vari . "</p>";

}
?>
</body>
</html>