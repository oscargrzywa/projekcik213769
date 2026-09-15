<?php
// Zadanie 25: Przechowywanie historii przegladania
// Do sesji dopisujemy adresy ostatnio odwiedzanych stron.

session_start();

if (!isset($_SESSION['historia'])) {
    $_SESSION['historia'] = array(); // Inicjalizuj historie
}

// Dopisz adres biezacej strony do historii
$_SESSION['historia'][] = $_SERVER['REQUEST_URI'];

echo "<h2>Historia przegladania</h2>";
echo "<ul>";
foreach ($_SESSION['historia'] as $adres) {
    echo "<li>$adres</li>";
}
echo "</ul>";

echo '<p><a href="zadanie25-historia-przegladania.php?strona=1">Przejdz na podstrone 1</a></p>';
echo '<p><a href="zadanie25-historia-przegladania.php?strona=2">Przejdz na podstrone 2</a></p>';
?>
