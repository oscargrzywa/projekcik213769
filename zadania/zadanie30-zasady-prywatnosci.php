<?php
// Zadanie 30: Zasady dotyczace prywatnosci
// Decyzje uzytkownika o akceptacji zasad zapisujemy w sesji.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['akceptacja_praw'] = true; // Zapisz akceptacje
}
?>

<h2>Zasady prywatnosci</h2>

<?php
if (isset($_SESSION['akceptacja_praw'])) {
    echo "<p>Dziekujemy, zasady zostaly zaakceptowane.</p>";
} else {
    echo "<p>Przeczytaj i zaakceptuj zasady prywatnosci, zeby korzystac ze strony.</p>";
    echo '<form method="post"><input type="submit" value="Akceptuje"></form>';
}
?>
