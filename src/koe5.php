<!DOCTYPE html>
<html>
<head>
    <title>Lomake ja tiedon käsittely</title>
</head>
<body>
 
    <form action="koe5.php" method="post">

     
         <label for="number">luku: </label>
        <input type="number" name="number" value="number" id="number" required>

      


        <input type="submit" value="Muunna">

    </form>
    <?php
if ($_POST) {
    $number = $_POST['number'];

    if ($number < 0) {
        echo "<p>Negatiivisille luvuille kertoma ei ole määritelty.</p>";
        exit;
    }
    if ($number == 0) {
        echo "<p>0! = 1</p>";
        exit;
    }
  function kertoma($number) {
        if ($number == 0) {
            return 1;
        } else {
            return $number * kertoma($number - 1);
        }
    }
echo "<h2>Luku:</h2>";
    echo "<p>" . $number . "</p>";
    echo "<h2>Kertoma:</h2>";
    echo "<p>" . $number . "! = " . kertoma($number) . "</p>";

}
?>
</body>
</html>