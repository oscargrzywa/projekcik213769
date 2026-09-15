-- Baza do przykladu 01
CREATE DATABASE IF NOT EXISTS baza;
USE baza;

CREATE TABLE IF NOT EXISTS logowanie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Przykladowe wpisy (hasla tekstowe dla prostoty)
INSERT INTO logowanie (login, password) VALUES
('admin', '1234'),
('user', 'abcd'),
('test', 'pass');
