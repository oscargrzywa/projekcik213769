<?php
// Zadanie 9: Weryfikacja hasel
// Porownujemy haslo z formularza z haslem zapisanym wczesniej w sesji.

session_start();

// Ustaw haslo w sesji (normalnie powinno byc to bezpieczne przechowywanie)
if (!isset($_SESSION['haslo'])) {
    $_SESSION['haslo'] = "tajnehaslo"; // Ustaw przykladowe haslo
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['haslo'] === $_SESSION['haslo']) {
        echo "<p>Haslo poprawne!</p>";
    } else {
        echo "<p>Nieprawidlowe haslo!</p>";
    }
}
?>

<h2>Weryfikacja hasla</h2>

<form method="post">
    <label for="haslo">Wprowadz haslo:</label>
    <input type="password" name="haslo" id="haslo" required>
    <input type="submit" value="Sprawdz">
</form>
