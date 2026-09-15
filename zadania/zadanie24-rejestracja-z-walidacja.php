<?php
// Zadanie 24: Rejestracja uzytkownika z walidacja
// Sprawdzamy poprawnosc adresu e-mail funkcja filter_var().

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Walidacja adresu e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['zarejestrowany'] = true;
        $_SESSION['email'] = $email;
        echo "<p>Rejestracja udana!</p>";
    } else {
        echo "<p>Nieprawidlowy adres e-mail.</p>";
    }
}
?>

<h2>Rejestracja</h2>

<form method="post">
    <label for="email">Adres e-mail:</label>
    <input type="text" name="email" id="email" required>
    <input type="submit" value="Zarejestruj">
</form>

<?php
if (isset($_SESSION['zarejestrowany'])) {
    echo "<p>Jestes zarejestrowany jako: " . $_SESSION['email'] . "</p>";
}
?>
