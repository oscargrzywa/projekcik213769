<?php
// Zadanie 11: System logowania
// Zapisujemy status zalogowania i imie uzytkownika w sesji.

session_start();

if (isset($_POST['zaloguj'])) {
    $_SESSION['zalogowany'] = true;      // Status zalogowania
    $_SESSION['imie'] = $_POST['imie'];  // Imie uzytkownika
}

if (isset($_POST['wyloguj'])) {
    session_destroy();
    header("Location: zadanie11-system-logowania.php");
    exit;
}
?>

<h2>System logowania</h2>

<?php
if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
    echo "<p>Witaj, " . $_SESSION['imie'] . "!</p>";
    echo '<form method="post"><input type="submit" name="wyloguj" value="Wyloguj"></form>';
} else {
    echo '<form method="post">
            <label for="imie">Podaj swoje imie:</label>
            <input type="text" name="imie" id="imie" required>
            <input type="submit" name="zaloguj" value="Zaloguj">
          </form>';
}
?>
