<?php
// Zadanie 12: Zliczanie wizyt
// Za kazdym wejsciem na strone zwiekszamy licznik w sesji.

session_start();

if (isset($_SESSION['liczba_wizyt'])) {
    $_SESSION['liczba_wizyt'] = $_SESSION['liczba_wizyt'] + 1;
} else {
    $_SESSION['liczba_wizyt'] = 1;
}

echo "<h2>Licznik wizyt</h2>";
echo "<p>Odwiedziles te strone " . $_SESSION['liczba_wizyt'] . " razy.</p>";
?>
