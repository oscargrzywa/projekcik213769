<?php
// Zadanie 10: Notyfikacje o aktywnosci
// Powiadomienia trzymamy w sesji jako tablice i wyswietlamy je na stronie.

session_start();

if (!isset($_SESSION['powiadomienia'])) {
    $_SESSION['powiadomienia'] = array(); // Inicjalizuj powiadomienia
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['powiadomienia'][] = $_POST['powiadomienie']; // Dodaj powiadomienie
}
?>

<h2>Powiadomienia</h2>

<form method="post">
    <label for="powiadomienie">Nowe powiadomienie:</label>
    <input type="text" name="powiadomienie" id="powiadomienie" required>
    <input type="submit" value="Dodaj">
</form>

<h3>Twoje powiadomienia:</h3>
<ul>
<?php
// Wyswietl powiadomienia
foreach ($_SESSION['powiadomienia'] as $powiadomienie) {
    echo "<li>$powiadomienie</li>";
}
?>
</ul>
