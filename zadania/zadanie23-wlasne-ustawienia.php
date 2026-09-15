<?php
// Zadanie 23: Wlasne ustawienia uzytkownika
// Preferencje (jezyk i motyw) zapisujemy w sesji i od razu stosujemy.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['preferencje'] = array(
        'jezyk' => $_POST['jezyk'],
        'motyw' => $_POST['motyw']
    );
}

// Zastosuj motyw
if (isset($_SESSION['preferencje']) && $_SESSION['preferencje']['motyw'] == 'ciemny') {
    $tlo = "#222222";
    $tekst = "#ffffff";
} else {
    $tlo = "#ffffff";
    $tekst = "#000000";
}
?>

<body style="background-color: <?php echo $tlo; ?>; color: <?php echo $tekst; ?>;">

<h2>Twoje ustawienia</h2>

<form method="post">
    <label for="jezyk">Jezyk:</label>
    <select name="jezyk" id="jezyk">
        <option value="pl">Polski</option>
        <option value="en">Angielski</option>
    </select>
    <label for="motyw">Motyw:</label>
    <select name="motyw" id="motyw">
        <option value="jasny">Jasny</option>
        <option value="ciemny">Ciemny</option>
    </select>
    <input type="submit" value="Zapisz">
</form>

<?php
// Zastosuj jezyk
if (isset($_SESSION['preferencje'])) {
    if ($_SESSION['preferencje']['jezyk'] == 'pl') {
        echo "<p>Ustawienia zapisane!</p>";
    } else {
        echo "<p>Settings saved!</p>";
    }
}
?>

</body>
