<?php
// Zadanie 13: Przechowywanie preferencji
// Uzytkownik wybiera motyw (ciemny/jasny), wybor zapisujemy w sesji.

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['motyw'] = $_POST['motyw']; // Zapisz motyw w sesji
}

// Ustaw kolory na podstawie wybranego motywu
if (isset($_SESSION['motyw']) && $_SESSION['motyw'] == 'ciemny') {
    $tlo = "#222222";
    $tekst = "#ffffff";
} else {
    $tlo = "#ffffff";
    $tekst = "#000000";
}
?>

<body style="background-color: <?php echo $tlo; ?>; color: <?php echo $tekst; ?>;">

<h2>Wybor motywu</h2>

<form method="post">
    <label for="motyw">Wybierz motyw:</label>
    <select name="motyw" id="motyw">
        <option value="jasny">Jasny</option>
        <option value="ciemny">Ciemny</option>
    </select>
    <input type="submit" value="Zatwierdz">
</form>

</body>
