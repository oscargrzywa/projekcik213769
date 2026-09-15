# Sesje w PHP - przyklady i zadania

Projekt na podstawie materialu "4_Sesje php". Wszystkie przyklady i zadania
z dokumentu zostaly przepisane do osobnych plikow i poukladane w katalogi.

## Co to sa sesje?

Sesje w PHP to sposob, ktory pozwala stronie pamietac informacje o uzytkowniku
miedzy kolejnymi podstronami. HTTP jest protokolem bezstanowym - sam z siebie nie
pamieta nic z poprzedniego zadania. Sesja to rozwiazuje:

- `session_start()` - na poczatku kazdego pliku; tworzy nowa sesje albo odczytuje istniejaca,
- `$_SESSION['nazwa'] = wartosc;` - zapis danych w sesji,
- `isset($_SESSION['nazwa'])` - sprawdzenie, czy dane sa w sesji,
- `unset($_SESSION['nazwa'])` - usuniecie jednej zmiennej z sesji,
- `session_destroy()` - zakonczenie sesji (wylogowanie).

Przykladowo: po zalogowaniu zapisujemy `$_SESSION['user'] = 'zalogowany'`, a na
kolejnych stronach sprawdzamy te zmienna, zeby wiedziec, ze to wciaz ten sam
zalogowany uzytkownik.

## Struktura projektu

```
projekcik213769/
├── 01-podstawy-sesji/          - logowanie z baza danych (index.html + login.php)
├── 02-logowanie-jedna-strona/  - caly mechanizm w jednym pliku, bez bazy
├── 03-dziewczyna-chlopak/      - przekierowanie na rozne strony wg uzytkownika
├── 04-role-html/               - role admin / user / guest, panel dla kazdej roli
├── 05-system-logowania/        - kompletny system z wylogowaniem
├── zadania-podstawowe/         - zadania 1-5 (pierwsze kroki z sesjami)
├── zadania/                    - zadania 1-30 (kazde w osobnym pliku)
└── dokumentacja/               - oryginalny dokument zrodlowy
```

Kazdy katalog ma wlasny `README.md` z opisem plikow.

## Jak to uruchomic

Potrzebny jest serwer z PHP, np. XAMPP.

1. Skopiuj projekt do katalogu `htdocs`.
2. Uruchom Apache (a dla przykladow 01, 04 i 05 rowniez MySQL).
3. Zaimportuj plik `baza.sql` z danego katalogu (np. w phpMyAdmin).
4. Wejdz w przegladarce na `http://localhost/projekcik213769/`.

Zadania z katalogow `zadania/` i `zadania-podstawowe/` nie wymagaja bazy danych -
wystarczy otworzyc dany plik w przegladarce.

## Uwaga o bezpieczenstwie

Przyklady sa celowo maksymalnie proste, zeby pokazac dzialanie samych sesji.
W prawdziwej aplikacji trzeba dodatkowo:

- hashowac hasla (`password_hash()` / `password_verify()`) zamiast trzymac je tekstem,
- uzywac zapytan przygotowanych zamiast wklejac dane do zapytania SQL,
- walidowac dane wejsciowe i chronic formularze przed atakami CSRF.
