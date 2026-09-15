<?php
// Zadanie 27: Zarzadzanie kontem uzytkownika
// Uzytkownik moze zaktualizowac swoj adres e-mail przechowywany w sesji.

session_start();

// Ustaw przykladowy adres, jesli jeszcze go nie ma
if (!isset($_SESSION['uzytkownik']['email'])) {
    $_SESSION['uzytkownik']['email'] = "jan@example.com";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['uzytkownik']['email'] = $_POST['email']; // Aktualizuj e-mail
    echo "<p>Adres e-mail zostal zmieniony.</p>";
}
?>

<h2>Moje konto</h2>

<p>Twoj adres e-mail: <?php echo $_SESSION['uzytkownik']['email']; ?></p>

<form method="post">
    <label for="email">Nowy adres e-mail:</label>
    <input type="email" name="email" id="email" required>
    <input type="submit" value="Zapisz">
</form>
