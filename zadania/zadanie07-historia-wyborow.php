<?php
// Zadanie 7: Historia wyborow
// Zapisujemy w sesji kolejne wybory uzytkownika i wyswietlamy je w petli.

session_start();

if (!isset($_SESSION['historia'])) {
    $_SESSION['historia'] = array(); // Inicjalizuj historie
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['historia'][] = $_POST['wybor']; // Dodaj wybor do historii
}
?>

<h2>Historia wyborow</h2>

<form method="post">
    <label for="wybor">Wybor:</label>
    <input type="text" name="wybor" id="wybor" required>
    <input type="submit" value="Dodaj do historii">
</form>

<h3>Twoje wybory:</h3>
<ul>
<?php
// Wyswietl historie wyborow
foreach ($_SESSION['historia'] as $wybor) {
    echo "<li>$wybor</li>";
}
?>
</ul>
