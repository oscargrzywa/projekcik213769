<?php
// Zadanie 14: Dynamiczna nawigacja
// Menu pokazuje inne opcje dla zalogowanego, a inne dla niezalogowanego.

session_start();

if (isset($_POST['zaloguj'])) {
    $_SESSION['zalogowany'] = true;
}

if (isset($_POST['wyloguj'])) {
    session_destroy();
    header("Location: zadanie14-dynamiczna-nawigacja.php");
    exit;
}
?>

<h2>Menu</h2>

<ul>
<?php
if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
    echo "<li>Moje konto</li>";
    echo "<li>Moje zamowienia</li>";
    echo "<li>Ustawienia</li>";
} else {
    echo "<li>Strona glowna</li>";
    echo "<li>Rejestracja</li>";
    echo "<li>Logowanie</li>";
}
?>
</ul>

<form method="post">
<?php
if (isset($_SESSION['zalogowany'])) {
    echo '<input type="submit" name="wyloguj" value="Wyloguj">';
} else {
    echo '<input type="submit" name="zaloguj" value="Zaloguj">';
}
?>
</form>
