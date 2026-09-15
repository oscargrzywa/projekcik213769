<?php
// Zadanie 4: Personalizowane powitanie
// Uzytkownik podaje imie i ulubiony kolor, powitanie wyswietlamy w tym kolorze.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['imie'] = $_POST['imie'];   // Zapisz imie w sesji
    $_SESSION['kolor'] = $_POST['kolor']; // Zapisz ulubiony kolor w sesji
}
?>

<h2>Personalizowane powitanie</h2>

<form method="post">
    <label for="imie">Podaj swoje imie:</label>
    <input type="text" name="imie" id="imie" required>
    <label for="kolor">Wybierz ulubiony kolor:</label>
    <input type="color" name="kolor" id="kolor" required>
    <input type="submit" value="Zatwierdz">
</form>

<?php
// Wyswietl powitanie w ulubionym kolorze
if (isset($_SESSION['imie']) && isset($_SESSION['kolor'])) {
    echo "<h1 style='color: " . $_SESSION['kolor'] . ";'>Witaj, " . $_SESSION['imie'] . "!</h1>";
}
?>
