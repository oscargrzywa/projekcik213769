# 02 - Logowanie na jednej stronie

Caly mechanizm (formularz + logowanie + wylogowanie) w jednym pliku `index.php`,
bez bazy danych - dane logowania sa wpisane na sztywno.

Dane do logowania: `Jan` / `tajnehaslo`

## Jak to dziala
- `session_start()` na poczatku pliku,
- po poprawnym logowaniu zapisujemy `$_SESSION['uzytkownik']`,
- zaleznie od tego, czy zmienna istnieje, pokazujemy powitanie albo formularz,
- `session_destroy()` konczy sesje.
