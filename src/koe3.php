<?php
$parillinen = false;
$luku = 22;

function nelio($luku) {
    return $luku * $luku;
}
if (nelio($luku) % 2 == 0) {
    $parillinen = true;
}
echo "Luvun " . $luku . "² on " . nelio($luku) . ".<br>";
echo $parillinen ? "Luku on parillinen" : "Luku on pariton";


?>