<?php
// Zadanie 20: Walidacja sesji
// Sprawdzamy, czy sesja jest aktywna. Jesli wygasla - komunikat o ponownym logowaniu.

session_start();

$limit_czasu = 60; // Sesja wazna 60 sekund

if (isset($_POST['zaloguj'])) {
    $_SESSION['zalogowany'] = true;
    $_SESSION['czas_logowania'] = time();
}

if (isset($_SESSION['zalogowany'])) {
    if (time() - $_SESSION['czas_logowania'] > $limit_czasu) {
        // Sesja wygasla
        session_destroy();
        echo "<p>Sesja wygasla. Zaloguj sie ponownie.</p>";
    } else {
        echo "<p>Sesja jest aktywna.</p>";
    }
}
?>

<h2>Walidacja sesji</h2>

<form method="post">
    <input type="submit" name="zaloguj" value="Zaloguj">
</form>
