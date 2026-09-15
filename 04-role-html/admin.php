<?php
session_start();

// Sprawdzenie, czy uzytkownik ma odpowiednia role
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: index.html');
    exit;
}

echo "<h1>Witaj administratorze!</h1>";
?>
