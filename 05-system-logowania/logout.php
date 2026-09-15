<?php
session_start();

// Usuniecie wszystkich danych sesji i zakonczenie jej
session_destroy();

// Powrot do strony logowania
header('Location: index.php');
exit;
?>
