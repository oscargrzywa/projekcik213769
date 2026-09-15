<?php
// Zadanie 3: Usun zmienna z sesji
// - uruchamia sesje
// - usuwa z niej zmienna imie
// - wyswietla komunikat "Usunieto imie z sesji"

session_start();

unset($_SESSION['imie']);

echo "Usunieto imie z sesji";
?>
