<?php
// Zadanie 2: Ustawienia jezyka
// Uzytkownik wybiera jezyk, zapisujemy wybor w sesji i wyswietlamy tekst w tym jezyku.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['jezyk'] = $_POST['jezyk']; // Zapisz wybrany jezyk w sesji
}
?>

<h2>Wybor jezyka</h2>

<form method="post">
    <label for="jezyk">Wybierz jezyk:</label>
    <select name="jezyk" id="jezyk">
        <option value="pl">Polski</option>
        <option value="en">Angielski</option>
    </select>
    <input type="submit" value="Zatwierdz">
</form>

<?php
// Wyswietl tekst w odpowiednim jezyku
if (isset($_SESSION['jezyk'])) {
    if ($_SESSION['jezyk'] == 'pl') {
        echo "<p>Witaj na naszej stronie!</p>";
    } else {
        echo "<p>Welcome to our website!</p>";
    }
}
?>
