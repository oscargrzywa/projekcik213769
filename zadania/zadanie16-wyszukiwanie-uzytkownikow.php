<?php
// Zadanie 16: Wyszukiwanie uzytkownikow
// Zapamietujemy w sesji ostatnio wyszukiwane imie.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Najpierw pokaz poprzednie wyszukiwanie, potem zapisz nowe
    if (isset($_SESSION['ostatnie_wyszukiwanie'])) {
        echo "<p>Ostatnio szukales: " . $_SESSION['ostatnie_wyszukiwanie'] . "</p>";
    }
    $_SESSION['ostatnie_wyszukiwanie'] = $_POST['imie'];
    echo "<p>Szukasz teraz: " . $_SESSION['ostatnie_wyszukiwanie'] . "</p>";
}
?>

<h2>Wyszukiwanie uzytkownikow</h2>

<form method="post">
    <label for="imie">Podaj imie:</label>
    <input type="text" name="imie" id="imie" required>
    <input type="submit" value="Szukaj">
</form>
