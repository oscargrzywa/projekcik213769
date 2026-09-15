<?php
session_start(); // Rozpoczecie sesji

// Sprawdzenie, czy przeslano formularz logowania
if (isset($_POST['zaloguj'])) {
    $nazwa_uzytkownika = $_POST['nazwa_uzytkownika'];

    // Weryfikacja uzytkownika
    if ($nazwa_uzytkownika == 'dziewczyna') {
        $_SESSION['uzytkownik'] = 'dziewczyna'; // Zapisanie w sesji
        header("Location: dziewczyna.php"); // Przekierowanie na strone dla dziewczyny
        exit;
    } elseif ($nazwa_uzytkownika == 'chlopak') {
        $_SESSION['uzytkownik'] = 'chlopak'; // Zapisanie w sesji
        header("Location: chlopak.php"); // Przekierowanie na strone dla chlopaka
        exit;
    } else {
        $komunikat = "Nieprawidlowy uzytkownik.";
    }
}

// Sprawdzenie, czy uzytkownik chce sie wylogowac
if (isset($_POST['wyloguj'])) {
    session_destroy(); // Zniszczenie sesji
    header("Location: index.php"); // Przekierowanie do strony logowania
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

<form method="post" action="">
    <label for="nazwa_uzytkownika">Nazwa uzytkownika:</label><br>
    <input type="text" name="nazwa_uzytkownika" required><br>
    <input type="submit" name="zaloguj" value="Zaloguj">
</form>

<?php if (isset($komunikat)): ?>
    <p style="color:red;"><?php echo $komunikat; ?></p>
<?php endif; ?>

</body>
</html>
