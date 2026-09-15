<?php
// Zadanie 15: Ochrona formularza przed powieleniem
// Flaga w sesji pilnuje, zeby formularz zostal przetworzony tylko raz.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['form_wyslany'])) {
        echo "<p>Formularz zostal juz wyslany!</p>";
    } else {
        $_SESSION['form_wyslany'] = true; // Ustaw flage
        echo "<p>Dziekujemy, formularz zostal wyslany.</p>";
    }
}
?>

<h2>Formularz</h2>

<form method="post">
    <label for="wiadomosc">Wiadomosc:</label>
    <input type="text" name="wiadomosc" id="wiadomosc" required>
    <input type="submit" value="Wyslij">
</form>
