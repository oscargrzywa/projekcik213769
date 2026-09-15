<?php
// Zadanie 8: Pamiec ulubionych produktow
// Uzytkownik dodaje produkty do ulubionych, lista jest trzymana w sesji.

session_start();

if (!isset($_SESSION['ulubione'])) {
    $_SESSION['ulubione'] = array(); // Inicjalizuj ulubione
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['ulubione'][] = $_POST['produkt']; // Dodaj ulubiony produkt
}
?>

<h2>Ulubione produkty</h2>

<form method="post">
    <label for="produkt">Dodaj ulubiony produkt:</label>
    <input type="text" name="produkt" id="produkt" required>
    <input type="submit" value="Dodaj">
</form>

<h3>Twoje ulubione:</h3>
<ul>
<?php
// Wyswietl ulubione produkty
foreach ($_SESSION['ulubione'] as $produkt) {
    echo "<li>$produkt</li>";
}
?>
</ul>
