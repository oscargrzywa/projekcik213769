<?php
// Zadanie 5: Prosty licznik odwiedzin w sesji
// - uruchamia sesje
// - zlicza, ile razy uzytkownik odwiedzil strone
// - wyswietla "Odwiedziles te strone X razy"

session_start();

if (isset($_SESSION['licznik'])) {
    $_SESSION['licznik'] = $_SESSION['licznik'] + 1;
} else {
    $_SESSION['licznik'] = 1;
}

echo "Odwiedziles te strone " . $_SESSION['licznik'] . " razy";
?>
