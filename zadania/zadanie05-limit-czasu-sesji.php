<?php
// Zadanie 5: Limity sesji
// Po 5 minutach sesja wygasa i trzeba zalogowac sie ponownie.

session_start();

$limit_czasu = 300; // 5 minut w sekundach

if (!isset($_SESSION['czas_logowania'])) {
    $_SESSION['czas_logowania'] = time(); // Ustaw czas logowania
}

if (time() - $_SESSION['czas_logowania'] > $limit_czasu) {
    // Sesja wygasla
    session_destroy();
    echo "Sesja wygasla. Prosze sie zalogowac ponownie.";
} else {
    $pozostalo = $limit_czasu - (time() - $_SESSION['czas_logowania']);
    echo "Sesja jest aktywna. Pozostalo " . $pozostalo . " sekund.";
}
?>
