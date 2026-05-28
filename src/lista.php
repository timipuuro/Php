<?php
session_start();

// Luodaan taulukko tarvittaessa
if (!isset($_SESSION['autot'])) {
    $_SESSION['autot'] = [];
}

// Poistetaan auto GET-parametrilla
if (isset($_GET['poista'])) {

    $index = (int)$_GET['poista'];

    if (isset($_SESSION['autot'][$index])) {

        unset($_SESSION['autot'][$index]);

        // Järjestetään indeksit uudelleen
        $_SESSION['autot'] = array_values($_SESSION['autot']);
    }

    // Uudelleenohjaus
    header("Location: lista.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Autolista</title>
</head>
<body>

<h1>Tallennetut autot</h1>

<?php if (count($_SESSION['autot']) > 0): ?>

    <ol>
        <?php foreach ($_SESSION['autot'] as $index => $auto): ?>

            <li>
                <?php
                echo htmlspecialchars($auto['merkki']) . " ";
                echo htmlspecialchars($auto['malli']) . " ";
                echo "(" . htmlspecialchars($auto['vuosi']) . ")";
                ?>

                <a href="?poista=<?php echo $index; ?>">
                    [Poista]
                </a>
            </li>

        <?php endforeach; ?>
    </ol>

<?php else: ?>

    <p>Ei tallennettuja autoja.</p>

<?php endif; ?>

<br>

<a href="lisaa.php">Lisää uusi auto</a>
<br><br>

<a href="tyhjenna.php">
    Tyhjennä koko lista
</a>

</body>
</html>