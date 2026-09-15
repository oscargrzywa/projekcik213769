<?php
// Uruchomienie sesji (tworzy lub kontynuuje sesje uzytkownika)
session_start();

// Pobranie loginu i hasla z danych przeslanych metoda POST
$login = $_POST['login'];
$password = $_POST['password'];

// Polaczenie z baza danych MySQL (host, uzytkownik, haslo, baza)
$con = mysqli_connect('localhost', 'root', '', 'baza');

// Zapytanie SQL sprawdzajace, czy istnieje uzytkownik o podanym loginie i hasle
$sql = "SELECT login, password FROM logowanie WHERE login='$login' AND password='$password'";

// Wykonanie zapytania
$result = mysqli_query($con, $sql);

// Sprawdzenie, czy zapytanie zwrocilo jakis wynik
if (mysqli_fetch_array($result)) {
    // Jesli tak, ustawiamy w sesji zmienna 'user' - to znaczy, ze uzytkownik jest zalogowany
    $_SESSION['user'] = 'zalogowany';

    // Przekierowujemy przegladarke na strone po zalogowaniu
    header('Location: strona.php');
} else {
    // Jesli brak uzytkownika lub bledne dane, wyswietlamy komunikat
    echo "Bledny login lub haslo!";
}
?>
