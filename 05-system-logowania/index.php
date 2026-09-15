<?php
// Rozpoczecie sesji - pozwala na przechowywanie danych uzytkownika miedzy stronami
session_start();

// Jesli uzytkownik jest juz zalogowany, przekieruj go zgodnie z jego rola
if (isset($_SESSION['user'])) {
    if ($_SESSION['role'] == 'admin') {
        header('Location: admin.php');
    } elseif ($_SESSION['role'] == 'user') {
        header('Location: user.php');
    } else {
        header('Location: guest.php');
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Logowanie do systemu</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 40px;
    }
    .container {
      max-width: 400px;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #2980b9;
    }
    .links {
      text-align: center;
      margin-top: 20px;
    }
    .links a {
      margin: 0 10px;
      text-decoration: none;
      color: #555;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Logowanie</h2>

    <!-- Formularz logowania - dane przesylane do login.php -->
    <form action="login.php" method="post">
      <label for="login">Login:</label>
      <input type="text" name="login" id="login" required>

      <label for="password">Haslo:</label>
      <input type="password" name="password" id="password" required>

      <input type="submit" value="Zaloguj sie">
    </form>

    <!-- Linki informacyjne do paneli i wylogowania -->
    <div class="links">
      <p><strong>Testowe panele (wymagaja zalogowania):</strong></p>
      <a href="admin.php">Panel administratora</a>
      <a href="user.php">Panel uzytkownika</a>
      <a href="guest.php">Panel goscia</a>
      <a href="logout.php">Wyloguj</a>
    </div>
  </div>
</body>
</html>
