# 04 - Role uzytkownikow (admin / user / guest)

Logowanie z baza danych, gdzie kazdy uzytkownik ma role.
Po zalogowaniu trafia do swojego panelu.

## Pliki
- `baza.sql` - tabela `logowanie` z kolumna `role`
- `index.html` - formularz logowania
- `login.php` - sprawdza dane, zapisuje `$_SESSION['user']` i `$_SESSION['role']`
- `admin.php`, `user.php`, `guest.php` - panele, kazdy sprawdza swoja role

## Dane testowe
- `admin1` / `adminpass` - admin
- `user1` / `userpass` - user
- `guest1` / `guestpass` - guest
