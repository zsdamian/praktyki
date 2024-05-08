CREATE DATABASE IF NOT EXISTS products;

USE products;

CREATE TABLE IF NOT EXISTS drink_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    voltage INT,
    price DECIMAL(10, 2),
    available_quantity INT
);

INSERT INTO drink_categories (name, voltage, price, available_quantity) VALUES
('Dziki Dzik', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Oczy Kobry', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Poranek Adika', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Orzeł Łabuń', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Napój Borsuka', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Smoczy Napój', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Wściekły Wilk', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Kuropatwa Nocą', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Szpon Kruka', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Mroczny Myszołów', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Kosmaty Niedźwiedź', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10),
('Pijany Jeż', FLOOR(RAND() * 12) + 1, ROUND(5 + (RAND() * (30 - 5)), 2), FLOOR(RAND() * (1000 - 10 + 1)) + 10);
