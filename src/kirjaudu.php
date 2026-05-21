<?php
if ($_POST['submit'] === 'kirjaudu') {
    $username = $_POST['Käyttäjätunnus'];
    $password = $_POST['Salasana'];
    if ($username === 'admin' && $password === 'salasana') {
        echo "<p>Kirjautuminen onnistui!</p>";
    } else {
        echo "<p>Virheellinen käyttäjätunnus tai salasana.</p>";
    }  
}
?>