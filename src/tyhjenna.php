<?php
session_start();

// Tyhjennetään kaikki session tiedot
session_destroy();

// Uudelleenohjaus takaisin listaan
header("Location: lista.php");
exit();
?>