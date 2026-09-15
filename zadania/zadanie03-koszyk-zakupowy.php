<?php
// Zadanie 3: Koszyk zakupowy
// Uzytkownik dodaje produkty do koszyka, koszyk trzymamy w sesji jako tablice.

session_start();

if (!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = array(); // Inicjalizuj koszyk
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['koszyk'][] = $_POST['produkt']; // Dodaj produkt do koszyka
}
?>

<h2>Koszyk zakupowy</h2>

<form method="post">
    <label for="produkt">Dodaj produkt do koszyka:</label>
    <input type="text" name="produkt" id="produkt" required>
    <input type="submit" value="Dodaj">
</form>

<h3>Zawartosc koszyka:</h3>
<ul>
<?php
// Wyswietl zawartosc koszyka
foreach ($_SESSION['koszyk'] as $produkt) {
    echo "<li>$produkt</li>";
}
?>
</ul>
