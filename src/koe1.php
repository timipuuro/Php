<?php

$ika = 18;
if ($ika < 18) {
    echo "alaikäinen";
} elseif ($ika >= 18 && $ika < 65) {
    echo "työikäinen";
} else {
    echo "Eläkeläinen";
}
