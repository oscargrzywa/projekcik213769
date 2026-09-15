<?php
// Zadanie 1: Formularz subskrypcyjny
// Uzytkownik wpisuje adres e-mail, zapisujemy go w sesji i wyswietlamy potwierdzenie.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['email'] = $_POST['email']; // Zapisz adres e-mail w sesji
}
?>

<h2>Zapisz sie do newslettera</h2>

<form method="post">
    <label for="email">Adres e-mail:</label>
    <input type="email" name="email" id="email" required>
    <input type="submit" value="Subskrybuj">
</form>

<?php
// Sprawdz, czy adres e-mail zostal zapisany w sesji
if (isset($_SESSION['email'])) {
    echo "<p>Dziekujemy za subskrypcje, " . $_SESSION['email'] . "!</p>";
}
?>
