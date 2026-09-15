<?php
// Zadanie 26: Ustawianie limitu czasowego sesji
// Po 30 sekundach bezczynnosci uzytkownik jest automatycznie wylogowany.

session_start();

$limit_bezczynnosci = 30; // 30 sekund

if (isset($_SESSION['czas_ostatniej_aktywnosci'])) {
    if (time() - $_SESSION['czas_ostatniej_aktywnosci'] > $limit_bezczynnosci) {
        // Zbyt dluga bezczynnosc - wyloguj
        session_destroy();
        echo "<p>Zostales wylogowany z powodu bezczynnosci.</p>";
    } else {
        echo "<p>Jestes aktywny. Odswiez strone, zeby przedluzyc sesje.</p>";
        $_SESSION['czas_ostatniej_aktywnosci'] = time(); // Aktualizuj czas aktywnosci
    }
} else {
    $_SESSION['czas_ostatniej_aktywnosci'] = time();
    echo "<p>Sesja rozpoczeta.</p>";
}
?>
