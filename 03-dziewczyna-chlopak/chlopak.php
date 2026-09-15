<?php
session_start(); // Rozpoczecie sesji

// Sprawdzenie, czy uzytkownik jest zalogowany
if (!isset($_SESSION['uzytkownik']) || $_SESSION['uzytkownik'] !== 'chlopak') {
    header("Location: index.php"); // Przekierowanie do logowania, jesli nie jest zalogowany
    exit;
}

// Wylogowanie
if (isset($_POST['wyloguj'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona Chlopaka</title>
</head>
<body>

<h2>Witaj na stronie dla chlopakow!</h2>
<img src="samochod.jpg" alt="Samochod" style="width:300px;"><br>
<form method="post" action="">
    <input type="submit" name="wyloguj" value="Wyloguj">
</form>

</body>
</html>
