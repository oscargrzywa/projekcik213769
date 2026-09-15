<?php
session_start(); // Rozpoczecie sesji

// Sprawdzenie, czy uzytkownik jest zalogowany
$zalogowany = isset($_SESSION['uzytkownik']);

// Sprawdzenie, czy przeslano formularz logowania
if (isset($_POST['zaloguj'])) {
    // Dane z formularza
    $nazwa_uzytkownika = $_POST['nazwa_uzytkownika'];
    $haslo = $_POST['haslo'];

    // Weryfikacja uzytkownika (przykladowe dane)
    if ($nazwa_uzytkownika == 'Jan' && $haslo == 'tajnehaslo') {
        $_SESSION['uzytkownik'] = $nazwa_uzytkownika; // Zapisz uzytkownika w sesji
        $zalogowany = true; // Ustaw flage zalogowania na true
    } else {
        $komunikat = "Nieprawidlowa nazwa uzytkownika lub haslo.";
    }
}

// Sprawdzenie, czy uzytkownik chce sie wylogowac
if (isset($_POST['wyloguj'])) {
    session_destroy(); // Zniszcz sesje
    header("Location: index.php"); // Przekierowanie do tej samej strony
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>

<h2>Prosta Strona Logowania</h2>

<?php if ($zalogowany): ?>
    <h3>Witaj, <?php echo $_SESSION['uzytkownik']; ?>!</h3>
    <p>To jest strona dla zalogowanych uzytkownikow.</p>
    <form method="post" action="">
        <input type="submit" name="wyloguj" value="Wyloguj">
    </form>
<?php else: ?>
    <form method="post" action="">
        <label for="nazwa_uzytkownika">Nazwa uzytkownika:</label><br>
        <input type="text" name="nazwa_uzytkownika" required><br>
        <label for="haslo">Haslo:</label><br>
        <input type="password" name="haslo" required><br>
        <input type="submit" name="zaloguj" value="Zaloguj">
    </form>
    <?php if (isset($komunikat)): ?>
        <p style="color:red;"><?php echo $komunikat; ?></p>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>
