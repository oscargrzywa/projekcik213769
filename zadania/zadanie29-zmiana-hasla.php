<?php
// Zadanie 29: Zmiana hasla
// Zeby ustawic nowe haslo, trzeba najpierw podac poprawne obecne haslo.

session_start();

if (!isset($_SESSION['haslo'])) {
    $_SESSION['haslo'] = "tajnehaslo"; // Przykladowe haslo startowe
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stare = $_POST['stare_haslo'];
    $nowe = $_POST['nowe_haslo'];

    // Walidacja obecnego hasla
    if ($stare === $_SESSION['haslo']) {
        $_SESSION['haslo'] = $nowe;
        echo "<p>Haslo zostalo zmienione.</p>";
    } else {
        echo "<p>Obecne haslo jest nieprawidlowe.</p>";
    }
}
?>

<h2>Zmiana hasla</h2>

<form method="post">
    <label for="stare_haslo">Obecne haslo:</label>
    <input type="password" name="stare_haslo" id="stare_haslo" required>
    <label for="nowe_haslo">Nowe haslo:</label>
    <input type="password" name="nowe_haslo" id="nowe_haslo" required>
    <input type="submit" value="Zmien haslo">
</form>
