<?php
// Zadanie 28: Wyszukiwanie danych w sesji
// Sprawdzamy funkcja in_array(), czy dana wartosc jest w tablicy sesyjnej.

session_start();

// Przykladowe preferencje zapisane w sesji
if (!isset($_SESSION['preferencje'])) {
    $_SESSION['preferencje'] = array("sport", "muzyka", "filmy");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $szukane = $_POST['szukane'];

    if (in_array($szukane, $_SESSION['preferencje'])) {
        echo "<p>Znaleziono: $szukane</p>";
    } else {
        echo "<p>Nie znaleziono: $szukane</p>";
    }
}
?>

<h2>Wyszukiwanie w preferencjach</h2>

<p>Twoje preferencje: <?php echo implode(", ", $_SESSION['preferencje']); ?></p>

<form method="post">
    <label for="szukane">Czego szukasz?</label>
    <input type="text" name="szukane" id="szukane" required>
    <input type="submit" value="Szukaj">
</form>
