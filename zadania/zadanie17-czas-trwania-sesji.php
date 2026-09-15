<?php
// Zadanie 17: Czas trwania sesji
// Mierzymy, ile czasu uplynelo od rozpoczecia sesji.

session_start();

if (!isset($_SESSION['czas_rozpoczecia'])) {
    $_SESSION['czas_rozpoczecia'] = time(); // Zapisz czas rozpoczecia sesji
}

// Oblicz roznice z biezacym czasem
$czas_trwania = time() - $_SESSION['czas_rozpoczecia'];

echo "<h2>Czas trwania sesji</h2>";
echo "<p>Twoja sesja trwa juz " . $czas_trwania . " sekund.</p>";
?>
