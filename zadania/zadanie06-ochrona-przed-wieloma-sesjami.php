<?php
// Zadanie 6: Ochrona przed wieloma sesjami
// Tylko jeden uzytkownik moze byc zalogowany na raz.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdz, czy ktos jest juz zalogowany
    if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true) {
        echo "<p>Jestes juz zalogowany jako: " . $_SESSION['imie'] . "!</p>";
    } else {
        $_SESSION['zalogowany'] = true;      // Zaloguj uzytkownika
        $_SESSION['imie'] = $_POST['imie'];  // Zapisz imie w sesji
        echo "<p>Zalogowano jako: " . $_SESSION['imie'] . "</p>";
    }
}
?>

<h2>Logowanie</h2>

<form method="post">
    <label for="imie">Podaj swoje imie:</label>
    <input type="text" name="imie" id="imie" required>
    <input type="submit" value="Zaloguj">
</form>
