<?php
// Zadanie 4: Calkowite zakonczenie sesji i wylogowanie
// - uruchamia sesje
// - niszczy sesje (usuwa wszystkie zmienne i konczy sesje)
// - wyswietla "Zostales wylogowany"

session_start();

session_destroy();

echo "Zostales wylogowany";
?>
