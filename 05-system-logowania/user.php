<?php
session_start();

// Sprawdzenie, czy uzytkownik ma odpowiednia role
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'user') {
    header('Location: index.php');
    exit;
}
?>

<h1>Witaj uzytkowniku, <?php echo $_SESSION['user']; ?>!</h1>
<p><a href="logout.php">Wyloguj sie</a></p>
