<?php
// Start sesji - potrzebny, by odczytac dane sesji
session_start();

// Sprawdzamy, czy w sesji jest ustawiony status zalogowania
if (isset($_SESSION['user']) && $_SESSION['user'] == 'zalogowany') {
    echo "<h1>Jestes zalogowany!</h1>";

    // Formularz z przyciskiem do wylogowania, ktory wysyla POST do wyloguj.php
    echo "<form method='post' action='wyloguj.php'><button type='submit'>Wyloguj</button></form>";
} else {
    // Jesli uzytkownik nie jest zalogowany
    echo "Nie jestes zalogowany";
}
?>
