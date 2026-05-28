<?php
session_start();

// Luodaan taulukko, jos sitä ei vielä ole
if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

$virhe = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $merkki = trim($_POST['merkki']);
    $malli = trim($_POST['malli']);
    $vuosi = trim($_POST['vuosi']);

    // Tarkistetaan ettei kentät ole tyhjiä
    if ($merkki === "" || $malli === "" || $vuosi === "") {
        $virhe = "Täytä kaikki kentät!";
    } else {

        // BONUS: Estetään duplikaatit
        $loydetty = false;

        foreach ($_SESSION['autot'] as $auto) {
            if (
                strtolower($auto['merkki']) === strtolower($merkki) &&
                strtolower($auto['malli']) === strtolower($malli) &&
                $auto['vuosi'] == $vuosi
            ) {
                $loydetty = true;
                break;
            }
        }

        if ($loydetty) {
            $virhe = "Sama auto on jo lisätty!";
        } else {

            // Tallennetaan auto sessioon
            $_SESSION['autot'][] = [
                'merkki' => $merkki,
                'malli' => $malli,
                'vuosi' => $vuosi
            ];

            // Uudelleenohjaus
            header("Location: lista.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Lisää auto</title>
</head>
<body>

<h1>Lisää uusi auto</h1>

<?php if ($virhe != ""): ?>
    <p style="color:red;">
        <?php echo htmlspecialchars($virhe); ?>
    </p>
<?php endif; ?>

<form method="POST">

    <label>Merkki:</label><br>
    <input type="text" name="merkki"
        value="<?php echo isset($_POST['merkki']) ? htmlspecialchars($_POST['merkki']) : ''; ?>">
    <br><br>

    <label>Malli:</label><br>
    <input type="text" name="malli"
        value="<?php echo isset($_POST['malli']) ? htmlspecialchars($_POST['malli']) : ''; ?>">
    <br><br>

    <label>Vuosimalli:</label><br>
    <input type="number" name="vuosi"
        value="<?php echo isset($_POST['vuosi']) ? htmlspecialchars($_POST['vuosi']) : ''; ?>">
    <br><br>

    <button type="submit">Tallenna auto</button>

</form>

<br>

<a href="lista.php">Siirry listaan</a>

</body>
</html>