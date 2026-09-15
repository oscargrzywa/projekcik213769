<?php
// Zadanie 21: Formularz kontaktowy z potwierdzeniem
// Dane z formularza zapisujemy w sesji i wyswietlamy potwierdzenie.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['dane_kontaktowe'] = array(
        'imie' => $_POST['imie'],
        'email' => $_POST['email'],
        'wiadomosc' => $_POST['wiadomosc']
    );
}
?>

<h2>Formularz kontaktowy</h2>

<form method="post">
    <label for="imie">Imie:</label>
    <input type="text" name="imie" id="imie" required>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <label for="wiadomosc">Wiadomosc:</label>
    <input type="text" name="wiadomosc" id="wiadomosc" required>
    <input type="submit" value="Wyslij">
</form>

<?php
// Wyswietl potwierdzenie na podstawie danych z sesji
if (isset($_SESSION['dane_kontaktowe'])) {
    echo "<h3>Potwierdzenie</h3>";
    echo "<p>Dziekujemy, " . $_SESSION['dane_kontaktowe']['imie'] . "!</p>";
    echo "<p>Odpowiemy na adres: " . $_SESSION['dane_kontaktowe']['email'] . "</p>";
    echo "<p>Twoja wiadomosc: " . $_SESSION['dane_kontaktowe']['wiadomosc'] . "</p>";
}
?>
