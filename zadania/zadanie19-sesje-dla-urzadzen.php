<?php
// Zadanie 19: Wiele sesji dla roznych urzadzen
// Zapisujemy w sesji typ urzadzenia i wyswietlamy informacje o nim.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['urzadzenie'] = $_POST['urzadzenie']; // Zapisz typ urzadzenia
}
?>

<h2>Wybor urzadzenia</h2>

<form method="post">
    <label for="urzadzenie">Z jakiego urzadzenia korzystasz?</label>
    <select name="urzadzenie" id="urzadzenie">
        <option value="komputer">Komputer</option>
        <option value="telefon">Telefon</option>
        <option value="tablet">Tablet</option>
    </select>
    <input type="submit" value="Zatwierdz">
</form>

<?php
// Wyswietl informacje o aktywnym urzadzeniu
if (isset($_SESSION['urzadzenie'])) {
    echo "<p>Aktywne urzadzenie: " . $_SESSION['urzadzenie'] . "</p>";
}
?>
