<?php


    session_start();

/* Tuotteet */
$tuotteet = [
    [
        "id" => 1,
        "nimi" => "PHP-kirja",
        "hinta" => 29,
        "kategoria" => "kirja",
        "arvostelu" => 5
    ],
    [
        "id" => 2,
        "nimi" => "Langattomat kuulokkeet",
        "hinta" => 89,
        "kategoria" => "elektroniikka",
        "arvostelu" => 4
    ],
    [
        "id" => 3,
        "nimi" => "Huppari",
        "hinta" => 49,
        "kategoria" => "vaate",
        "arvostelu" => 4
    ],
    [
        "id" => 4,
        "nimi" => "Pelihiiri",
        "hinta" => 59,
        "kategoria" => "elektroniikka",
        "arvostelu" => 5
    ],
    [
        "id" => 5,
        "nimi" => "Romaani",
        "hinta" => 19,
        "kategoria" => "kirja",
        "arvostelu" => 3
    ]
];

/* Luo ostoskori */
if (!isset($_SESSION["kori"])) {
    $_SESSION["kori"] = [];
}

/* Lisää koriin */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tuoteId = $_POST["tuote_id"];

    foreach ($tuotteet as $tuote) {
        if ($tuote["id"] == $tuoteId) {
            $_SESSION["kori"][] = $tuote;
        }
    }
}

/* Laske ostoskorin tiedot */
$tuotteidenMaara = count($_SESSION["kori"]);
$kokonaishinta = 0;

foreach ($_SESSION["kori"] as $item) {
    $kokonaishinta += $item["hinta"];
}



?>

<!DOCTYPE html>
<html lang="fi">
    <head>
          <meta charset="UTF-8">
        <title>kau</title>
         <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header> 
             <h1>Hieno Kauppa</h1>
        <div class="kori">
           <?php if($tuotteidenMaara > 0 ): ?>
    <p>
        Ostoskorissa: <?php echo $tuotteidenMaara; ?> Tuotetta
    </p>
    <p>
        Yhteensä: <?php echo number_format($kokonaishinta, 2); ?> €
    </p>
   <?php if ($kokonaishinta > 100): ?>
                <p class="ilmainen">
                    Saat ilmaisen toimituksen!
                </p>
            <?php endif; ?>

        <?php else: ?>

            <p>Ostoskori on tyhjä.</p>

        <?php endif; ?>
        </div>
</header>
<main class="tuotteet">

    <?php foreach ($tuotteet as $tuote): ?>

        <div class="kortti">

            <h2><?php echo $tuote['nimi']; ?></h2>

           <?php
            switch ($tuote['kategoria']) {

                case "kirja":
                    echo "<span class='tag tag-kirja'>Kirja</span>";
                    break;

                case "elektroniikka":
                    echo "<span class='tag tag-elektroniikka'>Elektroniikka</span>";
                    break;

                case "vaate":
                    echo "<span class='tag tag-vaate'>Vaate</span>";
                    break;

                default:
                    echo "<span class='tag'>Muu</span>";
            }
            ?>

            <p class="hinta">
                <?php echo number_format($tuote['hinta'], 2); ?> €
            </p>

            <div class="tahdet">
                <?php
                for ($i = 1; $i <= $tuote['arvostelu']; $i++) {
                    echo "⭐";
                }
                ?>
            </div>

            <form method="POST">
                <input type="hidden" name="tuote_id" value="<?php echo $tuote['id']; ?>">

                <button type="submit">
                    Lisää koriin
                </button>
            </form>

        </div>

    <?php endforeach; ?>

</main>

<footer>

    <p>Numerot 1–10:</p>

    <?php
    $numero = 1;

    while ($numero <= 10) {
        echo $numero . " ";
        $numero++;
    }
    ?>

</footer>
    
    
    </body>
</html>