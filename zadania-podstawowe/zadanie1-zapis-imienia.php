<?php
// Zadanie 1: Utworz prosta sesje i zapisz dane uzytkownika
// - uruchamia sesje
// - zapisuje w sesji imie uzytkownika
// - wyswietla komunikat "Czesc, Jan!"

session_start();

$_SESSION['imie'] = 'Jan';

echo "Czesc, " . $_SESSION['imie'] . "!";
?>
