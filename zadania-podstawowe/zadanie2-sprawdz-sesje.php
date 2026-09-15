<?php
// Zadanie 2: Sprawdz, czy uzytkownik ma ustawiona sesje
// - jesli w sesji istnieje zmienna imie, wyswietla "Witaj, imie!"
// - jesli nie istnieje, wyswietla "Nie znam twojego imienia"

session_start();

if (isset($_SESSION['imie'])) {
    echo "Witaj, " . $_SESSION['imie'] . "!";
} else {
    echo "Nie znam twojego imienia";
}
?>
