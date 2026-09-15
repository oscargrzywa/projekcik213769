<?php
// Start sesji, aby moc ja zakonczyc
session_start();

// Usuwamy wszystkie dane sesji i konczymy ja
session_destroy();

// Informujemy uzytkownika o wylogowaniu
echo "Wylogowano!";
echo "<p><a href='index.html'>Wroc do logowania</a></p>";
?>
