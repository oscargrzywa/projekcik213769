<?php
// Zadanie 18: Przechowywanie danych o uzytkownikach
// Po udanej rejestracji zapisujemy dane uzytkownika w sesji.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['uzytkownik'] = array(
        'imie' => $_POST['imie'],
        'email' => $_POST['email']
    );
    echo "<p>Rejestracja zakonczona powodzeniem.</p>";
}
?>

<h2>Rejestracja</h2>

<form method="post">
    <label for="imie">Imie:</label>
    <input type="text" name="imie" id="imie" required>
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>
    <input type="submit" value="Zarejestruj">
</form>

<?php
// Wyswietl dane zapisane w sesji
if (isset($_SESSION['uzytkownik'])) {
    echo "<h3>Twoje dane:</h3>";
    echo "<p>Imie: " . $_SESSION['uzytkownik']['imie'] . "</p>";
    echo "<p>E-mail: " . $_SESSION['uzytkownik']['email'] . "</p>";
}
?>
