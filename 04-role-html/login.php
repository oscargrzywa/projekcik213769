<?php
session_start(); // Rozpoczecie sesji

// Pobranie danych z formularza
$login = $_POST['login'];
$password = $_POST['password'];

// Polaczenie z baza danych
$con = mysqli_connect('localhost', 'root', '', 'baza');

// Sprawdzenie polaczenia
if (!$con) {
    die("Blad polaczenia z baza danych: " . mysqli_connect_error());
}

// Zapytanie SQL sprawdzajace, czy uzytkownik istnieje
$sql = "SELECT login, password, role FROM logowanie WHERE login='$login' AND password='$password'";
$result = mysqli_query($con, $sql);

// Jesli znaleziono uzytkownika
if ($row = mysqli_fetch_array($result)) {
    // Zapisanie danych uzytkownika w sesji
    $_SESSION['user'] = $row['login'];
    $_SESSION['role'] = $row['role'];

    // Przekierowanie na odpowiednia strone w zaleznosci od roli
    if ($_SESSION['role'] == 'admin') {
        header('Location: admin.php');
    } elseif ($_SESSION['role'] == 'user') {
        header('Location: user.php');
    } else {
        header('Location: guest.php');
    }
    exit;
} else {
    // Jesli dane sa nieprawidlowe
    echo "<p>Nieprawidlowy login lub haslo.</p>";
    echo "<p><a href='index.html'>Powrot do logowania</a></p>";
}
?>
