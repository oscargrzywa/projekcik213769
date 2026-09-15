# 01 - Podstawy sesji (logowanie z baza danych)

Najprostszy przyklad logowania na sesjach.

## Pliki
- `baza.sql` - tabela `logowanie` (login, password)
- `index.html` - formularz logowania
- `login.php` - sprawdza dane w bazie i zapisuje `$_SESSION['user']`
- `strona.php` - strona dostepna tylko po zalogowaniu
- `wyloguj.php` - `session_destroy()`

## Jak uruchomic
1. Zaimportuj `baza.sql` (np. w phpMyAdmin).
2. Wrzuc katalog do `htdocs` (XAMPP) i wejdz na `index.html`.
3. Zaloguj sie: `admin` / `1234`.
