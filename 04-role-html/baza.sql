-- Baza do przykladu 04 (role uzytkownikow)
CREATE DATABASE IF NOT EXISTS baza;
USE baza;

CREATE TABLE IF NOT EXISTS logowanie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    role ENUM('admin', 'user', 'guest') NOT NULL
);

-- Przykladowe dane
INSERT INTO logowanie (login, password, role) VALUES
('admin1', 'adminpass', 'admin'),
('user1', 'userpass', 'user'),
('guest1', 'guestpass', 'guest');
