<?php
// Zadanie 22: Koszyk zakupowy z lista i laczna cena
// Kazdy produkt ma nazwe i cene, na koncu liczymy sume.

session_start();

if (!isset($_SESSION['koszyk'])) {
    $_SESSION['koszyk'] = array(); // Inicjalizuj koszyk
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dodaj produkt razem z cena
    $_SESSION['koszyk'][] = array(
        'nazwa' => $_POST['nazwa'],
        'cena' => $_POST['cena']
    );
}
?>

<h2>Koszyk zakupowy</h2>

<form method="post">
    <label for="nazwa">Produkt:</label>
    <input type="text" name="nazwa" id="nazwa" required>
    <label for="cena">Cena:</label>
    <input type="number" name="cena" id="cena" step="0.01" required>
    <input type="submit" value="Dodaj do koszyka">
</form>

<h3>Zawartosc koszyka:</h3>
<ul>
<?php
$suma = 0;
foreach ($_SESSION['koszyk'] as $produkt) {
    echo "<li>" . $produkt['nazwa'] . " - " . $produkt['cena'] . " zl</li>";
    $suma = $suma + $produkt['cena'];
}
?>
</ul>

<p>Laczna cena: <?php echo $suma; ?> zl</p>
